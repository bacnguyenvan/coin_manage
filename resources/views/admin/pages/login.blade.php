<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login V5</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="login_assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="login_assets/css/util.css">
		<link rel="stylesheet" type="text/css" href="login_assets/css/main.css">
	</head>
	<body>
		
		<div class="limiter">
			<div class="container-login100" style="background-image: url('login_assets/images/bg-01.jpg');">
				<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
					<form action="" class="login100-form flex-sb flex-w" method="POST">
						@csrf
						<span class="login100-form-title p-b-53">
							Sign In With
						</span>
						<a href="#" class="btn-face m-b-20">
							<i class="fa fa-facebook-official"></i>
							Facebook
						</a>
						<a href="#" class="btn-google m-b-20">
							<img src="login_assets/images/icons/icon-google.png" alt="GOOGLE">
							Google
						</a>
						
						<div class="p-t-31 p-b-9">
							<span class="txt1">
								Email
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Username is required">
							<input value="{{session('email')?session('email'):''}}" class="input100" type="email" name="email" >
							<span class="focus-input100"></span>
						</div>
						
						<div class="p-t-13 p-b-9">
							<span class="txt1">
								Password
							</span>
							<a href="#" class="txt2 bo1 m-l-5">
								Forgot?
							</a>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input class="input100" type="password" name="password" >
							<span class="focus-input100"></span>
						</div>
						@if($errors->any())
							<div class="alert alert-danger w-100 mt-4"> 
								@foreach($errors->all() as $err)
									<li>{{$err}}</li>
								@endforeach
							</div>
						@endif
						@if(!empty($error))
							<div class="alert alert-danger w-100 mt-4"> 
								
									<li>{{$error}}</li>
								
							</div>
						@endif
						<div class="container-login100-form-btn m-t-17">
							<button type="submit" class="login100-form-btn">
							Sign In
							</button>
						</div>
						<div class="w-full text-center p-t-55">
							<span class="txt2">
								Not a member?
							</span>
							<a href="#" class="txt2 bo1">
								Sign up now
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div id="dropDownSelect1"></div>
		
		<script src="login_assets/jquery/jquery-3.2.1.min.js"></script>
		<script src="login_assets/js/main.js"></script>

	</body>
</html>