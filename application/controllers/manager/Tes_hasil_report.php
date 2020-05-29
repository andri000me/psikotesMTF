<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Tes_hasil_report extends Member_Controller {
	private $kode_menu = 'tes-hasil';
	private $kelompok = 'tes';
	private $url = 'manager/tes_hasil_report';
	
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

		parent::cek_akses($this->kode_menu);
	}
	
    // public function index($tesuser_id=null,$tesuser_tes_id=null,$topik_id=null){
    //     $data['kode_menu'] = $this->kode_menu;
    //     $data['url'] = $this->url;
	// 	$data['user_id'] = $tesuser_id;
	// 	$data['tesuser_tes_id'] = $tesuser_tes_id;
	// 	$data['topik_id'] = $topik_id;

	// 	if($topik_id == 10){
	// 		$this->template->display_admin($this->kelompok.'/tes_hasil_report_papi', 'Hasil Tes Detail', $data);
	// 	}else if($topik_id == 11){
	// 		$this->template->display_admin($this->kelompok.'/tes_hasil_report_epps', 'Hasil Tes Detail', $data);
	// 	}else if($topik_id == 9){
	// 		$this->template->display_admin($this->kelompok.'/tes_hasil_report_disc', 'Hasil Tes Detail', $data);
	// 	}
	// 	else if($topik_id == 12){
	// 		$this->template->display_admin($this->kelompok.'/tes_hasil_report_mbti', 'Hasil Tes Detail', $data);
	// 	}
	// 	else if($topik_id == 8){
	// 		$this->template->display_admin($this->kelompok.'/tes_hasil_report_tiki', 'Hasil Tes Detail', $data);
	// 	}
	// }
	public function index($tesuser_id=null){
        $data['kode_menu'] = $this->kode_menu;
        $data['url'] = $this->url;
		$data['user_id'] = $tesuser_id;

			$this->template->display_admin($this->kelompok.'/tes_hasil_report_all', 'Hasil Tes Detail', $data);
    }
    
}

?>


