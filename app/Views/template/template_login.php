
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/plugin/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugin//font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/plugin/ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugin/iCheck/square/blue.css">
  
  <link rel="stylesheet" href="assets/mystyle/style.css" >
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="">
	<div class="row">
		<div class="col-lg gambar_login">
		<!-- Carosel -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
				<div class="item active">
				  <img src="assets/img/photo1.png" height="" alt="..." class="resize">
				  <div class="carousel-caption">
				  <div class="animate-top">
						Login untuk memulai<br>
						Aplikasi.
					</div>
				  </div>
				</div>
				<div class="item">
				  <img src="assets/img/photo2.png" alt="...">
				  <div class="carousel-caption">
				  <div class="animate-bottom">
						Form login custom
						</div>
				  </div>
				</div>
				<div class="item">
				  <img src="assets/img/photo3.jpg" alt="...">
				  <div class="carousel-caption">
					<div class="animate-top">
						caption custom
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<!-- end Carosel -->
		</div>
	</div>
		<div class="row">
		<div class="col-lg-6 col-lg-offset-6 bok_login">
			<div class="login-box">
			  <div class="login-logo">
				<a href="../../index2.html"><b>My Program</b> </br>Custom</a>
			  </div>
			  <!-- /.login-logo -->
			  <div class="login-box-body">
				<p class="login-box-msg">Sign in to start your session</p>
				<form action="../../index2.html" method="post">
				  <div class="form-group has-feedback">
					<input type="email" class="form-control custom_input" placeholder="Email">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				  </div>
				  <div class="form-group has-feedback">
					<input type="password" class="form-control custom_input" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				  </div>
				  <div class="row">
					<div class="col-xs-8">
					  <div class="checkbox icheck">
						<label>
						  <input type="checkbox"> Remember Me
						</label>
					  </div>
					</div>
					<!-- /.col -->
					<div class="col-xs-4">
					  <button type="submit" class="btn btn-primary btn-block custom_input custom_btn" >Sign In</button>
					</div>
					<!-- /.col -->
				  </div>
				</form>

				<div class="social-auth-links text-center">
				  <p>- OR -</p>
				  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
					Facebook</a>
				  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
					Google+</a>
				</div>
				<!-- /.social-auth-links -->

				<a href="#">I forgot my password</a><br>
				<a href="register.html" class="text-center">Register a new membership</a>

			  </div>
			  <!-- /.login-box-body -->
			</div>
			<!-- /.login-box -->
		</div>
	</div>
<!-- jQuery 3 -->
<script src="assets/plugin/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/plugin/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/plugin/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
  
	 $('.carousel').carousel({
		interval: 5000
	})
</script>
</body>
</html>
