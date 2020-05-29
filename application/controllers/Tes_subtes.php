<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// ini yang bener
class Tes_subtes extends Tes_Controller {
	private $kelompok = 'ujian';
	private $url = 'tes_subtes';
	
    function __construct(){
		parent:: __construct();
		$this->load->model('cbt_user_model');
		$this->load->model('cbt_user_grup_model');
		$this->load->model('cbt_tes_model');
		$this->load->model('cbt_tes_token_model');
		$this->load->model('cbt_tes_topik_set_model');
		$this->load->model('cbt_tes_user_model');
		$this->load->model('cbt_tesgrup_model');
		$this->load->model('cbt_soal_model');
		$this->load->model('cbt_jawaban_model');
		$this->load->model('cbt_tes_soal_model');
		$this->load->model('cbt_tes_soal_jawaban_model');
	}
    
    public function index($tesuser_subtes=null,$tesuser_id=null,$tesuser_tes_id=null){
        $this->load->helper('form');
		// $data['nama'] = $this->access_tes->get_nama();

		
		$data['nama'] = $this->access_tes->get_nama();
        $data['group'] = $this->access_tes->get_group();
        $data['url'] = $this->url;
        $data['timestamp'] = strtotime(date('Y-m-d H:i:s'));
		$data['tes_id'] = $tesuser_tes_id;
		$data['user_aja'] = $tesuser_id;
        $username = $this->access_tes->get_username();
        $user_id = $this->cbt_user_model->get_by_kolom_limit('user_name', $username, 1)->row()->user_id;
        $query_tes = $this->cbt_tes_user_model->get_by_user_status($user_id);
			
			$mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");

			$instruksi = "Instruksi Tidak tersedia";
			$sqlInstruksi = "
				SELECT  cbt_tes_topik_set.tset_topik_id as topik_id
				FROM    cbt_tes_user,cbt_tes_topik_set
				WHERE	cbt_tes_user.tesuser_id = ".$tesuser_id."
				AND		cbt_tes_user.tesuser_tes_id = cbt_tes_topik_set.tset_tes_id
			";
			$data['tesuser_id'] = $tesuser_id;
			if($result = mysqli_query($mysqli, $sqlInstruksi)){
				while($row = mysqli_fetch_array($result)){
					$topik_id = $row['topik_id'];
				}
			}
			
			json_encode($tesuser_id);
			$tesuser_subtes = $tesuser_subtes + 1;
			$sqlInstruksi = "
				SELECT  cbt_subtest_instruksi.instruksi_text as instruksi
				FROM    cbt_subtest_instruksi
				WHERE	cbt_subtest_instruksi.instruksi_topik_id = ".$topik_id."
				AND		cbt_subtest_instruksi.instruksi_subtes = ".$tesuser_subtes."
			";


			if($result = mysqli_query($mysqli, $sqlInstruksi)){
				while($row = mysqli_fetch_array($result)){
					$instruksi = $row['instruksi'];
				}
			}

			
			$instruksi = str_replace("[base_url]", base_url(), $instruksi);

			$data['instruksi'] = $instruksi;
			$data['user_id'] = $user_id;


        $this->template->display_tes($this->kelompok.'/tes_subtest_view', 'Dashboard', $data);
    }

	function konfirmasi_test($tes_id=null){
    	// if(!empty($tes_id)){
			$data="konfirm";
			$tanggal = new DateTime();
			$this->template->display_tes($this->kelompok.'/Tes_kerjakan', 'Mulai Tes', $data);	
    	// }else{
    		// redirect('tes_dashboard');
    	// }
    }

    /**
     * Memulai tes
     */
    function mulai_tes(){
        
			$tes_id = $this->input->post('tes-id', TRUE);
			$user_id = $this->input->post('user_id', TRUE);

			
			// $token = $this->input->post('token', TRUE);
		if($tes_id != ''){
			$tanggal = (new DateTime())->format('Y-m-d H:i:s');
			

			$mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
			$sqlUpdateCreationDate = "
				UPDATE 	cbt_tes_user 
				SET 	tesuser_creation_time = '".$tanggal."'
				WHERE 	tesuser_user_id = ".$user_id."
				AND		tesuser_tes_id = ".$tes_id."
				";

			if ($mysqli->query($sqlUpdateCreationDate) == TRUE) {
				// echo "Record updated successfully";
			} else {
				// echo "Error updating record: " . $conn->error;
			};

			// echo $sqlUpdateCreationDate;



			$status['status'] = 1;
			$status['tes_id'] = $tes_id;
			$status['pesan'] = 'Pembuatan tes untuk user berhasil';

		}else{

			$status['status'] = 2;
			$status['pesan'] = 'Pembuatan tes untuk user gagal';
		}
        
        echo json_encode($status);
    }


	
	function get_start() {
		$start = 0;
		if (isset($_GET['iDisplayStart'])) {
			$start = intval($_GET['iDisplayStart']);

			if ($start < 0)
				$start = 0;
		}

		return $start;
	}

	function get_rows() {
		$rows = 10;
		if (isset($_GET['iDisplayLength'])) {
			$rows = intval($_GET['iDisplayLength']);
			if ($rows < 5 || $rows > 500) {
				$rows = 10;
			}
		}

		return $rows;
	}

	function get_sort_dir() {
		$sort_dir = "ASC";
		$sdir = strip_tags($_GET['sSortDir_0']);
		if (isset($sdir)) {
			if ($sdir != "asc" ) {
				$sort_dir = "DESC";
			}
		}

		return $sort_dir;
	}
}