<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="713 Identity Login" />
    <meta name="author" content="SmartUniversity" />
    <title>Login</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="<?= asset('assets/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="<?= asset('assets/plugins/iconic/css/material-design-iconic-font.min.css') ?>">
    <!-- bootstrap -->
	<link href="<?= asset('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="<?= asset('assets/css/pages/extra_pages.css') ?>">
	<!-- favicon -->
    <link rel="shortcut icon" href="<?= asset('assets/img/favicon.ico') ?>" /> 
</head>
<body>
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
				@csrf
					<span class="login100-form-logo">
						<img src="<?= asset('assets/img/713identity.svg') ?>" style="width:95%;">
						<!--<i class="zmdi zmdi-flower"></i>-->
					</span>
					<span class="login100-form-title p-b-20 p-t-27">
						IDENTITY
					</span>
					<span class="login100-form-title p-b-20 p-td-20">
						Cosmetic Surgery Medspa
					</span>
					
					@if ($errors->has('email'))
						<div class="alert alert-danger">
							<strong>Oh snap ! </strong>{{ $errors->first('email') }}
						</div>
					@endif
					
					@if ($errors->has('password'))
						<div class="alert alert-danger">
							<strong>Oh snap! </strong>{{ $errors->first('password') }}
						</div>
					@endif
					<br/>
					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" id="email" placeholder="Email" name="email" value="{{ old('email') }}" autofocus>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					
						
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Password" id="password"  name="password" >
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					
						
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center p-t-90">
						<!--<a class="txt1" href="{{ route('password.request') }}">
							Forgot Password?
						</a>-->
					</div>
				</form>
			</div>
		</div>
	</div>
    <!-- start js include path -->
    <script src="<?= asset('assets/plugins/jquery/jquery.min.js') ?>" ></script>
    <!-- bootstrap -->
    <script src="<?= asset('assets/plugins/bootstrap/js/bootstrap.min.js') ?>" ></script>
    <script src="<?= asset('assets/js/pages/extra_pages/login.js') ?>" ></script>
    <!-- end js include path -->
</body>
</html>
