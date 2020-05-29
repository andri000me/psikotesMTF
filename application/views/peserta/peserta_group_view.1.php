<?php
    $mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
    $sqlUser = "
                SELECT  cbt_user.user_firstname as name, 
                        cbt_user.user_id as user_id
                FROM    cbt_user
                ORDER BY cbt_user.user_name ASC";

                $userName = '';
                $userId = '';

                if($result = mysqli_query($mysqli, $sqlUser)){
                    while($row = mysqli_fetch_array($result)){
                        $userName = $userName.','.$row['name'];
                        $userId = $userId.','.$row['user_id'];
                    }
                }

                $checkUserName = explode(",",$userName);
                $checkUserId = explode(",",$userId);

    $sqlTes = "
                SELECT  cbt_tes.tes_nama as tes_nama, 
                        cbt_tes.tes_id as tes_id
                FROM    cbt_tes
                ORDER BY cbt_tes.tes_nama ASC";
                $tesNama = '';
                $tesId = '';

                if($result = mysqli_query($mysqli, $sqlTes)){
                    while($row = mysqli_fetch_array($result)){
                        $tesNama = $tesNama.','.$row['tes_nama'];
                        $tesId = $tesId.','.$row['tes_id'];
                    }
                }

                $checkTesName = explode(",",$tesNama);
                $checkTesId = explode(",",$tesId);
