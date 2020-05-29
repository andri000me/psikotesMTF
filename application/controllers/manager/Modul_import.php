<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modul_import extends Member_Controller {
	private $kode_menu = 'modul-import';
	private $kelompok = 'modul';
	private $url = 'manager/modul_import';
	
    function __construct(){
		parent:: __construct();
		$this->load->model('cbt_modul_model');
		$this->load->model('cbt_topik_model');
		$this->load->model('cbt_jawaban_model');
		$this->load->model('cbt_soal_model');
		$this->load->helper('directory');
		$this->load->helper('file');

        parent::cek_akses($this->kode_menu);
	}
	
    public function index(){
        $data['kode_menu'] = $this->kode_menu;
        $data['url'] = $this->url;
		

        $query_user = $this->users_model->get_user_by_username($this->access->get_username());
        $select = '';
        $counter = 0;
        if($query_user->num_rows()>0){
            $query_user = $query_user->row();

            // Mengecek apakah user dibatasi hanya mengentry beberapa topik
            if(!empty($query_user->opsi1)){
                $user_topik = explode(',', $query_user->opsi1);
                foreach ($user_topik as $topik_id) {
                    $query_topik = $this->cbt_topik_model->get_by_kolom_join_modul('topik_id', $topik_id);
                    if($query_topik->num_rows()>0){
                        $topik = $query_topik->row();
                        $counter++;

                        $jml_soal = $this->cbt_soal_model->count_by_kolom('soal_topik_id', $topik->topik_id)->row()->hasil;
						if($topik->topik_id != 8){
							$select = $select.'<option value="'.$topik->topik_id.'">'.$topik->modul_nama.' - '.$topik->topik_nama.' ['.$jml_soal.']</option>';
						}
                    }
                }
            }else{
                // Jika user tidak dibatasi mengedit soal sesuai topik
                $query_modul = $this->cbt_modul_model->get_modul();
                if($query_modul->num_rows()>0){
                    $select = '';
                    $query_modul = $query_modul->result();
                    foreach ($query_modul as $temp) {
                        $query_topik = $this->cbt_topik_model->get_by_kolom_join_modul('topik_modul_id', $temp->modul_id);
                        if($query_topik->num_rows()){
                            $select = $select.'<optgroup label="Modul '.$temp->modul_nama.'">';

                            $query_topik = $query_topik->result();
                            foreach ($query_topik as $topik) {
                                $counter++;

								$jml_soal = $this->cbt_soal_model->count_by_kolom('soal_topik_id', $topik->topik_id)->row()->hasil;
								if($topik->topik_id != 8){
									$select = $select.'<option value="'.$topik->topik_id.'">'.$topik->modul_nama.' - '.$topik->topik_nama.' ['.$jml_soal.']</option>';
								}
                            }

                            $select = $select.'</optgroup>';
                        }
                    }
                }
            }
        }

        if($counter==0){
        	$select = '<option value="kosong">Tidak Ada Data Topik</option>';
        }
        
        $data['select_topik'] = $select;
        
        $this->template->display_admin($this->kelompok.'/modul_import_view', 'Mengimport Soal', $data);
    }

    function import(){
    	$this->load->library('form_validation');
        
        $this->form_validation->set_rules('topik', 'Topik','required');

        if($this->form_validation->run() == TRUE){
        	$id_topik = $this->input->post('topik', true);
	    	$posisi = './public/uploads/';

	        if(!empty($_FILES['userfile']['name'])){
		    	$config['upload_path'] = $posisi;
			    $config['allowed_types'] = 'xls|xlsx';
			    $config['max_size']	= '0';
			    $config['overwrite'] = true;
			    $config['file_name'] = $_FILES['userfile']['name'];

			    $this->load->library('upload', $config);
			    if (!$this->upload->do_upload()){
		        	$status['status'] = 0;
		            $status['pesan'] = $this->upload->display_errors().'Tipe file yang di upload adalah '.$_FILES['userfile']['type'];
		        }else{
		        	$upload_data = $this->upload->data();
		        	$data['filename'] = 'File '.$upload_data['file_name'].' BERHASIL di IMPORT';
                    
                    $status['status'] = 1;

                	// disini proses import data
                	$status['pesan'] = $this->import_file($upload_data['file_name'], $id_topik);
		        }      
	        }else{
	        	$status['status'] = 0;
	            $status['pesan'] = 'Pilih terlebih dahulu file yang akan di upload';
	        }
        }else{
        	$status['status'] = 0;
            $status['pesan'] = validation_errors();
        }
        echo json_encode($status);
	}
	
	function export($id_topik=null){
		$filename ="excelreport.xls";
		$contents = "testdata1 \t testdata2 \t testdata3 \t \n";
		header('Content-type: application/ms-excel');
		header('Content-Disposition: attachment; filename='.$filename);
		echo "<table>
				<tr>
					<td>Soal Nomor</td>
					<td>Jenis</td>
					<td>Id</td>
					<td>Isi</td>
					<td>Jawaban</td>
				</tr>";
					$mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
					$sqlPertanyaan = "
							SELECT  soal_id, cbt_soal.soal_nomor, soal_detail, soal_topik_id
							FROM    cbt_soal 
							WHERE   soal_topik_id = ".$id_topik."
							ORDER BY soal_nomor ASC"; 

					if($resultPertanyaan = mysqli_query($mysqli, $sqlPertanyaan)){
						while($row = mysqli_fetch_array($resultPertanyaan)){
							$kolom3 = str_replace("<br />",".",$row['soal_detail']);
						echo "<tr>
									<td style='vertical-align : middle;text-align:center;'>".$row['soal_nomor']."</td>
									<td style='vertical-align : middle;text-align:center;'>Q</td>
									<td style='vertical-align : middle;text-align:center;'>".$row['soal_id']."</td>
									<td>".$kolom3."</td>
									<td>&nbsp;</td>
							</tr>";
							$sqlJawaban = " 
											SELECT jawaban_id, jawaban_detail, jawaban_benar
											FROM `cbt_jawaban`
											WHERE jawaban_soal_id = ".$row['soal_id']."";
									
									if($resultJawaban = mysqli_query($mysqli, $sqlJawaban)){
										while($rowJawaban = mysqli_fetch_array($resultJawaban)){
											echo "<tr>
													<td style='vertical-align : middle;text-align:center;'>&nbsp;</td>
													<td style='vertical-align : middle;text-align:center;'>A</td>
													<td style='vertical-align : middle;text-align:center;'>".$rowJawaban['jawaban_id']."</td>
													<td>".$rowJawaban['jawaban_detail']."</td>
													<td style='vertical-align : middle;text-align:center;'>".$rowJawaban['jawaban_benar']."</td>
												</tr>";
										}
									}

						}
					}
		echo "</table>";
    }

    function import_file($inputfile, $id_topik){
		$this->load->library('excel');
        $inputFileName = './public/uploads/'.$inputfile;

        $excel = PHPExcel_IOFactory::load($inputFileName);
        $worksheet = $excel->getSheet(0);
		$highestRow = $worksheet->getHighestRow()+1;

		$pesan='	<div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-info"></i> Informasi!</h4>';
		$jmldatasukses = 0;
		$jmlsoalsukses = 0;
		$jmljawabansukses = 0;
		$jmldataerror = 0;			
		$row=2;
		$kosong = 0;

		for($i = 2; $i <$highestRow; ++$i) {
			if($highestRow>2){
				// while($kosong<2){
				
					$kolom1 = $worksheet->getCellByColumnAndRow(1, $i)->getValue();//jenis
					$kolom2 = $worksheet->getCellByColumnAndRow(2, $i)->getValue();//id jawaban atau soal
					$kolom3 = $worksheet->getCellByColumnAndRow(3, $i)->getValue();//isi
					$kolom4 = $worksheet->getCellByColumnAndRow(4, $i)->getValue();//jawaban
					
					if(empty($kolom1)){ $kosong++; }
					if(empty($kolom2)){ $kosong++; }
					if(empty($kolom3)){ $kosong++; }
					if(empty($kolom4)){ $kosong++; }

						if($kosong < 5){
							$kolom3 = str_replace(".","<br />",$kolom3);
							if($kolom1=='Q'){
								// $question['soal_topik_id'] = $kolom2;
								$question['soal_detail'] = $kolom3;

								$this->cbt_soal_model->update('soal_id', $kolom2, $question);
								$jmlsoalsukses++;

							}else if($kolom1=='A'){
								$answer['jawaban_detail'] = $kolom3;
								$answer['jawaban_benar'] = $kolom4;
								$answer['jawaban_aktif'] = 1;
								$this->cbt_jawaban_model->update('jawaban_id', $kolom2, $answer);
								$jmljawabansukses++;
							}
							$jmldatasukses++;
							$kosong = 0;
						}else{
							$pesan=$pesan.'Baris ke  '.$row.' GAGAL di simpan : '.$kolom1.' - '.$kolom3.'<br>';
							$jmldataerror++;
							$kosong = 0;
						}
					}
				}
				$pesan = 	$pesan.'<br>Jumlah pertanyaan yang berhasil diimport adalah '.$jmlsoalsukses.'<br>
							Jumlah jawaban yang berhasil diimport adalah '.$jmljawabansukses.'<br>
							Jumlah data yang gagal di dimport adalah '.$jmldataerror.'<br>
							Jumlah total baris yang diproses adalah <br>';
        		$pesan = $pesan.'</div>';
        
        return $pesan;
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