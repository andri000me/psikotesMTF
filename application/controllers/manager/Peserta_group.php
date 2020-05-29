<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peserta_group extends Member_Controller {
	private $kode_menu = 'peserta-group';
	private $kelompok = 'peserta';
	private $url = 'manager/peserta_group';
	
    function __construct(){
		parent:: __construct();
		$this->load->model('cbt_user_grup_model');
		$this->load->model('cbt_tesgrup_model');

		parent::cek_akses($this->kode_menu);
	}
	
    public function index(){
        $data['kode_menu'] = $this->kode_menu;
        $data['url'] = $this->url;
        
        $this->template->display_admin($this->kelompok.'/peserta_group_view', 'Daftar Group', $data);
    }

    function tambah(){
        // $this->load->library('form_validation');
        // $this->form_validation->set_rules('tambah-group', 'Nama Group','required|strip_tags');
		$daftarTes = $this->input->post('tambah-daftar-tes-multi', true);
		$daftarPeserta = $this->input->post('tambah-nama-peserta-multi', true);
		$daftarWaktu = $this->input->post('tambah-rentang-waktu', true);
		$status['status'] = 1;
		$status['pesan'] = $daftarWaktu;
        // if($this->input->post('tambah-daftar-tes-multi', true) != '' || $this->input->post('tambah-nama-peserta-multi', true) != '' || $this->input->post('tambah-rentang-waktu', true) != ''){
			// if($daftarTes = null && $daftarPeserta = null && $daftarWaktu = null){

			$rentang_waktu = $this->input->post('tambah-rentang-waktu', true);
			$tanggal = explode(" - ", $rentang_waktu);
			$data['tes_group_begin_time'] = $tanggal[0];
			$data['tes_group_end_time'] = $tanggal[1];
			$data['test_group_status'] = '1';
			$data['tes_group_subtes'] = '1';


			$checkGroupLength = explode(",",$this->input->post('tambah-daftar-tes-multi', true));
			$checkUserLength = explode(",",$this->input->post('tambah-nama-peserta-multi', true));

			$countGroup = substr_count($this->input->post('tambah-daftar-tes-multi', true), ',');
			$countUser = substr_count($this->input->post('tambah-nama-peserta-multi', true), ',');
			
			
			for ($x = 0; $x <= $countGroup; $x++) {


				for ($y = 0; $y <= $countUser; $y++) {

					$data['tes_group_tes_id'] =  $checkGroupLength[$x];
					$data['tes_group_user_id'] =  $checkUserLength[$y];
					$this->cbt_user_grup_model->saveGroup($data);
				}

				$y = 0;


			}


			$status['status'] = 1;
			$status['pesan'] = 'Tes Berhasil Terdaftar';



			// $data['tes_group_tes_id'] =  $this->input->post('tambah-daftar-tes-multi', true);
			// $data['tes_group_user_id'] =  $this->input->post('tambah-nama-peserta-multi', true);




			
            // $data['grup_nama'] = $this->input->post('tambah-group', true);
            // if($this->cbt_user_grup_model->count_by_kolom('grup_nama', $data['grup_nama'])->row()->hasil>0){
            //     $status['status'] = 0;
            //     $status['pesan'] = 'Nama Group sudah terpakai !';
            // }else{
			// 	$this->cbt_user_grup_model->save($data);
                
            //     $status['status'] = 1;
            //     $status['pesan'] = 'Group berhasil disimpan ';
            // }
        // }else{

        //     $status['status'] = 0;
        //     $status['pesan'] = 'Gagal Mendaftarkan tes';
        // }
        
        echo json_encode($status);
    }
    
    function get_by_id($id=null){
    	$data['data'] = 0;
		// if(!empty($id)){
		// 	$query = $this->cbt_user_grup_model->get_by_kolom('grup_id', $id);
		// 	if($query->num_rows()>0){
		// 		$query = $query->row();
		// 		$data['data'] = 1;
		// 		$data['id'] = $query->grup_id;
		// 		$data['group'] = $query->grup_nama;
		// 	}
		// }
		if(!empty($id)){
			$query = $this->cbt_user_grup_model->get_by_kolom_group('tes_group_id', $id);
			if($query->num_rows()>0){
				$query = $query->row();
				$data['data'] = 1;
				$data['tes_group_id'] = $query->tes_group_id;
				$data['tes_group_user_id'] = $query->tes_group_user_id;
				$data['tes_group_tes_id'] = $query->tes_group_tes_id;


				$data['tes_group_begin_time'] = $query->tes_group_begin_time;
				$data['tes_group_end_time'] = $query->tes_group_end_time;

				$allTime = $query->tes_group_begin_time.' - '.$query->tes_group_end_time;
				
				$data['tes_group_time'] = $allTime;
				// $data['tes_group_time'] = $query->tes_group_begin_time;


				$data['tes_group_token'] = $query->tes_group_token;
			}
		}
		echo json_encode($data);
    }

    function edit(){
		// alert("ssss");
        // $this->load->library('form_validation');
        
		// $this->form_validation->set_rules('edit-id', 'ID','required|strip_tags');
		// $this->form_validation->set_rules('edit-group', 'Nama Group','required|strip_tags');
        // $this->form_validation->set_rules('edit-pilihan', 'Pilihan','required|strip_tags');
        // $this->form_validation->set_rules('edit-group-asli', 'Nama Group','required|strip_tags');
        
        // if($this->form_validation->run() == TRUE){
            $pilihan = $this->input->post('edit-pilihan', true);
			// $id = $this->input->post('edit-id', true);
			
			$user_id = $this->input->post('edit-user-id', true);
			$tes_id = $this->input->post('edit-tes-id', true);
			$group_id = $this->input->post('edit-group-id', true);

            if($pilihan=='hapus'){//hapus
            	// if($this->cbt_tesgrup_model->count_by_kolom('tstgrp_grup_id', $id)->row()->hasil>0){
            	// 	$status['status'] = 0;
				// 	$status['pesan'] = 'Group tidak dapat dihapus, Group masih digunakan Tes !';
            	// }else{
            	// 	$this->cbt_user_grup_model->delete('grup_id', $id);
				// 	$status['status'] = 1;
				// 	$status['pesan'] = 'Group berhasil dihapus !';
				// }
				$tesuser_id = '';
				$mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");

				$sqlcbtTesUser = "
					SELECT tesuser_id FROM `cbt_tes_user` 
					WHERE tesuser_tes_id = ".$tes_id."
					AND	tesuser_user_id = ".$user_id."
				";
				
                if($result = mysqli_query($mysqli, $sqlcbtTesUser)){
                    while($rowcbt_tes_user = mysqli_fetch_array($result)){
						$tesuser_id = $rowcbt_tes_user['tesuser_id'];
					}
					$status['status'] = 1;
                	$status['pesan'] = 'Group Berhasil disimpan'.$tesuser_id.'';
				}else{
					$status['status'] = 0;
					$status['pesan'] = 'Tes tidak dapat dihapus';
				}

				$sqlCbtTesSoal = "
					SELECT * FROM `cbt_tes_soal` 
					WHERE `tessoal_tesuser_id` = ".$tesuser_id." 
				";

				if($result = mysqli_query($mysqli, $sqlCbtTesSoal)){
                    while($row = mysqli_fetch_array($result)){
						$tessoal_id = $row['tessoal_id'];

						$sqlDelete = "delete from cbt_tes_soal_jawaban 
						where soaljawaban_tessoal_id = ".$tessoal_id."";

						if ($mysqli->query($sqlDelete) === TRUE) {
							// echo "Record deleted successfully";
							
							$status['status'] = 1;
							// $status['pesan'] = 'Tes berhasil dihapus !';
							$status['pesan'] = $sqlDelete;
						} else {
							// echo "Error deleting record: " . $conn->error;
							$status['status'] = 0;
							$status['pesan'] = 'Tes tidak dapat dihapus';
						}
                    }
				}else {
					$status['status'] = 0;
					$status['pesan'] = 'Tes tidak dapat dihapus';
				}


				
				$sqlDeleteTestSoal = "delete from cbt_tes_soal 
					where tessoal_tesuser_id = ".$tesuser_id."
				";

				if ($mysqli->query($sqlDeleteTestSoal) === TRUE) {
					$status['status'] = 1;
					$status['pesan'] = 'Tes berhasil dihapus !';
					$status['pesan'] = $sqlDeleteTest;
				
				}else{
					$status['status'] = 0;
					$status['pesan'] = 'Tes tidak dapat dihapus';
				}

				$sqlDeleteTestUser = "delete from cbt_tes_user 
								WHERE tesuser_tes_id = ".$tes_id."
								AND	tesuser_user_id = ".$user_id."
				";

				if ($mysqli->query($sqlDeleteTestUser) === TRUE) {
					$status['status'] = 1;
					$status['pesan'] = 'Tes berhasil dihapus !';
					// $status['pesan'] = $sqlDelete.$sqlDeleteTest.$sqlDeleteTest;
				
				}else{
					$status['status'] = 0;
					$status['pesan'] = 'Tes tidak dapat dihapus';
				}


				$sqlDeleteGroup = "delete from cbt_tes_group 
								WHERE tes_group_id = ".$group_id."
				";

				if ($mysqli->query($sqlDeleteGroup) === TRUE) {
					$status['status'] = 1;
					$status['pesan'] = 'Tes berhasil dihapus !';
					// $status['pesan'] = $sqlDelete.$sqlDeleteTest.$sqlDeleteTest;
				
				}else{
					$status['status'] = 0;
					$status['pesan'] = 'Tes tidak dapat dihapus';
				}





            }else if($pilihan=='simpan'){//simpan
				$group_asli = $this->input->post('edit-group-asli', true);
                $data['grup_nama'] = $this->input->post('edit-group', true);

                if($group_asli!=$data['grup_nama']){
                	if($this->cbt_user_grup_model->count_by_kolom('grup_nama', $data['grup_nama'])->row()->hasil>0){
		                $status['status'] = 0;
		                $status['pesan'] = 'Nama Group sudah terpakai !';
		            }else{
						$this->cbt_user_grup_model->update('grup_id', $id, $data);
		                
		                $status['status'] = 1;
		                $status['pesan'] = 'Group berhasil disimpan ';
		            }
                }else{
                	$status['status'] = 1;
                	$status['pesan'] = 'Group Berhasil disimpan';
                }
            }
            
        // }else{
        //     $status['status'] = 0;
        //     $status['pesan'] = validation_errors();
        // }
		// $status['status'] = 1;
		// $status['pesan'] = $group_id;
        echo json_encode($status);
    }
    
    function get_datatable(){
		// variable initialization
		$mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
		$search = "";
		$start = 0;
		$rows = 10;

		// get search value (if any)
		if (isset($_GET['sSearch']) && $_GET['sSearch'] != "" ) {
			$search = $_GET['sSearch'];
		}

		// limit
		$start = $this->get_start();
		$rows = $this->get_rows();

		// run query to get user listing
		// $query = $this->cbt_user_grup_model->get_datatable($start, $rows, 'grup_nama', $search);
		// $iFilteredTotal = $query->num_rows();
		
		// $iTotal= $this->cbt_user_grup_model->get_datatable_count('grup_nama', $search)->row()->hasil;

		$query = $this->cbt_user_grup_model->get_datatablegroup($start, $rows, 'tes_group_user_id', $search);
		$iFilteredTotal = $query->num_rows();

		$iTotal= $this->cbt_user_grup_model->get_datatablegroup_count('tes_group_user_id', $search)->row()->hasil;
	    
	    
		$output = array(
			"sEcho" => intval($_GET['sEcho']),
	        "iTotalRecords" => $iTotal,
	        "iTotalDisplayRecords" => $iTotal,
	        "aaData" => array()
	    );

	    // get result after running query and put it in array
		$i=$start;
		$query = $query->result();
	    foreach ($query as $temp) {
			$record = array();
            
			$record[] = ++$i;
			

			$sqlUser = "
                SELECT  cbt_tes.tes_nama as tes_nama
                FROM    cbt_tes
				WHERE 	cbt_tes.tes_id = ".$temp->tes_group_tes_id."";
				
                if($result = mysqli_query($mysqli, $sqlUser)){
                    while($row = mysqli_fetch_array($result)){
						$record[] = $row['tes_nama'];
                    }
				}
				
			// $record[] = $temp->tes_group_tes_id;

			$sqlUser = "
                SELECT  cbt_user.user_firstname as nama
                FROM    cbt_user
                WHERE 	cbt_user.user_id = ".$temp->tes_group_user_id."";

                if($result = mysqli_query($mysqli, $sqlUser)){
                    while($row = mysqli_fetch_array($result)){
						$record[] = $row['nama'];
                    }
				}

			
			// $record[] = $temp->tes_group_user_id;
			// $tes_group_id = 5
			$record[] = $temp->tes_group_begin_time;
			$record[] = $temp->tes_group_end_time;

			$date_now = date("Y-m-d");
			if($temp->tes_group_begin_time > $date_now){
				$record[] = '<span class="blinkingBlue">Belum Mulai</span>';
			}else if ($temp->tes_group_begin_time < $date_now || $temp->tes_group_end_time <= $date_now){
				$record[] = '<span class="blinkingGreen">Sedang Berlangsung</span>';
			}else if($temp->tes_group_end_time > $date_now){
				$record[] = '<span class="blinkingRed">Waktu Habis</span>';
			}else{
				$record[] = '<span class="blinkingRed">Unknow</span>';
			}
			
            $record[] = '<a onclick="edit(\''.$temp->tes_group_id.'\',\''.$temp->tes_group_user_id.'\',\''.$temp->tes_group_tes_id.'\')" style="cursor: pointer;" class="btn btn-default btn-xs">Edit</a>';

			$output['aaData'][] = $record;
		}
		// format it to JSON, this output will be displayed in datatable
        
		echo json_encode($output);
	}
	
	/**
	* funsi tambahan 
	* 
	* 
*/
	
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