?>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
</head>

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Mengelola Soal
		<small>Mengelola soal berdasarkan modul dan topik</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo site_url() ?>/"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Soal</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
        <div class="col-xs-12">
                <div class="box box-primary">
                    <?php echo form_open_multipart($url.'/tambah','id="form-tambah" class="form-horizontal"'); ?>
                        <div class="box-header with-border">
                            <div class="box-title">Mengelola Soal <span id="judul-tambah-soal"></span></div>
                        </div><!-- /.box-header -->

                        

                        <div class="box-body">

                            
                        <div id="form-pesan-tes"></div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label">Nama Peserta</label>
                                <div class="col-sm-4">
                                <select  name="tambah-nama-peserta" id="tambah-nama-peserta" class="selectpicker" multiple data-max-options="999" data-live-search="true" style="background-color: #eee; color:black; border-color:#d2d6de;">
                                    <?php

                                        for ($x = 1; $x <= 10; $x++) {
                                            echo '<option value="'.$checkUserId[$x].'">'.$checkUserName[$x].'</option>';
                                        }
                                    ?>
                                </select>
                                <input type="text" id="tambah-nama-peserta-multi" name="tambah-nama-peserta-multi" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Daftar Tes</label>
                                <div class="col-sm-4">
                                <select  name="tambah-daftar-tes" id="tambah-daftar-tes" class="selectpicker" multiple data-max-options="999" data-live-search="true" style="background-color: #eee; color:black; border-color:#d2d6de;">
                                <?php
                                    for ($x = 1; $x <= 10; $x++) {
                                        echo '<option value="'.$checkTesId[$x].'">'.$checkTesName[$x].'</option>';
                                    }
                                ?>  
                                </select>
                                <input type="text" id="tambah-daftar-tes-multi" name="tambah-daftar-tes-multi" value="">
                                </div>
                                <input type="hidden" value="1" id="tambah-kesulitan" name="tambah-kesulitan">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Rentang Waktu</label>
                                <div class="col-sm-4">
                                    <div class="input-group" style="width: 60%;">
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input type="text" name="tambah-rentang-waktu" id="tambah-rentang-waktu" class="form-control input-sm" value="<?php if(!empty($rentang_waktu)){ echo $rentang_waktu; } ?>" readonly />
                                    </div>
                                    <p class="help-block">Rentang waktu tes dilaksanakan</p>
                                </div>
                            </div>





                            <div class="form-group">
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" id="btn-tambah-simpan" class="btn btn-primary"><span id="judul-tambah-simpan">Simpan</span></button>
                                    <button type="button" id="btn-tambah-batal" class="btn btn-default"><span>Batal</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="box-title">Daftar Soal <span id="judul-daftar-soal"></span></div>
                        <div class="box-tools pull-right">
                            <div class="dropdown pull-right">
                                <a style="cursor: pointer;" onclick="refresh_table()">Refresh Data Soal</a>
                            </div>
                        </div>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <table id="table-soal" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Soal</th>
                                    <th>Jawaban</th>
                                    <!-- <th>Subtes</th> -->
                                    <!-- <th style="text-align: center; padding-left: 0px; padding-right: 0px;">Action</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> </td>
                                    <td> </td>
                                    <!-- <td> </td> -->
                                    <td> </td>
                                    <td> </td>
                                </tr>
                            </tbody>
                        </table>                        
                    </div>
                </div>
        </div>
    </div>


    <div class="modal" id="modal-image" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog" style="width: 950px">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <div id="trx-judul">Insert Image</div>
                </div>
                <div class="modal-body">
                    <div class="row-fluid">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-6">
                                    <?php echo form_open_multipart($url.'/upload_file','id="form-upload-image" class="form-horizontal"'); ?>
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <div class="box-title">Upload File</div>
                                            </div><!-- /.box-header -->

                                            <div class="box-body">
                                                <div class="row-fluid">
                                                    <div class="box-body">
                                                        <div id="form-pesan-upload-image"></div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">File</label>
                                                            <div class="col-sm-10">
                                                                <input type="hidden" id="image-topik-id" name="image-topik-id" >
                                                                <input type="file" id="image-file" name="image-file" >
                                                                <p class="help-block">File yang didukung adalah jpg, jpeg, png</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" id="image-upload" class="btn btn-primary">Upload File</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xs-6">
                                        <div class="box hide" id="box-preview" >
                                            <div class="box-body">
                                                <div class="row-fluid">
                                                    <div class="box-body" style="height: 132px;">
                                                        <input type="hidden" name="image-isi" id="image-isi">
                                                        <div id="image-preview" style="text-align: center;vertical-align: middle;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" id="btn-image-insert" class="btn btn-primary">Masukkan Gambar</button>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box box-primary">
                                        <div class="box-body" style="max-height: 230px;overflow: auto;">
                                            <table id="table-image" class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama File</th>
                                                        <th>Preview</th>
                                                        <th>Tanggal</th>
                                                        <th> </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                        <td> </td>
                                                    </tr>
                                                </tbody>
                                            </table>                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-hapus-soal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <?php echo form_open($url.'/hapus_soal','id="form-hapus-soal"'); ?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <div id="trx-judul">Hapus Soal</div>
                </div>
                <div class="modal-body">
                    <div class="row-fluid">
                        <div class="box-body">
                            <div id="form-pesan-hapus"></div>
                            <div class="form-group">
                                <label>Soal</label>
                                <input type="hidden" name="hapus-id" id="hapus-id">
                                <div id="hapus-soal"  style="max-height: 250px;overflow: auto;"></div>
                            </div>
                            <p>Perhatian, soal yang dihapus akan membuat daftar jawaban ikut terhapus.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn-hapus-soal" class="btn btn-primary">Hapus</button>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>

    </form>
    </div>
</section><!-- /.content -->



