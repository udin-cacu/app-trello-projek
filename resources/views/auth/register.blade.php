<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="{{ asset ('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link type="text/css" href="{{ asset ('assets/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link type="text/css" href="{{ asset ('assets/css/theme.css')}}" rel="stylesheet">
	<link type="text/css" href="{{ asset ('assets/images/icons/css/font-awesome.css')}}" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

				<a class="brand" href="index.html">
					Edmin
				</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					
					<ul class="nav pull-right">

						<li><a href="/login">
							Sign in
						</a></li>

						

						<li><a href="#">
							Forgot your password?
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span6 offset3" style="margin-top: 30px;">
					<span class="login100-form-title p-b-45" style="color: white;font-size: 24px;">
						Edmin
					</span>
					@error('username')
					<div class="alert alert-danger" role="alert" align="center" style="padding-top: 0.5rem;padding-bottom: 0.5rem; font-size: 12px;">
						<strong>{{ $message }}</strong>
					</div>
					@enderror
					@error('password')
					<div class="alert alert-danger" role="alert" align="center" style="padding-top: 0.5rem;padding-bottom: 0.5rem; font-size: 12px;">
						<strong>{{ $message }}</strong>
					</div>
					@enderror

					<form class="form-vertical" method="POST" action="{{ route('register') }}">
						@csrf
						<div class="module-head">
							<h3>Sign Up</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
								<div class="controls row-fluid">
									<input id="name" type="text" class="span12 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

									@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="control-group">
								<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
								<div class="controls row-fluid">
									<input id="email" type="email" class="span12 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="control-group">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
								<div class="controls row-fluid">
									<input id="password" type="password" class="span12 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="control-group">
								<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
								<div class="controls row-fluid">
									<input id="password-confirm" type="password" class="span12" name="password_confirmation" required autocomplete="new-password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary">
										{{ __('Register') }}
									</button>
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">


			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>
	<script src="{{ asset ('assets/scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset ('assets/scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset ('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>