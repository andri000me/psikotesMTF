<div class="container">
	<!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
             Tes : <?php if(!empty($tes_name)){ echo $tes_name; } ?> &nbsp;&nbsp;&nbsp;&nbsp;<!--<i class="fa fa-question-circle" style="font-size:1em;"></i> -->
        </h1>
        <div class="breadcrumb">
            <img src="<?php echo base_url(); ?>public/images/zoom.png" style="cursor: pointer;" height="20" onclick="zoomnormal()" title="Klik ukuran font normal" />&nbsp;&nbsp;
            <img src="<?php echo base_url(); ?>public/images/zoom.png" style="cursor: pointer;" height="26" onclick="zoombesar()" title="Klik ukuran font lebih besar" />
        </div>
    </section>

	<!-- Main content -->
    <section class="content">
    	<div class="row">
        <?php echo form_open('tes_kerjakan/simpan_jawaban','id="form-kerjakan"')?>
            <input type="hidden" name="tes-id" id="tes-id" value="<?php if(!empty($tes_id)){ echo $tes_id; } ?>">
            <input type="hidden" name="tes-user-id" id="tes-user-id" value="<?php if(!empty($tes_user_id)){ echo $tes_user_id; } ?>">
            <input type="hidden" name="tes-soal-id" id="tes-soal-id" value="<?php if(!empty($tes_soal_id)){ echo $tes_soal_id; } ?>">
            <input type="hidden" name="tes-soal-nomor" id="tes-soal-nomor"  value="<?php if(!empty($tes_soal_nomor)){ echo $tes_soal_nomor; } ?>">
            <input type="hidden" name="tes-soal-jml" id="tes-soal-jml" value="<?php if(!empty($tes_soal_jml)){ echo $tes_soal_jml; } ?>">
            <input type="hidden" name="tes-soal-ragu" id="tes-soal-ragu" value="<?php if(!empty($tes_ragu)){ echo $tes_ragu; } ?>">
            <input type="hidden" name="tes-subtest" id="tes-subtest" value="<?php if(!empty($subtes)){ echo $subtes; } ?>">
    		<div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Soal <span id="judul-soal"><?php if(!empty($tes_soal_nomor)){ echo 'ke '.$tes_soal_nomor; } ?></span></h3><span style="font-size: 18px;"><?php echo ' dari '.$tes_soal_jml?></span>
                    <div class="box-tools pull-right">
                        <div class="pull-right">
                            <!-- <div id="sisa-waktu"></div> -->
                            <div style="font-size: 22px; font-weight: bold;" class="pull-right">Reminder : Sisa waktu <span id="time">00:00</span> Menit !!</div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                
                
                <div class="box-body">
                    <div id="isi-tes-soal" style="font-size: 15px;">
                        <?php if(!empty($tes_soal)){ echo $tes_soal; }?>
                        <script type="text/javascript">
                            $("input[id=chk]").change(function() {
                                var max = 2;
                                if ($("input[id=chk]:checked").length == max) {
                                    $("input[id=chk]").attr('disabled', 'disabled');
                                    $("input[id=chk]:checked").removeAttr('disabled');
                                } else {
                                    $("input[id=chk]").removeAttr('disabled');
                                }
                                })

                            var totalGuest = 0;
                            $('div input[type=checkbox]').not(":radio,:submit").on('change', function () {
                            $(this).toggleClass("active");
                            if($(this).hasClass("active")) {
                                totalGuest ++;
                            }
                            else {
                                totalGuest --;
                            }
                            console.log(totalGuest);
                            
                                if(totalGuest >= 2) {
                                $('input[type=checkbox]').not(".active").attr("disabled","disabled");
                            }
                            else {
                                $('input[type=checkbox]').not(".active").removeAttr("disabled");
                            }
                        });
                        </script>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <!-- <button type="button" class="btn btn-default hide" id="btn-sebelumnya">Soal Sebelumnya</button>&nbsp;&nbsp;&nbsp; -->
                    <!-- <div class="btn btn-warning" id="btn-ragu" onclick="ragu()" style="display: none;">
                        <input type="checkbox" style="width:10px;height:10px;" name="btn-ragu-checkbox" id="btn-ragu-checkbox" <?php if(!empty($tes_ragu)){ echo "checked"; } ?> /> Ragu-ragu
                    </div>&nbsp;&nbsp;&nbsp; -->
                    <button type="button" class="btn btn-default" disabled id="btn-selanjutnya">Soal Selanjutnya</button>
                    <button class="btn btn-default pull-right"  disabled id="btn-hentikan">Submit</button>
                </div>
            </div><!-- /.box -->
        </form>
    	</div>
        <div class="row" <?php if($topik_id == 11 || $topik_id == 10 || $topik_id == 12 || $topik_id == 9){ echo 'style="display: none;"';} ?>>
        <!-- <div class="row"> -->
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Soal</h3>
                </div>
                <div class="box-body">
                    <?php if(!empty($tes_daftar_soal)){ echo $tes_daftar_soal; } ?>
                    <p class="help-block">Soal yang sudah dijawab akan berwarna Biru.</p>
                </div>

                <div class="box-footer">
                    <!-- <button class="btn btn-default pull-right" id="btn-hentikan">SUBMIT</button> -->
                </div>
            </div>
        </div>
    </section><!-- /.content -->

    <div class="modal" style="max-height: 100%;overflow-y: auto;" id="modal-hentikan" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <?php echo form_open($url.'/hentikan_tes','id="form-hentikan"'); ?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <div id="trx-judul">Konfirmasi Submit</div>
                </div>
                <div class="modal-body" >
                    <div class="row-fluid">
                        <div class="box-body">
                            <div id="form-pesan"></div>
                            <div class="callout callout-info">
                                <p>Silahkan periksa kembali jawaban Anda, pastikan tidak ada nomor yang terlewat.
								<br />Ketika Anda menekan tombol Submit, maka Anda tidak bisa mengubah jawaban tes Anda.
								</p>
								
                            </div>
                            
                            <div class="form-group" style="display: none;">
                                <label>Nama Tes</label>
                                <input type="hidden" name="hentikan-tes-id" id="hentikan-tes-id" >
                                <input type="hidden" name="hentikan-tes-user-id" id="hentikan-tes-user-id" >
                                <input type="hidden" name="hentikan-tes-subtes" id="hentikan-tes-subtes" >
                                <input type="text" class="form-control" id="hentikan-tes-nama" name="hentikan-tes-nama" readonly>
                            </div>

                            <div class="form-group" style="display: none;">
                                <label>Keterangan Soal</label>
                                <input type="text" class="form-control" id="hentikan-dijawab" name="hentikan-dijawab" readonly>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="hentikan-centang" name="hentikan-centang" value="1"> Centang dan klik tombol Hentikan Tes.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="box-footer">
					<button type="submit" id="tambah-simpan" class="btn btn-primary">Submit</button>
					<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
				</div>
            </div>
        </div>

    </form>
    </div>
