    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/plugins/login/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/plugins/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/plugins/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/plugins/login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/plugins/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/plugins/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/plugins/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/plugins/login/css/main.css">
    
<!-- <div class="container">
<section class="content-header">
    <h1>
        Selamat Datang
        <small> di Halaman Login Administrator <?php if(!empty($site_name)){ echo $site_name; } ?></small>
    </h1>
</section>


<section class="content">
    <div class="callout callout-info">
        <h4>Informasi</h4>
        <p>
            Selamat datang di Halaman Login Aplikasi Computer Based-Test. Untuk memulai silahkan melakukan 
            proses Login dengan menggunakan username dan password yang sudah dimiliki.
        </p>
    </div>
    
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Login Operator</h3>
                </div>

                <?php echo form_open('welcome/login','id="form-login" class="form-horizontal"')?>
                    <div class="box-body">
						<div id="form-pesan">
						</div>
						
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Username</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" id="btn-login" class="btn btn-info pull-right" >Login</button>
                    </div>
                </form>
            </div>
        <div class="col-md-3"></div>
    </div>
</section>
</div> -->

   
    

    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url(); ?>public/plugins/login/images/tes.jpg" alt="IMG">
				</div>

				<!-- <form class="login100-form validate-form"> -->
                <?php echo form_open('welcome/login','id="form-login" class="login100-form validate-form"')?>
                    <div id="form-pesan">
						</div>
					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <input class="input100" type="text" name="username" id="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" id="btn-login" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<!-- <div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> -->
				</form>
			</div>
		</div>
    </div>
    
    <div class="modal" id="modal-proses" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
                    Data Sedang diproses...
				</div>
			</div>
		</div>
    </div>


    <script src="<?php echo base_url(); ?>public/plugins/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>public/plugins/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>public/plugins/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>public/plugins/login/vendor/select2/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>public/plugins/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
    <script src="js/main.js"></script>

    
<script type="text/javascript">
    $(function () {
        $('#username').focus();   
        
        $('#btn-login').click(function(){
            $('#form-login').submit();
        });
        
        $('#form-login').submit(function(){
            $("#modal-proses").modal('show');
                $.ajax({
                    url:"<?php echo site_url()?>/manager/welcome/login",
     			    type:"POST",
     			    data:$('#form-login').serialize(),
     			    cache: false,
      		        success:function(respon){
         		    	var obj = $.parseJSON(respon);
      		            if(obj.status==1){
      		                window.open("<?php echo site_url()?>/manager/dashboard","_self");
          		        }else{
                            $('#form-pesan').html(pesan_err(obj.error));
                            $("#modal-proses").modal('hide');
          		        }
         			}
      		});
            
      		return false;
        });    
    });
</script>