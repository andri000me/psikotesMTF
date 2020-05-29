<?php
    $mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
    $sqlUser = "
                SELECT  cbt_user.user_firstname as name, 
                        cbt_user.user_id as user_id
                FROM    cbt_user
                ORDER BY cbt_user.user_firstname ASC";

                $userName = '';
                $userId = '';
                $countUser = 0;

                if($result = mysqli_query($mysqli, $sqlUser)){
                    while($row = mysqli_fetch_array($result)){
                        $userName = $userName.','.$row['name'];
                        $userId = $userId.','.$row['user_id'];
                    }
                }

    $sqlUserCount = "
                        SELECT  COUNT(cbt_user.user_id) as user_id_count
                        FROM    cbt_user";

                        if($resultCount = mysqli_query($mysqli, $sqlUserCount)){
                            while($rowCount = mysqli_fetch_array($resultCount)){
                                $countUser = $rowCount['user_id_count'];
                            }
                        }
                $tes = $sqlUserCount;
                $checkUserName = explode(",",$userName);
                $checkUserId = explode(",",$userId);

    $sqlTes = "
                SELECT  cbt_tes.tes_nama as tes_nama, 
                        cbt_tes.tes_id as tes_id
                FROM    cbt_tes
                ORDER BY cbt_tes.tes_nama ASC";
                $tesNama = '';
                $tesId = '';
                $countTes = '';

                if($result = mysqli_query($mysqli, $sqlTes)){
                    while($row = mysqli_fetch_array($result)){
                        $tesNama = $tesNama.','.$row['tes_nama'];
                        $tesId = $tesId.','.$row['tes_id'];
                    }
                }

                $checkTesName = explode(",",$tesNama);
                $checkTesId = explode(",",$tesId);

    $sqlTesCount = "
                    SELECT  COUNT(cbt_tes.tes_id) as tes_id_count
                    FROM    cbt_tes";

                    if($tesCount = mysqli_query($mysqli, $sqlTesCount)){
                        while($rowTesCount = mysqli_fetch_array($tesCount)){
                            $countTes = $rowTesCount['tes_id_count'];
                        }
                    }

