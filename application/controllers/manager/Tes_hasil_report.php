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
	
    public function index($tesuser_id=null,$tesuser_tes_id=null,$topik_id=null){
        $data['kode_menu'] = $this->kode_menu;
        $data['url'] = $this->url;
		$data['user_id'] = $tesuser_id;
		$data['tesuser_tes_id'] = $tesuser_tes_id;
		$data['topik_id'] = $topik_id;

		if($topik_id == 10){
			$this->template->display_admin($this->kelompok.'/tes_hasil_report_papi', 'Hasil Tes Detail', $data);
		}else if($topik_id == 11){
			$this->template->display_admin($this->kelompok.'/tes_hasil_report_epps', 'Hasil Tes Detail', $data);
		}else if($topik_id == 9){
			$this->template->display_admin($this->kelompok.'/tes_hasil_report_disc', 'Hasil Tes Detail', $data);
		}
		else if($topik_id == 12){
			$this->template->display_admin($this->kelompok.'/tes_hasil_report_mbti', 'Hasil Tes Detail', $data);
		}
		else if($topik_id == 8){
			$this->template->display_admin($this->kelompok.'/tes_hasil_report_tiki', 'Hasil Tes Detail', $data);
		}


        // if(!empty($tesuser_id)){
        // 	$query_testuser = $this->cbt_tes_user_model->get_by_kolom_limit('tesuser_id', $tesuser_id, 1);
        // 	if($query_testuser->num_rows()>0){
        // 		$query_testuser = $query_testuser->row();

        // 		$query_test = $this->cbt_tes_model->get_by_kolom_limit('tes_id', $query_testuser->tesuser_tes_id, 1)->row();
        // 		$query_user = $this->cbt_user_model->get_by_kolom_limit('user_id', $query_testuser->tesuser_user_id, 1)->row();

		// 		$data['user_id'] = $tesuser_id;
		// 		$data['tesuser_tes_id'] = $tesuser_tes_id;
		// 		// $data['user_id'] = $query_testuser->tesuser_user_id;
        // 		$data['tes_nama'] = $query_test->tes_nama;
        // 		$data['tes_mulai'] = $query_testuser->tesuser_creation_time;
        // 		$data['user_nama'] = $query_user->user_firstname;

        // 		$nilai = $this->cbt_tes_soal_model->get_nilai($tesuser_id)->row();
        // 		$data['nilai'] = $nilai->hasil.'  /  '.$query_test->tes_max_score.'  (nilai / nilai maksimal) ';

        // 		$data['benar'] = ($nilai->total_soal-$nilai->jawaban_salah).'  /  '.$nilai->total_soal.'  (jawaban benar / total soal)';

        // 		$this->template->display_admin($this->kelompok.'/tes_hasil_report_papi', 'Hasil Tes Detail', $data);
        // 	}else{
        // 		redirect('manager/tes_hasil');	
        // 	}
        // }else{
        // 	redirect('manager/tes_hasil');
        // }
    }
    
}

?>