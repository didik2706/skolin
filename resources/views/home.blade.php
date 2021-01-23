@extends('layouts.home')

@section('title')
    Cara gampang cari sekolah
@endsection

@section('content')    
    <!--====== Slider Start ======-->
	<section class="slider-area slider-02 slider-active">
		<div class="single-slider d-flex align-items-center bg_cover"
			style="background-image: url(assets/images/slider-2-2.jpg);">
			<div class="container">
				<div class="slider-content slider-content-2">
					<h2 class="title" data-animation="fadeInLeft" data-delay="0.2s">Solusi Mudah Mempromosikan Sekolah</h2>
					<ul class="slider-btn">
						<li><a data-animation="fadeInLeft" data-delay="0.6s" class="main-btn" href="daftar-sekolah2.html">Cari
								Sekolah</a></li>
						<li><a data-animation="fadeInLeft" data-delay="1s" class="main-btn main-btn-2 w-100"
								href="daftar-sekolah1.html">Daftarkan
								Sekolah Anda!</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="single-slider d-flex align-items-center bg_cover"
			style="background-image: url(assets/images/slider-2-3.jpg);">
			<div class="container">
				<div class="slider-content slider-content-2">
					<h2 class="title" data-animation="fadeInLeft" data-delay="0.2s">Cara Mudah Mencari Sekolah</h2>
					<ul class="slider-btn">
						<li><a data-animation="fadeInLeft" data-delay="0.6s" class="main-btn main-btn-2"
								href="daftar-sekolah2.html">Cari Sekolah</a></li>
						<li><a data-animation="fadeInLeft" data-delay="1s" class="main-btn w-100"
								href="daftar-sekolah1.html">Daftarkan
								Sekolah Anda!</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--====== Slider Ends ======-->
	<!--====== Top Course Start ======-->
	<section class="top-courses-area pt-20">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title d-flex">
						<h2 class="sub-title">Rekomendasi <br>sekolah</h2>
						<p class="d-flex justify-content-end align-items-center">
							<a href="{{ url('/rekomendasi') }}">View all</a>
						</p>
					</div>
				</div>
			</div>
			<div class="courses-wrapper wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.3s">
				<div class="columns">
					@foreach ($rekoms as $key=>$sekolah)
						<div class="main-sekolah col-lg-3 col-sm-6 courses-col">
							<div class="single-courses-2 mt-30 rounded shadow">
								<div class="courses-image ">
									<a href="detail-sma.html">
										<img src="{{ asset('/storage/sekolah/files/'.$sekolah->logo_normal) }}" alt="courses" style="height: 220px;">
									</a>
								</div>
								<div class="courses-content rounded font-white ">
									<div class="d-flex justify-content-between">
										<h4 class="courses-title mt-20">
											<a href="detail-sma.html">{{ $sekolah->nama_sekolah }}</a>
										</h4>
										<div class="rating text-center d-flex flex-column mt-20">
											<span class="star">
												<i class="fas fa-star text-warning"></i>
											</span>
											<span>8.9</span>
										</div>
									</div>
									<div class="logo-sekolah">
										<img class="img-thumbnail" src="{{ asset('/storage/sekolah/files/'.$sekolah->logo_normal) }}" style="height: 88px;">
									</div>
									<p class="font-white mt-20">
										<small>{{ $sekolah->alamat }}</small>
									</p>
									<hr class="bg-light">
									<div class="mt-20 d-flex justify-content-between mb-3 footer-link flex-wrap">
										<a class="text-white" href="#">Buka Pendaftaran</a>
										<a class="text-white" href="detail-sma.html">Detail
											<i class="ml-2 fal fa-chevron-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						@if($key == 3)
							@break
						@endif
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!--====== Top Course Ends ======-->
	<!--====== Features Start ======-->
	<div class="features-area-2 ">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title d-flex">
						<h2 class="sub-title">Mengapa Skolin?</h2>
						<p class="d-flex justify-content-end align-items-center"></p>
					</div>
				</div>
			</div>
			<div class="row align-items-center courses-wrapper wow fadeInUpBig mt-30">
				<div class="col-lg-4">
					<div class="features-image-2 ">
						<img class="wow fadeInLeft rounder" data-wow-duration="1s" data-wow-delay="0.3s"
							src="assets\images\features-2.png" alt="Features">
					</div>
				</div>
				<div class="col-lg-8">
					<div class="features-items">
						<div class="features-items-wrapper">
							<div class="single-features-item d-flex align-items-center wow fadeInUpBig" data-wow-duration="1s"
								data-wow-delay="0.2s">
								<div class="item-icon">
									<img src="assets\images\icon\icon-2-1.png" alt="Icon">
								</div>
								<div class="item-content media-body">
									<p>Mudah dalam <br> mencari sekolah</p>
								</div>
							</div>
							<div class="single-features-item d-flex align-items-center wow fadeInUpBig" data-wow-duration="1s"
								data-wow-delay="0.4s">
								<div class="item-icon">
									<img src="assets\images\icon\icon-2-2.png" alt="Icon">
								</div>
								<div class="item-content media-body">
									<p>Info <br>Sekolah terdekat</p>
								</div>
							</div>
							<div class="single-features-item d-flex align-items-center wow fadeInUpBig" data-wow-duration="1s"
								data-wow-delay="0.6s">
								<div class="item-icon">
									<img src="assets\images\icon\icon-2-3.png" alt="Icon">
								</div>
								<div class="item-content media-body">
									<p>Terlengkap & <br>Terupdate</p>
								</div>
							</div>
						</div>
						<div class="features-items-wrapper">
							<div class="single-features-item d-flex align-items-center wow fadeInUpBig" data-wow-duration="1s"
								data-wow-delay="0.2s">
								<div class="item-icon">
									<img src="assets\images\icon\icon-2-5.png" alt="Icon">
								</div>
								<div class="item-content media-body">
									<p>Proses <br>Pendaftaran lebih mudah</p>
								</div>
							</div>
							<div class="single-features-item d-flex align-items-center wow fadeInUpBig" data-wow-duration="1s"
								data-wow-delay="0.6s">
								<div class="item-icon">
									<img src="assets\images\icon\icon-card.png" alt="Icon">
								</div>
								<div class="item-content media-body">
									<p>Pembayaran <br>mudah</p>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex justify-content-center wow fadeInUpBig ">
						<a class="btn-success main-btn text-light" href="daftar-sekolah1.html">Promosikan lembaga pendidikanmu,
							Gratis!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--====== Features Ends ======-->
	<!--====== Online Library Start ======-->
	<section class="online-library-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-8">
					<div class="section-title-2 text-center">
						<h2 class="sub-title">Promo</h2>
						<span class="line"></span>
						<p>Jangan lewatkan beberapa promo menarik untuk anda!</p>
					</div>
				</div>
			</div>
			<div class="online-library-wrapper wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.3s">
				<div class="columns">
					<div class="col-lg-3 col-sm-6">
						<div class="single-library text-center mt-30 rounder">
							<div class="library-image rounder">
								<a href="promo-detail.html"><img src="assets\images\promo\promo.jpg" alt=""></a>
								<span class="discount"> -30%</span>
							</div>
							<div class="library-content rounder">
								<h4 class="library-title"><a href="promo-d.html">Back to School promo</a></h4>
								<span class="price">Mulai dari Rp520K</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-library text-center mt-30 rounder">
							<div class="library-image">
								<a href="promo-detail.html"><img src="assets\images\promo\promo2.jpg" alt=""></a>
								<span class="discount">-30%</span>
							</div>
							<div class="library-content">
								<h4 class="library-title"><a href="pencarian.html">Back to School promo</a></h4>
								<span class="price">Mulai dari Rp520K</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-library text-center mt-30 rounder">
							<div class="library-image">
								<a href="promo-detail.html"><img src="assets\images\promo\promo3.jpg" alt=""></a>
								<span class="discount">-30%</span>
							</div>
							<div class="library-content">
								<h4 class="library-title"><a href="pencarian.html">Back to School promo</a></h4>
								<span class="price">Mulai dari Rp520K</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-library text-center mt-30 rounder">
							<div class="library-image">
								<a href="promo-detail.html"><img src="assets\images\promo\promo.jpg" alt=""></a>
								<span class="discount">-30%</span>
							</div>
							<div class="library-content">
								<h4 class="library-title"><a href="pencarian.html">Back to School promo</a></h4>
								<span class="price">Mulai dari Rp520K</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Online Library Ends ======-->
    <!--====== Testimonial Start ======-->
	<div class="testimonials-wrapper mt-100 wow fadeInUpBig">
		<div class="container mt-20">
			<div class="section-title-2 text-center">
				<h2 class="sub-title">Testimonial</h2>
				<span class="line"></span>
			</div>
			<div id="carouselExampleControls" class="carousel slide draggable" data-ride="carousel">
				<div class="carousel-inner">

					<div class="carousel-item active">
						<div class="testimoni-main" style="padding: 20px">
							<span style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></span>
							<div class="testimoni-content">
								<p class="testimonial_para">Menyajikan informasi Sekolah, lengkap dengan fasilitas sekolah, harga,
									beserta foto info yang sebisa mungkin menggambarkan kondisi sebenarnya. Kami memiliki tim, Agen ,
									yang saat ini mengunjungi, memastikan, dan mengecek
									properti kost satu per satu. Adapun sekolah yang sudah dicek memiliki</p>
							</div>
							<br>
							<div class="testimoni-content">
								<div class="col-sm-12 col-md-12">
									<img src="assets/images/author-3.jpg" class="img-responsive rounded-circle">
									<div class="mt-3 testimonial_text">
										<h4>Ujang Didin Saepudin</h4>
										<p class="testimonial_subtitle pt-2"><span>Orangtua Siswa</span><br>
											<span>Pegawai Negeri Swasta</span>
										</p>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="testimoni-main" style="padding: 20px">
							<span style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></span>
							<div class="testimoni-content">
								<p class="testimonial_para">Menyajikan informasi Sekolah, lengkap dengan fasilitas sekolah, harga,
									beserta foto info yang sebisa mungkin menggambarkan kondisi sebenarnya. Kami memiliki tim, Agen ,
									yang saat ini mengunjungi, memastikan, dan mengecek
									properti kost satu per satu. Adapun sekolah yang sudah dicek memiliki</p>
							</div>
							<br>
							<div class="testimoni-content">
								<div class="col-sm-12 col-md-12">
									<img src="assets/images/author-3.jpg" class="img-responsive rounded-circle">
									<div class="mt-3 testimonial_text">
										<h4>Rahmat Abdidin</h4>
										<p class="testimonial_subtitle pt-2"><span>Orangtua Siswa</span><br>
											<span>Petani Milenial</span>
										</p>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="button-control">
                    <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carouselExampleControls" data-slide="prev"></a>
                    <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carouselExampleControls" data-slide="next"></a>
                </div> -->
			</div>
		</div>
	</div>
	<!--====== Testimonial Ends ======-->
	<!--====== Blog Start ======-->
	<section class="top-courses-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title d-flex">
						<h2 class="sub-title">Lembaga<br>pendidikan unggulan</h2>
						<p class="d-flex justify-content-end align-items-center"><a href="{{ url('lembaga-unggulan') }}">View all</a></p>
					</div>
				</div>
			</div>
			<div class="courses-wrapper wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.3s">
				<div class="columns">
					@foreach ($ungguls as $key=>$sekolah)
						<div class="main-sekolah col-lg-3 col-sm-6 courses-col">
							<div class="single-courses-2 mt-30 rounded shadow">
								<div class="courses-image ">
									<a href="detail-sma.html">
										<img src="{{ asset('/storage/sekolah/files/'.$sekolah->logo_normal) }}" alt="courses" style="height: 220px;">
									</a>
								</div>
								<div class="courses-content rounded font-white ">
									<div class="d-flex justify-content-between">
										<h4 class="courses-title mt-20">
											<a href="detail-sma.html">{{ $sekolah->nama_sekolah }}</a>
										</h4>
										<div class="rating text-center d-flex flex-column mt-20">
											<span class="star">
												<i class="fas fa-star text-warning"></i>
											</span>
											<span>8.9</span>
										</div>
									</div>
									<div class="logo-sekolah">
										<img class="img-thumbnail" src="{{ asset('/storage/sekolah/files/'.$sekolah->logo_normal) }}" style="height: 88px;">
									</div>
									<p class="font-white mt-20">
										<small>{{ $sekolah->alamat }}</small>
									</p>
									<hr class="bg-light">
									<div class="mt-20 d-flex justify-content-between mb-3 footer-link flex-wrap">
										<a class="text-white" href="#">Buka Pendaftaran</a>
										<a class="text-white" href="detail-sma.html">Detail
											<i class="ml-2 fal fa-chevron-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						@if($key == 3)
							@break
						@endif
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- Video Terbaru Start -->
	<section class="online-library-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-8">
					<div class="section-title-2 text-center">
						<h2 class="sub-title">Video terbaru</h2>
						<span class="line"></span>
					</div>
				</div>
			</div>
			<div class="online-library-wrapper" data-wow-duration="1s" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-lg-3 col-sm-6 ">
						<div class="single-library text-center mt-30 rounder">
							<div class="library-image rounder">
								<iframe class="video-size" src="https://www.youtube.com/embed/cUA6lBsk494">
								</iframe>
							</div>
							<div class="video-content">
								<h4 class="video-title"><a href="https://www.youtube.com/watch?v=cUA6lBsk494&t">Pilih SD atau
										MI</a></h4>
								<span class="video-detail">Referensi sekolah untuk anak</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-library text-center mt-30">
							<div class="library-image">
								<iframe class="video-size" src="https://www.youtube.com/embed/NFl99e0kXFo">
								</iframe>
							</div>
							<div class="video-content">
								<h4 class="video-title"><a href="https://www.youtube.com/watch?v=NFl99e0kXFo">7 Madrasah
										Ibtidaiyah</a></h4>
								<span class="video-detail">Referensi sekolah untuk anak</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-library text-center mt-30">
							<div class="library-image">
								<iframe class="video-size" src="https://www.youtube.com/embed/Y1BBLAOLFGE">
								</iframe>
							</div>
							<div class="video-content">
								<h4 class="video-title"><a href="https://www.youtube.com/watch?v=Y1BBLAOLFGE">SD negeri di
										pekayon pasar Rebo</a></h4>
								<span class="video-detail">Referensi sekolah untuk anak</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-library text-center mt-30">
							<div class="library-image">
								<iframe class="video-size" src="https://www.youtube.com/embed/Xz62lfezJC8">
								</iframe>
							</div>
							<div class="video-content">
								<h4 class="video-title"><a href="https://www.youtube.com/watch?v=Xz62lfezJC8">SDIT Al Mughni</a>
								</h4>
								<span class="video-detail">Referensi sekolah untuk anak</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!--====== end Video terbaru ======-->
@endsection