?>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
</head>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Daftar Tes
		<small>Daftar tes, penambahan group, pengubahan waktu tes, dan penghapusan tes</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo site_url() ?>/"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Daftar Tes</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
        <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
    						<div class="box-title">Daftar Tes</div>
    						<div class="box-tools pull-right">
    							<div class="dropdown pull-right">
    								<a style="cursor: pointer;" onclick="tambah()">Tambah Tes</a>
    							</div>
    						</div>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <table id="table-group" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Tes</th>
                                    <th>Nama Peserta</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Berakhir</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> </td>
                                    <td> </td>
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

    <div class="modal" id="modal-tambah" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <?php echo form_open($url.'/tambah','id="form-tambah"'); ?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <div id="trx-judul">Tambah Test</div>
                </div>
                <div class="modal-body">
                    <div class="row-fluid">
                        <div class="box-body">
                            <div id="form-pesan"></div>
                            <!-- <div class="form-group">
                                <label>Nama Group</label>
                                <input type="text" class="form-control" id="tambah-group" name="tambah-group" placeholder="Nama Group">
                                <p class="help-block">NB : Group digunakan untuk mengelompokkan setiap user</p>
                            </div> -->

                            <div class="form-group">
                                <div>
                                    <label>Nama Kandidat</label>
                                </div>
                                <div>
                                <select  style="width: 250%;" name="tambah-nama-peserta" id="tambah-nama-peserta" class="selectpicker" multiple data-max-options="999" data-live-search="true" style="background-color: #eee; color:black; border-color:#d2d6de;">
                                    <?php

                                        for ($x = 1; $x <= $countUser; $x++) {
                                            echo '<option value="'.$checkUserId[$x].'">'.$checkUserName[$x].'</option>';
                                        }
                                    ?>
                                </select>
                                <input type="hidden" id="tambah-nama-peserta-multi" name="tambah-nama-peserta-multi" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                    <div>
                                        <label>Daftar Tes</label>
                                    </div>
                                    <div>
                                        <select  name="tambah-daftar-tes" id="tambah-daftar-tes" class="selectpicker" multiple data-max-options="999" data-live-search="true" style="background-color: #eee; color:black; border-color:#d2d6de;">
                                            <?php
                                                for ($x = 1; $x <= $countTes; $x++) {
                                                        echo '<option value="'.$checkTesId[$x].'">'.$checkTesName[$x].'</option>';
                                                    }
                                            ?>  
                                        </select>
                                        <input type="hidden" id="tambah-daftar-tes-multi" name="tambah-daftar-tes-multi" value="">
                                    </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <label>Rentang Waktu</label>
                                </div>
                                <div>
                                    <div class="input-group" style="width: 60%;">
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input type="text" style="width: 175% !important;" name="tambah-rentang-waktu" id="tambah-rentang-waktu" class="form-control input-sm" value="<?php if(!empty($rentang_waktu)){ echo $rentang_waktu; } ?>" readonly />
                                    </div>
                                        <p class="help-block">Rentang waktu tes dilaksanakan</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" id="tambah-simpan" class="btn btn-primary">Tambah</button>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>

    </form>
    </div>

    <div class="modal" id="modal-edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <?php echo form_open($url.'/edit','id="form-edit"'); ?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <div id="trx-judul">Edit Jadwal</div>
                </div>
                <div class="modal-body">
                    <div class="row-fluid">
                        <div class="box-body">
                            <div id="form-pesan-edit"></div>
                            <div class="form-group">
                                <div>
                                    <label>Nama Kandidat</label>
                                    <input type="hidden" id="edit-user-id" name="edit-user-id" value="">
                                        <input type="hidden" id="edit-tes-id" name="edit-tes-id" value="">
                                        <input type="hidden" name="edit-pilihan" id="edit-pilihan">
                                        <input type="hidden" id="edit-group-id" name="edit-group-id" value="">
                                </div>
                                <div>
                                <select  style="width: 250%;" name="edit-nama-peserta" id="edit-nama-peserta" class="selectpicker" data-max-options="999" data-live-search="true" style="background-color: #eee; color:black; border-color:#d2d6de;">
                                    <?php

                                        for ($x = 1; $x <= 100; $x++) {
                                            echo '<option value="'.$checkUserId[$x].'">'.$checkUserName[$x].'</option>';
                                        }
                                    ?>
                                </select>
                                <input type="hidden" id="edit-nama-peserta-multi" name="edit-nama-peserta-multi" value="">

                                </div>
                            </div>

                            <div class="form-group">
                                    <div>
                                        <label>Daftar Tes</label>
                                    </div>
                                    <div>
                                        <select  name="edit-daftar-tes" id="edit-daftar-tes" class="selectpicker" data-max-options="999" data-live-search="true" style="background-color: #eee; color:black; border-color:#d2d6de;">
                                            <?php
                                                for ($x = 1; $x <= 100; $x++) {
                                                        echo '<option value="'.$checkTesId[$x].'">'.$checkTesName[$x].'</option>';
                                                    }
                                            ?>  
                                        </select>
                                        <input type="hidden" id="edit-daftar-tes-multi" name="edit-daftar-tes-multi" value="">

                                    </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <label>Rentang Waktu</label>

                                </div>
                                <div>
                                    <div class="input-group" style="width: 60%;">
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input type="text" style="width: 175% !important;" name="edit-rentang-waktu" id="edit-rentang-waktu" class="form-control input-sm" value="<?php if(!empty($rentang_waktu)){ echo $rentang_waktu; } ?>" readonly />
                                    </div>
                                        <p class="help-block">Rentang waktu tes dilaksanakan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="edit-hapus" class="btn btn-default pull-left">Hapus</button>
                    <button type="button" id="edit-simpan" class="btn btn-primary">Simpan</button>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>

    </form>
    </div>
</section><!-- /.content -->



