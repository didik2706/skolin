<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<!--====== Title ======-->
	<title>Skolin | Cara gampang cari sekolah</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!--====== Favicon Icon ======-->
	<link rel="shortcut icon" href="{{ url('assets\images\fav.png') }}" type="image/png') }}">
	<link rel="stylesheet" href="{{ url('assets/css/vendor/owl.carousel.min.css') }}" />
	<link rel="stylesheet" href="{{ url('assets/css/vendor/owl.theme.default.min.css') }}" />
	<link rel="stylesheet" href="{{ url('assets\css\vendor\plugins.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets\css\style.min.css') }}">
</head>

<body style="background-color: #fff;">
	
    	<!--====== Header Start ======-->
	<header class="header-area">
		<div class="header-top">
			<div class="container">
				<div class="header-top-wrapper d-flex flex-wrap justify-content-sm-between">
					<div class="header-top-left mt-10">
						<ul class="header-meta">
								@if(Auth::guard('useradmin'))
									<li>
										<a href="#">{{ Auth::user()->sekolah->nama_sekolah }}</a>
									</li>
								@else
									<li><a href="#">{{ Auth::user()->nama }}</a></li>
								@endif
						</ul>
					</div>
					<div class="header-top-right mt-10">
						<div class="header-link">
							<a href="{{ url('admin-sekolah/dashboard') }}" class="notice">Dashboard</a>
						</div>
					
					</div>
				</div>
			</div>
		</div>

		<!-- ===== tutup modal daftar murid ===== -->

		@include('includes.navbar')
	</header>
	<!--====== Header Ends ======-->
    <!--====== Top Event detail Start ======-->
    
    @yield('content')

    <!--  tutup review -->
	<!--====== Footer Start ======-->
	<section class="footer-area footer-02 bg_cover mt-30" style="background-image: url({{ url('assets/images/counter-bg.jpg') }});">
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="footer-link mt-45">
							<h4 class="footer-title">Sekolah</h4>
							<ul class="link-list">
								<li><a href="#">Daycare</a></li>
								<li><a href="#">Preschool</a></li>
								<li><a href="#">Taman kanak-kanak</a></li>
								<li><a href="#">Primary</a></li>
								<li><a href="#">SD</a></li>
								<li><a href="#">Secondary</a></li>
								<li><a href="#">SMP</a></li>
								<li><a href="#">SMA</a></li>
								<li><a href="#">SMK</a></li>
								<li><a href="#">Perguruan Tinggi</a></li>
								<li><a href="#">SLB</a></li>
								<li><a href="#">Sekolah Autis</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="footer-link mt-45">
							<h4 class="footer-title">Kursus</h4>
							<ul class="link-list">
								<li><a href="#">Kursus Bahasa</a></li>
								<li><a href="#">Kursus Komputer</a></li>
								<li><a href="#">Kurus Musik</a></li>
								<li><a href="#">Kursus Tari</a></li>
								<li><a href="#">Kursus Desain</a></li>
								<li><a href="#">Kursus Keterampilan</a></li>
								<li><a href="#">Kursus Pengobatan</a></li>
								<li><a href="#">Bimbel</a></li>
								<li><a href="#">Sekolah Bola</a></li>
								<li><a href="#">Sekolah Basket</a></li>
								<li><a href="#">Sekolah Bulutangkis</a></li>
								<li><a href="#">Perguruan Beladiri</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-link mt-45">
							<h4 class="footer-title">Tentang Kami</h4>
							<ul class="link-list">
								<li>
									<h6 class="text-light">Jl. Gandaria IV No. 100, Pasar Rebo Jakarta Timur</h6>
								</li>
								<li>
									<p><a href="tel:+01254659874">+62 838 7597 9773</a></p>
								</li>
								<li>
									<p><a href="mailto://info@example.com">ali_wiras@skolin.id</a></p>
									<p></p>
								</li>
							</ul>
						</div>
						<div class="mt-30">
							<a class="btn btn-success" href="daftar-sekolah1.html">Daftarkan sekolahmu<br><strong
									class="text-light">Gratis</strong></a>
						</div>
					</div>
				</div>
				<div class="footer-widget-wrapper">
					<div class="footer-social">
						<ul class="social">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>
					<div class="footer-menu">
						<ul class="menu">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Beasiswa</a></li>
							<li><a href="#">Magang</a></li>
							<li><a href="#">Payment</a></li>
							<li><a href="#">Privacy & policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container">
				<div class="copyright text-center">
					<p>&copy; Copyright all right reserved by <a href="skolin.id">Skolin</a></p>
				</div>
			</div>
		</div>
	</section>
	<!--====== Footer Ends ======-->
	<!--====== BACK TOP TOP PART START ======-->
	<a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>
	<!--====== BACK TOP TOP PART ENDS ======-->
	<!--====== Start ======-->

	<!-- ====== Ends ======-->
	<!--====== Jquery js ======-->

	<link rel="stylesheet" href="{{ url('css/style.min.css') }}">

	<script src="{{ url('assets/js/vendor/jquery.min.js') }}"></script>
	<script src="{{ url('assets/js/vendor/jquery.dad.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>

	<script>
		$(document).ready(function () {
			$("#drag").dad();
			$("#dragPhoto").dad();
			$("#dragPhoto2").dad();
		})
	</script>
	@include('adminsekolah.pages.brosur.script')
	<script src="{{ url('assets\js\vendor\modernizr-3.7.1.min.js') }}"></script>
	<script src="{{ url('assets/js/vendor/owl.carousel.min.js') }}"></script>
	<script src="{{ url('assets\js\plugin.min.js') }}"></script>
	<script src="{{ url('assets\js\main.js') }}"></script>
	<script src="{{ url('js/script.min.js') }}"></script>

</body>

</html>