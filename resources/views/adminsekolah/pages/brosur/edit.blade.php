@extends('adminsekolah.pages.brosur.home')
@section('content')

	<section class="banner mt-165">

		<!-- running text -->
		<div class="container">
			<div class="d-flex justify-content-between">
				<div class="row" style="width: 88% !important;">
					<div id="form_hide" style="width: 100% !important;">
						<marquee behavior="scroll" direction="left" scrollamount="10" class="running-text col-lg-10">
							@foreach (Auth::user()->sekolah->runningtext as $running)
								<span class="running1">
									<img class="img" src="{{ asset('/storage/sekolah/files/'.Auth::user()->sekolah->logo_normal) }}" height="30px">
									<span class="ml-1">{{ $running->text }}</span>
								</span>
							@endforeach
						</marquee>
					</div>
				</div>
				<!-- running text -->
				<div class="btn-running">
					<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide">Hide</button>
					<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show">Show</button>
					<button class="btn btn-success btn-sm" data-target="#modalRunningText" data-toggle="modal">Edit</button>
				</div>
			</div>
		</div>


		<!-- tutup keunggulan popup -->
		<div class="container">
			<div class="row">
				<div id="form_hide2" class="carousel slide carousel-width" data-ride="carousel">
					<div class="carousel-inner">
						@foreach (Auth::user()->sekolah->sekolahslider as $sliderfoto)
							<div class="carousel-item {{ $loop->first ? 'active' : '' }}">
								<div class="big-image">
									<a href="{{ $sliderfoto->link_gambar }}" target="_blank">
										<img src="{{ asset('storage/sekolah/slider/'.$sliderfoto->foto) }}">
									</a>
								</div>
							</div>
						@endforeach
						{{-- @foreach (Auth::user()->sekolah->sekolahslider as $sliders)
							<div class="carousel-item ">
								<div class="big-image">
									<img src="{{ $sliders->link_gambar }}">
								</div>
							</div>
						@endforeach --}}
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<div class="list-image" id="form_hide3">
					@foreach (Auth::user()->sekolah->sekolahfoto as $fotos)
						<a class="position-relative" data-toggle="modal" data-target="#showGallery">
							<img  src="{{ asset('storage/sekolah/foto/'.$fotos->foto) }}" alt="Gallery">
						</a>
					@endforeach
				</div>
			</div>
			<div class="d-flex justify-content-between mt-2 ml-n1">
				<span class="">
					<button class="btn btn-outline-secondary btn-sm" id="btn_hide2">Hide</button>
					<button class="btn btn-outline-secondary btn-sm none" id="btn_show2">show</button>
					<button class="btn btn-success btn-sm" data-target="#modalSlider" data-toggle="modal">Edit</button>
				</span>
				<div class="btn-slider">
					<button class="btn btn-outline-secondary btn-sm" id="btn_hide3">Hide</button>
					<button class="btn btn-outline-secondary btn-sm none" id="btn_show3">show</button>
					<button class="btn btn-success btn-sm" data-target="#modalPhoto" data-toggle="modal">Edit</button>
				</div>
			</div>
		</div>
	</section>

	<section class="container mt-5">
		<div class="sekolah-detail pt-3" id="form_hide4">
			<div class="gambar-detail">
				<div class="sekolah-detail-content">
					<img class="img-thumbnail" src="{{ asset('/storage/sekolah/files/'.Auth::user()->sekolah->logo_normal) }}">
				</div>
				<div class="sekolah-detail-content">
					<div class="sekolah-detail-content-title mb-3">
						<h4>{{ Auth::user()->sekolah->nama_sekolah }} <span class="badge badge-success">{{ Auth::user()->sekolah->jenis_sekolah }}</span></h4>
					</div>
					<div class="tag-sekolah mb-3">
						<a class="badge badge-secondary" href="#">{{ Auth::user()->sekolah->jenis_sekolah }}</a>
						{{-- <a class="badge badge-secondary" href="#">Islam</a>
						<a class="badge badge-secondary" href="#">Balita</a> --}}
					</div>
					<div class="lokasi mb-3">
						<i class="fas fa-map-marker-alt"></i>
						<a href="#">{{ Auth::user()->sekolah->alamat }}</a>
					</div>
					<div class="tombol-daftar mb-3">
						<button class="btn btn-success" data-toggle="modal" data-target="#registerSekolah">
							<i class="fas fa-school mr-3"></i>Daftar sekarang
						</button>
						<button class="btn btn-outline-secondary">
							<i class="fas fa-download mr-3" download="logo"></i>Download Brosur
						</button>
					</div>

				</div>
			</div>
			<div class="info-lainnya">
				<div class="info-sekolah">
					<div class="akreditasi mb-3">
						<i class="fas fa-certificate mr-3 text-teal"></i>
						<span>{{ Auth::user()->sekolah->akreditasi }}</span>
					</div>
					<div class="likes mb-3">
						<i class="fas fa-thumbs-up mr-3 text-info"></i>
						<span> 423 likes</span>
					</div>
					<div class="bintang mb-3">
						<i class="fas fa-star mr-3 text-warning"></i>
						<span> 8.8</span>
					</div>
				</div>
				<div class="info-barcode">
					<div class="barcode">
						<img src="{{ url('assets\images\barcode.png') }}" class="d-flex justify-content-center" alt="gambar sekolah">
					</div>
				</div>
			</div>
		</div>
		<span class="">
			<button class="btn btn-outline-secondary btn-sm" id="btn_hide4">Hide</button>
			<button class="btn btn-outline-secondary btn-sm none" id="btn_show4">show</button>
			<button class="btn btn-success btn-sm" data-target="#modalDataSekolah" data-toggle="modal">Edit</button>
		</span>
	</section>

	<div class="container mt-60">
		<div class="row">
			<div class="col-lg-10">
				<section class="">
					<div class="col-lg-12">
						<!-- profile dong -->
						<div class="event-details-content">
							<!-- tab tab -->
							<ul class="nav nav-pills " id="nav-pills">
								<li class="nav-item">
									<a class="nav-link" href="#profile">Profile</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#guru">Guru</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#fasilitas">Fasilitas</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="#eskul">Ekstrakulikuler</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#jadwal">Jadwal</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#prestasi">Prestasi</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#program">Program</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#review">Testimoni</a>
								</li>
							</ul>


							<section class="" id="promo">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">Promo</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide5">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show5">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalPromo" data-toggle="modal">Edit</button>
									</span>
								</div>

								<div class="row" id="form_hide5">
									@foreach (Auth::user()->sekolah->sekolahpromo as $promo)
									<div class="col-md-4">
										<div class="single-post d-flex promo-card border p-1">
											<div class="post-thumb mr-3">
												<a href="#"><img src="{{ asset('storage/sekolah/promo/'.$promo->foto) }}" alt="" width="71px"></a>
											</div>
											<div class="post-content">
												<p>Potongan</p>
												<h5><a href="promo.html">Rp300.000</a></h5>
												<a href="blog-details.html" class="more">Gelombang 1</a>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</section>
							<hr>

							<!-- Section Profile -->
							<section class="event-message" id="profile">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">{{ Auth::user()->sekolah->sekolahpage->page1 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide6">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show6">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalProfile" data-toggle="modal">Edit</button>
									</span>
								</div>
								<div class="" id="form_hide6">
									@foreach (Auth::user()->sekolah->sekolahprofile as $profile)
										<p>{{ $profile->profile }}</p>
									@endforeach
								</div>
								{{-- <p>Al Muhajirin berdiri pada tahun 2000 dan memiliki visi & misi, memiliki
									ekstrakurikuler, memiliki fasilitas yang aman & nyaman, membentuk kepribadian
									yang muslimah dan anak-anak yang bertaqwa.
								</p><br>
								<ul class="event-list">
									<h5>Moto : </h5>
									<li>
										<i class="far fa-check-circle"></i>
										<p>Berani</p>
									</li>
									<li>
										<i class="far fa-check-circle"></i>
										<p>Mandiri</p>
									</li>
									<li>
										<i class="far fa-check-circle"></i>
										<p>Berprestasi dan menjadi anak bertaqwa</p>
									</li>
								</ul><br>

								<p>Belajar Menggunakan Kurikulum Nasional Berbasis Kompetensi (KBK) dengan konsep
									belajar sambil bermain, mengintegrasikan keimanan dan ketahanan dalam konteks
									aktivitas bermain yang menyenangkan melalui alat peraga bermain,
									cerita, dongeng, seni peran, karya wisata <a href="#" class="more">Read more</a>
								</p> --}}
								<br>
							</section>
							<!-- tutup profile -->

							<hr>

							<section class="teachers-page" id="guru">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">{{ Auth::user()->sekolah->sekolahpage->page2 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide7">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show7">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalGuru" data-toggle="modal">Edit</button>
									</span>
								</div>
								<div class="columns teachers-row" id="form_hide7">
									@foreach (Auth::user()->sekolah->sekolahguru as $key=>$guru)
										<div class="col-md-3 col-sm-6">
											<div class="single-teacher text-center">

												<div class="teacher-image">
													<a href="{{ url('admin-sekolah/guru/detail', $guru->id) }}">
														<img src="{{ asset('storage/sekolah/guru/'.$guru->foto) }}" alt="teacher">
													</a>
												</div>
												<div class="teacher-content">
													<h4 class="name"><a href="{{ url('admin-sekolah/guru/detail', $guru->id) }}">{{ $guru->nama_pengajar }}</a></h4>
													<span class="designation">{{ $guru->jabatan }}</span>
												</div>
											</div>
										</div>
										@if($key == 3)
											@break
										@endif
									@endforeach

								</div>
								<div class="mt-30">
									<button class="btn btn-outline-success w-100" data-toggle="modal" data-target="#moreGuru">View More</button>
								</div>
							</section>
							<hr>

							<!-- mulai fasilitas  -->
							<section class="fasilitas" id="fasilitas">
								<!-- fasilitas start -->
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">{{ Auth::user()->sekolah->sekolahpage->page3 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide8">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show8">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalFasilitas"
											data-toggle="modal">Edit</button>
									</span>
								</div>
								<div class="row" id="form_hide8">
									@foreach (Auth::user()->sekolah->sekolahfasilitas as $fasilitas)
									<div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
										{{-- <span><img src="{{ url('assets\images\icon\school.png') }}"></span> --}}
										<span><i class="{{ $fasilitas->icon }} aqua"></i></span>
										<p class="pl-3">{{ $fasilitas->nama_fasilitas }}</p>
									</div>
									@endforeach
								</div>
							</section>
							<hr>

							<!-- Tutup fasilitas -->
							<!-- mulai Ekstra kulikuler -->
							<section class="ekstrakulikuler" id="eskul">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">{{ Auth::user()->sekolah->sekolahpage->page4 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide9">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show9">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalEskul" data-toggle="modal">Edit</button>
									</span>
								</div>
								<div class="eskul d-flex">
									<ul class="event-list w-50" id="form_hide9">
										<div class="row">
											<div class="col-md-4">
												@foreach (Auth::user()->sekolah->sekolahekstra as $sekolahekstra)
													@foreach ($sekolahekstra->ekstradetail as $key=>$ekstra)
														<li>
															<i class="far fa-check-circle"></i>
															<p>{{ $ekstra->nama_ekstrakulikuler }}</p>
														</li>
														@if($key == 1)
															@break
														@endif
													@endforeach
												@endforeach 
											</div>
										</div>
									</ul>
								</div>
							</section>
							<hr>
							<!-- Tutup Ekstrakuliuler -->
							<section class="jadwal" id="jadwal">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">{{ Auth::user()->sekolah->sekolahpage->page5 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide10">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show10">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalJadwal" data-toggle="modal">Edit</button>
									</span>
								</div>
								<p class="pt-20">Di sekolah kami mempunyai jam belajar yang baik dan cukup seimbang
									antara kegiatan anak dan anda sebagai orang tua</p>
									<div class="table-jadwal" id="form_hide10">
										<div class="col-md-6">
											<table class="table table-borderless">
												<thead>
													<tr>
														<th class="time">Hari</th>
														<th class="speakers">Waktu</th>
													</tr>
												</thead>
												<tbody>
													@foreach (Auth::User()->sekolah->sekolahjadwal as $jadwal)
													<tr>
														<td class="speakers">{{ $jadwal->hari }}</td>
														<td class="time">{{ $jadwal->dari_jam }} to {{ $jadwal->sampai_jam }}</td>
													</tr>
													@endforeach
												</tbody>
											</table>
										</div>
									</div>
							</section>
							<!-- tutup jam belajar -->

							<!-- Buka perstasi -->
							<section class="prestasi" id="prestasi">
								<div class="prestasi mt-5">
									<div class="d-flex align-items-center justify-content-between">
										<h5 class="sub-title mb-3 col-lg-9">{{ Auth::user()->sekolah->sekolahpage->page6 }}</h5>
										<span class="btn-biasa">
											<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide11">Hide</button>
											<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show11">Show</button>
											<button class="btn btn-success btn-sm" data-target="#modalPrestasi"
												data-toggle="modal">Edit</button>
										</span>
									</div>
									<ul class="event-list" id="form_hide11">
										@foreach (Auth::user()->sekolah->sekolahprestasi as $prestasi)
											@foreach ($prestasi->prestasidetail as $detail)
												<li>
													<i class="fas fa-trophy text-warning"></i>
													<p class="pt-1">{{ $detail->nama_prestasi }}</p>
												</li>
											@endforeach
										@endforeach
									</ul>
								</div>
							</section>
							<!-- Tutup prestasi -->

							<!-- buka program  keahlian-->
							<section class="program-keahlian mt-5" id="program">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">{{ Auth::user()->sekolah->sekolahpage->page7 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide12">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show12">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalProgram" data-toggle="modal">Edit</button>
									</span>
								</div>
								<p class="mt-10 mb-20">Beberapa program sekolah dari kami, silakan pilih program unggulan kami</p>
								@foreach (Auth::user()->sekolah->sekolahprogram as $program)
									<div class="accordion" id="form_hide12">
										<div class="card rounder">
											<div class="card-header rounder" id="headingOne" style="border:0; background-color: #FFF;">
												<p class="btn-link" data-toggle="collapse" data-target="#keahlianOne" aria-expanded="true"
													aria-controls="keahlianOne">
													{{ $program->nama_program }}</p>
											</div>
											<div id="keahlianOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
												<div class="card-body">
													<table class="table">
														<thead>
															<tr>
																<th class="time">Keterangan</th>
																<th class="speakers">Harga</th>
															</tr>
														</thead>
														<tbody>
															@foreach ($program->deskripsiprogram as $desc)
																@foreach ($desc->biayaprogram as $biaya)
																	<tr>
																		<td class="speakers">{{ $biaya->rincian }}</td>
																		<td class="time">Rp. {{ $biaya->harga }}</td>
																	</tr>
																@endforeach
															@endforeach
															<tr>
																<td class="speakers"><strong>Total</strong></td>
																<td class="time text-danger">Rp. 0</td>
															</tr>
														</tbody>
													</table>
												</div>
												<div class="card-body">
													<h5>Syarat Pendaftaran</h5>
													<div class="eskul d-flex">
														<ul class="event-list w-50">
															@foreach ($program->deskripsiprogram as $desk)
																<li>
																	<i class="far fa-check-circle"></i>
																	<p>{{ $desk->syarat }}</p>
																</li>
															@endforeach
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</section>
							<!-- tutup program -->
							<!-- buka program -->
							{{-- <section class="program-sd mt-5">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">Program Anak-anak</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1">Hide</button>
										<button class="btn btn-success btn-sm" data-target="#modalProgramAnak"
											data-toggle="modal">Edit</button>
									</span>
								</div>
								<p class="pt-20">Beberapa program sekolah dari kami, silakan pilih program unggulan
									kami</p>
								<div class="columns">
									<div class="col-lg-3 col-sm-6">
										<div class="single-library text-center mt-30 rounder">
											<div class="library-image rounder">
												<a href="product-details.html"><img src="{{ url('assets/images/program/fot4.jpg') }}" alt=""></a>
											</div>
											<div class="library-content rounder">
												<h4 class="library-title"><a href="product-details.html">Playgroup</a></h4>
												<span class="price mb-3">Usia 1 - 2 Tahun</span>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6">
										<div class="single-library text-center mt-30 rounder">
											<div class="library-image">
												<a href="product-details.html"><img src="{{ url('assets/images/program/fot3.jpg') }}" alt=""></a>
											</div>
											<div class="library-content">
												<h4 class="library-title"><a href="product-details.html">TK A</a>
												</h4>
												<span class="price mb-3">Usia 3 - 4 tahun</span>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6">
										<div class="single-library text-center mt-30 rounder">
											<div class="library-image">
												<a href="product-details.html"><img src="{{ url('assets/images/program/fot2.jpg') }}" alt=""></a>
											</div>
											<div class="library-content">
												<h4 class="library-title"><a href="product-details.html">TK B</a>
												</h4>
												<span class="price mb-3">Usia 5 - 6 tahun</span>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6">
										<div class="single-library text-center mt-30 rounder">
											<div class="library-image">
												<a href="product-details.html"><img src="{{ url('assets/images/program/fot.jpg') }}" alt=""></a>
											</div>
											<div class="library-content">
												<h4 class="library-title"><a href="product-details.html">TPA</a>
												</h4>
												<span class="price mb-3">Usia 3 - 6 Tahun</span>
											</div>
										</div>
									</div>
								</div>
							</section>


							<!-- buka modal program anak -->
							<div class="modal fade" id="modalProgramAnak" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" contenteditable="true">Program Anak-anak</h5>
											<button class="ml-3 btn btn-outline-success btn-xs">Rename</button>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<p class="mb-2 lead text-dark"><small>Program yang ada pada lembaga pendidikan anda.</small></p>
											<div class="input-group mb-4">
												<input type="text" class="form-control" placeholder="Program 1">
												<div class="input-group-append">
													<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
													<button class="btn btn-outline-secondary" data-target="#subModalProgramAnak"
														data-toggle="modal" data-dismiss="modal" type="button">Deskripsi
														Program</button>
												</div>
											</div>
											<div class="input-group mb-4">
												<input type="text" class="form-control" placeholder="Program 2">
												<div class="input-group-append">
													<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
													<button class="btn btn-outline-secondary" data-target="#subModalProgramAnak"
														data-toggle="modal" data-dismiss="modal" type="button">Deskripsi
														Program</button>
												</div>
											</div>
											<div class="input-group mb-4">
												<input type="text" class="form-control" placeholder="Program 3">
												<div class="input-group-append">
													<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
													<button class="btn btn-outline-secondary" data-target="#subModalProgramAnak"
														data-toggle="modal" data-dismiss="modal" type="button">Deskripsi
														Program</button>
												</div>
											</div>
											<div class="input-group mb-4">
												<input type="text" class="form-control" placeholder="Program 4">
												<div class="input-group-append">
													<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
													<button class="btn btn-outline-secondary" data-target="#subModalProgramAnak"
														data-toggle="modal" data-dismiss="modal" type="button">Deskripsi
														Program</button>
												</div>
											</div>
											<div class="form-group">
												<button class="btn btn-outline-success btn-sm">
													<i class="fas fa-plus mr-2"></i>
													Tambah Program</button>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-success">Save</button>
										</div>
									</div>
								</div>
							</div>
							<!-- tutup modal program --> --}}

							<!-- buka sub modal program anak -->
							<div class="modal fade" id="subModalProgramAnak" role="dialog" tabindex="-1" aria-hidden="true"
								style="overflow: auto">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" contenteditable="true">Deskripsi Program</h5>
											<button class="ml-3 btn btn-outline-success btn-xs">Rename</button>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body p-4">
											<div class="form-group col-4">
												<div class="">
													<label class="upload-img">
														<i class="fas fa-camera"></i>
														<input type="file" />
													</label>
												</div>
												<small class="text-center">Sisipkan Photo</small>
											</div>
											<div class="form-group mb-2">
												<label for="Nama Sekolah" contenteditable="true"><strong>Deskripsi Program ini</strong></label>
												<button class="ml-3 btn btn-outline-success btn-xs">Rename</button>
												<textarea class="form-control" id="syarat" placeholder="Tulis kalimat"></textarea>
											</div>
											<div class="input-group mb-4">
												<input type="text" class="form-control" placeholder="Tulis kolom">
												<div class="input-group-append">
													<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
													<button class="btn btn-outline-success" type="button">
														<i class="fas fa-plus"></i>
													</button>
												</div>
											</div>

											<div class="form-group mb-2">
												<label for="Nama Sekolah" contenteditable="true"><strong>Keunggulan Program</strong></label>
												<button class="ml-3 btn btn-outline-success btn-xs">Rename</button>
												<textarea class="form-control" id="syarat" placeholder="Tulis kalimat"></textarea>
											</div>
											<div class="input-group mb-4">
												<input type="text" class="form-control" placeholder="Tulis kolom">
												<div class="input-group-append">
													<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
													<button class="btn btn-outline-success" type="button">
														<i class="fas fa-plus"></i>
													</button>
												</div>
											</div>

											<div class="form-group mb-2">
												<label for="Nama Sekolah" contenteditable="true"><strong>Yang dipelajari Program
														ini</strong></label>
												<button class="ml-3 btn btn-outline-success btn-xs">Rename</button>
												<textarea class="form-control" id="syarat" placeholder="Tulis kalimat"></textarea>
											</div>
											<div class="input-group mb-4">
												<input type="text" class="form-control" placeholder="Tulis kolom">
												<div class="input-group-append">
													<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
													<button class="btn btn-outline-success" type="button">
														<i class="fas fa-plus"></i>
													</button>
												</div>
											</div>

											<div class="input-group mb-4">
												<input type="text" class="form-control" placeholder="Tulis kolom">
												<div class="input-group-append">
													<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
													<button class="btn btn-outline-success" type="button">
														<i class="fas fa-plus"></i>
													</button>
												</div>
											</div>

											<hr>

											<form class="mt-50">
												<div class="d-flex justify-content-end">
													<div class="form-check form-check-inline">
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
																value="option1"> <strong>Satu Sesi </strong>
														</label>
													</div>
													<div class="form-check form-check-inline">
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
																value="option2"> <strong>Dua Sesi </strong>
														</label>
													</div>
													<div class="form-check form-check-inline ">
														<label class="form-check-label">
															<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
																value="option3"> <strong>Tiga Sesi </strong>
														</label>
													</div>
												</div>
											</form>

											<hr>

											<div class="form-group mb-2">
												<label for="Nama Sekolah" contenteditable="true"><strong>Syarat Pendaftaran</strong></label>
												<button class="ml-3 btn btn-outline-success btn-xs">Rename</button>
												<textarea class="form-control" id="syarat" placeholder="Tulis kalimat"></textarea>
											</div>
											<div class="input-group mb-5">
												<input type="text" class="form-control" placeholder="Tulis kolom">
												<div class="input-group-append">
													<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
													<button class="btn btn-outline-success" type="button">
														<i class="fas fa-plus"></i>
													</button>
												</div>
											</div>

											<label for="Biaya" contenteditable="true"><strong>Biaya</strong></label>
											<button class="ml-3 btn btn-outline-success btn-xs">Rename</button>
											<div class="row">
												<div class="col-md-6">
													<div class="input-group mb-4">
														<input type="text" class="form-control" placeholder="Rincian">
														<div class="input-group-append">
															<button class="btn btn-outline-success" type="button"><i class="fas fa-plus"></i></button>
															<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
														</div>
													</div>
													<div class="input-group mb-4">
														<input type="text" class="form-control" placeholder="Rincian">
														<div class="input-group-append">
															<button class="btn btn-outline-success" type="button"><i class="fas fa-plus"></i></button>
															<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
														</div>
													</div>
													<div class="input-group mb-4">
														<input type="text" class="form-control" placeholder="Rincian">
														<div class="input-group-append">
															<button class="btn btn-outline-success" type="button"><i class="fas fa-plus"></i></button>
															<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
														</div>
													</div>
													<div class="input-group mb-4">
														<input type="text" class="form-control" placeholder="Rincian">
														<div class="input-group-append">
															<button class="btn btn-outline-success" type="button"><i class="fas fa-plus"></i></button>
															<button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
														</div>
													</div>

													<div class="input-group mb-4">
														<input type="text" class="form-control" placeholder="Total">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-group mb-4">
														<input type="text" class="form-control" placeholder="Harga">
														<div class="input-group-append">
															<button class="btn btn-outline-success" type="button"><i class="fas fa-plus"></i></button>
														</div>
													</div>
													<div class="input-group mb-4">
														<input type="text" class="form-control" placeholder="Harga">
														<div class="input-group-append">
															<button class="btn btn-outline-success" type="button"><i class="fas fa-plus"></i></button>
														</div>
													</div>
													<div class="input-group mb-4">
														<input type="text" class="form-control" placeholder="Harga">
														<div class="input-group-append">
															<button class="btn btn-outline-success" type="button"><i class="fas fa-plus"></i></button>
														</div>
													</div>
													<div class="input-group mb-4">
														<input type="text" class="form-control" placeholder="Harga">
														<div class="input-group-append">
															<button class="btn btn-outline-success" type="button"><i class="fas fa-plus"></i></button>
														</div>
													</div>

													<div class="input-group mb-4">
														<input type="text" class="form-control" placeholder="Total Harga">
													</div>
												</div>
											</div>

										</div>
										<div class="modal-footer mb-4">
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-check-input">
													Aktifkan tombol daftar
												</label>
											</div>
											<button class="btn btn-success">Tambah</button>
										</div>
									</div>
								</div>
							</div>
							<!-- tutup sub modal -->

							<!-- list mitra prakerin -->
							<section class="mitra-prakerin">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9" contenteditable="true">{{ Auth::user()->sekolah->sekolahpage->page8 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide13">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show13">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalPrakerin"
											data-toggle="modal">Edit</button>
									</span>
								</div>
								<div id="form_hide13">
									@foreach (Auth::User()->sekolah->sekolahprakerin as $prakerin)
										<p class="pt-20">{{ $prakerin->kalimat_pembuka }}</p>
										@foreach ($prakerin->prakerindetail as $detail)
											<div class="mitra-prakerin d-flex">
												<ul class="event-list">
													<li>
														<i class="far fa-building"></i>
														<p>{{ $detail->nama_perusahaan }}r</p>
													</li>
												</ul>
											</div>
										@endforeach
									@endforeach
								</div>
							</section>
							<!-- tutup list mitra prakein -->
							<hr>
							<!-- list bursa kerja -->
							<section class="bursa-kerja">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9" contenteditable="true">{{ Auth::user()->sekolah->sekolahpage->page9 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide14">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show14">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalBursaKerja"
											data-toggle="modal">Edit</button>
									</span>
								</div>
								<div id="form_hide14">
									@foreach (Auth::User()->sekolah->sekolahbursa as $bursa)
										<p class="pt-20">{{ $bursa->kalimat_pembuka }}</p>
										@foreach ($bursa->bursadetail as $detail)
											<div class="mitra-prakerin d-flex">
												<ul class="event-list">
													<li>
														<i class="far fa-building"></i>
														<p>{{ $detail->nama_perusahaan }}r</p>
													</li>
												</ul>
											</div>
										@endforeach
									@endforeach
								</div>
							</section>

							<!-- tutup list bursa kerja -->
							<!-- buka beasiswa -->
							<section class="beasiswa pt-20">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9" contenteditable="true">{{ Auth::user()->sekolah->sekolahpage->page10 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide15">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show15">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalBeasiswa"
											data-toggle="modal">Edit</button>
									</span>
								</div>
								<p class="mt-10 mb-20">Beasiswa unggulan dari kami, silakan pilih bila anda berminat
								</p>
								<div class="accordion" id="form_hide15">
									@foreach (Auth::user()->sekolah->sekolahbeasiswa as $bea)
										<div class="card rounder">
											<div class="card-header rounder" id="headingOne" style="border:0; background-color: #FFF;">
												<p class="btn-link" data-toggle="collapse" data-target="#beasiswaAkademik" aria-expanded="true"
													aria-controls="beasiswaAkademik">
													{{ $bea->nama_beasiswa }}
												</p>
											</div>
											<div id="beasiswaAkademik" class="collapse" aria-labelledby="headingOne"
												data-parent="#accordionExample">
												<div class="card-body">
													<div class="mb-4">
														<h5 class="mb-2">Kalimat pembuka</h5>
														<p>{{ $bea->kalimat_pembuka}}</p>
													</div>
													<div class="mb-4">
														<h5 class="mb-2">Deskripsi</h5>
														<p>{{ $bea->deskripsi }}</p>
													</div>
													<div class="mb-4">
														<span class="d-flex mb-2">
															<i class="fas fa-building mr-2"></i>
															<h6>{{ $bea->perusahaan_pemberi }}</h6>
														</span>
													</div>
												</div>
												<div class="card-body">
													<h5>Syarat Pendaftaran</h5>
													<div class="eskul d-flex">
														<ul class="event-list">
															@foreach ($bea->beasiswadetail as $detail)
																<li>
																	<i class="far fa-check-circle"></i>
																	<p>{{ $detail->syarat }}</p>
																</li>
															@endforeach
														</ul>
													</div>
												</div>
											</div>
										</div>
									@endforeach
								</div>
							</section>

							<!-- tutup beasiswa -->
							<!-- buka FAQ -->
							<section class="faq-wrapper">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">{{ Auth::user()->sekolah->sekolahpage->page11 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide16">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show16">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalQna" data-toggle="modal">Edit</button>
									</span>
								</div>
								<div class="accordion" id="form_hide16">
									@foreach (Auth::user()->sekolah->sekolahfaq as $faq)
										<div class="card">
											<span class="question">Q:</span>
											<div class="card-header" id="headingOne">
												<a href="#" data-toggle="collapse" data-target="#collapseOne">
													{{ $faq->pertanyaan }}
												</a>
											</div>

											<div id="collapseOne" class="collapse show" data-parent="#accordionExample">
												<div class="card-body">
													<span class="answer">A:</span>
													<p>{{ $faq->jawaban }}</p>
												</div>
											</div>
										</div>
									@endforeach
								</div>
							</section>
							<!-- tutup FAQ -->
							<!-- buka kontak sekolah -->
							<section class="contact-area">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">{{ Auth::user()->sekolah->sekolahpage->page12 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide17">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show17">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalKontak" data-toggle="modal">Edit</button>
									</span>
								</div>
								<div class="container" id="form_hide17">
									<div class="row">
										<div class="col-md-6">
											<div class="single-contact-info mt-30">
												<div class="info-icon">
													<i class="fab fa-whatsapp"></i>
												</div>
												<div class="info-content">
													<h5 class="mb-2">Whatsapp</h5>
													<p><a href="wa.me:+62548254658">{{ Auth::user()->no_whatsapp }}</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="single-contact-info mt-30">
												<div class="info-icon">
													<i class="fas fa-phone"></i>
												</div>
												<div class="info-content">
													<h5 class="mb-2">Phone</h5>
													<p><a href="tel:+62548254658">{{ Auth::user()->sekolah->no_telepon }}</a></p>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="single-contact-info mt-30">
												<div class="info-icon">
													<i class="fas fa-globe"></i>
												</div>
												<div class="info-content">
													<h5 class="mb-2">Website</h5>
													<p><a href="mailto://info@example.com">{{ Auth::user()->sekolah->link_sekolah }}</a>
													</p>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="single-contact-info mt-30">
												<div class="info-icon">
													<i class="far fa-envelope"></i>
												</div>
												<div class="info-content">
													<h5 class="mb-2">Email</h5>
													<p><a href="mailto://info@example.com">{{ Auth::user()->email }}</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>

							<!-- buka sosial media -->
							<section class="ekstrakulikuler pt-20">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">{{ Auth::user()->sekolah->sekolahpage->page13 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide18">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show18">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalSosialMedia"
											data-toggle="modal">Edit</button>
									</span>
								</div>
								<div class="eskul d-flex align-items-center" id="form_hide18">
									@foreach (Auth::user()->sekolah->sekolahsosial as $item)
										<ul class="event-list w-50">
											<li>
												<i class="fab fa-facebook-f"></i>
												<a href="https://facebook.com/{{ $item->facebook }}" target="_blank">{{ $item->facebook }}</a>
											</li>
											<li>
												<i class="fab fa-twitter"></i>
												<a href="https://twitter.com/{{ $item->twitter }}" target="_blank">{{ $item->twitter }}</a>
											</li>
										</ul>
										<ul class="event-list w-50">
											<li>
												<i class="fab fa-instagram"></i>
												<a href="https://instagram.com/{{ $item->instagram }}" class="pt-1" target="_blank">{{ $item->instagram }}</a>
											</li>
											<li>
												<i class="fab fa-youtube"></i>
												<a href="https://youtube.com/{{ $item->youtube }}" target="_blank">{{ $item->youtube }}</a>
											</li>
										</ul>
									@endforeach
								</div>
							</section>

							<!-- tutup sosial media -->

							<!-- Video Video Sekolah ceritanya video video -->
							<section class="pt-20">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">{{ Auth::user()->sekolah->sekolahpage->page14 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide19">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show19">Show</button>
										<button class="btn btn-success btn-sm" data-target="#modalVideo" data-toggle="modal">Edit</button>
									</span>
								</div>
								<div class="row" id="form_hide19">
									@foreach (Auth::user()->sekolah->sekolahvideo as $video)
									<div class="col-lg-3 col-sm-6 ">
										<div class="single-library text-center mt-30 rounder">
											<div class="library-image rounder">
												<iframe class="video-size" src="{{ $video->link }}">
												</iframe>
											</div>
											<div class="video-content">
												<h4 class="video-title"><a href="{{ $video->link }}">{{ $video->link }}</a></h4>
												<span class="video-detail"></span>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</section>

							<!-- modal tag -->
							<div class="modal fade" id="modalTag" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" contenteditable="true">Tag</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="container">
												<div class="row">
													<div class="col-md-8">
														<p>Masukan beberapa Tag yang sesuai dengan kategori
															sekolahmu</p>
														<form>
															<span>
																<a href="#" class="badge badge-success">TK Islam <i class="fas fa-delete ml-3"></i></a>
															</span>
															<span>
																<a href="#" class="badge badge-success">Islam
																	Terpadu<i class="fas fa-delete ml-3"></i></a>
															</span>
															<span>
																<a href="#" class="badge badge-success">Taman
																	kanak-kanak <i class="fas fa-delete ml-3"></i></a>
															</span>
															<span>
																<a href="#" class="badge badge-success badge-lg">TK
																	IT<i class="fas fa-delete ml-3"></i></a>
															</span>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- tutup modal tag -->

							<!-- Tutup video sekolah  -->
							<!-- mulai berita / News / Blog -->
							<section class="berita-sekolah">
								<div class="d-flex align-items-center justify-content-between">
									<h5 class="sub-title mb-3 col-lg-9">{{ Auth::user()->sekolah->sekolahpage->page15 }}</h5>
									<span class="btn-biasa">
										<button class="btn btn-outline-secondary btn-sm mr-1" id="btn_hide20">Hide</button>
										<button class="btn btn-outline-secondary btn-sm mr-1 none" id="btn_show20">Show</button>
										<button class="btn btn-success" data-toggle="modal" data-target="#modalBerita">Edit</button>
									</span>
								</div>
								<div class="columns" id="form_hide20">
									@foreach (Auth::user()->sekolah->sekolahberita as $berita)
										<div class="col-lg-3 col-md-6">
											<div class="single-blog mt-30">
												<div class="blog-image">
													<a href="blog-details.html">
														<img src="{{ asset('storage/sekolah/berita/', $berita->foto) }}" alt="blog">
													</a>
												</div>
												<div class="blog-content">
													<ul class="meta">
														<li><a href="#">25 May, 2020</a></li>

													</ul>
													<h4 class="blog-title"><a href="blog-details.html">{{ $berita->judul }}</a></h4>
													<a href="blog-details.html" class="more">Read more <i class="fal fa-chevron-right"></i></a>
												</div>
											</div>
										</div>
									@endforeach
								</div>
								<ul class="pagination-items text-center">
									<li><a class="active" href="#">01</a></li>
									<li><a href="#">02</a></li>
									<li><a href="#">03</a></li>
									<li><a href="#">04</a></li>
									<li><a href="#">05</a></li>
								</ul>

							</section>
							<!-- Tutup berita / News / Blog -->
							<!-- Mulai Testimmoni -->
							<section class="blog-details-content testimoni" id="review">
								<div class="blog-comment">
									<div class="d-flex align-items-center justify-content-between">
										<h5 class="sub-title mb-3 col-lg-9">Testimoni</h5>
									</div>
									<ul class="comment-items">
										<li>
											<div class="single-comment">
												<div class="comment-author">
													<img src="{{ url('assets\images\author-1.jpg') }}" alt="">
												</div>
												<div class="comment-content">
													<div class="meta">
														<h5 class="name">Alex Smith,</h5>
														<span class="time">Alumni tahun 2017</span>
													</div>
													<div class="d-flex pt-1">
														<ul class="star d-flex">
															<p><i class="fas fa-star" style="color: #ffc107;"></i>
															</p>
															<p class="ml-2 font-weight-bold">8.8</p>
															<p class="ml-2 font-weight-bold"> (sangat baik)</p>
														</ul>
													</div>
													<p>Some of the people may be the right If you are going use a
														passage belongs to those who fail in their duty through
														weakness </p>
												</div>
											</div>
										</li>
										<li>
											<div class="single-comment">
												<div class="comment-author">
													<img src="{{ url('assets\images\author-3.jpg') }}" alt="">
												</div>
												<div class="comment-content">
													<div class="meta">
														<h5 class="name">Nunung Nuhayati,</h5>
														<span class="time">Pegawai Bank</span>
													</div>
													<div class="d-flex pt-1">
														<ul class="star d-flex">
															<p><i class="fas fa-star" style="color: #ffc107;"></i>
															</p>
															<p class="ml-2 font-weight-bold">8.8</p>
															<p class="ml-2 font-weight-bold"> (sangat baik)</p>
														</ul>
													</div>
													<p>Mantap lah pokok na maah, sekolah dengan kualitas yang baik
														serta pengerjaan dengan baik</p>
												</div>
											</div>
										</li>
									</ul>
									<!-- coment -->

								</div>
								<!-- Tutup Testimoni -->
								<!-- Mulai section review + Rating + Comment -->
								<!-- tutup section Review -->
							</section>

						</div>
					</div>
				</section>
			</div>
			<!-- promo samping kanan -->
		</div>
		<!-- review disini section baru -->
		<!-- buka review -->
		<div class="blog-details-content testimoni">
			<div class="d-flex align-items-center justify-content-between">
				<h5 class="sub-title mb-3 col-lg-9 ">Rating </h5>
			</div>
			<div class="row">
				<div class="col-md-9">
					<div class="courses-details-tab">
						<div class="courses-reviews">
							<div class="review-wrapper">
								<div class="review-star">
									<div class="single-review">
										<span class="label">Lokasi</span>
										<div class="review-bar">
											<div class="bar-inner rounder" style="width: 80%;"></div>
										</div>
										<span class="value">80</span>
									</div>
									<div class="single-review">
										<span class="label">Fasilitas</span>
										<div class="review-bar">
											<div class="bar-inner rounder" style="width: 70%;"></div>
										</div>
										<span class="value">70</span>
									</div>
									<div class="single-review">
										<span class="label">Pengajar</span>
										<div class="review-bar">
											<div class="bar-inner rounder" style="width: 90%;"></div>
										</div>
										<span class="value">90</span>
									</div>
									<div class="single-review">
										<span class="label">Pembelajaran</span>
										<div class="review-bar">
											<div class="bar-inner rounder" style="width: 90%;"></div>
										</div>
										<span class="value">90</span>
									</div>
									<div class="single-review">
										<span class="label">Kebersihan</span>
										<div class="review-bar">
											<div class="bar-inner rounder" style="width: 90%;"></div>
										</div>
										<span class="value">90</span>
									</div>
									<div class="single-review">
										<span class="label">Keamanan</span>
										<div class="review-bar">
											<div class="bar-inner rounder" style="width: 70%;"></div>
										</div>
										<span class="value">70</span>
									</div>
									<div class="single-review">
										<span class="label">Biaya</span>
										<div class="review-bar">
											<div class="bar-inner rounder" style="width: 80%;"></div>
										</div>
										<span class="value">80</span>
									</div>
								</div>
								<div class="review-point text-center">
									<h1>8.9</h1>
									<p>Sangat Baik</p>
									<p>Berdasarkan dari 100 Review</p>
								</div>

							</div>
							<div class="review-form">
								<div class="review-rating">
									<h5 class="title">Write a Review</h5>

									<ul id='stars'>
										<li class='star' title='Poor' data-value='1'>
											<i class='fas fa-star'></i>
										</li>
										<li class='star' title='Fair' data-value='2'>
											<i class='fas fa-star'></i>
										</li>
										<li class='star' title='Good' data-value='3'>
											<i class='fas fa-star'></i>
										</li>
										<li class='star' title='Excellent' data-value='4'>
											<i class='fas fa-star'></i>
										</li>
										<li class='star' title='WOW!!!' data-value='5'>
											<i class='fas fa-star'></i>
										</li>
									</ul>
								</div>

								<div class="review-form-wrapper">
									<form action="#">
										<div class="row">
											<div class="col-md-6">
												<div class="single-form">
													<input type="text" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="single-form">
													<input type="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-6">
												<div class="single-form">
													<input type="text" placeholder="Phone">
												</div>
											</div>
											<div class="col-md-6">
												<div class="single-form">
													<input type="text" placeholder="Title">
												</div>
											</div>
											<div class="col-md-12">
												<div class="single-form">
													<textarea placeholder="Write here..."></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="single-form">
													<button class="main-btn">Submit now</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="blog-sidebar-post mt-30 rounder bg-light">
						<div class="sidebar-title">
							<h4 class="title">Link sekolah</h4>
						</div>
						<ul class="post-items">
							<li>
								<div class="single-post">

									<div class="post-content">

										<h5><a href="blog-details.html">TK Islam Al Muhajirin</a></h5>
										<a href="blog-details.html" class="more text-dark">Jl. Kelapa Cengkir Raya
											No. 100, Pondok Kelapa
											Duren Sawit Jakarta Timur<i class="fal fa-chevron-right"></i></a>
									</div>
								</div>
							</li>
							<li>
								<div class="single-post">

									<div class="post-content">

										<h5><a href="blog-details.html">TK Islam Al Muhajirin</a></h5>
										<a href="blog-details.html" class="more">Jl. Kelapa Cengkir Raya No. 100,
											Pondok Kelapa
											Duren Sawit Jakarta Timur<i class="fal fa-chevron-right"></i></a>
									</div>
								</div>
							</li>
							<li>
								<div class="single-post">

									<div class="post-content">

										<h5><a href="blog-details.html">TK Islam Al Muhajirin</a></h5>
										<a href="blog-details.html" class="more">Jl. Kelapa Cengkir Raya No. 100,
											Pondok Kelapa
											Duren Sawit Jakarta Timur<i class="fal fa-chevron-right"></i></a>
									</div>
								</div>
							</li>
							<li>
								<div class="single-post">

									<div class="post-content">

										<h5><a href="blog-details.html">TK Islam Al Muhajirin</a></h5>
										<a href="blog-details.html" class="more">Jl. Kelapa Cengkir Raya No. 100,
											Pondok Kelapa
											Duren Sawit Jakarta Timur<i class="fal fa-chevron-right"></i></a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('adminsekolah.pages.brosur.modal')

@endsection