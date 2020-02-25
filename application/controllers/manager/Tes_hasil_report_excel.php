<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Tes_hasil_report_excel extends Member_Controller {
	private $kode_menu = 'tes-hasil';
	private $kelompok = 'tes';
	private $url = 'manager/tes_hasil_report_excel';
	
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
	
    public function index($tesuser_id=null){
        $data['kode_menu'] = $this->kode_menu;
        $data['url'] = $this->url;
		$this->template->display_admin($this->kelompok.'/tes_hasil_report_papi_excel', 'Hasil Tes Detail', $data);
    }
    
}

?>