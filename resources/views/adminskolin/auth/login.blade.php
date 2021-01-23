<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<!--====== Title ======-->
	<title>Skolin | Cara gampang cari sekolah</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="{{ asset('assets\images\fav.png') }}" type="image/png">
	<!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
	<link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}">
	<!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
	<link rel="stylesheet" href="{{ asset('assets\css\vendor\plugins.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets\css\style.min.css') }}">
</head>

<body>

	<div class="wrapper">
		<div class="row no-gutters">
			<div class="col-lg-6 d-flex align-items-center">
				<div class="cover">
					<div class="cover-content my-auto text-center">
						<div class="wow fadeInLeft">
							<h2 class="text-light px-5">Selamat datang di Skolin</h2>
							<p class="text-light lead pt-3">Cara mudah mencari sekolah</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 d-flex align-items-center">
				<div class="login-register-content mt-30 mx-auto wow fadeInUpBig" data-animation="fadeInLeft" data-delay="0.2s">
					<div class="d-flex justify-content-center align-items-center">
						<img class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" src="{{ asset('assets\images\logo.png') }}" height="50px">
						<p class="text-uppercase text-secondary">Login Admin Skolin</p>
					</div>
					<div class="d-flex justify-content-center pl-5 pr-5 mt-2">
                        <p class="text-center w-75"><small>Silakan masuk terlebih dahulu untuk dapat mengeksplore semua fitur dari kami</small>
                        </p>
				</div>
					<div class="login-register-form mt-10 wow fadeInLeft">
						<p>
							<small>
								@if ($errors->any())
								<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
									<ul>
										<li>{{ __('Ups! Ada yang salah.') }}</li>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								@endif
								@if (session('status'))
								<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
									<ul>
										<li>{{ session('status') }}</li>
									</ul>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								@endif
							</small>
						</p>
                        <form class="p-5 w-100" action="{{ url('skolin-panel/login') }}" method="POST">
                            @csrf
							<label for="inputEmail">Email</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">
										<i class="fas fa-user"></i>
									</span>
								</div>
								<input type="email" name="email" class="form-control" placeholder="someone@mail.com" aria-label="input email" aria-describedby="basic-addon1" :value="old('email')" required autofocus>
							</div>
							<label for="inputPassword">Password</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">
										<i class="fas fa-lock"></i>
									</span>
								</div>
								<input type="password" name="password" class="form-control" placeholder="Masukan password anda" aria-label="input password" aria-describedby="basic-addon1" required autocomplete="current-password">
							</div>
							<div class="mt-20 d-flex align-items-center justify-content-between">
                                <button type="submit" class="btn btn-success">Login</button>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
							</div>

							<p class="pt-30">Belum punya akun, daftar sekarang dan jadi bagian dari kami <a href="{{ url('admin-sekolah/register') }}">Daftar</a></p>
							<hr>
							<button type="submit" class="btn btn-danger w-100 mb-3"><i class="fas fa-google"></i>Login dengan
								Google</button>
							<button type="submit" class="btn btn-info w-100"><i class="fas fa-facebook-square"></i>Login dengan
								Facebook</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--====== Jquery js ======-->
	<script src="{{ asset('assets\js\vendor\jquery-3.5.1.min.js') }}"></script>
	<script src="asset('assets\js\vendor\modernizr-3.7.1.min.js') }}"></script>
	<!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
	<script src="{{ asset('assets\js\plugin.min.js') }}"></script>
	<!--====== Main Activation  js ======-->
	<script src="{{ asset('assets\js\main.js') }}"></script>
</body>

</html>