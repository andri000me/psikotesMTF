<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
class Tes_kerjakan extends Tes_Controller {
	private $kelompok = 'ujian';
	private $url = 'tes_kerjakan';
    private $username;
    private $user_id;

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

        $this->username = $this->access_tes->get_username();
        $this->user_id = $this->cbt_user_model->get_by_kolom_limit('user_name', $this->username, 1)->row()->user_id;
	}
    
    public function index($tes_id=null){
        if(!empty($tes_id)){
            $data['nama'] = $this->access_tes->get_nama();
            $data['group'] = $this->access_tes->get_group();
            $data['url'] = $this->url;
            $data['timestamp'] = strtotime(date('Y-m-d H:i:s'));

            // $statuss['user_id'] = $user_id;
            // $statuss['tes_id'] = $tes_id;
            // echo json_encode($statuss);
            // $tes_id = 131;
            $query_tes = $this->cbt_tes_user_model->get_by_user_tes_limit($this->user_id, $tes_id, 1);
            if($query_tes->num_rows()>0){
                $query_tes = $query_tes->row();
                $tanggal = new DateTime();
                // Cek apakah tes sudah melebihi batas waktu
                $tanggal_tes = new DateTime($query_tes->tesuser_creation_time);

                //time per subtes
                $mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");

                $sqlCheckDuration = "
                SELECT  cbt_topik.topik_subtest as topik_subtest, 
                        cbt_topik.topik_id as topik_id,
                        cbt_tes_user.tesuser_subtes as tesuser_subtes,
                        cbt_subtest_instruksi.instruksi_duration as instruksi_duration
                FROM    cbt_topik, 
                        cbt_tes_user, 
                        cbt_tes_topik_set ,
                        cbt_subtest_instruksi
                WHERE   cbt_topik.topik_id = cbt_tes_topik_set.tset_topik_id 
                AND     cbt_tes_user.tesuser_tes_id = cbt_tes_topik_set.tset_tes_id 
                AND     cbt_tes_user.tesuser_tes_id = ".$tes_id."
                AND     cbt_tes_user.tesuser_id = ".$query_tes->tesuser_id."
                AND     cbt_subtest_instruksi.instruksi_topik_id = cbt_topik.topik_id
                AND     cbt_subtest_instruksi.instruksi_subtes = cbt_tes_user.tesuser_subtes
                ";

                if($result = mysqli_query($mysqli, $sqlCheckDuration)){
                    while($row = mysqli_fetch_array($result)){
                        $instruksi_duration = $row['instruksi_duration'];
                        $topik_id = $row['topik_id'];
                    }
                }
                

                
                // echo json_encode($sqlCheckDuration);
                $data['lastScore']= $query_tes->tesuser_soal_terakhir;
                $data['lastSubtest']= $query_tes->tesuser_subtest_terakhir;
                // $data['sql'] = $sqltes;
                // json_encode($sqltes);

                // $tanggal_tes->modify('+'.$query_tes->tes_duration_time.' minutes');
                $tanggal_tes_perbandingan = $tanggal_tes->modify('+'.$query_tes->tes_duration_time.' minutes');
                $tanggal_tes->modify('+'.$instruksi_duration.' minutes');
                if($tanggal>=$tanggal_tes_perbandingan){
                    // jika waktu sudah melebihi waktu ketentuan, maka diarahkan ke dashboard
                    redirect('tes_dashboard');
                }else{
                    // mengambil soal sesuai dengan tes yang dikerjakan
                    $data['sql'] = $sqlCheckDuration;
                    $data['tes_id'] = $tes_id;
                    $data['topik_id'] = $topik_id;
                    $data['tes_user_id'] = $query_tes->tesuser_id;
                    $data['tes_name'] = $query_tes->tes_nama;
                    // $data['tes_waktu'] = $query_tes->tes_duration_time;
                    $data['tes_waktu'] = $instruksi_duration;
                    $data['tes_dibuat'] = $query_tes->tesuser_creation_time;
                    $data['tanggal'] = $tanggal->format('Y-m-d H:i:s');
                    $data['subtes'] = $query_tes->tesuser_subtes;
                    $subtest = $query_tes->tesuser_subtes;
                    // Mengambil selisih jam
                    $tanggal_tes = new DateTime($query_tes->tesuser_creation_time);
                    $tanggal_diff = $tanggal_tes->diff($tanggal);

                    $detik_berjalan = ($tanggal_diff->h*60*60)+($tanggal_diff->i*60)+$tanggal_diff->s;
                    // $detik_total = $query_tes->tes_duration_time*60;
                    $detik_total = $instruksi_duration*60;

                    // untuk menangani Jika tes setelah ditambah waktunya melebihi jam saat itu
                    // jika time saat ini lebih besar dari time creation
                    if($tanggal>=$tanggal_tes){
                        $detik_sisa = $detik_total-$detik_berjalan;
                    
                    // jika time creation lebih besar dari tanggal saat ini
                    }else{
                        $detik_sisa = $detik_total+$detik_berjalan;
                    }
                    if ($detik_berjalan = null){
                        $detik_berjalan = 0;
                    }
                    $data['detik_berjalan'] = $detik_berjalan;
                    $data['detik_total'] = $detik_total;
                    $data['detik_sisa'] = $detik_sisa;
                    // $data['detik_berjalan'] = $detik_berjalan;

                    // Mengambil menu daftar semua soal
                    $data_soal = $this->get_daftar_soal($tes_id);

                    $data['tes_daftar_soal'] = $data_soal['tes_soal'];
                    $data['tes_soal_jml'] = $data_soal['tes_soal_jml'];

                    // Mengambil data soal ke 1

                    //   echo json_encode($data);
                    $tessoal = $this->cbt_tes_soal_model->get_by_testuser_limit_subtes($query_tes->tesuser_id, 1, $subtest)->row();
                    $data_soal = $this->get_soal($tessoal->tessoal_id, $query_tes->tesuser_id);

                    $data['tes_soal'] = $data_soal['tes_soal'];
                    $data['tes_ragu'] = $data_soal['tes_ragu'];
                    $data['tes_soal_id'] = $tessoal->tessoal_id;
                    $data['tes_soal_nomor'] = $tessoal->soal_nomor;

                    

                    $this->template->display_tes($this->kelompok.'/tes_kerjakan_view', 'Kerjakan Tes', $data);
                    // if (!empty($query_tes->tesuser_soal_terakhir)){
                    //     echo    '<script type="text/javascript">
                    //     console.log("'.$query_tes->tesuser_soal_terakhir.'");
                    //                 soal('.$query_tes->tesuser_soal_terakhir.');
                    //             </script>';
                    // }
                }
            }else{
                redirect('tes_dashboard');
            }
        }else{
            redirect('tes_dashboard');
        }
    }

    /**
     * Menghentikan tes yang sudah berjalan
     */
    function hentikan_tes(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('hentikan-tes-id', 'Tes','required|strip_tags');
        $this->form_validation->set_rules('hentikan-tes-user-id', 'Tes','required|strip_tags');
        $this->form_validation->set_rules('hentikan-tes-nama', 'Nama Tes','required|strip_tags');
        
        if($this->form_validation->run() == TRUE){
            $tesuser_id = $this->input->post('hentikan-tes-user-id', TRUE);
            $centang = $this->input->post('hentikan-centang', TRUE);
            $tes_id = $this->input->post('hentikan-tes-id', TRUE);
            $sub_tes = $this->input->post('hentikan-tes-subtes', TRUE);




            if(!empty($centang)){


                $mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
                $sqlCheckSubtest = "
                    SELECT  cbt_topik.topik_subtest as topik_subtest,
                            cbt_tes_user.tesuser_subtes as tesuser_subtes
                    FROM    cbt_topik, cbt_tes_user, cbt_tes_topik_set
                    WHERE	cbt_topik.topik_id = cbt_tes_topik_set.tset_topik_id
                    AND     cbt_tes_user.tesuser_tes_id = cbt_tes_topik_set.tset_tes_id
                    AND     cbt_tes_user.tesuser_tes_id = ".$tes_id."
                    AND     cbt_tes_user.tesuser_id = ".$tesuser_id."
                ";
                
                // echo json_encode($sqlCheckSubtest);

                if($result = mysqli_query($mysqli, $sqlCheckSubtest)){
                    while($row = mysqli_fetch_array($result)){
                        $topik_subtest = $row['topik_subtest'];
                        $tesuser_subtes= $row['tesuser_subtes'];
                    }
                }

                if($sub_tes == $topik_subtest){
                // if($topik_subtest == ){
                    // $data_tes['tesuser_status']=4;
                    $data_tes['tesuser_status']=4;
                    $this->cbt_tes_user_model->update('tesuser_id', $tesuser_id, $data_tes);

                    $status['status'] = 1;
                    $status['pesan'] = "Tes berhasil dihentikan";  
                    
                }else {
                    $minutes = 40;
                    $topik_subtestNow = $sub_tes+1;
                    $tanggal = (new DateTime())->format('Y-m-d H:i:s');
                    // $tanggal -> add(new DateInterval('PT' . $minutes . 'M'));
                    $sqlUpdateSubtest = "
                                            UPDATE cbt_tes_user 
                                            SET tesuser_subtes = ".$topik_subtestNow.",
                                            tesuser_creation_time = '".$tanggal."'
                                            WHERE tesuser_id = ".$tesuser_id."
                                        ";

                                        if ($mysqli->query($sqlUpdateSubtest) == TRUE) {
                                            // echo "Record updated successfully";
                                        } else {
                                            // echo "Error updating record: " . $conn->error;
                                        }

                    $status['status'] = 2;
                    $status['pesan'] = "Tes berhasil dihentikan";  
                    $status['tesuser_subtes'] = $tesuser_subtes;
                    $status['tesuser_id'] = $tesuser_id;
                    $status['tesuser_tes_id'] = $tes_id;

                }
            }else{
                $status['status'] = 0;
                $status['pesan'] = "Centang terlebih dahulu kolom yang tersedia !";
            }
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }
        
        echo json_encode($status);
    }


    function hentikan_tes_time_out($tes_id=null){

        $status = "";
        $data['data'] = 0;
        if(!empty($tes_id)){
            $query_tes = $this->cbt_tes_user_model->get_by_user_tes_limit($this->user_id, $tes_id, 1);
            if($query_tes->num_rows()>0){
                $query_tes = $query_tes->row();
                $data['tes_id'] = $tes_id;
                $data['tes_user_id'] = $query_tes->tesuser_id;
                $data['tes_nama'] = $query_tes->tes_nama;
                $data['tesuser_subtes'] = $query_tes->tesuser_subtes;
                $data['tes_dijawab'] = $this->cbt_tes_soal_model->count_by_tesuser_dijawab($query_tes->tesuser_id)->row()->hasil.' Soal';
                $data['tes_blum_dijawab'] = $this->cbt_tes_soal_model->count_by_tesuser_blum_dijawab($query_tes->tesuser_id)->row()->hasil.' Soal';

                $tesuser_id = $query_tes->tesuser_id;
                $sub_tes = $query_tes->tesuser_subtes;


                $mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
                $sqlCheckSubtest = "
                    SELECT  cbt_topik.topik_subtest as topik_subtest,
                            cbt_tes_user.tesuser_subtes as tesuser_subtes
                    FROM    cbt_topik, cbt_tes_user, cbt_tes_topik_set
                    WHERE	cbt_topik.topik_id = cbt_tes_topik_set.tset_topik_id
                    AND     cbt_tes_user.tesuser_tes_id = cbt_tes_topik_set.tset_tes_id
                    AND     cbt_tes_user.tesuser_tes_id = ".$tes_id."
                    AND     cbt_tes_user.tesuser_id = ".$tesuser_id."
                ";
                
                // echo json_encode($sqlCheckSubtest);

                if($result = mysqli_query($mysqli, $sqlCheckSubtest)){
                    while($row = mysqli_fetch_array($result)){
                        $topik_subtest = $row['topik_subtest'];
                        $tesuser_subtes= $row['tesuser_subtes'];
                    }
                }

                if($sub_tes == $topik_subtest){
                    $data_tes['tesuser_status']=5;
                    $this->cbt_tes_user_model->update('tesuser_id', $tesuser_id, $data_tes);
                    $data['data'] = 2;

                    // $status['status'] = 1;
                    // $status['pesan'] = "Tes berhasil dihentikan";  
                    
                }else {
                    $data['data'] = 1;
                    $tanggal = (new DateTime())->format('Y-m-d H:i:s');
                    $topik_subtestNow = $sub_tes+1;
                    $sqlUpdateSubtest = "
                                        UPDATE cbt_tes_user 
                                        SET tesuser_subtes = ".$topik_subtestNow.",
                                        tesuser_creation_time = '".$tanggal."'
                                        WHERE tesuser_id = ".$tesuser_id."
                                        ";

                                        if ($mysqli->query($sqlUpdateSubtest) == TRUE) {
                                            // echo "Record updated successfully";
                                        } else {
                                            // echo "Error updating record: ";
                                        }
                    // $status['status'] = 2;
                    // $status['pesan'] = "Tes berhasil dihentikan";  
                    // $status['tesuser_subtes'] = $tesuser_subtes;
                    // $status['tesuser_id'] = $tesuser_id;
                    // $status['tesuser_tes_id'] = $tes_id;

                }



            }
        }
        echo json_encode($data);
        
    }

    /**
     * Menyimpan jawaban yang dipilih oleh User
     */
    function simpan_jawaban(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('tes-id', 'Tes','required|strip_tags');
        $this->form_validation->set_rules('tes-user-id', 'Tes User','required|strip_tags');
        $this->form_validation->set_rules('tes-soal-id', 'Soal','required|strip_tags');
        $this->form_validation->set_rules('tes-soal-nomor', 'Nomor Soal','required|strip_tags');
        $this->form_validation->set_rules('soal-jawaban', 'Jawaban','required|strip_tags');


        
        $query_subject_set = $this->cbt_tes_topik_set_model->get_by_kolom('tset_tes_id', 'tes-id')->result();
                
        // $query_soal = $this->cbt_tes_soal_model->get_by_tessoal_limit(9, 1);
        // if($query_soal->soal_tipe!=2){
        //     $this->form_validation->set_rules('soal-jawaban', 'Jawaban','required|strip_tags');
        // }else{
        //     $this->form_validation->set_rules('soal-jawaban', 'Jawaban','required|strip_tags');
        // }
        if($this->form_validation->run() == TRUE){
            $jawabanMost = $this->input->post('soal-jawaban-most', TRUE);
            $jawaban = $this->input->post('soal-jawaban', TRUE);
            $tes_id = $this->input->post('tes-id', TRUE);
            $tes_user_id = $this->input->post('tes-user-id', TRUE);
            $tes_soal_id = $this->input->post('tes-soal-id', TRUE);
            $tes_soal_nomor = $this->input->post('tes-soal-nomor', TRUE);
            $jawabanText = $this->input->post('soal-jawabanText', TRUE);
            $testSubtest = $this->input->post('tes-subtest', TRUE);
            $abc = $this->input->post('soal-jawaban2[]', TRUE);
            
            // Mengecek apakah tes masih berjalan dan waktu masih mencukupi
            //if($this->cbt_tes_user_model->count_by_status_waktu($tes_user_id)->row()->hasil>0){
            //
            // revisi 2018-11-15
            // agar waktu mengambil dari waktu php, bukan mysql



            $mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
			$sqlUpdateLastSoal = "
				UPDATE 	cbt_tes_user 
                SET 	tesuser_soal_terakhir = ".$tes_soal_id.",
                        tesuser_subtest_terakhir = ".$testSubtest.",
                        tesuser_nomor_terakhir = ".$tes_soal_nomor."
				WHERE 	tesuser_id = ".$tes_user_id."
				";
            
			if ($mysqli->query($sqlUpdateLastSoal) == TRUE) {

            } else {

            };



            $waktuuser = date('Y-m-d H:i:s');
            if($this->cbt_tes_user_model->count_by_status_waktuuser($tes_user_id, $waktuuser)->row()->hasil>0){

                // Mengecek apakah soal ada
                $query_soal = $this->cbt_tes_soal_model->get_by_tessoal_limit($tes_soal_id, 1);
                if($query_soal->num_rows()>0){
                    $query_soal = $query_soal->row();

 
                    // menonatifkan ragu-ragu
                    // $data_tes_soal['tessoal_ragu'] = 0;

                    // Memulai transaction mysql
                    $this->db->trans_start();
                    // Mengecek jenis soal
                    if($query_soal->soal_tipe==1){
                        // Mendapatkan data tes
                        $query_tes = $this->cbt_tes_model->get_by_kolom_limit('tes_id', $tes_id, 1)->row();

                        // Mendapatkan data jawaban
                        $query_jawaban = $this->cbt_tes_soal_jawaban_model->get_by_tessoal_answer($tes_soal_id, $jawaban)->row();
                        
                        
                        
                        // Mengupdate pilihan jawaban benar
                        $data_jawaban['soaljawaban_selected']=1;
                        $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer($tes_soal_id, $jawaban, $data_jawaban);
                        // Mengupdate pilihan jawaban salah
                        $data_jawaban['soaljawaban_selected']=0;
                        $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer_salah($tes_soal_id, $jawaban, $data_jawaban);

                        $data_tes_soal['tessoal_jawaban'] = $jawabanText;
                        $data_tes_soal['tessoal_jawaban_id'] = $jawaban;

                        $data_tes_soal['tessoal_change_time'] = date('Y-m-d H:i:s');

                        // Mengupdate score, change time jika pilihan benar
                        if($query_jawaban->jawaban_benar==1){
                            $data_tes_soal['tessoal_nilai'] = $query_tes->tes_score_right;
                        }else{
                            $data_tes_soal['tessoal_nilai'] = $query_tes->tes_score_wrong;
                        }

                        $this->cbt_tes_soal_model->update('tessoal_id', $tes_soal_id, $data_tes_soal);

                        $status['status'] = 1;
                        $status['nomor_soal'] = $tes_soal_nomor;
                        $status['pesan'] = 'Jawaban yang dipilih berhasil disimpan';
                        
                    }else if($query_soal->soal_tipe==7){
                        $query_tes = $this->cbt_tes_model->get_by_kolom_limit('tes_id', $tes_id, 1)->row();
                        $checkBox = '';
                        $data_tes_soal['tessoal_change_time'] = NULL;
                        if($abc != ''){
                            $checkBox = implode(',', $abc);
                            $checkBoxChunks = explode(",",$checkBox);
                            $count = substr_count($checkBox, ',') + 1;
                            if($count == 2){
                                $data_tes_soal['tessoal_change_time'] = NULL;
                                $this->cbt_tes_soal_model->update('tessoal_id', $tes_soal_id, $data_tes_soal);
                                $data_tes_soal['tessoal_change_time'] = date('Y-m-d H:i:s');
                                $data_jawaban['soaljawaban_selected']=0;
                                $data_jawaban['soaljawaban_value']=0;
                                $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer_salah_arr($tes_soal_id, $jawaban, $data_jawaban);
                                    $data_jawaban['soaljawaban_selected']=1;
                                        $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer($tes_soal_id, $checkBoxChunks[0], $data_jawaban);    
                                        $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer($tes_soal_id, $checkBoxChunks[1], $data_jawaban);   
                                $message = "Jawaban yang dipilih berhasil disimpan";
                                // $message = $count;
                            }else{
                                $message = "Jawaban yang dipilih tidak berhasil disimpan";
                                // $count = "lebih dari 3";
                                $data_tes_soal['tessoal_change_time'] = NULL;
                                // $message = $count;
                            }

                        }else{
                            $data_tes_soal['tessoal_change_time'] = NULL;
                            $this->cbt_tes_soal_model->update('tessoal_id', $tes_soal_id, $data_tes_soal);
                            $data_tes_soal['tessoal_change_time'] = NULL;
                            $message = "Jawaban yang dipilih berhasil disimpan";
                            $data_jawaban['soaljawaban_selected']=0;
                            $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer_salah_arr($tes_soal_id, $jawaban, $data_jawaban);
                        }

                        // $status['status'] = 1;
                        // $status['nomor_soal'] = $tes_soal_nomor;
                        // $status['pesan'] = $count;
                        // Mengupdate pilihan jawaban benar
                        // $data_jawaban['soaljawaban_selected']=1;
                        // $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer($tes_soal_id, $jawaban, $data_jawaban);
                        // // Mengupdate pilihan jawaban salah
                        // $data_jawaban['soaljawaban_selected']=0;
                        // $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer_salah($tes_soal_id, $jawaban, $data_jawaban);

                        // $data_tes_soal['tessoal_jawaban'] = $jawabanText;
                        // $data_tes_soal['tessoal_jawaban_id'] = $jawaban;

                        // Mengupdate score, change time jika pilihan benar
                        // if($query_jawaban->jawaban_benar==1){
                        //     $data_tes_soal['tessoal_nilai'] = $query_tes->tes_score_right;
                        // }else{
                        //     $data_tes_soal['tessoal_nilai'] = $query_tes->tes_score_wrong;
                        // }

                        $this->cbt_tes_soal_model->update('tessoal_id', $tes_soal_id, $data_tes_soal);

                        $status['status'] = 1;
                        $status['nomor_soal'] = $tes_soal_nomor;
                        // $status['pesan'] = $count;
                        $status['pesan'] = $message;

                    }else if($query_soal->soal_tipe==9){
                        $query_tes = $this->cbt_tes_model->get_by_kolom_limit('tes_id', $tes_id, 1)->row();
                        $checkBox = '';
                        if($abc != ''){
                            $checkBox = implode(',', $abc);
                            $checkBoxChunks = explode(",",$checkBox);
                            $count = substr_count($checkBox, ',') + 1;

                            if($count == 2){
                                $data_tes_soal['tessoal_change_time'] = NULL;
                                $this->cbt_tes_soal_model->update('tessoal_id', $tes_soal_id, $data_tes_soal);
                                $data_tes_soal['tessoal_change_time'] = date('Y-m-d H:i:s');

                                $data_jawaban['soaljawaban_selected']=0;
                                $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer_salah_arr($tes_soal_id, $jawaban, $data_jawaban);
                                    $data_jawaban['soaljawaban_selected']=1;
                                        $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer($tes_soal_id, $checkBoxChunks[0], $data_jawaban);    
                                        $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer($tes_soal_id, $checkBoxChunks[1], $data_jawaban);   
                                        $this->cbt_tes_soal_model->update('tessoal_id', $tes_soal_id, $data_tes_soal); 
                            }else{
                                $count = "lebih dari 3";
                                $data_tes_soal['tessoal_change_time'] = NULL;
                            }


                        }else{
                            $data_tes_soal['tessoal_change_time'] = NULL;
                            $this->cbt_tes_soal_model->update('tessoal_id', $tes_soal_id, $data_tes_soal);
                            $count = 'null';
                            $data_tes_soal['tessoal_change_time'] = NULL;
                            $data_jawaban['soaljawaban_selected']=0;
                            $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer_salah_arr($tes_soal_id, $jawaban, $data_jawaban);
                        }

                        $status['status'] = 1;
                        $status['nomor_soal'] = $tes_soal_nomor;
                        // $status['pesan'] = 'Jawaban yang dimasukkan berhasil disimpan';
                        $status['pesan'] = 'Jawaban yang dimasukkan berhasil disimpan';

                    }else if($query_soal->soal_tipe==2){
                        // Mengupdate change time, dan jawaban essay
                        // $data_tes_soal['tessoal_jawaban_text'] = $jawaban;
                        $data_tes_soal['tessoal_jawaban_text'] = $jawaban.",".$jawabanMost;
                        $data_tes_soal['tessoal_nilai'] = 0;
                        $this->cbt_tes_soal_model->update('tessoal_id', $tes_soal_id, $data_tes_soal);

                        $status['status'] = 1;
                        $status['nomor_soal'] = $tes_soal_nomor;
                        $status['pesan'] = 'Jawaban yang dimasukkan berhasil disimpan';


                        

                        $query_tes = $this->cbt_tes_model->get_by_kolom_limit('tes_id', $tes_id, 1)->row();

                        // Mendapatkan data jawaban
                        $query_jawaban = $this->cbt_tes_soal_jawaban_model->get_by_tessoal_answer($tes_soal_id, $jawaban)->row();
                        
                        
                        $loopJawaban = $jawaban.",".$jawabanMost;
                        $count = substr_count($loopJawaban, ',') + 1;

                        $data_tes_soal['tessoal_change_time'] = date('Y-m-d H:i:s');
                        $data_jawaban['soaljawaban_selected']=0;
                        $data_jawaban['soaljawaban_value']=NULL;
                        $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer_salah_arr($tes_soal_id, $loopJawaban, $data_jawaban);


                        for ($i = 1; $i <= $count; $i++) {

                            if($i == 1){
                                $jawabanNow = $jawaban;
                                $jawabanValue = "Least";
                            }else {
                                $jawabanNow = $jawabanMost;
                                $jawabanValue = "Most";
                            }

                            $data_jawaban['soaljawaban_selected']=1;
                            $data_jawaban['soaljawaban_value']=$jawabanValue;
                            $data_jawaban['soaljawaban_flag']=$jawabanValue;
                            $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer($tes_soal_id, $jawabanNow, $data_jawaban);
                            // $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer($tes_soal_id, $jawaban, $data_jawaban);

                        }



                        // // Mengupdate pilihan jawaban benar
                        // $data_jawaban['soaljawaban_selected']=1;
                        // $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer($tes_soal_id, $jawaban, $data_jawaban);


                        // Mengupdate pilihan jawaban salah

                        // $data_jawaban['soaljawaban_selected']=0;
                        // $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer_salah($tes_soal_id, $jawaban, $data_jawaban);

                        // for ($i = 1; $i <= $count; $i++) {
                        //     $jawabanNow;
                            // if($i == 1){
                            //     $jawabanNow = $jawaban;
                            // }else {
                            //     $jawabanNow = $jawabanMost;
                            // }

                        // $data_jawaban['soaljawaban_selected']=0;
                        // $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer_salah_arr($tes_soal_id, $loopJawaban, $data_jawaban);
                        // }




                        $data_tes_soal['tessoal_jawaban'] = $jawabanText;
                        $data_tes_soal['tessoal_jawaban_id'] = $jawaban;

                        // Mengupdate score, change time jika pilihan benar
                        if($query_jawaban->jawaban_benar==1){
                            $data_tes_soal['tessoal_nilai'] = $query_tes->tes_score_right;
                        }else{
                            $data_tes_soal['tessoal_nilai'] = $query_tes->tes_score_wrong;
                        }

                        $this->cbt_tes_soal_model->update('tessoal_id', $tes_soal_id, $data_tes_soal);

                        $status['status'] = 1;
                        $status['nomor_soal'] = $tes_soal_nomor;
                        $status['pesan'] = 'Jawaban yang dipilih berhasil disimpan'.$jawabanMost.'-'.$jawaban;








                    }else if($query_soal->soal_tipe==3){
                        // Mendapatkan data tes
                        $query_tes = $this->cbt_tes_model->get_by_kolom_limit('tes_id', $tes_id, 1)->row();
                        
                        // Mengupdate change time, dan jawaban essay
                        $data_tes_soal['tessoal_jawaban_text'] = $jawaban;

                        // Mengupdate pilihan jawaban benar
                        $data_jawaban['soaljawaban_selected']=1;
                        $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer($tes_soal_id, $jawaban, $data_jawaban);
                        // Mengupdate pilihan jawaban salah
                        $data_jawaban['soaljawaban_selected']=0;
                        $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer_salah($tes_soal_id, $jawaban, $data_jawaban);
                        $data_tes_soal['tessoal_change_time'] = date('Y-m-d H:i:s');

                        if(strtoupper($query_soal->soal_kunci)==strtoupper($jawaban)){
                            $data_tes_soal['tessoal_nilai'] = $query_tes->tes_score_right;
                        }else{
                            $data_tes_soal['tessoal_nilai'] = $query_tes->tes_score_wrong;
                        }
                        $this->cbt_tes_soal_model->update('tessoal_id', $tes_soal_id, $data_tes_soal);

                        $status['status'] = 1;
                        $status['nomor_soal'] = $tes_soal_nomor;
                        $status['pesan'] = 'Jawaban yang dimasukkan berhasil disimpan';
                    }else if($query_soal->soal_tipe==4){
                        // Mendapatkan data tes
                        $query_tes = $this->cbt_tes_model->get_by_kolom_limit('tes_id', $tes_id, 1)->row();

                        // Mendapatkan data jawaban
                        $query_jawaban = $this->cbt_tes_soal_jawaban_model->get_by_tessoal_answer($tes_soal_id, $jawaban)->row();
                        
                        
                        $data_tes_soal['tessoal_change_time'] = date('Y-m-d H:i:s');

                        // Mengupdate pilihan jawaban benar
                        $data_jawaban['soaljawaban_selected']=1;
                        $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer($tes_soal_id, $jawaban, $data_jawaban);
                        // Mengupdate pilihan jawaban salah
                        $data_jawaban['soaljawaban_selected']=0;
                        $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer_salah($tes_soal_id, $jawaban, $data_jawaban);

                        $data_tes_soal['tessoal_jawaban'] = $jawabanText;
                        $data_tes_soal['tessoal_jawaban_id'] = $jawaban;

                        // Mengupdate score, change time jika pilihan benar
                        if($query_jawaban->jawaban_benar==1){
                            $data_tes_soal['tessoal_nilai'] = $query_tes->tes_score_right;
                        }else{
                            $data_tes_soal['tessoal_nilai'] = $query_tes->tes_score_wrong;
                        }

                        $this->cbt_tes_soal_model->update('tessoal_id', $tes_soal_id, $data_tes_soal);

                        $status['status'] = 1;
                        $status['nomor_soal'] = $tes_soal_nomor;
                        $status['pesan'] = 'Jawaban yang dipilih berhasil disimpan';
                        
                    }else if($query_soal->soal_tipe==5){
                        // Mendapatkan data tes
                        $query_tes = $this->cbt_tes_model->get_by_kolom_limit('tes_id', $tes_id, 1)->row();
                        
                        // Mengupdate change time, dan jawaban essay
                        $data_tes_soal['tessoal_jawaban_text'] = $jawaban;
                        $data_tes_soal['tessoal_change_time'] = date('Y-m-d H:i:s');

                        if(strtoupper($query_soal->soal_kunci)==strtoupper($jawaban)){
                            $data_tes_soal['tessoal_nilai'] = $query_tes->tes_score_right;
                        }else{
                            $data_tes_soal['tessoal_nilai'] = $query_tes->tes_score_wrong;
                        }
                        $this->cbt_tes_soal_model->update('tessoal_id', $tes_soal_id, $data_tes_soal);
                        // $data_jawaban['soaljawaban_value']=$jawaban;
                        // $this->cbt_tes_soal_jawaban_model->update_by_tessoal_answer($tes_soal_id, $tes_id, $data_jawaban);
                        $status['status'] = 1;
                        $status['nomor_soal'] = $tes_soal_nomor;
                        $status['pesan'] = 'Jawaban yang dimasukkan berhasil disimpan';
                    }

                    // Menutup transaction mysql
                    $this->db->trans_complete();
                }else{
                    $status['status'] = 0;
                    $status['pesan'] = 'Terjadi Kesalahan, silahkan hubungi Administrator';
                }
            }else{
                $status['status'] = 2;
                $status['pesan'] = 'Terjadi Kesalahan, Tes sudah selesai';
            }
        }else{
            // $status['status'] = 0;
            // $status['pesan'] = validation_errors();
            $status['status'] = '';
            $status['pesan'] = '';
        }
        
        echo json_encode($status);
    }

    /**
     * Mendapatkan info tes
     * 1. nama tes
     * 2. jumlah soal yang belum dijawab
     * 3. jumlah soal yang sudah dijawab
     *
     * @param      <type>  $tes_user_id  The tes user identifier
     */
    function get_tes_info($tes_id=null){
        $data['data'] = 0;
        if(!empty($tes_id)){
            $query_tes = $this->cbt_tes_user_model->get_by_user_tes_limit($this->user_id, $tes_id, 1);
            if($query_tes->num_rows()>0){
                $query_tes = $query_tes->row();
                $data['data'] = 1;
                $data['tes_id'] = $tes_id;
                $data['tes_user_id'] = $query_tes->tesuser_id;
                $data['tes_nama'] = $query_tes->tes_nama;
                $data['tesuser_subtes'] = $query_tes->tesuser_subtes;
                $data['tes_dijawab'] = $this->cbt_tes_soal_model->count_by_tesuser_dijawab($query_tes->tesuser_id)->row()->hasil.' Soal';
                $data['tes_blum_dijawab'] = $this->cbt_tes_soal_model->count_by_tesuser_blum_dijawab($query_tes->tesuser_id)->row()->hasil.' Soal';
            }
        }

        echo json_encode($data);
    }

    // function soal_time_out($tes_id=null){
    //     $data['data'] = 0;
    //     if(!empty($tes_id)){
    //         $query_tes = $this->cbt_tes_user_model->get_by_user_tes_limit($this->user_id, $tes_id, 1);
    //         if($query_tes->num_rows()>0){
    //             $query_tes = $query_tes->row();
    //             $mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
    //             $data['data'] = 1;
    //             $sqlUpdateStatus = "
    //                                     UPDATE cbt_tes_user 
    //                                     SET tesuser_status = 5
    //                                     WHERE tesuser_id = ".$query_tes->tesuser_id."
    //                                     ";

    //                                     if ($mysqli->query($sqlUpdateStatus) === TRUE) {
    //                                         // echo "Record updated successfully";
    //                                     } else {
    //                                         // echo "Error updating record: " . $conn->error;
    //                                     }

    //         }
    //     }

    //     echo json_encode($data);
    // }

    /**
     * Mendapatkan data cbt_tes_soal berdasarkan tessoal_id
     * @param  [type] $tessoal_id [description]
     * @return [type]            [description]
     */
    function get_tes_soal_by_tessoal($tessoal_id=null){
        $data['data'] = 0;
        if(!empty($tessoal_id)){
            $query_tes_soal = $this->cbt_tes_soal_model->get_by_kolom_limit('tessoal_id', $tessoal_id, 1);
            if($query_tes_soal->num_rows()>0){
                $query_tes_soal = $query_tes_soal->row();
                $data['data'] = 1;
                $data['tessoal_id'] = $query_tes_soal->tessoal_id;
                $data['tessoal_ragu'] = $query_tes_soal->tessoal_ragu;

                $data['tessoal_dikerjakan'] = 0;
                if(!empty($query_tes_soal->tessoal_change_time)){
                    $data['tessoal_dikerjakan'] = 1;
                }
            }
        }

        echo json_encode($data);
    }

    function update_tes_soal_ragu($tessoal_id=null, $ragu=null){
        $data['data'] = 1;

        if(!empty($tessoal_id)){
            if(!empty($ragu)){
                $data_tes_soal['tessoal_ragu'] = $ragu;    
            }else{
                $data_tes_soal['tessoal_ragu'] = 0;
            }

            $this->cbt_tes_soal_model->update('tessoal_id', $tessoal_id, $data_tes_soal);
        }

        echo json_encode($data);
    }

    /**
     * Mendapatkan setiap soal dan jawaban dengan output json 
     */
    function get_soal_by_tessoal($tessoal_id=null, $tesuser_id=null){
        $data['data'] = 0;
        if(!empty($tessoal_id) AND !empty($tesuser_id)){
            $data_soal = $this->get_soal($tessoal_id, $tesuser_id);
            $data['data'] = $data_soal['data'];
            if(!empty($data_soal['tes_soal'])){
                $data['tes_soal'] = $data_soal['tes_soal'];
                $data['tes_ragu'] = $data_soal['tes_ragu'];
                $data['tes_soal_id'] = $data_soal['tes_soal_id'];
                $data['tes_soal_nomor'] = $data_soal['tes_soal_nomor'];
                $data['tessoal_change_time'] = $data_soal['tessoal_change_time'];
            }
        }

        echo json_encode($data);
    }

    /**
     * Mendapatkan daftar soal berupa tombol untuk memilih soal yang akan dikerjakan
     *
     * @param      <type>  $tes_id  The tes identifier
     *
     * @return     <type>  The daftar soal.
     */
    //fuguh
    private function get_daftar_soal($tes_id=null){
        $data['tes_soal_jml'] = '';
        $data['tes_soal'] = '';
        $jml_soal = 0;
        $data_soal = '';
        if(!empty($tes_id)){
            $query_tes = $this->cbt_tes_user_model->get_by_user_tes_limit($this->user_id, $tes_id);

            $subtesParsing = 1;
            if($query_tes->num_rows()>0){
                $query_tes = $query_tes->row();

                $mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");

                $sqlGroupUser = "
                    SELECT  cbt_tes_user.tesuser_subtes as subtestNow,
                            cbt_tes_user.tesuser_nomor_terakhir
                    FROM    cbt_tes_user
                    WHERE 	cbt_tes_user.tesuser_user_id = ".$this->user_id."
                    AND     cbt_tes_user.tesuser_tes_id = ".$tes_id."
                ";

                if($result = mysqli_query($mysqli, $sqlGroupUser)){
                    while($row = mysqli_fetch_array($result)){
                        $subtesParsing = $row['subtestNow'];
                        $lastNomer = $row['tesuser_nomor_terakhir'];
                    }
                };
                
                // echo json_encode($subtesParsing);
                // $query_soal = $this->cbt_tes_soal_model->get_by_testuser($query_tes->tesuser_id);
                $query_soal = $this->cbt_tes_soal_model->get_by_testuser_subtes($query_tes->tesuser_id,$subtesParsing);
                $jml_soal = $query_soal->num_rows();

                if($jml_soal>0){
                    $query_soal = $query_soal->result();
                    foreach ($query_soal as $soal) {
                        // Jika jawaban sudah diisi
                        if(!empty($soal->tessoal_change_time)){
                            // if($soal->tessoal_ragu==0){
                                // Jika soal tidak ragu-ragu
                                // if($soal->soal_tipe==1){
                                    // $data_soal = $data_soal.'<button id="btn-soal-'.$soal->soal_nomor.'" onclick="soal(\''.$soal->tessoal_id.'\')" class="btn btn-primary" style="margin-bottom: 5px; border-radius: 100%; height: 45px; width: 45px; background-color: #36d6d9; border-color: #39c5c7;" title="Soal ke '.$soal->soal_nomor.'">'.$soal->soal_nomor.'</button>';
                                    $data_soal = $data_soal.'<button id="btn-soal-'.$soal->soal_nomor.'" class="btn btn-primary" style="margin-bottom: 5px; border-radius: 100%; height: 45px; width: 45px; background-color: #36d6d9; border-color: #39c5c7;" title="Soal ke '.$soal->soal_nomor.'">'.$soal->soal_nomor.'</button>';
                                // }else{
                                    // $data_soal = $data_soal.'<div style="display: none;"><button id="btn-soal-'.$soal->soal_nomor.'" onclick="soal(\''.$soal->tessoal_id.'\')" class="btn btn-primary" style="margin-bottom: 5px; border-radius: 100%; height: 45px; width: 45px; background-color: #36d6d9; border-color: #39c5c7;" title="Soal ke '.$soal->soal_nomor.'">'.$soal->soal_nomor.'</button></div>';
                                // }
                            // }else{
                                // Jika soal ragu-ragu
                                // $data_soal = $data_soal.'<button id="btn-soal-'.$soal->soal_nomor.'" onclick="soal(\''.$soal->tessoal_id.'\')" class="btn btn-warning" style="margin-bottom: 5px; border-radius: 100%; height: 45px; width: 45px; background-color: #36d6d9; border-color: #39c5c7;" title="Soal ke '.$soal->soal_nomor.'">'.$soal->soal_nomor.'</button>

                                // ';
                            // }
                        }else{
                            if($soal->tessoal_ragu==0){
                                // Jika soal tidak ragu-ragu
                                if($soal->soal_tipe==1){
                                    $data_soal = $data_soal.'<button id="btn-soal-'.$soal->soal_nomor.'" onclick="soal(\''.$soal->tessoal_id.'\')" class="btn btn-default" style="margin-bottom: 5px; border-radius: 100%; height: 45px; width: 45px;" title="Soal ke '.$soal->soal_nomor.'">'.$soal->soal_nomor.'</button>';
                                }else{
                                    // if($soal->soal_nomor <= $lastNomer){
                                        $data_soal = $data_soal.'<button id="btn-soal-'.$soal->soal_nomor.'" onclick="soal(\''.$soal->tessoal_id.'\')" class="btn btn-default" style="margin-bottom: 5px; border-radius: 100%; height: 45px; width: 45px;" title="Soal ke '.$soal->soal_nomor.'">'.$soal->soal_nomor.'</button>';
                                    // }else{
                                        // $data_soal = $data_soal.'<div style="display: none;"><button id="btn-soal-'.$soal->soal_nomor.'" onclick="soal(\''.$soal->tessoal_id.'\')" class="btn btn-default" style="margin-bottom: 5px; border-radius: 100%; height: 45px; width: 45px;" title="Soal ke '.$soal->soal_nomor.'">'.$soal->soal_nomor.'</button></div>';
                                    // }
                                }
                            }else{
                                // Jika soal ragu-ragu
                                $data_soal = $data_soal.'<button id="btn-soal-'.$soal->soal_nomor.'" onclick="soal(\''.$soal->tessoal_id.'\')" class="btn btn-warning" style="margin-bottom: 5px; border-radius: 100%; height: 45px; width: 45px;" title="Soal ke '.$soal->soal_nomor.'">'.$soal->soal_nomor.'</button>
                                ';
                            }
                        }

                        // if(!empty($soal->tessoal_change_time)){
                        //     if($soal->tessoal_ragu==0){
                        //         // Jika soal tidak ragu-ragu
                        //         $data_soal = $data_soal.'<button id="btn-soal-'.$soal->soal_nomor.'" onclick="soal(\''.$soal->tessoal_id.'\')" class="btn btn-primary" style="margin-bottom: 5px; border-radius: 100%; height: 45px; width: 45px;" title="Soal ke '.$soal->soal_nomor.'">'.$soal->soal_nomor.'</button>

                        //         ';
                        //     }else{
                        //         // Jika soal ragu-ragu
                        //         $data_soal = $data_soal.'<button id="btn-soal-'.$soal->soal_nomor.'" onclick="soal(\''.$soal->tessoal_id.'\')" class="btn btn-warning" style="margin-bottom: 5px; border-radius: 100%; height: 45px; width: 45px;" title="Soal ke '.$soal->soal_nomor.'">'.$soal->soal_nomor.'</button>

                        //         ';
                        //     }
                        // }else{
                        //     if($soal->tessoal_ragu==0){
                        //         // Jika soal tidak ragu-ragu
                        //         $data_soal = $data_soal.'<button id="btn-soal-'.$soal->soal_nomor.'" onclick="soal(\''.$soal->tessoal_id.'\')" class="btn btn-default" style="margin-bottom: 5px; border-radius: 100%; height: 45px; width: 45px;" title="Soal ke '.$soal->soal_nomor.'">'.$soal->soal_nomor.'</button>

                        //         ';
                        //     }else{
                        //         // Jika soal ragu-ragu
                        //         $data_soal = $data_soal.'<button id="btn-soal-'.$soal->soal_nomor.'" onclick="soal(\''.$soal->tessoal_id.'\')" class="btn btn-warning" style="margin-bottom: 5px; border-radius: 100%; height: 45px; width: 45px;" title="Soal ke '.$soal->soal_nomor.'">'.$soal->soal_nomor.'</button>

                        //         ';
                        //     }
                        // }
                    }
                }
            }
        }
        $data['tes_soal_jml'] = $jml_soal;
        $data['tes_soal'] = $data_soal;

        return $data;
    }

    /**
     * Mendapatkan soal dan jawaban dalam bentuk html     *
     * @param      <type>  $tessoal_id  The tessoal identifier
     *
     * @return     string  The soal.
     */
    private function get_soal($tessoal_id=null, $tesuser_id=null){
        $data['tes_soal_id'] = '';
        $data['tes_soal'] = '';
        $data['data'] = 0;
        if(!empty($tessoal_id) AND !empty($tesuser_id)){
            // Mengecek apakah tes masih berjalan
            // mengambil tesuser_id terus mendapatkan datanya, dicek statusnya dan waktunya
            //if($this->cbt_tes_user_model->count_by_status_waktu($tesuser_id)->row()->hasil>0){
            //
            // revisi 2018-11-15
            // agar waktu mengambil dari waktu php, bukan mysql
            $waktuuser = date('Y-m-d H:i:s');
            if($this->cbt_tes_user_model->count_by_status_waktuuser($tesuser_id, $waktuuser)->row()->hasil>0){
                $data['data'] = 1;
                $query_soal = $this->cbt_tes_soal_model->get_by_tessoal_limit($tessoal_id, 1);
                $soal = '';
                
                if($query_soal->num_rows()>0){
                    $data['tes_soal_id'] = $tessoal_id;
                    $query_soal = $query_soal->row();

                    // Soal Ragu-ragu
                    $data['tes_ragu'] = $query_soal->tessoal_ragu;

                    // Mengupdate tessoal_display_time pada table test_log
                    $data_tes_soal['tessoal_display_time'] = date('Y-m-d H:i:s');
                    $this->cbt_tes_soal_model->update('tessoal_id', $tessoal_id, $data_tes_soal);
                    
                    // mengganti [baseurl] ke alamat sesungguhnya
                    if($query_soal->soal_tipe==5){
                        $soal = '<table align="center"><tr><td>'.$query_soal->soal_detail.'</td></tr></table>';
                    }else{
                        $soal = $query_soal->soal_detail;
                    }
                    $soal = str_replace("[base_url]", base_url(), $soal);

                    // memberi file audio jika ada
                    if(!empty($query_soal->soal_audio)){
                        $audio_play = 0;
                        if($query_soal->soal_audio_play==1){
                            $audio_play = 1;
                        }
                        // jika batasan play audio masih bernilai 0
                        if($query_soal->tessoal_audio_play==0){
                            $posisi = $this->config->item('upload_path').'/topik_'.$query_soal->soal_topik_id;
                            $soal = $soal.'
                                <audio volume="1.0" id="audio-player" onended="audio_ended(\''.$audio_play.'\')">
                                  <source src="'.base_url().$posisi.'/'.$query_soal->soal_audio.'" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <div style="max-width:350px" id="audio-control">
                                    <div class="box box-primary">
                                        <div class="box-body">
                                            <input type="hidden" id="audio-player-status" value="0" />
                                            <input type="hidden" id="audio-player-update" value="0" />
                                            <a class="btn btn-app" onclick="audio(\''.$audio_play.'\')">
                                                <i class="fa fa-play" id="audio-player-judul-logo"></i> <span id="audio-player-judul">Play</span>
                                            </a>
                                            &nbsp;&nbsp;Klik Play untuk memutar Audio
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                    }
                    if($query_soal->soal_tipe==5){

                    }else{
                        $soal = $soal.'<hr />';
                        
                    }

                    $data['tes_soal_nomor'] = $query_soal->soal_nomor;
                    $data['tessoal_change_time'] = $query_soal->tessoal_change_time;
                    $soal = $soal.'<div class="form-group">';

                    // TIKI
                    if($query_soal->soal_tipe==1){
                        $query_jawaban = $this->cbt_tes_soal_jawaban_model->get_by_tessoal($query_soal->tessoal_id);
                        if($query_jawaban->num_rows()>0){
                            $query_jawaban = $query_jawaban->result();
                            foreach ($query_jawaban as $jawaban) {
                                // mengganti [baseurl] ke alamat sesungguhnya pada tag img / gambars
                                $temp_jawaban = $jawaban->jawaban_detail;
                                $temp_jawaban = str_replace("[base_url]", base_url(), $temp_jawaban);

                                if($jawaban->soaljawaban_selected==1){
                                    $soal = $soal.'
                                    <ul>
                                    <div class="md-radio">
                                        <input type="radio" onchange="jawab()" name="soal-jawaban" id="'.$jawaban->soaljawaban_jawaban_id.'" value="'.$jawaban->soaljawaban_jawaban_id.'" checked>
                                        <label for="'.$jawaban->soaljawaban_jawaban_id.'" style="max-width: 100%; font-weight: 500; padding-top: 0px;">'.$temp_jawaban.'</label>
                                    </div>';
                                    // <input type="hidden" name="soal-jawabanText" value="'.$temp_jawaban.'"> 
                                }else{
                                    $soal = $soal.'
                                    <ul>
                                    <div class="md-radio">
                                        <input type="radio" onchange="jawab()" name="soal-jawaban" id="'.$jawaban->soaljawaban_jawaban_id.'" value="'.$jawaban->soaljawaban_jawaban_id.'" >
                                        <label for="'.$jawaban->soaljawaban_jawaban_id.'" style="max-width: 100%; font-weight: 500; padding-top: 2px;">'.$temp_jawaban.'</label>
                                    </div>';
                                    // <input type="hidden" name="soal-jawabanText" value="'.$temp_jawaban.'"> 
                                }
                                $soal = $soal.' </ul>';
                            }
                        }
                    }
                    // jawaban ganda
                    // else if($query_soal->soal_tipe==7){
                    //     $soal = $soal.'<div <div class="form-group" id="checkboxgroup">';
                    //     $query_jawaban = $this->cbt_tes_soal_jawaban_model->get_by_tessoal($query_soal->tessoal_id);
                    //     if($query_jawaban->num_rows()>0){
                    //         $query_jawaban = $query_jawaban->result();
                    //         foreach ($query_jawaban as $jawaban) {
                    //             // mengganti [baseurl] ke alamat sesungguhnya pada tag img / gambars
                    //             $temp_jawaban = $jawaban->jawaban_detail;
                    //             $temp_jawaban = str_replace("[base_url]", base_url(), $temp_jawaban);

                    //             if($jawaban->soaljawaban_selected==1){
                    //                 $soal = $soal.'
                    //                     <label class="check-box">
                    //                         <input type="checkbox" onchange="jawab()" name="soal-jawaban2[]" id="chk" class="single-checkbox" value="'.$jawaban->soaljawaban_jawaban_id.'" checked>
                    //                         <span class="cb-checkmark"></span>
                    //                         <p>'.$temp_jawaban.'</p>
                    //                         <input type="hidden" name="soal-jawaban" value="1"> 
                    //                     </label>';
                    //                 // <input type="hidden" nam   e="soal-jawabanText" value="'.$temp_jawaban.'"> 

                    //             }else{
                    //                 $soal = $soal.'
                    //                 <script type="text/javascript">
                    //                     $("input[id=chk]").change(function() {
                    //                         var max = 2;
                    //                         if ($("input[id=chk]:checked").length >= max) {
                    //                             $("input[id=chk]").attr("disabled", "disabled");
                    //                             $("input[id=chk]:checked").removeAttr("disabled");
                    //                         } else {
                    //                             $("input[id=chk]").removeAttr("disabled");
                    //                         }
                    //                         })
                    //                     $(function() {
                    //                             // console.log( "ready!" );
                    //                             if($("input.single-checkbox").filter(":checked").length >= 2)
                    //                             $("input.single-checkbox:not(:checked)").attr("disabled", "disabled");
                    //                         else
                    //                             $("input.single-checkbox").removeAttr("disabled");
                    //                     })
                    //                 </script>
                    //                         <label class="check-box">
                    //                             <input type="checkbox" onchange="jawab()" name="soal-jawaban2[]" id="chk" class="single-checkbox" value="'.$jawaban->soaljawaban_jawaban_id.'" >
                    //                             <span class="cb-checkmark"></span>
                    //                             <p>'.$temp_jawaban.'</p>
                    //                             <input type="hidden" name="soal-jawaban" value="1"> 
                    //                         </label>';
                    //             }
                    //         }
                    //     }
                    //     $soal = $soal.'</div>';
                    // }
                    else if($query_soal->soal_tipe==7){
                        $soal = $soal.'<div <div class="form-group" id="checkboxgroup">';
                        $query_jawaban = $this->cbt_tes_soal_jawaban_model->get_by_tessoal($query_soal->tessoal_id);
                        if($query_jawaban->num_rows()>0){
                            $query_jawaban = $query_jawaban->result();
                            foreach ($query_jawaban as $jawaban) {
                                // mengganti [baseurl] ke alamat sesungguhnya pada tag img / gambars
                                $temp_jawaban = $jawaban->jawaban_detail;
                                $temp_jawaban = str_replace("[base_url]", base_url(), $temp_jawaban);

                                if($jawaban->soaljawaban_selected==1){
                                    $soal = $soal.'
                                        <label id="isi-tes-soal-gambar">
                                            <input type="checkbox" onchange="jawab()" name="soal-jawaban2[]" id="chk" class="single-checkbox" value="'.$jawaban->soaljawaban_jawaban_id.'" checked> '.$temp_jawaban.'
                                            <input type="hidden" name="soal-jawaban" value="1"> 
                                            </label>';
                                    // <input type="hidden" nam   e="soal-jawabanText" value="'.$temp_jawaban.'"> 

                                }else{
                                    $soal = $soal.'
                                    <script type="text/javascript">
                                        $("input[id=chk]").change(function() {
                                            var max = 2;
                                            if ($("input[id=chk]:checked").length >= max) {
                                                $("input[id=chk]").attr("disabled", "disabled");
                                                $("input[id=chk]:checked").removeAttr("disabled");
                                                $("#btn-selanjutnya").prop("disabled", false); 
                                                $("#btn-hentikan").prop("disabled", false); 
                                            } else {
                                                $("input[id=chk]").removeAttr("disabled");
                                                $("#btn-selanjutnya").prop("disabled", true); 
                                                $("#btn-hentikan").prop("disabled", true); 
                                            }
                                            })
                                        $(function() {
                                                // console.log( "ready!" );
                                                if($("input.single-checkbox").filter(":checked").length >= 2)
                                                $("input.single-checkbox:not(:checked)").attr("disabled", "disabled");

                                            else
                                                $("input.single-checkbox").removeAttr("disabled");
                                        })
                                    </script>
                                    <style>
                                        .p{
                                            width: 11.5em;
                                        }
                                    </style>
                                        <label>
                                            <input type="checkbox" onchange="jawab()" name="soal-jawaban2[]" id="chk" class="single-checkbox" value="'.$jawaban->soaljawaban_jawaban_id.'" > '.$temp_jawaban.'
                                            <input type="hidden" name="soal-jawaban" value="1"> 
                                            </label>';
                                }
                            }
                        }
                        $soal = $soal.'</div>';
                    }
                    // sinonom / anonim
                    // else if($query_soal->soal_tipe==9){
                    //     // $soal = $soal.'<div <div class="check">';
                    //     $soal = '';
                    //     $soal = $soal.'<div class="form-group">';
                    //     $soal = $soal.'<table>';
                    //     $query_jawaban = $this->cbt_tes_soal_jawaban_model->get_by_tessoal($query_soal->tessoal_id);
                    //     if($query_jawaban->num_rows()>0){
                    //         $query_jawaban = $query_jawaban->result();
                    //         foreach ($query_jawaban as $jawaban) {
                    //             // mengganti [baseurl] ke alamat sesungguhnya pada tag img / gambars
                    //             $temp_jawaban = $jawaban->jawaban_detail;
                    //             $temp_jawaban = str_replace("[base_url]", base_url(), $temp_jawaban);

                    //             if($jawaban->soaljawaban_selected==1){
                    //                 $soal = $soal.'
                    //                 <ul>
                    //                 <tr>
                    //                     <td style="padding: 5px;">
                    //                         <label class="check-box" style="font-weight: 500;">
                    //                             <input type="checkbox" onchange="jawab()" name="soal-jawaban2[]" id="chk" class="single-checkbox" value="'.$jawaban->soaljawaban_jawaban_id.'" checked>
                    //                             <span class="cb-checkmark"></span>
                    //                             <p style="padding: 3px; margin-right: auto; margin-left: auto; padding-left: 15px; padding-right: 15px; min-height: 0px; font-weight: 500;" class="content">'.$temp_jawaban.'</p>
                    //                             <input type="hidden" name="soal-jawaban" value="1"> 
                    //                         </label>
                    //                     </td>
                    //                 </tr>';
                                    
                    //             }else{
                    //                 $soal = $soal.'
                    //                 <ul>
                    //                 <script type="text/javascript">
                    //                 $("input[id=chk]").change(function() {
                    //                     var max = 2;
                    //                     if ($("input[id=chk]:checked").length == max) {
                    //                         $("input[id=chk]").attr("disabled", "disabled");
                    //                         $("input[id=chk]:checked").removeAttr("disabled");
                    //                     } else {
                    //                         $("input[id=chk]").removeAttr("disabled");
                    //                     }
                    //                     })

                    //                     $(function() {
                    //                         // console.log( "ready!" );
                    //                         if($("input.single-checkbox").filter(":checked").length >= 2)
                    //                             $("input.single-checkbox:not(:checked)").attr("disabled", "disabled");
                    //                         else
                    //                             $("input.single-checkbox").removeAttr("disabled");
                    //                     })
                    //                 </script>
                    //                 <tr>
                    //                     <td style="padding: 5px;">
                    //                         <label class="check-box" style="font-weight: 500;">
                    //                             <input type="checkbox" onchange="jawab()" name="soal-jawaban2[]" id="chk" class="single-checkbox" value="'.$jawaban->soaljawaban_jawaban_id.'" > 
                    //                             <span class="cb-checkmark"></span>
                    //                             <p style="padding: 3px; margin-right: auto; margin-left: auto; padding-left: 15px; padding-right: 15px; min-height: 0px;" class="content">'.$temp_jawaban.'</p>
                    //                             <input type="hidden" name="soal-jawaban" value="1"> 
                    //                         </label>
                    //                     </td>
                    //                 </tr>';
                    //             }
                    //         }
                    //     }
                    //     $soal = $soal.'<ul></table>';
                    // }

                    else if($query_soal->soal_tipe==9){
                        // $soal = $soal.'<div <div class="check">';
                        $soal = '';
                        $soal = $soal.'<div class="form-group">';
                        $soal = $soal.'<table>';
                        $query_jawaban = $this->cbt_tes_soal_jawaban_model->get_by_tessoal($query_soal->tessoal_id);
                        if($query_jawaban->num_rows()>0){
                            $query_jawaban = $query_jawaban->result();
                            foreach ($query_jawaban as $jawaban) {
                                // mengganti [baseurl] ke alamat sesungguhnya pada tag img / gambars
                                $temp_jawaban = $jawaban->jawaban_detail;
                                $temp_jawaban = str_replace("[base_url]", base_url(), $temp_jawaban);

                                if($jawaban->soaljawaban_selected==1){
                                    $soal = $soal.'
                                    <ul>
                                    <tr>
                                        <td style="padding: 5px;">
                                            <label>
                                                <input type="checkbox" onchange="jawab()" name="soal-jawaban2[]" id="chk" class="single-checkbox" value="'.$jawaban->soaljawaban_jawaban_id.'" checked>

                                            </label>
                                        </td>
                                        <td>
                                            '.$temp_jawaban.' <input type="hidden" name="soal-jawaban" value="1"> 
                                        <td>
                                    </tr>';
                                    
                                }else{
                                    $soal = $soal.'
                                    <ul>
                                    <script type="text/javascript">
                                    $("input[id=chk]").change(function() {
                                        var max = 2;
                                        if ($("input[id=chk]:checked").length == max) {
                                            $("input[id=chk]").attr("disabled", "disabled");
                                            $("input[id=chk]:checked").removeAttr("disabled");
                                            $("#btn-selanjutnya").prop("disabled", false); 
                                            $("#btn-hentikan").prop("disabled", false); 
                                        } else {
                                            $("input[id=chk]").removeAttr("disabled");
                                            $("#btn-selanjutnya").prop("disabled", true); 
                                            $("#btn-hentikan").prop("disabled", true); 
                                        }
                                        })

                                        $(function() {
                                            // console.log( "ready!" );
                                            if($("input.single-checkbox").filter(":checked").length >= 2)
                                                $("input.single-checkbox:not(:checked)").attr("disabled", "disabled");
                                            else
                                                $("input.single-checkbox").removeAttr("disabled");
                                        })
                                    </script>
                                    <tr>
                                        <td style="padding: 5px;">
                                            <label>
                                                <input type="checkbox" onchange="jawab()" name="soal-jawaban2[]" id="chk" class="single-checkbox" value="'.$jawaban->soaljawaban_jawaban_id.'" > 
                                            </label>
                                        </td>
                                        <td>
                                            '.$temp_jawaban.' <input type="hidden" name="soal-jawaban" value="0"> 
                                        </td>
                                    </tr>';
                                }
                            }
                        }
                        $soal = $soal.'<ul></table>';
                    }

                    //MBTI
                    if($query_soal->soal_tipe==5){
                        $soal = $soal.'<div class="form-group">';
                                    
                                    if($query_soal->tessoal_jawaban_text == 1){
                                        $soal = $soal.'
                                        <div style="vertical-align: middle;">
                                        <table align="center">
                                            <tr>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#39c5c7;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%; margin-top: 1em;">
                                                        <strong>Saya setuju</strong>
                                                    </div
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big1" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="6" name="soal-jawaban" value="6" checked>
                                                        <label for="6" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="6"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big2" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="5" name="soal-jawaban" value="5" >
                                                        <label for="5" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="5"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big3" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="4" name="soal-jawaban" value="4" >
                                                        <label for="4" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="4"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big4" style="height: 80px; padding: 0px; margin: 0px; margin-top: 25%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="0" name="soal-jawaban" value="0">
                                                        <label for="0" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="0"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big5" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="3" name="soal-jawaban" value="3" >
                                                        <label for="3" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="3"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big6" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="2" name="soal-jawaban" value="2" >
                                                        <label for="2" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="2"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big7" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="1" name="soal-jawaban" value="1" >
                                                        <label for="1" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="1"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#5f394d;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 0%; margin-top: 1em;">
                                                        <strong>Saya Tidak setuju</strong>
                                                    </div
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        ';
                                    }else if($query_soal->tessoal_jawaban_text == 2){
                                        $soal = $soal.'
                                        <div style="vertical-align: middle;">
                                        <table align="center">
                                            <tr>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#39c5c7;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%; margin-top: 1em;">
                                                        <strong>Saya setuju</strong>
                                                    </div
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big1" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="6" name="soal-jawaban" value="6" >
                                                        <label for="6" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="6"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big2" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="5" name="soal-jawaban" value="5" checked>
                                                        <label for="5" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="5"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big3" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="4" name="soal-jawaban" value="4" >
                                                        <label for="4" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="4"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big4" style="height: 80px; padding: 0px; margin: 0px; margin-top: 25%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="0" name="soal-jawaban" value="0" >
                                                        <label for="0" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="0"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big5" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="3" name="soal-jawaban" value="3" >
                                                        <label for="3" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="3"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big6" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="2" name="soal-jawaban" value="2" >
                                                        <label for="2" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="2"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big7" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="1" name="soal-jawaban" value="1" >
                                                        <label for="1" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="1"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#5f394d;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 0%; margin-top: 1em;">
                                                        <strong>Saya Tidak setuju</strong>
                                                    </div
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        ';
                                    }else if($query_soal->tessoal_jawaban_text == 3){
                                        $soal = $soal.'
                                        <div style="vertical-align: middle;">
                                        <table align="center">
                                            <tr>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#39c5c7;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%; margin-top: 1em;">
                                                        <strong>Saya setuju</strong>
                                                    </div
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big1" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="6" name="soal-jawaban" value="6" >
                                                        <label for="6" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="6"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big2" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="5" name="soal-jawaban" value="5" >
                                                        <label for="5" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="5"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big3" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="4" name="soal-jawaban" value="4" checked>
                                                        <label for="4" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="4"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big4" style="height: 80px; padding: 0px; margin: 0px; margin-top: 25%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="0" name="soal-jawaban" value="0" >
                                                        <label for="0" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="0"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big5" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="3" name="soal-jawaban" value="3" >
                                                        <label for="3" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="3"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big6" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="2" name="soal-jawaban" value="2" >
                                                        <label for="2" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="2"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big7" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="1" name="soal-jawaban" value="1" >
                                                        <label for="1" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="1"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#5f394d;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 0%; margin-top: 1em;">
                                                        <strong>Saya Tidak setuju</strong>
                                                    </div
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        ';
                                    }else if($query_soal->tessoal_jawaban_text == 4){
                                        $soal = $soal.'
                                        <div style="vertical-align: middle;">
                                        <table align="center">
                                            <tr>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#39c5c7;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%; margin-top: 1em;">
                                                        <strong>Saya setuju</strong>
                                                    </div
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big1" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="6" name="soal-jawaban" value="6" >
                                                        <label for="6" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="6"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big2" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="5" name="soal-jawaban" value="5" >
                                                        <label for="5" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="5"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big3" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="4" name="soal-jawaban" value="4" >
                                                        <label for="4" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="4"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big4" style="height: 80px; padding: 0px; margin: 0px; margin-top: 25%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="0" name="soal-jawaban" value="0" checked>
                                                        <label for="0" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="0"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big5" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="3" name="soal-jawaban" value="3" >
                                                        <label for="3" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="3"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big6" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="2" name="soal-jawaban" value="2" >
                                                        <label for="2" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="2"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big7" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="1" name="soal-jawaban" value="1" >
                                                        <label for="1" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="1"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#5f394d;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 0%; margin-top: 1em;">
                                                        <strong>Saya Tidak setuju</strong>
                                                    </div
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        ';
                                    }else if($query_soal->tessoal_jawaban_text == 5){
                                        $soal = $soal.'
                                        <div style="vertical-align: middle;">
                                        <table align="center">
                                            <tr>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#39c5c7;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%; margin-top: 1em;">
                                                        <strong>Saya setuju</strong>
                                                    </div
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big1" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="6" name="soal-jawaban" value="6" >
                                                        <label for="6" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="6"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big2" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="5" name="soal-jawaban" value="5" >
                                                        <label for="5" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="5"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big3" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="4" name="soal-jawaban" value="4" >
                                                        <label for="4" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="4"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big4" style="height: 80px; padding: 0px; margin: 0px; margin-top: 25%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="0" name="soal-jawaban" value="0" >
                                                        <label for="0" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="0"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big5" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="3" name="soal-jawaban" value="3" checked>
                                                        <label for="3" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="3"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big6" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="2" name="soal-jawaban" value="2" >
                                                        <label for="2" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="2"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big7" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="1" name="soal-jawaban" value="1" >
                                                        <label for="1" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="1"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#5f394d;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 0%; margin-top: 1em;">
                                                        <strong>Saya Tidak setuju</strong>
                                                    </div
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        ';
                                    }else if($query_soal->tessoal_jawaban_text == 6){
                                        $soal = $soal.'
                                        <div style="vertical-align: middle;">
                                        <table align="center">
                                            <tr>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#39c5c7;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%; margin-top: 1em;">
                                                        <strong>Saya setuju</strong>
                                                    </div
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big1" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="6" name="soal-jawaban" value="6" >
                                                        <label for="6" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="6"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big2" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="5" name="soal-jawaban" value="5" >
                                                        <label for="5" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="5"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big3" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="4" name="soal-jawaban" value="4" >
                                                        <label for="4" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="4"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big4" style="height: 80px; padding: 0px; margin: 0px; margin-top: 25%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="0" name="soal-jawaban" value="0" >
                                                        <label for="0" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="0"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big5" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="3" name="soal-jawaban" value="3" >
                                                        <label for="3" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="3"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big6" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="2" name="soal-jawaban" value="2" checked>
                                                        <label for="2" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="2"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big7" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="1" name="soal-jawaban" value="1" >
                                                        <label for="1" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="1"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#5f394d;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 0%; margin-top: 1em;">
                                                        <strong>Saya Tidak setuju</strong>
                                                    </div
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        ';
                                    }else if($query_soal->tessoal_jawaban_text == 7){
                                        $soal = $soal.'
                                        <div style="vertical-align: middle;">
                                        <table align="center">
                                            <tr>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#39c5c7;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%; margin-top: 1em;">
                                                        <strong>Saya setuju</strong>
                                                    </div
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big1" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="6" name="soal-jawaban" value="6" >
                                                        <label for="6" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="6"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big2" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="5" name="soal-jawaban" value="5" >
                                                        <label for="5" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="5"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big3" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="4" name="soal-jawaban" value="4" >
                                                        <label for="4" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="4"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big4" style="height: 80px; padding: 0px; margin: 0px; margin-top: 25%; margin-left: 25%;">
                                                        <input type="radio" onchange="jawab()" id="0" name="soal-jawaban" value="0" >
                                                        <label for="0" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="0"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big5" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="3" name="soal-jawaban" value="3" >
                                                        <label for="3" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="3"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big6" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="2" name="soal-jawaban" value="2" >
                                                        <label for="2" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="2"> 
                                                    </div>
                                                </td>
                                                <td style="border: height: 80px; vertical-align: middle;">                                            
                                                    <div class="md-radio-big7" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 10%;">
                                                        <input type="radio" onchange="jawab()" id="1" name="soal-jawaban" value="1" checked>
                                                        <label for="1" style="max-width: 100%; font-weight: 500;"></label>
                                                        <input type="hidden" name="soal-jawabanText" value="1"> 
                                                    </div>
                                                </td>
                                                <td align="center" style="border: height: 80px; vertical-align: middle; color:#5f394d;">
                                                    <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 0%; margin-top: 1em;">
                                                        <strong>Saya Tidak setuju</strong>
                                                    </div
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        ';
                                    }else if($query_soal->tessoal_jawaban_text == NULL){
                                        $soal = $soal.'
                                            <div style="vertical-align: middle;">
                                                <table align="center">
                                                    <tr>
                                                        <td align="center" style="border: height: 80px; vertical-align: middle; color:#39c5c7;">
                                                            <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%; margin-top: 1em;">
                                                                <strong>Saya setuju</strong>
                                                            </div
                                                        </td>
                                                        <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                            <div class="md-radio-big1" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 25%;">
                                                                <input type="radio" onchange="jawab()" id="6" name="soal-jawaban" value="6" >
                                                                <label for="6" style="max-width: 100%; font-weight: 500;"></label>
                                                                <input type="hidden" name="soal-jawabanText" value="6"> 
                                                            </div>
                                                        </td>
                                                        <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                            <div class="md-radio-big2" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 25%;">
                                                                <input type="radio" onchange="jawab()" id="5" name="soal-jawaban" value="5" >
                                                                <label for="5" style="max-width: 100%; font-weight: 500;"></label>
                                                                <input type="hidden" name="soal-jawabanText" value="5"> 
                                                            </div>
                                                        </td>
                                                        <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                            <div class="md-radio-big3" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 25%;">
                                                                <input type="radio" onchange="jawab()" id="4" name="soal-jawaban" value="4" >
                                                                <label for="4" style="max-width: 100%; font-weight: 500;"></label>
                                                                <input type="hidden" name="soal-jawabanText" value="4"> 
                                                            </div>
                                                        </td>
                                                        <td align="center" style="border: height: 80px; vertical-align: middle;">                                            
                                                            <div class="md-radio-big4" style="height: 80px; padding: 0px; margin: 0px; margin-top: 25%; margin-left: 25%;">
                                                                <input type="radio" onchange="jawab()" id="0" name="soal-jawaban" value="0" >
                                                                <label for="0" style="max-width: 100%; font-weight: 500;"></label>
                                                                <input type="hidden" name="soal-jawabanText" value="0"> 
                                                            </div>
                                                        </td>
                                                        <td style="border: height: 80px; vertical-align: middle;">                                            
                                                            <div class="md-radio-big5" style="height: 80px; padding: 0px; margin: 0px; margin-top: 20%; margin-left: 10%;">
                                                                <input type="radio" onchange="jawab()" id="3" name="soal-jawaban" value="3" >
                                                                <label for="3" style="max-width: 100%; font-weight: 500;"></label>
                                                                <input type="hidden" name="soal-jawabanText" value="3"> 
                                                            </div>
                                                        </td>
                                                        <td style="border: height: 80px; vertical-align: middle;">                                            
                                                            <div class="md-radio-big6" style="height: 80px; padding: 0px; margin: 0px; margin-top: 10%; margin-left: 10%;">
                                                                <input type="radio" onchange="jawab()" id="2" name="soal-jawaban" value="2" >
                                                                <label for="2" style="max-width: 100%; font-weight: 500;"></label>
                                                                <input type="hidden" name="soal-jawabanText" value="2"> 
                                                            </div>
                                                        </td>
                                                        <td style="border: height: 80px; vertical-align: middle;">                                            
                                                            <div class="md-radio-big7" style="height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 10%;">
                                                                <input type="radio" onchange="jawab()" id="1" name="soal-jawaban" value="1" >
                                                                <label for="1" style="max-width: 100%; font-weight: 500;"></label>
                                                                <input type="hidden" name="soal-jawabanText" value="1"> 
                                                            </div>
                                                        </td>
                                                        <td align="center" style="border: height: 80px; vertical-align: middle; color:#5f394d;">
                                                            <div class="md-radio-big1" style="width: 9em; height: 80px; padding: 0px; margin: 0px; margin-top: 0%; margin-left: 0%; margin-top: 1em;">
                                                                <strong>Saya Tidak setuju</strong>
                                                            </div
                                                            </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        ';
                                    }

                                // $soal = $soal.' </ul>';
                    }else if($query_soal->soal_tipe==222){
                        if(!empty($query_soal->tessoal_jawaban_text)){
                            $soal = $soal.'<textarea class="textarea" id="soal-jawaban" name="soal-jawaban" style="width: 100%; height: 150px; font-size: 13px; line-height: 25px; border: 1px solid #dddddd; padding: 10px;">'.$query_soal->tessoal_jawaban_text.'</textarea>
                                <button type="button" onclick="jawab()" class="btn btn-default" style="margin-bottom: 5px;" title="Simpan Jawaban">Simpan Jawaban</button>
                                ';
                        }else{
                            $soal = $soal.'<textarea class="textarea" id="soal-jawaban" name="soal-jawaban" style="width: 100%; height: 150px; font-size: 13px; line-height: 25px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                <button type="button" onclick="jawab()" class="btn btn-default" style="margin-bottom: 5px;" title="Simpan Jawaban">Simpan Jawaban</button>
                                ';
                        }
                    }else if($query_soal->soal_tipe==3){
                        $soal ="";
                        $soal = $soal.'<hr />';       
                        $soal = $soal.'<div class="form-group"><ul>';
                        $query_jawaban = $this->cbt_tes_soal_jawaban_model->get_by_tessoal($query_soal->tessoal_id);

                        if($query_jawaban->num_rows()>0){

                            $query_jawaban = $query_jawaban->result();
                            foreach ($query_jawaban as $jawaban) {
                                // mengganti [baseurl] ke alamat sesungguhnya pada tag img / gambars
                                $temp_jawaban = $jawaban->jawaban_detail;
                                $temp_jawaban = str_replace("[base_url]", base_url(), $temp_jawaban);

                                if($jawaban->soaljawaban_selected==1){
                                    $soal = $soal.'
                                    <div class="md-radio">
                                            <input type="radio" onchange="jawab()" name="soal-jawaban" id="'.$jawaban->soaljawaban_jawaban_id.'" value="'.$jawaban->soaljawaban_jawaban_id.'" checked> 
                                            <label for="'.$jawaban->soaljawaban_jawaban_id.'" style="max-width: 100%; font-weight: 500;">'.$temp_jawaban.'</label>
                                            <input type="hidden" name="soal-jawabanText" value="'.$temp_jawaban.'"> 
                                    </div>';
                                }else{
                                    $soal = $soal.'
                                    <div class="md-radio">
                                            <input type="radio" onchange="jawab()" name="soal-jawaban" id="'.$jawaban->soaljawaban_jawaban_id.'" value="'.$jawaban->soaljawaban_jawaban_id.'" > 
                                            <label for="'.$jawaban->soaljawaban_jawaban_id.'" style="max-width: 100%; font-weight: 500;">'.$temp_jawaban.'</label>
                                            <input type="hidden" name="soal-jawabanText" value="'.$temp_jawaban.'"> 
                                    </div>';
                                }
                            }
                            $soal = $soal.' </ul>';
                        }
                    }else if($query_soal->soal_tipe==4){
                        

                        $soal ="";
                        $soal = $soal.'<hr />';       
                        $soal = $soal.'<div class="form-group"> <ul>';
                        $query_jawaban = $this->cbt_tes_soal_jawaban_model->get_by_tessoal($query_soal->tessoal_id);
                        if($query_jawaban->num_rows()>0){

                            $query_jawaban = $query_jawaban->result();
                            foreach ($query_jawaban as $jawaban) {
                                // mengganti [baseurl] ke alamat sesungguhnya pada tag img / gambars
                                $temp_jawaban = $jawaban->jawaban_detail;
                                $temp_jawaban = str_replace("[base_url]", base_url(), $temp_jawaban);
;

                                if($jawaban->soaljawaban_selected==1){
                                    $soal = $soal.'
                                    <script type="text/javascript">
                                        $("#btn-selanjutnya").prop("disabled", false); 
                                    </script>
                                    <div class="md-radio">
                                            <input type="radio" onchange="jawab()" name="soal-jawaban" id="'.$jawaban->soaljawaban_jawaban_id.'" value="'.$jawaban->soaljawaban_jawaban_id.'" checked> 
                                            <label for="'.$jawaban->soaljawaban_jawaban_id.'" style="max-width: 100%; font-weight: 500;">'.$temp_jawaban.'</label>
                                            <input type="hidden" name="soal-jawabanText" value="'.$temp_jawaban.'"> 
                                    </div>';
                                }else{
                                    $soal = $soal.'
                                    <div class="md-radio">
                                            <input type="radio" onchange="jawab()" name="soal-jawaban" id="'.$jawaban->soaljawaban_jawaban_id.'" value="'.$jawaban->soaljawaban_jawaban_id.'" > 
                                            <label for="'.$jawaban->soaljawaban_jawaban_id.'" style="max-width: 100%; font-weight: 500;" >'.$temp_jawaban.'</label>
                                            <input type="hidden" name="soal-jawabanText" value="'.$temp_jawaban.'"> 
                                    </div>';
                                }
                            }
                            $soal = $soal.'<div class="form-group"> </ul>';
                        }
                    }else if($query_soal->soal_tipe==2){
                        $soal ="";
                        // $soal = $soal.'<hr />';       
                        $soal = $soal.'
                                    <ul>
                            <table>
                                <tr>
                                    <td>
                                        <label>P &nbsp;&nbsp;K</label>
                                    </td>
                                    <td>
                                        <label>&nbsp;</label>
                                        <input type="hidden" name="soal-jawaban-most" id="soal-jawaban-most"> 
                                        <input type="hidden" name="soal-jawaban" id="soal-jawaban"> 

                                    </td>
                                </tr>
                                ';
                        $query_jawaban = $this->cbt_tes_soal_jawaban_model->get_by_tessoal($query_soal->tessoal_id);

                        if($query_jawaban->num_rows()>0){

                            $query_jawaban = $query_jawaban->result();
                            foreach ($query_jawaban as $jawaban) {
                                // mengganti [baseurl] ke alamat sesungguhnya pada tag img / gambars
                                $temp_jawaban = $jawaban->jawaban_detail;
                                $temp_jawaban = str_replace("[base_url]", base_url(), $temp_jawaban);

                                $arrayJawaban = explode(',', $jawaban->jawaban_benar);

                                if($jawaban->soaljawaban_selected==1 and $jawaban->soaljawaban_value=='Most'){

                                    $soal = $soal.'
                                    <tr class="radio">
                                        <td>
                                            <label>
                                                <input type="radio" name="soal-jawaban-most2" id="check" class="single-checkbox" disabled value="'.$jawaban->soaljawaban_jawaban_id.'" checked>
                                                <input type="hidden" name="soal-jawabanText" value="'.$temp_jawaban.'"> 
                                            </label>                                        
                                        </td>
                                    ';
                                }else{
                                    $soal = $soal.'
                                    <tr class="radio">
                                        <td>
                                            <label>
                                                <input type="radio" name="soal-jawaban-most2" id="check" class="single-checkbox" value="'.$jawaban->soaljawaban_jawaban_id.'">
                                                <input type="hidden" name="soal-jawabanText" value="'.$temp_jawaban.'"> 

                                            </label>                                
                                        </td>

                                    ';
                                }

                                if($jawaban->soaljawaban_selected==1 and $jawaban->soaljawaban_value=='Least'){

                                    $soal = $soal.'
                                        <td>
                                            <label>
                                                <input type="radio" name="soal-jawaban2" id="check" class="single-checkbox" disabled value="'.$jawaban->soaljawaban_jawaban_id.'" checked>
                                            </label>
                                        </td>
                                        <td>
                                            <label>
                                                '.$temp_jawaban.'
                                                <input type="hidden" name="soal-jawabanText" value="'.$temp_jawaban.'"> 

                                            </label>
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>';
                                }else{
                                    $soal = $soal.'
                                    
                                        <td>
                                            <label>
                                                <input type="radio" name="soal-jawaban2" id="check" class="single-checkbox" value="'.$jawaban->soaljawaban_jawaban_id.'" >
                                            </label>
                                        </td>

                                        <td>
                                            <label>
                                                '.$temp_jawaban.'
                                                <input type="hidden" name="soal-jawabanText" value="'.$temp_jawaban.'"> 

                                            </label>
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>';
                                }
                            }
                            $soal = $soal.
                            '<script type="text/javascript">
                                $(":radio").change(function() {
                                    // var value = $(this).val();
                                    var values="sadasdsadsad";
                                    var mostValue = $("input[name=soal-jawaban-most2]:checked").val();
                                    var lestValue = $("input[name=soal-jawaban2]:checked").val();
                                    $(":radio[value!=" + values + "]").attr("disabled", false);
                                    
                                    $("#soal-jawaban").val(lestValue);
                                    $("#soal-jawaban-most").val(mostValue);

                                    if(mostValue != null){
                                        $(":radio[value=" + mostValue + "]").attr("disabled", true);
                                    }
                                    if(lestValue != null){
                                        $(":radio[value=" + lestValue + "]").attr("disabled", true);
                                    }

                                    jawab();
                                    var max =2
                                    if ($("input[id=check]:checked").length >= max) {
                                        $("#btn-selanjutnya").prop("disabled", false); 
                                        $("#btn-hentikan").prop("disabled", false); 
                                    }else{
                                        $("#btn-selanjutnya").prop("disabled", true); 
                                        $("#btn-hentikan").prop("disabled", true); 
                                    }
                                    
                                });

                                $(function() {
                                    var mostValue = $("input[name=soal-jawaban-most2]:checked").val();
                                    var lestValue = $("input[name=soal-jawaban2]:checked").val();
                                    if(mostValue != null){
                                        $(":radio[value=" + mostValue + "]").attr("disabled", true);
                                    }
                                    if(lestValue != null){
                                        $(":radio[value=" + lestValue + "]").attr("disabled", true);
                                    }
                                })

                            </script>';
                        }
                    }
                    if($query_soal->soal_tipe==2){
                        $soal = $soal.'</ul></table>';
                    }else{
                        $soal = $soal.'</ul></div>';
                    }
                    $data['tes_soal'] = $soal;
                }
            }else{
                $data['data'] = 2;
            }
        }

        return $data;
    }

    function update_status_audio($tessoal_id=null){
        $data['data'] = 0;
        if(!empty($tessoal_id)){
            $data['data'] = 1;
            $data_tes['tessoal_audio_play'] = 1;
            $this->cbt_tes_soal_model->update('tessoal_id ', $tessoal_id, $data_tes);
            $data['pesan'] = 'Audio berhasil diputar';
        }
        echo json_encode($data);
    }
}