</div><!-- /.container -->


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->


<script type="text/javascript">
    history.pushState(null, document.title, location.href);

    window.addEventListener('popstate', function (event)
    {
    history.pushState(null, document.title, location.href);
    
    
    });

    function zoombesar(){
        $('#isi-tes-soal').css("font-size", "140%");
        $('#isi-tes-soal').css("line-height", "140%");
    }

    function zoomnormal(){
        $('#isi-tes-soal').css("font-size", "15px");
        $('#isi-tes-soal').css("line-height", "110%");
    }

    function ragu(){
        $("#modal-proses").modal('show');

        $.ajax({
            url:'<?php echo site_url().'/'.$url; ?>/get_tes_soal_by_tessoal/'+$('#tes-soal-id').val(),
            type:"POST",
            cache: false,
            timeout: 10000,
            success:function(respon){
                var data = $.parseJSON(respon);
                if(data.data==1){
                    // Mengubah nilai ragu-ragu di database
                    if($('#tes-soal-ragu').val()==0){
                        var ragu=1;
                    }else{
                        var ragu=0;
                    }
                    $.ajax({
                            url:'<?php echo site_url().'/'.$url; ?>/update_tes_soal_ragu/'+$('#tes-soal-id').val()+'/'+ragu,
                            type:"POST",
                            cache: false,
                            timeout: 5000,
                            success:function(respon){
                                var data = $.parseJSON(respon);
                                if(data.data==1){
                                    notify_success('Jawaban Ragu-ragu berhasil diubah');
                                }
                            },
                            error: function(xmlhttprequest, textstatus, message) {
                                if(textstatus==="timeout") {
                                    $("#modal-proses").modal('hide');
                                    notify_error("Gagal mengubah Soal, Silahkan Refresh Halaman");
                                }else{
                                    $("#modal-proses").modal('hide');
                                    notify_error(textstatus);
                                }
                            }
                    });

                    // Mengubah warna daftar soal dan checkbox pada tombol ragu-ragu
                    if(data.tessoal_dikerjakan==1){
                        if($('#tes-soal-ragu').val()==0){
                            // Membuat menjadi ragu-ragu
                            $('#btn-soal-'+$('#tes-soal-nomor').val()).removeClass('btn-primary');
                            $('#btn-soal-'+$('#tes-soal-nomor').val()).addClass('btn-warning');
                            $('#btn-ragu-checkbox').prop("checked", true);
                            $('#tes-soal-ragu').val(1);
                        }else{
                            $('#btn-soal-'+$('#tes-soal-nomor').val()).removeClass('btn-warning');
                            $('#btn-soal-'+$('#tes-soal-nomor').val()).addClass('btn-primary');
                            $('#btn-ragu-checkbox').prop("checked", false);
                            $('#tes-soal-ragu').val(0);
                        }
                    }else{
                        if($('#tes-soal-ragu').val()==0){
                            // Membuat menjadi ragu-ragu
                            $('#btn-soal-'+$('#tes-soal-nomor').val()).removeClass('btn-default');
                            $('#btn-soal-'+$('#tes-soal-nomor').val()).addClass('btn-warning');
                            $('#btn-ragu-checkbox').prop("checked", true);
                            $('#tes-soal-ragu').val(1);
                        }else{
                            $('#btn-soal-'+$('#tes-soal-nomor').val()).removeClass('btn-warning');
                            $('#btn-soal-'+$('#tes-soal-nomor').val()).addClass('btn-default');
                            $('#btn-ragu-checkbox').prop("checked", false);
                            $('#tes-soal-ragu').val(0);
                        }
                    }
                }
                $("#modal-proses").modal('hide');
            },
            error: function(xmlhttprequest, textstatus, message) {
                if(textstatus==="timeout") {
                    $("#modal-proses").modal('hide');
                    notify_error("Gagal mengubah soal, Silahkan Refresh Halaman");
                }else{
                    $("#modal-proses").modal('hide');
                    notify_error(textstatus);
                }
            }
        });
    }

    function soal(tessoal_id){
        $("#modal-proses").modal('show');
        
        $.ajax({
            url:'<?php echo site_url().'/'.$url; ?>/get_soal_by_tessoal/'+tessoal_id+'/'+$('#tes-user-id').val(),
            type:"POST",
            cache: false,
            timeout: 10000,
            success:function(respon){
                var data = $.parseJSON(respon);
                if(data.data==1){
                    $('#tes-soal-id').val(data.tes_soal_id);
                    $('#tes-soal-nomor').val(data.tes_soal_nomor);
                    $('#isi-tes-soal').html(data.tes_soal);
                    $('#tes-soal-ragu').val(data.tes_ragu);
                    $('#judul-soal').html('ke '+data.tes_soal_nomor);

                    if(data.tes_ragu==0){
                        // Menghilangkan checkbox ragu-ragu
                        $('#btn-ragu-checkbox').prop("checked", false);
                    }else{
                        // Menambah checkbox ragu-ragu
                        $('#btn-ragu-checkbox').prop("checked", true);
                    }

                    // menghilangkan tombol sebelum jika soal di nomor1
                    // dan menghilangkan tombol selanjutnya jika disoal terakhir
                    var tes_soal_nomor = parseInt($('#tes-soal-nomor').val());
                    var tes_soal_jml = parseInt($('#tes-soal-jml').val());
                    var tes_soal_tujuan = data.tes_soal_nomor;
                    if(data.tessoal_change_time == null){
                        $("#btn-selanjutnya").prop('disabled', true); 
                    }else{
                        $("#btn-selanjutnya").prop('disabled', false); 
                    }
                    // $("#btn-hentikan").prop('disabled', true); 
                    if(tes_soal_tujuan==1){
                        $('#btn-sebelumnya').addClass('hide');
                        $('#btn-selanjutnya').removeClass('hide');
                        $("#btn-hentikan").prop('disabled', true);
                        // $("#btn-selanjutnya").prop('disabled', true);  
                    }else if(tes_soal_tujuan==tes_soal_jml){
                        $('#btn-sebelumnya').removeClass('hide');
                        $('#btn-selanjutnya').addClass('hide');
                        $("#btn-hentikan").prop('disabled', false); 
                        // $("#btn-selanjutnya").prop('disabled', false);
                    }else{
                        $('#btn-sebelumnya').removeClass('hide');
                        $('#btn-selanjutnya').removeClass('hide');
                        $("#btn-hentikan").prop('disabled', true); 
                        // $("#btn-selanjutnya").prop('disabled', true);
                    }

                }else if(data.data==2){
                    window.location.reload();
                }
                $("#modal-proses").modal('hide');
            },
            error: function(xmlhttprequest, textstatus, message) {
                if(textstatus==="timeout") {
                    $("#modal-proses").modal('hide');
                    notify_error("Gagal mengambil Soal, Silahkan Refresh Halaman");
                }else{
                    $("#modal-proses").modal('hide');
                    notify_error(textstatus);
                }
            }
        });
    }

    function audio(status){
        var audio_player_status = $('#audio-player-status').val();
        var audio_player_update = $('#audio-player-update').val();
        if(status==1){
            if(audio_player_update==0){
                $('#audio-player-update').val('1');
                /**
                 * Update status audio jika pemutaran audio dibatasi
                 */
                $.getJSON('<?php echo site_url().'/'.$url; ?>/update_status_audio/'+$('#tes-soal-id').val(), function(data){
                    if(data.data==1){
                        notify_success(data.pesan);
                    }
                });
            }
        }
        
        if(audio_player_status==0){
            $('#audio-player-status').val('1');
            $('#audio-player').trigger('play');
            $('#audio-player-judul').html('Pause');
            $('#audio-player-judul-logo').removeClass('fa-play');
            $('#audio-player-judul-logo').addClass('fa-pause');
        }else{
            $('#audio-player-status').val('0');
            $('#audio-player').trigger('pause');
            $('#audio-player-judul').html('Play');
            $('#audio-player-judul-logo').removeClass('fa-pause');
            $('#audio-player-judul-logo').addClass('fa-play');
        }
    }

    function audio_ended(status){
        if(status==1){
            $('#audio-control').addClass('hide');
        }else{
            $('#audio-player-status').val('0');
            $('#audio-player-judul').html('Play');
            $('#audio-player-judul-logo').removeClass('fa-pause');
            $('#audio-player-judul-logo').addClass('fa-play');
        }
    }

    function jawab(){
        $("#btn-selanjutnya").prop('disabled', false); 
        $('#form-kerjakan').submit();
        
    }



    function hentikan_tes(){
        $("#modal-proses").modal('show');
        $('#hentikan-centang').prop("checked", false);
        $.getJSON('<?php echo site_url().'/'.$url; ?>/get_tes_info/'+$('#tes-id').val(), function(data){
            if(data.data==1){
                $('#hentikan-tes-id').val(data.tes_id);
                $('#hentikan-tes-user-id').val(data.tes_user_id);
                $('#hentikan-tes-nama').val(data.tes_nama);
                $('#hentikan-dijawab').val(data.tes_dijawab+" dijawab. "+data.tes_blum_dijawab+" belum dijawab.");
                $('#hentikan-belum-dijawab').val(data.tes_blum_dijawab);    
                $('#hentikan-tes-subtes').val(data.tesuser_subtes);
                $("#modal-hentikan").modal('show');
            }else{
                window.location.reload();
            }
            $("#modal-proses").modal('hide');
        });
    }

    

    function soal_navigasi(navigasi){
        var tes_soal_nomor = parseInt($('#tes-soal-nomor').val());
        var tes_soal_jml = parseInt($('#tes-soal-jml').val());
        var tes_soal_tujuan = tes_soal_nomor+navigasi;

        if((tes_soal_tujuan>=1 && tes_soal_tujuan<=tes_soal_jml)){
            $('#btn-soal-'+tes_soal_tujuan).trigger('click');
        }
    }

    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = duration;
            }
        }, 1000);
    }

    function hentikan_tes_time_out(){
        $("#modal-proses").modal('show');
        $('#hentikan-centang').prop("checked", false);
        $.getJSON('<?php echo site_url().'/'.$url; ?>/hentikan_tes_time_out/'+$('#tes-id').val(), function(data){
            if(data.data==1){
                notify_error('Waktu sudah habis');
                window.open("<?php echo site_url(); ?>/Tes_subtes/index/"+data.tesuser_subtes+"/"+data.tes_user_id+"/"+data.tes_id, "_self");
                // 
                $("#modal-proses").modal('hide');
                
            }else{
                notify_success('Waktu sudah habis');
                $("#modal-proses").modal('hide');
                window.open("<?php echo site_url(); ?>/tes_dashboard/index/", "_self");
                // window.location.reload();
            }
            $("#modal-proses").modal('hide');
        });
    }

    window.onload = function () {
        // $("#btn-selanjutnya").prop('disabled', true); 
        // $("#btn-hentikan").prop('disabled', true); 

        // var fiveMinutes = 60 * 5,
        // var sisa_detik = <?php if(!empty($detik_berjalan)){ echo $detik_berjalan; } ?>;
        var sisa_detik = 30;
        history.pushState(null, null, '#');
        window.addEventListener('popstate', function(event)
        {
        history.pushState(null, null, '#');
        });

        var lasScore = <?php if(!empty($lastScore)){ echo $lastScore; }else{ echo 0;} ?>;
        var lasSubtest = <?php if(!empty($lastSubtest)){ echo $lastSubtest; }else{ echo 0;} ?>;
        if(lasScore > 0 && lasSubtest == <?php echo $subtes ?>){
            soal(<?php echo $lastScore?>);
            // $("#btn-selanjutnya").prop('disabled', false); 

        }else{
            // $("#btn-selanjutnya").prop('disabled', true); 
        }
        // var fiveMinutes = Math.round(sisa_detik/60),
            // display = document.querySelector('#time');
        // startTimer(fiveMinutes, display);
        // if sisa_detik = null{
        //     location.reload();
        // }
    };

    $(function () {
    
        var sisa_detik = <?php if(!empty($detik_sisa)){ echo $detik_sisa; } ?>;
        setInterval(function() {
            // var sisa_menit = Math.round(sisa_detik/60);
            var sisa_menit = sisa_detik;
            sisa_detik = sisa_detik-1;
            $("#sisa-waktu").html("Sisa Waktu : "+sisa_menit+" menit");
            if(sisa_menit==1200){
                notify_success('Sisa waktu 20 Menit');
            }else if(sisa_menit==600){
                notify_success('Sisa waktu 10 Menit');
            }else if(sisa_menit==600){
                notify_success('Sisa waktu 5 Menit');
            }
            display = document.querySelector('#time');
            startTimer(sisa_menit, display);
            
            if(sisa_detik==0){
                hentikan_tes_time_out();
                // window.location.reload();

                // $.getJSON('<?php echo site_url().'/'.$url; ?>/soal_time_out/'+$('#tes-id').val(), function(data){
                //     if(data.data==1){
                //         notify_success('Waktu Sudah Habis');
                //         window.location.reload();
                //     }else{
                //         notify_success('Waktu Sudah Habis');
                //         window.location.reload();
                //     }
                // });  
            }
        }, 1000);

        $('#btn-sebelumnya').click(function(){
            soal_navigasi(-1);
        });

        $('#btn-selanjutnya').click(function(){
            // $("#btn-selanjutnya").prop('disabled', true); 
            soal_navigasi(1);
        });

        $('#btn-hentikan').click(function(){
            hentikan_tes();
        });
        /**
         * Submit form soal saat sudah menjawab
         */
        $('#form-kerjakan').submit(function(){
            $("#modal-proses").modal('show');
            $.ajax({
                    url:"<?php echo site_url().'/'.$url; ?>/simpan_jawaban",
                    type:"POST",
                    data:$('#form-kerjakan').serialize(),
                    cache: false,
                    timeout: 10000,
                    success:function(respon){
                        var obj = $.parseJSON(respon);
                        if(obj.status==1){
                            $("#modal-proses").modal('hide');
                            notify_success(obj.pesan);
                            $('#btn-soal-'+obj.nomor_soal).removeClass('btn-default');
                            $('#btn-soal-'+obj.nomor_soal).removeClass('btn-warning');
                            $('#btn-soal-'+obj.nomor_soal).addClass('btn-primary');
                            // $("#btn-selanjutnya").prop('disabled', false); 
                            // $("#btn-hentikan").prop('disabled', false); 
                        }else if(obj.status==2){
                            window.location.reload();
                        }else{
                            $("#modal-proses").modal('hide');
                            // notify_error(obj.pesan);
                        }
                    },
                    error: function(xmlhttprequest, textstatus, message) {
                        if(textstatus==="timeout") {
                            $("#modal-proses").modal('hide');
                            notify_error("Gagal menyimpan jawaban, Silahkan Refresh Halaman");
                        }else{
                            $("#modal-proses").modal('hide');
                            notify_error(textstatus);
                        }
                    }
            });
            return false;
        });

        /**
         * Submit form hentikan tes 			$this->template->display_admin($this->kelompok.'/tes_hasil_report_papi', 'Hasil Tes Detail', $data);
         */
        $('#form-hentikan').submit(function(){
            $("#modal-proses").modal('show');
            $.ajax({
                    url:"<?php echo site_url().'/'.$url; ?>/hentikan_tes",
                    type:"POST",
                    data:$('#form-hentikan').serialize(),
                    cache: false,
                    timeout: 10000,
                    success:function(respon){
                        var obj = $.parseJSON(respon);
                        if(obj.status==1){
                            window.location.reload();
                        }else if(obj.status==2){
                            var subTest = obj.tesuser_subtes;
                            var tesUser = obj.tesuser_id;
                            window.open("<?php echo site_url(); ?>/Tes_subtes/index/"+obj.tesuser_subtes+"/"+obj.tesuser_id+"/"+obj.tesuser_tes_id, "_self");
                        }else{
                            $("#modal-proses").modal('hide');
                            notify_error(obj.pesan);
                        }
                    },
                    error: function(xmlhttprequest, textstatus, message) {
                        if(textstatus==="timeout") {
                            $("#modal-proses").modal('hide');
                            notify_error("Gagal menghentikan Tes, Silahkan Refresh Halaman");
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


    $(document).ready(function() {
        var limit = 2;
        
        $('.single-checkbox').on('change', function(evt) {
            if ($('.single-checkbox:checked').length > limit) {
            this.checked = false;
            }
        });
    });

    
    $("input[id=soal-jawaban2]").change(function(){
        var max= 3;
        if( $("input[id=soal-jawaban2]:checked").length == max ){
            $("input[id=soal-jawaban2]").attr('disabled', 'disabled');
            $("input[id=soal-jawaban2]:checked").removeAttr('disabled');
        }else{
            $("input[id=soal-jawaban2]").removeAttr('disabled');
        }
    })


    var totalGuest = 0;
        $('div input[type=checkbox]').not(":radio,:submit").on('change', function () {
        $(this).toggleClass("active");
        if($(this).hasClass("active")) {
            totalGuest ++;
        }
        else {
            totalGuest --;
        }
        console.log(totalGuest);
        
            if(totalGuest >= 2) {
            $('input[type=checkbox]').not(".active").attr("disabled","disabled");
        }
        else {
            $('input[type=checkbox]').not(".active").removeAttr("disabled");
        }
    });

    $("input[id=chk]").change(function() {
                                var max = 2;
                                if ($("input[id=chk]:checked").length == max) {
                                    $("input[id=chk]").attr('disabled', 'disabled');
                                    $("input[id=chk]:checked").removeAttr('disabled');
                                } else {
                                    $("input[id=chk]").removeAttr('disabled');
                                }
                                })

    
</script>


<style>

    @charset "UTF-8";
    @import url(https://fonts.googleapis.com/css?family=Roboto);
    @keyframes ripple {
    0% {
        box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0);
    }
    50% {
        box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0.1);
    }
    100% {
        box-shadow: 0px 0px 0px 15px rgba(0, 0, 0, 0);
    }
    }
    .md-radio {
    margin: 16px 0;
    }
    .md-radio.md-radio-inline {
    display: inline-block;
    }
    .md-radio input[type=radio] {
    display: none;
    }
    .md-radio input[type=radio]:checked + label:before {
    border-color: #39c5c7;
    animation: ripple 0.2s linear forwards;
    }
    .md-radio input[type=radio]:checked + label:after {
    transform: scale(1);
    }
    .md-radio label {
    display: inline-block;
    min-height: 20px;
    position: relative;
    padding: 4px 35px;
    margin-bottom: 0;
    cursor: pointer;
    vertical-align: bottom;
    }
    .md-radio label:before, .md-radio label:after {
    position: absolute;
    content: "";
    border-radius: 50%;
    transition: all 0.3s ease;
    transition-property: transform, border-color;
    }
    .md-radio label:before {
    left: 0;
    top: 0;
    width: 26px;
    height: 26px;
    border: 2px solid rgba(0, 0, 0, 0.54);
    }
    .md-radio label:after {
    top: 6px;
    left: 6px;
    width: 14px;
    height: 14px;
    transform: scale(0);
    background: #36d6d9;
    }

    *, *:before, *:after {
    box-sizing: border-box;
    }

      /* ------------------------------
        Checkbox CSS
        ------------------------------ */
        /* Position setting */
        .check-box {
        position: relative;
        padding-left:50px;
        margin-bottom: 0px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        align-items:center;
        }

        /* Hide the browser's default checkbox */
        .check-box input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .cb-checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 30px;
            width: 30px;
            background-color: #fff;
            border: 1px solid #6c757d;
            border-radius: 3px;
            margin-top: 9px;
            margin-left: 10px;
        }

        /* On mouse-over, add border color */
        .check-box:hover input ~ .cb-checkmark {
            border: 1.5px solid #45b1b3;
        }

        /* When the checkbox is checked, add background and border color */
        .check-box input:checked ~ .cb-checkmark {
            background-color: #36d6d9;
            border: 1.5px solid #39c5c7;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .cb-checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .check-box input:checked ~ .cb-checkmark:after {
            display: block;
        }

        /* Style of checkmark/indicator */
        .check-box .cb-checkmark:after {
            left: 9px;
            top: 1.5px;
            width: 11px;
            height: 20px;
            border: solid #fff;
            border-width: 0 4px 4px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        #checkboxgroup img {
            display: block;
            max-width: 100%;
            height: auto;
            width: 6em;
        }



    .md-radio-big1 {
    margin: 16px 0;
    }
    .md-radio-big1.md-radio-inline {
    display: inline-block;
    }
    .md-radio-big1 input[type=radio] {
    display: none;
    }
    .md-radio-big1 input[type=radio]:checked + label:before {
    border-color: #39c5c7;
    animation: ripple 0.2s linear forwards;
    }
    .md-radio-big1 input[type=radio]:checked + label:after {
    transform: scale(1);
    }
    .md-radio-big1 label {
    display: inline-block;
    min-height: 20px;
    position: relative;
    padding: 4px 35px;
    margin-bottom: 0;
    cursor: pointer;
    vertical-align: bottom;
    }
    .md-radio-big1 label:before, .md-radio-big1 label:after {
    position: absolute;
    content: "";
    border-radius: 50%;
    transition: all 0.3s ease;
    transition-property: transform, border-color;
    }
    .md-radio-big1 label:before {
    left: 0;
    top: 0;
    width: 48px;
    height: 48px;
    border: 2px solid #39c5c7;
    }
    .md-radio-big1 label:after {
    top: 6px;
    left: 6px;
    width: 36px;
    height: 36px;
    transform: scale(0);
    background: #36d6d9;
    }

    /* big 2 */

    .md-radio-big2 {
    margin: 16px 0;
    }
    .md-radio-big2.md-radio-inline {
    display: inline-block;
    }
    .md-radio-big2 input[type=radio] {
    display: none;
    }
    .md-radio-big2 input[type=radio]:checked + label:before {
    border-color: #39c5c7;
    animation: ripple 0.2s linear forwards;
    }
    .md-radio-big2 input[type=radio]:checked + label:after {
    transform: scale(1);
    }
    .md-radio-big2 label {
    display: inline-block;
    min-height: 20px;
    position: relative;
    padding: 4px 35px;
    margin-bottom: 0;
    cursor: pointer;
    vertical-align: bottom;
    }
    .md-radio-big2 label:before, .md-radio-big2 label:after {
    position: absolute;
    content: "";
    border-radius: 50%;
    transition: all 0.3s ease;
    transition-property: transform, border-color;
    }
    .md-radio-big2 label:before {
    left: 0;
    top: 0;
    width: 42px;
    height: 42px;
    border: 2px solid #39c5c7;
    }
    .md-radio-big2 label:after {
    top: 6px;
    left: 6px;
    width: 30px;
    height: 30px;
    transform: scale(0);
    background: #36d6d9;
    }


    /* big 3 */

    .md-radio-big3 {
    margin: 16px 0;
    }
    .md-radio-big3.md-radio-inline {
    display: inline-block;
    }
    .md-radio-big3 input[type=radio] {
    display: none;
    }
    .md-radio-big3 input[type=radio]:checked + label:before {
    border-color: #39c5c7;
    animation: ripple 0.2s linear forwards;
    }
    .md-radio-big3 input[type=radio]:checked + label:after {
    transform: scale(1);
    }
    .md-radio-big3 label {
    display: inline-block;
    min-height: 20px;
    position: relative;
    padding: 4px 35px;
    margin-bottom: 0;
    cursor: pointer;
    vertical-align: bottom;
    }
    .md-radio-big3 label:before, .md-radio-big3 label:after {
    position: absolute;
    content: "";
    border-radius: 50%;
    transition: all 0.3s ease;
    transition-property: transform, border-color;
    }
    .md-radio-big3 label:before {
    left: 0;
    top: 0;
    width: 36px;
    height: 36px;
    border: 2px solid #39c5c7;
    }
    .md-radio-big3 label:after {
    top: 5px;
    left: 5px;
    width: 26px;
    height: 26px;
    transform: scale(0);
    background: #36d6d9;
    }

    /* big 4 */

    .md-radio-big4 {
    margin: 16px 0;
    }
    .md-radio-big4.md-radio-inline {
    display: inline-block;
    }
    .md-radio-big4 input[type=radio] {
    display: none;
    }
    .md-radio-big4 input[type=radio]:checked + label:before {
    border-color: #9b9faa;
    animation: ripple 0.2s linear forwards;
    }
    .md-radio-big4 input[type=radio]:checked + label:after {
    transform: scale(1);
    }
    .md-radio-big4 label {
    display: inline-block;
    min-height: 20px;
    position: relative;
    padding: 4px 35px;
    margin-bottom: 0;
    cursor: pointer;
    vertical-align: bottom;
    }
    .md-radio-big4 label:before, .md-radio-big4 label:after {
    position: absolute;
    content: "";
    border-radius: 50%;
    transition: all 0.3s ease;
    transition-property: transform, border-color;
    }
    .md-radio-big4 label:before {
    left: 0;
    top: 0;
    width: 30px;
    height: 30px;
    border: 2px solid #9b9faa;
    }
    .md-radio-big4 label:after {
    top: 4px;
    left: 4px;
    width: 22px;
    height: 22px;
    transform: scale(0);
    background: #9b9faa;
    }


    /* big 5 */

    .md-radio-big5 {
    margin: 16px 0;
    }
    .md-radio-big5.md-radio-inline {
    display: inline-block;
    }
    .md-radio-big5 input[type=radio] {
    display: none;
    }
    .md-radio-big5 input[type=radio]:checked + label:before {
    border-color: #5f394d;
    animation: ripple 0.2s linear forwards;
    }
    .md-radio-big5 input[type=radio]:checked + label:after {
    transform: scale(1);
    }
    .md-radio-big5 label {
    display: inline-block;
    min-height: 20px;
    position: relative;
    padding: 4px 35px;
    margin-bottom: 0;
    cursor: pointer;
    vertical-align: bottom;
    }
    .md-radio-big5 label:before, .md-radio-big5 label:after {
    position: absolute;
    content: "";
    border-radius: 50%;
    transition: all 0.3s ease;
    transition-property: transform, border-color;
    }
    .md-radio-big5 label:before {
    left: 0;
    top: 0;
    width: 36px;
    height: 36px;
    border: 2px solid #5f394d;
    }
    .md-radio-big5 label:after {
    top: 5px;
    left: 5px;
    width: 26px;
    height: 26px;
    transform: scale(0);
    background: #5f394d;
    }

    /* big 6 */

    .md-radio-big6 {
    margin: 16px 0;
    }
    .md-radio-big6.md-radio-inline {
    display: inline-block;
    }
    .md-radio-big6 input[type=radio] {
    display: none;
    }
    .md-radio-big6 input[type=radio]:checked + label:before {
    border-color: #5f394d;
    animation: ripple 0.2s linear forwards;
    }
    .md-radio-big6 input[type=radio]:checked + label:after {
    transform: scale(1);
    }
    .md-radio-big6 label {
    display: inline-block;
    min-height: 20px;
    position: relative;
    padding: 4px 35px;
    margin-bottom: 0;
    cursor: pointer;
    vertical-align: bottom;
    }
    .md-radio-big6 label:before, .md-radio-big6 label:after {
    position: absolute;
    content: "";
    border-radius: 50%;
    transition: all 0.3s ease;
    transition-property: transform, border-color;
    }
    .md-radio-big6 label:before {
    left: 0;
    top: 0;
    width: 42px;
    height: 42px;
    border: 2px solid #5f394d;
    }
    .md-radio-big6 label:after {
    top: 6px;
    left: 6px;
    width: 30px;
    height: 30px;
    transform: scale(0);
    background: #5f394d;
    }



    /* big 7 */

    .md-radio-big7 {
    margin: 16px 0;
    }
    .md-radio-big7.md-radio-inline {
    display: inline-block;
    }
    .md-radio-big7 input[type=radio] {
    display: none;
    }
    .md-radio-big7 input[type=radio]:checked + label:before {
    border-color: #5f394d;
    animation: ripple 0.2s linear forwards;
    }
    .md-radio-big7 input[type=radio]:checked + label:after {
    transform: scale(1);
    }
    .md-radio-big7 label {
    display: inline-block;
    min-height: 20px;
    position: relative;
    padding: 4px 35px;
    margin-bottom: 0;
    cursor: pointer;
    vertical-align: bottom;
    }
    .md-radio-big7 label:before, .md-radio-big7 label:after {
    position: absolute;
    content: "";
    border-radius: 50%;
    transition: all 0.3s ease;
    transition-property: transform, border-color;
    }
    .md-radio-big7 label:before {
    left: 0;
    top: 0;
    width: 48px;
    height: 48px;
    border: 2px solid #5f394d;
    }
    .md-radio-big7 label:after {
    top: 6px;
    left: 6px;
    width: 36px;
    height: 36px;
    transform: scale(0);
    background: #5f394d;
    }


</style>