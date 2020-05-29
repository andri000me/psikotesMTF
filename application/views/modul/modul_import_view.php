<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Mengimport Soal
		<small>Melakukan Import Soal berdasarkan modul dan topik</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo site_url() ?>/"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Import Soal</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
		<?php echo form_open_multipart($url.'/import','id="form-importsoal"'); ?>
        <div class="col-md-5">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="box-title">Pilih Topik</div>
                </div><!-- /.box-header -->

                <div class="box-body">
					<div class="form-group">
                        <label>Pilih Topik</label>
						<select name="topik" id="topik" class="form-control input-sm">
							<?php if(!empty($select_topik)){ echo $select_topik; } ?>
                        </select>
					</div>
                </div>
                <div class="box-footer">
                    <p>Pilih terlebih dahulu Topik yang akan digunakan sebelum melakukan import soal</p>
                </div>
            </div>
        </div>
		<div class="col-md-7">
			<div class="box box-primary">
                <div class="box-header with-border">
                    <div class="box-title">Import Soal</div>
					<div class="box-tools pull-right">
						<div class="dropdown pull-right">
							<a href="<?php echo base_url(); ?>public/form/form-soal-ganda.xls">Form Excel Soal Pilihan Ganda</a>
    					</div>
    				</div>
                </div><!-- /.box-header -->

                <div class="box-body">
					<span id="form-pesan"></span>
                    <div class="form-group">
                        <label>Pilih File</label>
                        <input type="file" id="userfile" name="userfile">
						<p class="help-block">Soal yang dapat import adalah soal jenis Pilihan ganda. Tidak dapat melakukan import soal yang terdapat gambar atau audio.</p>
                        <p class="help-block">File Excel yang didukung adalah Microsoft Excel 2003 dan Microsoft Excel 2007</p>
                        <p class="help-block">SAVE AS ke Office 2007 jika gagal mengupload data dalam format Office 2003</p>
					</div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right" id="import">Import</button>
                    <a id="templateDISC" href="<?php echo site_url().'/'.$url; ?>/export/9">Form Excel Soal Pilihan Ganda DISC</a>
                    <a id="templatePAPI" href="<?php echo site_url().'/'.$url; ?>/export/10">Form Excel Soal Pilihan Ganda PAPI</a>
                    <a id="templateEPPS" href="<?php echo site_url().'/'.$url; ?>/export/11">Form Excel Soal Pilihan Ganda EPPS</a>
                    <a id="templateMBTI" href="<?php echo site_url().'/'.$url; ?>/export/12">Form Excel Soal Pilihan Ganda MBTI</a>
                </div>
            </div>
        </div>
        
            <?php

                // echo "<table style='border: 1px solid black'>
                //         <tr>
                //             <td>Soal Nomor</td>
                //             <td>Jenis</td>
                //             <td>Id</td>
                //             <td>Isi</td>
                //             <td>Jawaban</td>
                //         </tr>";
                // $mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
                // $sql = "
                //         SELECT  soal_id, cbt_soal.soal_nomor, soal_detail 
                //         FROM    cbt_soal 
                //         WHERE   soal_topik_id = 10
                //         ORDER BY soal_nomor ASC";


                // if($result = mysqli_query($mysqli, $sql)){
                //     while($row = mysqli_fetch_array($result)){

                //         $kolom3 = str_replace("\r","<br />",$row['soal_detail']);
                //     echo "<tr>
                //                 <td>".$row['soal_nomor']."</td>
                //                 <td>Q</td>
                //                 <td>".$row['soal_id']."</td>
                //                 <td>".$kolom3."</td>
                //                 <td>&nbsp;</td>
                //         </tr>";
                //         $sql = " 
                //                 SELECT jawaban_id, jawaban_detail, jawaban_benar
                //                 FROM `cbt_jawaban`
                //                 WHERE jawaban_soal_id = ".$row['soal_id']."";
                                
                //                 if($result = mysqli_query($mysqli, $sql)){
                //                     while($rowJawaban = mysqli_fetch_array($result)){
                //                         echo "<tr>
                //                                 <td>".$row['soal_nomor']."</td>
                //                                 <td>A</td>
                //                                 <td>".$rowJawaban['jawaban_id']."</td>
                //                                 <td>".$rowJawaban['jawaban_detail']."</td>
                //                                 <td>".$rowJawaban['jawaban_benar']."</td>
                //                             </tr>";
                //                     }
                //                 }

                //     }
                // }
                // echo "</table>";
            ?>
        
		</form>
    </div>
</section><!-- /.content -->



<script lang="javascript">

    $(function() {
        $("#templateDISC").show();
        $("#templatePAPI").hide();
        $("#templateEPPS").hide();
        $("#templateMBTI").hide();
    });

    $(function(){
        
        $("#topik").change(function(){
            if(this.value == '9'){
                $("#templateDISC").show();
                $("#templatePAPI").hide();
                $("#templateEPPS").hide();
                $("#templateMBTI").hide();
            }else if(this.value == '10'){
                $("#templatePAPI").show();
                $("#templateDISC").hide();
                $("#templateEPPS").hide();
                $("#templateMBTI").hide();
            }else if(this.value == '11'){
                $("#templateEPPS").show();
                $("#templateDISC").hide();
                $("#templatePAPI").hide();
                $("#templateMBTI").hide();
            }else if(this.value == '12'){
                $("#templateMBTI").show();
                $("#templateDISC").hide();
                $("#templatePAPI").hide();
                $("#templateEPPS").hide();
            }

        });
    });


    function batal_tambah(){
        $("#form-pesan").html('');
        $('#userfile').val('');
    }

    $(function(){
        $('#topik').select2();

        /**
         * Submit form tambah soal
         */
        $('#form-importsoal').submit(function(){
            $("#modal-proses").modal('show');
            $.ajax({
                    url:"<?php echo site_url().'/'.$url; ?>/import",
                    type:"POST",
                    timeout: 300000,
                    data:new FormData(this),
                    mimeType: "multipart/form-data",
                    contentType:false,
                    cache: false,
                    processData: false,
                    success:function(respon){
                        var obj = $.parseJSON(respon);
                        if(obj.status==1){
                            $("#modal-proses").modal('hide');
                            batal_tambah();
                            $('#form-pesan').html(obj.pesan);
                        }else{
                            $("#modal-proses").modal('hide');
                            $('#form-pesan').html(pesan_err(obj.pesan));
                        }
                    },
                    statusCode: {
                        500: function(respon) {
                            $("#modal-proses").modal('hide');
                            $('#form-pesan').html(pesan_err('Terjadi kesalahan pada File yang di Upload. Silahkan cek terlebih dahulu file yang anda upload.'));
                        }
                    },
                    error: function(xmlhttprequest, textstatus, message) {
                        if(textstatus==="timeout") {
                            $("#modal-proses").modal('hide');
                            notify_error("Gagal mengimport Soal, Silahkan Refresh Halaman");
                        }else{
                            $("#modal-proses").modal('hide');
                            notify_error(textstatus);
                        }
                    }
            });
            return false;
        });
		 
		$( document ).ready(function() {
            
		});
    });
</script>