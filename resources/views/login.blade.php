@extends('master')
@section("content")


<!DOCTYPE html>
<html lang="en">
<head>
   
</head><!--/head-->

<body>
	
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">

					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="login" method="POST">
							@csrf
							<label for="name">E-Mail:</label>
							<input type="text" placeholder="Enter Email" name="email"/>
							<label for="name">Password:</label>
							<input type="password" placeholder="Enter Password" name="password"/>
							
							<button type="submit" class="btn btn-default">Login</button>
						</form>

					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="register" method="POST">
						@csrf
							<input type="text" placeholder="Userame" name="name"/>
							<input type="email" placeholder="Email Address" name="email"/>
							<input type="password" placeholder="Password" name="password"/>
							<button type="submit" class="btn btn-default" name="login">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	

  
</body>
</html>
@endsection