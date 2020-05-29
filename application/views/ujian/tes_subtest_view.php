<div class="container">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		<!-- ............. -->
            <small>Silahkan baca instruksi tes berikut dengan seksama</small>
        </h1>
	</section>

	<!-- Main content -->
    <section class="content">
        <?php echo form_open($url.'/mulai_tes','id="form-konfirmasi-tes"  class="form-horizontal"'); ?>
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Instruksi Soal</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="box-body no-padding">
                    <div id="form-pesan"></div>
                    <input type="hidden" name="tes-id" id="tes-id" value="<?php if(!empty($tes_id)){ echo $tes_id; } ?>">
                    <input type="hidden" name="user_id" id="user_id" value="<?php if(!empty($user_id)){ echo $user_id; } ?>">
                    <table class="table table-striped">
                        <tr style="height: 100%; text-align:justify;">
                            <td><?php if(!empty($instruksi)){ echo $instruksi; } ?></td>
                        </tr>
                        <?php if(!empty($tes_token)){ echo $tes_token; } ?>
                  </table>
            </div><!-- /.box-body -->
            <div class="box-body">
                <button type="submit" id="btn-tambah-simpan" class="btn btn-primary pull-right">Kerjakan</button>
            </div>
        </div><!-- /.box -->
        </form>
    </section><!-- /.content -->
</div><!-- /.container -->

<script type="text/javascript">
    $(function () {
        $('#form-konfirmasi-tes').submit(function(){
            $("#modal-proses").modal('show');
            $.ajax({
                    url:"<?php echo site_url().'/'.$url; ?>/mulai_tes",
                    type:"POST",
                    data:$('#form-konfirmasi-tes').serialize(),
                    cache: false,
                    timeout: 60000,
                    success:function(respon){
                        var obj = $.parseJSON(respon);
                        if(obj.status==1){
                            $("#modal-proses").modal('hide');
                            $('#form-pesan').html('');
                            window.open("<?php echo site_url(); ?>/tes_kerjakan/index/"+obj.tes_id, "_self");
                        }else if(obj.status==2){
                            window.open("<?php echo site_url().'/'.$url; ?>/", "_self");
                        }else{
                            $("#modal-proses").modal('hide');
                            $('#form-pesan').html(pesan_err(obj.pesan));
                        }
                    }
            });
            return false;
        });
    });
</script>