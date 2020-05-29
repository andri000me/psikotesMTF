<!-- <div class="container">
    <section class="content-header">
    	<h1>
    		<?php if(!empty($site_name)){ echo $site_name; } ?>
            <small>Ujian Online Berbasis Komputer</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Selamat Datang</li>
        </ol>
	</section>

    <section class="content">
    	<div class="row">
    	<?php echo form_open('welcome/login','id="form-login" class="form-horizontal"')?>
    	</div>
    	<div class="row">
    		<div class="login-box">
    			<div class="login-logo">
        			<b>User Login</b>
      			</div>
      			<div class="login-box-body">
        			<p class="login-box-msg">Masukkan Username dan Password</p>
                <div id="form-pesan"></div>
          			<div class="form-group has-feedback">
            			<input type="text" id="username" autocomplete="off" name="username" class="form-control" placeholder="Username"/>
            			<span class="glyphicon glyphicon-user form-control-feedback"></span>
          			</div>
          		<div class="form-group has-feedback">
            		<input type="password" id="password" autocomplete="off" name="password" class="form-control" placeholder="Password"/>
            		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
          		</div>
          		<div class="row">
		            <div class="col-xs-8">                          
                  <div class="checkbox icheck">
                    <label>
                      <input type="checkbox" id="show-password"> Show Password
                    </label>
                  </div>    
		            </div>
		            <div class="col-xs-4">
		              	<button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
		            </div>
	          	</div>
    		</div>
    	</div>
    </section>
</div> -->

<script type="text/javascript">
    function showpassword(){
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    $(function () {
        $('#username').focus(); 

        $('#show-password').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });  

        $('#show-password').on('ifChanged', function(event){
          showpassword();
        });
        
        $('#form-login').submit(function(){
          $("#modal-proses").modal('show');
            $.ajax({
              url:"<?php echo site_url()?>/welcome/login",
     			    type:"POST",
     			    data:$('#form-login').serialize(),
     			    cache: false,
      		        success:function(respon){
         		    	var obj = $.parseJSON(respon);
      		            if(obj.status==1){
      		                window.open("<?php echo site_url()?>/tes_dashboard","_self");
          		        }else{
                            $('#form-pesan').html(pesan_err(obj.error));
                            $("#modal-proses").modal('hide');
                            $('#usernameAdmin').focus();   
          		        }
         			}
      		});
            
      		return false;
        });    
		});
		

		$(function () {
        // $('#username').focus();   
        
        $('#btn-login-admin').click(function(){
            $('#form-login-admin').submit();
        });
        
        $('#form-login-admin').submit(function(){
            $("#modal-proses").modal('show');
                $.ajax({
                    url:"<?php echo site_url()?>/manager/welcome/login",
     			    type:"POST",
     			    data:$('#form-login-admin').serialize(),
     			    cache: false,
      		        success:function(respon){
         		    	var obj = $.parseJSON(respon);
      		            if(obj.status==1){
      		                window.open("<?php echo site_url()?>/manager/dashboard","_self");
          		        }else{
                            $('#form-pesan-admin').html(pesan_err(obj.error));
                            $("#modal-proses").modal('hide');
          		        }
         			}
      		});
            
      		return false;
        });    
    });
		
</script>

<div style="background: #f6f5f7;
						display: flex;
						justify-content: center;
						align-items: center;
						flex-direction: column;
						font-family: 'Poppins-Regular', sans-serif;
						height: 100vh;
						/* background-image: url('<?php echo base_url(); ?>public/plugins/adminlte/img/background.png');
					  background-repeat: repeat;
  					background-color: #cccccc; */
						width: 500vh;">
<!-- <h2>Weekly Coding Challenge #1: Sign in/up Form</h2> -->
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<!-- <form action="#"> -->
		<?php echo form_open('/manager/welcome/login','id="form-login-admin" class="login100-form validate-form"')?>
			<div id="form-pesan-admin">
			</div>
			<h1>Sign in Admin</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-group"></i></a>
				<a href="#" class="social"><i class="fa fa-bar-chart"></i></a>
				<a href="#" class="social"><i class="fa fa-check"></i></a>
			</div>
			<span>or use your email for registration</span>
			<!-- <input type="text" placeholder="Name" /> -->
			<!-- <input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" /> -->
			<input type="text" name="username-admin" id="username-admin" placeholder="Username">
			<input type="password" name="password-admin" id="password-admin" placeholder="Password">
			<!-- <button>Sign Up</button> -->
			<span>&nbsp;</span>
			<button id="btn-login-admin" type="submit">SIGN IN Admin</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<!-- <form action="#"> -->
		<?php echo form_open('welcome/login','id="form-login" class="form-horizontal"')?>
			<div id="form-pesan">
			</div>
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-clipboard"></i></a>
				<a href="#" class="social"><i class="fa fa-pencil"></i></a>
				<a href="#" class="social"><i class="fa fa-calculator"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" id="username" autocomplete="off" name="username" placeholder="Username"/>
			<input type="password" id="password" autocomplete="off" name="password" placeholder="Password"/>
			<!-- <input type="email" placeholder="Email" /> -->
			<!-- <input type="password" placeholder="Password" /> -->
			<!-- <a href="#">Forgot your password?</a> -->
			<span>&nbsp;</span>
			<!-- <button>Sign In</button> -->
			<button id="btn-login" type="submit">SIGN IN</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<!-- <button class="ghost" id="signIn">Sign In</button> -->
				<div class="admin-container-left">
					<a href="#" id="signIn" class="admin"><i class="fa fa-sign-out"></i></a>
				</div>
			</div>
			<div class="overlay-panel overlay-right">
				<img src="https://www.mtf.co.id/bundle/default/img/logo/mtf-logo.png?v=18525" alt="Mandiri Tunas Finance">
				<!-- <h1>Hello, Friend!</h1> -->
				<p>Enter your personal details and start journey with us</p>
				<!-- <button class="ghost" id="signUp">AdminSite</button> -->
				<div class="admin-container">
					<a href="#" id="signUp" class="admin"><i class="fa fa-sign-in"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="modal" id="modal-proses" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
                    Data Sedang diproses...
				</div>
			</div>
		</div>
    </div> -->
<!-- <footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer> -->
	</div>

<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>

<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	/* font-family: 'Montserrat', sans-serif; */
	font-family: 'Poppins-Regular', sans-serif;
	height: 100vh;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #1f3c78;
	background-color: #1f3c78;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: #1f3c78;
	border-color: #1f3c78;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #f0d353, #facc08);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #1f3c78;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

.admin-container {
	margin: 20px 0;
}

.admin-container a {
		border: 1px solid #fcb716;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
    color: white;
		background-color: #1f3c78;
		margin-top: 15vh;
    margin-left: 20vh;
    position: absolute;
}

.admin-container-left {
	margin: 20px 0;
}

.admin-container-left a {
		border: 1px solid #fcb716;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
    color: white;
		background-color: #1f3c78;
		margin-top: 18vh;
    margin-left: -25vh;
    position: absolute;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
.skin-green .wrapper, .skin-green .main-sidebar, .skin-green .left-side {
    background-color: #f5f4f6;
}
</style>