<script lang="javascript">

    function refresh_table(){
        $('#table-soal').dataTable().fnReloadAjax();
    }

    function refresh_table_image(){
        $('#table-image').dataTable().fnReloadAjax();
    }
	
	function refresh_topik(){
        var judul = $('#topik option:selected').text();
        $('#judul-daftar-soal').html(judul);
        $('#judul-tambah-soal').html(judul);
	}

    function edit(id){
        $("#modal-proses").modal('show');
        $.getJSON('<?php echo site_url().'/'.$url; ?>/get_by_id/'+id+'', function(data){
            if(data.data==1){
                $("#form-pesan").html('');
                $('#tambah-soal').val('');
                CKEDITOR.instances.tambah_soal.setData(data.soal)
                $('#tambah-tipe').val(data.tipe);
                $('#tambah-topik-id').val(data.id_topik);
                $('#tambah-soal-id').val(data.id);
                $('#tambah-putar').val(data.putar);
                $('#tambah-audio').val('');
                $('#tambah-kesulitan').val(data.kesulitan);
                $('#tambah-nomor').val(data.soal_nomor);
                $('#tambah-nama-audio').val(data.audio);
                $('#topik').val(data.id_topik);
                if(data.tipe==3){
                    $('#form-tambah-jawaban').removeClass('hide');
                    $('#tambah-kunci-jawaban-singkat').val(data.kunci);
                }

                $('html, body').animate({
                    scrollTop: $("#form-tambah").offset().top
                }, 500);
            }
            $("#modal-proses").modal('hide');
        });
    }

    function hapus(id){
        $('#hapus-id').val('');
        $('#hapus-soal').html('');
        $('#form-pesan-hapus').html('');
        $("#modal-proses").modal('show');
        $.getJSON('<?php echo site_url().'/'.$url; ?>/get_by_id/'+id+'', function(data){
            if(data.data==1){
                $('#hapus-id').val(data.id);
                $('#hapus-soal').html(data.soal);
                
                $("#modal-hapus-soal").modal("show");
            }
            $("#modal-proses").modal('hide');
        });
    }

    function jawaban(id){
        window.open('<?php echo site_url(); ?>/manager/modul_jawaban/index/'+id);
    }

    /**
     * Fungsi untuk upload image dari editor text
     */
    function imageUpload(){
        $('#box-preview').addClass('hide');
        $('#image-preview').html('');
        $('#form-pesan-upload-image').html('');
        $('#image-isi').val('');
        $('#image-file').val('');

        refresh_table_image();

        $("#modal-image").modal("show");
    }

    function image_preview(posisi, image){
        $('#image-preview').html('<img src="<?php echo base_url() ?>'+posisi+'/'+image+'" style="max-height: 110px;" />');
        $('#image-isi').val('<img src="<?php echo base_url() ?>'+posisi+'/'+image+'" style="max-width: 600px;" />');
        $('#box-preview').removeClass('hide');
    }

    function batal_tambah(){
        $("#form-pesan").html('');
        $('#tambah-topik-id').val('');
        $('#tambah-soal-id').val('');
        $('#tambah-soal').val('');
        $('#tambah-putar').val('0');
        $('#tambah-audio').val('');
        $('#tambah-nama-audio').val('');
        $('#tambah-tipe').val('1');
		$('#tambah-kesulitan').val('1');
        $('#tambah-kunci-jawaban-singkat').val('');
        $('#form-tambah-jawaban').removeClass('hide');
        $('#form-tambah-jawaban').addClass('hide');

        CKEDITOR.instances.tambah_soal.setData('');
    }

    $(function(){
        $('#topik').select2();
        
        $("#topik").change(function(){
            refresh_topik();
            refresh_table();
        });

        $('#tambah-audio').change(function(e){
            var fileName = e. target. files[0]. name;
            $('#tambah-nama-audio').val(fileName);
        });

        $('#btn-image-insert').click(function(){
            var image = $('#image-isi').val();
            CKEDITOR.instances.tambah_soal.insertHtml(image);
            $("#modal-image").modal("hide");
        });

        // $('#tambah-tipe').change(function(e){
        //     var tipe = $('#tambah-tipe').val();

        //     if(tipe==3){
        //         $('#form-tambah-jawaban').removeClass('hide');
        //     }else{
        //         $('#form-tambah-jawaban').addClass('hide');
        //     }
        // });

        $('#btn-tambah-batal').click(function(){
            batal_tambah();
        });

        /**
         * Submit form tambah soal
         */
        $('#form-tambah').submit(function(){
            $('#tambah-soal').val(CKEDITOR.instances.tambah_soal.getData());
            $('#tambah-topik-id').val($('#topik').val());
            $("#modal-proses").modal('show');
            $.ajax({
                    url:"<?php echo site_url().'/'.$url; ?>/tambah",
                    type:"POST",
                    timeout: 60000,
                    data:new FormData(this),
                    mimeType: "multipart/form-data",
                    contentType:false,
                    cache: false,
                    processData: false,
                    success:function(respon){
                        alert("sadas");
                        var obj = $.parseJSON(respon);
                        if(obj.status==1){
                            alert("sadas");
                            // refresh_table();
                            // $("#modal-proses").modal('hide');
                            // batal_tambah();
                            notify_success(obj.pesan);
                        }else{
                            // $("#modal-proses").modal('hide');
                            // $('#form-pesan').html(pesan_err(obj.pesan));
                        }
                    },
                    error: function(xmlhttprequest, textstatus, message) {
                        if(textstatus==="timeout") {
                            // $("#modal-proses").modal('hide');
                            notify_error("Gagal menyimpan Soal, Silahkan Refresh Halaman");
                        }else{
                            $("#modal-proses").modal('hide');
                            notify_error(textstatus);
                        }
                    }
            });
            return false;
        });

        /**
         * Submit form hapus soal
         */
        $('#form-hapus-soal').submit(function(){
            $("#modal-proses").modal('show');
            $.ajax({
                    url:"<?php echo site_url().'/'.$url; ?>/hapus_soal",
                    type:"POST",
                    data:$('#form-hapus-soal').serialize(),
                    cache: false,
                    success:function(respon){
                        var obj = $.parseJSON(respon);
                        if(obj.status==1){
                            refresh_table();
                            $("#modal-proses").modal('hide');
                            $("#form-pesan-hapus").html('');
                            $("#modal-hapus-soal").modal('hide');
                            notify_success(obj.pesan);
                        }else{
                            $("#modal-proses").modal('hide');
                            $('#form-pesan-hapus').html(pesan_err(obj.pesan));
                        }
                    }
            });
            return false;
        });

        /**
         * Submit form upload pada image browser
         */
        $('#form-upload-image').submit(function(){
            $('#image-topik-id').val($('#topik').val());
            $("#modal-proses").modal('show');
            $.ajax({
                    url:"<?php echo site_url().'/'.$url; ?>/upload_file",
                    type:"POST",
                    data:new FormData(this),
                    mimeType: "multipart/form-data",
                    contentType:false,
                    cache: false,
                    processData: false,
                    success:function(respon){
                        var obj = $.parseJSON(respon);
                        if(obj.status==1){
                            refresh_table();
                            $('#image-preview').html(obj.image);
                            $('#image-isi').val(obj.image_isi);
                            $('#box-preview').removeClass('hide');
                            $("#modal-proses").modal('hide');
                            $("#form-pesan-upload-image").html('');
                            $('#image-file').val('');
                            refresh_table_image();
                            notify_success(obj.pesan);
                        }else{
                            $("#modal-proses").modal('hide');
                            $('#form-pesan-upload-image').html(pesan_err(obj.pesan));
                        }
                    }
            });
            return false;
        });
		 
		$( document ).ready(function() {
            refresh_topik();
            $('#table-soal').DataTable({
                  "paging": true,
                  "iDisplayLength":10,
                  "bProcessing": false,
                  "bServerSide": true, 
                  "searching": true,
                  "aoColumns": [
                        {"bSearchable": false, "bSortable": false, "sWidth":"20px"},
                        {"bSearchable": false, "bSortable": false},
                        {"bSearchable": false, "bSortable": false, "sWidth":"50px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"50px"}],
                  "sAjaxSource": "<?php echo site_url().'/'.$url; ?>/get_datatable/",
                  "autoWidth": false,
                  "fnServerParams": function ( aoData ) {
                    aoData.push( { "name": "topik", "value": $('#topik').val()} );
                  }
            });

            $('#table-image').DataTable({
                  "bPaginate": false,
                  "bProcessing": false,
                  "bServerSide": true, 
                  "searching": false,
                  "aoColumns": [
                        {"bSearchable": false, "bSortable": false, "sWidth":"20px"},
                        {"bSearchable": false, "bSortable": false},
                        {"bSearchable": false, "bSortable": false, "sWidth":"100px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"90px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"50px"}],
                  "sAjaxSource": "<?php echo site_url().'/'.$url; ?>/get_datatable_image/",
                  "autoWidth": false,
                  "fnServerParams": function ( aoData ) {
                    aoData.push( { "name": "topik", "value": $('#topik').val()} );
                  }
            });

            CKEDITOR.replace('tambah_soal');

            <?php if(!empty($data_soal)){ echo $data_soal; } ?>
		});
    });

    
    $('#tambah-nama-peserta').on('click',function() {
        alert($(this).val());
    console.log($(this).val());
    });

    // $('.selectpicker').change(function () {
    //     var selectedItem = $('.selectpicker').val();
    //     alert(selectedItem);
    // })

    $('#tambah-nama-peserta').change(function () {
        var selectedItem = $('#tambah-nama-peserta').val();       
        // var selectedItems = $('.selectpicker').id();
        // alert($(this).attr("value"))
        // var value = $('.selectpicker').val();

        $('#tambah-nama-peserta-multi').val(selectedItem);
        // $("#userName").val("valuesgoeshere"); 
        // $(".formData").val("valuesgoeshere")
        // document.getElementById("test").innerHTML = "New text!";
        // alert(selectedItem);
    })

    $('#tambah-daftar-tes').change(function () {
        var selectedItems = $('#tambah-daftar-tes').val();       
        $('#tambah-daftar-tes-multi').val(selectedItems);
    })


    $(function(){
        $('#tambah-rentang-waktu').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'YYYY-MM-DD H:mm'});
        // $('#btn-tambah-selesai').click(function(){
        //     window.open("<?php echo site_url(); ?>/manager/tes_tambah", "_self");
        // });

        // $('#btn-tambah-daftar').click(function(){
        //     window.open("<?php echo site_url(); ?>/manager/tes_daftar", "_self");
        // });

        // $("#soal-modul").change(function(){
        //     refresh_topik();
        // });

        // $('#form-tambah').submit(function(){
        //     $("#modal-proses").modal('show');
        //     $.ajax({
        //             url:"<?php echo site_url().'/'.$url; ?>/tambah_tes",
        //             type:"POST",
        //             data:$('#form-tambah').serialize(),
        //             cache: false,
        //             success:function(respon){
                        // var obj = $.parseJSON(respon);
                        // alert("test");
                        // if(obj.status==1){
                            // $('#form-pesan-tes').html('');
                            // $("#tambah-id").val(obj.tes_id);
                            // $("#tambah-nama-lama").val(obj.tes_nama);
                            // menampilkan tambah soal
                            // refresh_topik()
                            // $("#soal-tes-id").val(obj.tes_id);
                            // $('#kolom-soal').removeClass('hide');
                            // $("#modal-proses").modal('hide');
                            
                            // notify_success(obj.pesan);
                        // }else{
                            // $("#modal-proses").modal('hide');
                            // $('#form-pesan-tes').html(pesan_err(obj.pesan));
                        // }
        //             }
        //     });
        //     return false;
        // });

        $('#form-tambah-soal').submit(function(){
            $("#modal-proses").modal('show');
            $.ajax({
                    url:"<?php echo site_url().'/'.$url; ?>/tambah_soal",
                    type:"POST",
                    data:$('#form-tambah-soal').serialize(),
                    cache: false,
                    success:function(respon){
                        var obj = $.parseJSON(respon);
                        if(obj.status==1){
                            $("#modal-proses").modal('hide');
                            $('#form-pesan-soal').html('');
                            refresh_table();                            
                            notify_success(obj.pesan);
                        }else{
                            $("#modal-proses").modal('hide');
                            $('#form-pesan-soal').html(pesan_err(obj.pesan));
                        }
                    }
            });
            return false;
        });

        $('#table-soal').DataTable({
                  "paging": false,
                  "iDisplayLength":10,
                  "bProcessing": false,
                  "bServerSide": true, 
                  "searching": false,
                  "aoColumns": [
    					{"bSearchable": false, "bSortable": false, "sWidth":"20px"},
    					{"bSearchable": false, "bSortable": false},
                        {"bSearchable": false, "bSortable": false, "sWidth":"30px"}],
                  "sAjaxSource": "<?php echo site_url().'/'.$url; ?>/get_datatable_soal/",
                  "autoWidth": false,
                  "fnServerParams": function ( aoData ) {
                    aoData.push( { "name": "tes-id", "value": $('#soal-tes-id').val()} );
                  }
         });  

        <?php if(!empty($data_tes)){ echo $data_tes; } ?>
    });

</script>