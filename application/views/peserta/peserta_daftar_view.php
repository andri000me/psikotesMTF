<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Peserta
		<small>Daftar peserta, penambahan peserta, pengubahan data peserta, dan penghapusan data peserta</small>
	</h1>
	<ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Peserta</li>
		<li class="active">Daftar Peserta</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
        <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="box-title">Pilih Group</div>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <div class="form-group">
                            <label>Group</label>
                            <div id="data-kelas">
                                <select name="group" id="group" class="form-control input-sm">
                                    <option value="semua">Semua Group</option>
                                    <?php if(!empty($select_group)){ echo $select_group; } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <p>Pilih group terlebih dahulu untuk menampilkan dan menambah data Peserta</p>
                    </div>
                </div>
        </div>

        <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
    						<div class="box-title">Daftar Peserta</div>
    						<div class="box-tools pull-right">
    							<div class="dropdown pull-right">
    								<a style="cursor: pointer;" onclick="tambah()">Tambah Peserta</a>
    							</div>
    						</div>
                    </div><!-- /.box-header -->


                    <div class="box-body">
                        <?php echo form_open($url.'/hapus_daftar_siswa','id="form-hapus"'); ?>
                        <input type="hidden" name="check" id="check" value="0">
                        <table id="table-peserta" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th class="all">Nama</th>
                                    <th>Kelompok</th>
                                    <th class="all">Action</th>
                                    <th class="all"></th>
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
                                </tr>
                            </tbody>
                        </table>  
                        </form>                      
                    </div>
                    <div class="box-footer">
                        <button type="button" id="btn-edit-hapus" class="btn btn-primary" title="Hapus Siswa yang dipilih">Hapus</button>
                        <button type="button" id="btn-edit-pilih" class="btn btn-default pull-right">Pilih Semua</button>
                    </div>
                </div>
        </div>
    </div>

    <div class="modal" id="modal-hapus" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <div id="trx-judul">Hapus Peserta</div>
                </div>
                <div class="modal-body">
                    <div class="row-fluid">
                        <div class="box-body">
                            <strong>Peringatan</strong>
                            Data Siswa yang sudah dipilih akan dihapus, Data Hasil Tes juga akan terhapus.
                            <br /><br />
                            Apakah anda yakin untuk menghapus data Siswa ?
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-hapus" class="btn btn-default pull-left">Hapus</button>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-tambah" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <?php echo form_open($url.'/tambah','id="form-tambah"'); ?>
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 7px;">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <div id="trx-judul" style="size:20px">Tambah Peserta</div>
                </div>
                <div class="modal-body">
                    <div class="row-fluid">
                        <div class="box-body">
                            <div id="form-pesan"></div>
                            <div class="form-group">
                                <label>Username</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" id="tambah-username" name="tambah-username" placeholder="Username Peserta">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="password" class="form-control" id="tambah-password" name="tambah-password" placeholder="Password Peserta">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" id="tambah-nama" name="tambah-nama" placeholder="Nama Lengkap Peserta">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select name="tambah-kelamin" id="tambah-kelamin" class="form-control input-sm">
                                        <option value="1">Laki-Laki</option>
                                        <option value="0">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="text" class="form-control" id="tambah-email" name="tambah-email" placeholder="Email Peserta (Boleh dikosongkan)">
                                </div>
                            </div>

                            <div class="form-group" style="display: none;">
                                <label>Group</label>
                                <select name="tambah-group" id="tambah-group" class="form-control input-sm">
                                    <?php if(!empty($select_group)){ echo $select_group; } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                                    <select name="tambah-pendidikan" id="tambah-pendidikan" class="form-control input-sm">
                                        <option value="1">SMA</option>
                                        <option value="2">SMK</option>
                                        <option value="3">S1</option>
                                        <option value="4">S2</option>
                                        <option value="5">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                    <input type="text" class="form-control" id="tambah-pekerjaan" name="tambah-pekerjaan" placeholder="Pekerjaan">
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
            <div class="modal-content" style="border-radius: 7px;">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <div id="trx-judul">Edit Peserta</div>
                </div>
                <div class="modal-body">
                    <div class="row-fluid">
                        <div class="box-body">
                            <div id="form-pesan-edit"></div>
                            <div class="form-group">
                                <label>Username</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" id="edit-username" name="edit-username" placeholder="Username Peserta">
                                    <input type="hidden" name="edit-id" id="edit-id">
                                    <input type="hidden" name="edit-pilihan" id="edit-pilihan">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="password" class="form-control" id="edit-password" name="edit-password" placeholder="Password Peserta">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" id="edit-nama" name="edit-nama" placeholder="Nama Lengkap Peserta">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select name="edit-kelamin" id="edit-kelamin" class="form-control input-sm">
                                        <option value="1">Laki-Laki</option>
                                        <option value="0">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="text" class="form-control" id="edit-email" name="edit-email" placeholder="Email Peserta (Boleh dikosongkan)">
                                </div>
                            </div>

                            <div class="form-group" style="display: none;">
                                <label>Group</label>
                                <select name="edit-group" id="edit-group" class="form-control input-sm">
                                    <?php if(!empty($select_group)){ echo $select_group; } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
                                    <select name="edit-pendidikan" id="edit-pendidikan" class="form-control input-sm">
                                        <option value="1">SMA</option>
                                        <option value="2">SMK</option>
                                        <option value="3">S1</option>
                                        <option value="4">S2</option>
                                        <option value="5">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <div class="input-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                    <input type="text" class="form-control" id="edit-pekerjaan" name="edit-pekerjaan" placeholder="Pekerjaan">
                                </div>
                            </div>
                            <p>NB : Peserta yang dihapus, maka semua hasil tes akan ikut terhapus !</p>
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
        $('#table-peserta').dataTable().fnReloadAjax();
    }

    function tambah(){
        $('#form-pesan').html('');
        $('#tambah-username').val('');
        $('#tambah-password').val('');
        $('#tambah-nama').val('');
        $('#tambah-email').val('');

        $("#modal-tambah").modal("show");
        $('#tambah-username').focus();
    }

    function edit(id){
        $("#modal-proses").modal('show');
        $.getJSON('<?php echo site_url().'/'.$url; ?>/get_by_id/'+id+'', function(data){
            if(data.data==1){
                $('#edit-id').val(data.id);
                $('#edit-username').val(data.username);
                $('#edit-password').val(data.password);
                $('#edit-nama').val(data.nama);
                $('#edit-email').val(data.email);
                $('#edit-kelamin').val(data.user_kelamin);
                $('#edit-group').val(data.group);
                $('#edit-pendidikan').val(data.pendidikan_terakhir);
                $('#edit-pekerjaan').val(data.pekerjaan);
                
                $("#modal-edit").modal("show");
            }
            $("#modal-proses").modal('hide');
        });
    }

    $(function(){
        $("#group").change(function(){
            refresh_table();
        });

        $('#edit-simpan').click(function(){
            $('#edit-pilihan').val('simpan');
            $('#form-edit').submit();
        });
        $('#edit-hapus').click(function(){
            $('#edit-pilihan').val('hapus');
            $('#form-edit').submit();
        });
        $('#btn-edit-pilih').click(function(event) {
            if($('#check').val()==0) {
                $(':checkbox').each(function() {
                    this.checked = true;
                });
                $('#check').val('1');
            }else{
                $(':checkbox').each(function() {
                    this.checked = false;
                });
                $('#check').val('0');
            }
        });
        $('#btn-edit-hapus').click(function(){
            $("#modal-hapus").modal('show');
        });
        $('#btn-hapus').click(function(){
            $("#form-hapus").submit();
        });

        $('#form-hapus').submit(function(){
            $("#modal-proses").modal('show');
            $.ajax({
                    url:"<?php echo site_url().'/'.$url; ?>/hapus_daftar_siswa",
                    type:"POST",
                    data:$('#form-hapus').serialize(),
                    cache: false,
                    success:function(respon){
                        var obj = $.parseJSON(respon);
                        if(obj.status==1){
                            refresh_table();
                            $("#modal-proses").modal('hide');
                            $("#modal-hapus").modal('hide');
                            notify_success(obj.pesan);
                            $('#check').val('0');
                        }else{
                            $("#modal-proses").modal('hide');
                            notify_error(obj.pesan);
                        }
                    }
            });
            return false;
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

        $('#table-peserta').DataTable({
                  "paging": true,
                  "iDisplayLength":10,
                  "bProcessing": false,
                  "bServerSide": true, 
                  "searching": true,
                  "aoColumns": [
    					{"bSearchable": false, "bSortable": false, "sWidth":"20px"},
    					{"bSearchable": false, "bSortable": false},
                        {"bSearchable": false, "bSortable": false},
    					{"bSearchable": false, "bSortable": false, "sWidth":"80px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"30px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"20px"}],
                  "sAjaxSource": "<?php echo site_url().'/'.$url; ?>/get_datatable/",
                  "autoWidth": false,
                  "responsive": true,
                  "fnServerParams": function ( aoData ) {
                    aoData.push( { "name": "group", "value": $('#group').val()} );
                  }
         });          
    });
</script>