<script lang="javascript">
    function refresh_table(){
        $('#table-group').dataTable().fnReloadAjax();
    }

    function tambah(){
        $('#form-pesan').html('');
        $('#tambah-group').val('');

        $("#modal-tambah").modal("show");
        $('#tambah-group').focus();
    }

    function edit(id,user_id,tes_id){
        $("#modal-edit").modal('show');
        $.getJSON('<?php echo site_url().'/'.$url; ?>/get_by_id/'+id+'', function(data){
            if(data.data==1){
                $('#edit-nama-peserta-multi').val(data.tes_group_user_id);
                $('#edit-rentang-waktu').val(data.tes_group_time);
                $('#edit-daftar-tes-multi').val(data.tes_group_tes_id);

                $('select[name=edit-nama-peserta]').val(data.tes_group_user_id);
                $('select[name=edit-daftar-tes]').val(data.tes_group_tes_id);
                

                $('#edit-user-id').val(user_id);
                $('#edit-tes-id').val(tes_id);
                $('#edit-group-id').val(id);

                $('.selectpicker').selectpicker('refresh')
                
                $("#modal-edit").modal("show");
            }
            $("#modal-proses").modal('hide');
        });
    }

    $(function(){
        $('#edit-simpan').click(function(){
            $('#edit-pilihan').val('simpan');
            $('#form-edit').submit();
        });
        $('#edit-hapus').click(function(){
            $('#edit-pilihan').val('hapus');
            $('#form-edit').submit();
        });

        $('#form-edit').submit(function(){
            $("#modal-proses").modal('show');
            $.ajax({
                    url:"<?php echo site_url().'/'.$url; ?>/edit",
                    type:"POST",
                    data:$('#form-edit').serialize(),
                    cache: false,
                    success:function(respon){
                        var obj = $.parseJSON(respon);
                        if(obj.status==1){
                            refresh_table();
                            $("#modal-proses").modal('hide');
                            $("#modal-edit").modal('hide');
                            notify_success(obj.pesan);
                        }else{
                            $("#modal-proses").modal('hide');
                            $('#form-pesan-edit').html(pesan_err(obj.pesan));
                        }
                    }
            });
            return false;
        });

        $('#form-tambah').submit(function(){
            $("#modal-proses").modal('show');
            $.ajax({
                    url:"<?php echo site_url().'/'.$url; ?>/tambah",
                    type:"POST",
                    data:$('#form-tambah').serialize(),
                    cache: false,
                    success:function(respon){
                        var obj = $.parseJSON(respon);
                        if(obj.status==1){
                            refresh_table();
                            $("#modal-proses").modal('hide');
                            $("#modal-tambah").modal('hide');
                            notify_success(obj.pesan);
                        }else{
                            $("#modal-proses").modal('hide');
                            $('#form-pesan').html(pesan_err(obj.pesan));
                        }
                    }
            });
            return false;
        });

        $('#table-group').DataTable({
                  "paging": true,
                  "iDisplayLength":10,
                  "bProcessing": false,
                  "bServerSide": true, 
                  "searching": true,
                  "aoColumns": [
    					{"bSearchable": false, "bSortable": false, "sWidth":"20px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"20px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"20px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"20px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"20px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"20px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"30px"}],
                  "sAjaxSource": "<?php echo site_url().'/'.$url; ?>/get_datatable/",
                  "autoWidth": false
         });          
    });

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
        $('#edit-rentang-waktu').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'YYYY-MM-DD H:mm'});
    })

    function JavaBlink() {
     var blinks = document.getElementsByTagName('JavaBlink');
     for (var i = blinks.length - 1; i >= 0; i--) {
        var s = blinks[i];
        s.style.visibility = (s.style.visibility === 'visible') ? 'hidden' : 'visible';
     }
     window.setTimeout(JavaBlink, 1000);
  }
  if (document.addEventListener) document.addEventListener("DOMContentLoaded", JavaBlink, false);
  else if (window.addEventListener) window.addEventListener("load", JavaBlink, false);
  else if (window.attachEvent) window.attachEvent("onload", JavaBlink);
  else window.onload = JavaBlink;

</script>


<style type="text/css">
    .dropdown-toggle{
        width: 250% !important;
    }

    .dropdown-menu{
        /* width: 250% !important; */
    }

    .daterangepicker{
        /* width: 100% !important; */
    }

    /* Set the size, colour, font properties for the blinking text */
    .blinkingGreen {
            animation: blinkingText 1s infinite;
            color: #36d6d9;

        }
        
        /* Specifies the animation and transparency for the blinking text */
        @keyframes blinkingText {
   
            0% {
                opacity: 1;
            }
            50% {
                opacity: .7;
            }
            100% {
                opacity: .5;
            }
        }
    .blinkingBlue {
            color: #459dda;

        }
    }

    .blinkingRed {
            color: #459dda;

        }
    }
</style>