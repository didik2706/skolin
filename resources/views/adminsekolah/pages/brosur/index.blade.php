@extends('adminsekolah.layouts.dashboard')
@section('content')
		<!-- end #sidebar -->
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<!-- begin page-header -->
			<div class="breadcrumb pull-right">
				<div class="switcher switcher-success">
					<a class="btn btn-success" href="{{ url('admin-sekolah/edit-brosur') }}">Klik untuk mengedit Info Digital</a>
				</div>
			</div>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Pengaturan tampilan</h1>
			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel p-5">
						<div class="panel-body">

							<div class="form-group row m-b-15 bg-silver p-t-5 align-items-center p-b-5 ">
								<div class="col-form-label col-md-9">
									<h5><strong>Running Teks</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="runningteks" id="runningteks" value="0">
										<label for="runningteks"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 align-items-center p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Slider</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="slider" id="slider" checked="true" value="1">
										<label for="slider"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 align-items-center p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Foto Kegiatan</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="fotoKegiatan" id="fotoKegiatan" checked="false" value="1">
										<label for="fotoKegiatan"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 align-items-center p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Akreditasi</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="akreditasi" id="akreditasi" checked="false" value="1">
										<label for="akreditasi"></label>
									</div>
								</div>
							</div>
							<div class="form-group row m-b-15 bg-silver p-t-5 align-items-center p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Promo</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="promo" id="promo" checked="false" value="1">
										<label for="promo"></label>
									</div>
								</div>
							</div>
							<div class="form-group row m-b-15 bg-silver p-t-5 align-items-center p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Profil</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="profil" id="profil" checked="false" value="1">
										<label for="profil"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 align-items-center p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Download Brosur Sekolah</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="downloadBrosur" id="downloadBrosur" checked="false" value="1">
										<label for="downloadBrosur"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 align-items-center p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Pengajar</strong></h5>
									<div class="d-flex">
										<div class="checkbox checkbox-css mr-5">
											<input type="checkbox" id="profilePengajar" checked />
											<label for="profilePengajar" class="text-secondary">Profil Pengajar</label>
										</div>
										<div class="checkbox checkbox-css">
											<input type="checkbox" id="achievment" checked />
											<label for="achievment" class="text-secondary">Achievment</label>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="pengajar" id="pengajar" value="1">
										<label for="pengajar"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 align-items-center p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Fasilitas Sekolah</strong></h5>
									<div class="d-flex">
										<div class="checkbox checkbox-css mr-5">
											<input type="checkbox" id="fasilitasSekolah" checked />
											<label for="fasilitasSekolah" class="text-secondary">Fasilitas Sekolah</label>
										</div>
										<div class="checkbox checkbox-css mr-5">
											<input type="checkbox" id="fasilitasKelas" checked />
											<label for="fasilitasKelas" class="text-secondary">Fasilitas Kelas</label>
										</div>
										<div class="checkbox checkbox-css">
											<input type="checkbox" id="fasilitasLingkungan" checked />
											<label for="fasilitasLingkungan" class="text-secondary">Fasilitas Lingkungan</label>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="fasilitas" id="fasilitas" value="1">
										<label for="fasilitas"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 align-items-center p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Ekstrakulikuler</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="ekskul" id="ekskul" checked="false" value="1">
										<label for="ekskul"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 align-items-center p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Jam Belajar</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="jambelajar" id="jambelajar" checked="" value="1">
										<label for="jambelajar"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 align-items-center p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Prestasi</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="prestasi" id="prestasi" value="1">
										<label for="prestasi"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver align-items-center">
								<div class="col-form-label col-md-9">
									<h5><strong>Program</strong></h5>
									<div class="d-flex flex-wrap">
										<div class="checkbox checkbox-css mr-5">
											<input type="checkbox" id="deskripsiProgram" />
											<label for="deskripsiProgram" class="text-secondary">Deskripsi</label>
										</div>
										<div class="checkbox checkbox-css mr-5">
											<input type="checkbox" id="keunggulanProgram" />
											<label for="keunggulanProgram" class="text-secondary">Keunggulan</label>
										</div>
										<div class="checkbox checkbox-css mr-5">
											<input type="checkbox" id="waktuProgram" />
											<label for="waktuProgram" class="text-secondary">Waktu belajar</label>
										</div>

										<div class="checkbox checkbox-css mr-5">
											<input type="checkbox" id="syaratProgram" />
											<label for="syaratProgram" class="text-secondary">Syarat Pendaftaran</label>
										</div>

										<div class="checkbox checkbox-css mr-5">
											<input type="checkbox" id="biayaProgram" />
											<label for="biayaProgram" class="text-secondary">Biaya</label>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="program" id="program" value="1">
										<label for="program"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver align-items-center p-t-5 p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Program Keahlian (Untuk SMK)</strong></h5>
									<div class="d-flex flex-wrap">
										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="deskripsiSMK"  />
											<label for="deskripsiSMK" class="text-secondary">Deskripsi</label>
										</div>
										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="pelajariSMK"  />
											<label for="pelajariSMK" class="text-secondary">Yang dipelajari</label>
										</div>
										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="keunggulanSMK"  />
											<label for="keunggulanSMK" class="text-secondary">Keunggulan</label>
										</div>

										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="prospekSMK" />
											<label for="prospekSMK" class="text-secondary">Prosek kerja</label>
										</div>

										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="waktuSMK" />
											<label for="waktuSMK" class="text-secondary">Waktu Belajar</label>
										</div>

										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="syaratSMK" />
											<label for="syaratSMK" class="text-secondary">Syarat Pendaftaran</label>
										</div>

										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="biayaSMK" />
											<label for="biayaSMK" class="text-secondary">Biaya</label>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="programSMK" id="programSMK" value="1">
										<label for="programSMK"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver align-items-center  p-t-5 p-b-5">
								<div class="col-form-label col-md-9">
									<h5><strong>Program Keahlian (Untuk Perguruan Tinggi)</strong></h5>
									<div class="d-flex flex-wrap">
										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="deskripsi" />
											<label for="deskripsi" class="text-secondary">Deskripsi</label>
										</div>
										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="dipelajari"  />
											<label for="dipelajari" class="text-secondary">Yang dipelajari</label>
										</div>
										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="keunggulanKuliah"  />
											<label for="keunggulanKuliah" class="text-secondary">Keunggulan</label>
										</div>

										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="prospek" />
											<label for="prospek" class="text-secondary">Prosek kerja</label>
										</div>

										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="waktubelajar" />
											<label for="waktubelajar" class="text-secondary">Waktu Belajar</label>
										</div>

										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="syaratdaftar" />
											<label for="syaratdaftar" class="text-secondary">Syarat Pendaftaran</label>
										</div>

										<div class="checkbox checkbox-css mr-5 m-b-10">
											<input type="checkbox" id="biaya" />
											<label for="biaya" class="text-secondary">Biaya</label>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="programKuliah" id="programKuliah" value="1">
										<label for="programKuliah"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 p-b-5 align-items-center">
								<div class="col-form-label col-md-9">
									<h5><strong>Perusahaan yang kerjasama (Khusus SMK dan Vokasi)</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="kerjsama" id="kerjsama" checked="false" value="1">
										<label for="kerjsama"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver  p-t-5 p-b-5 align-items-center">
								<div class="col-form-label col-md-9">
									<h5><strong>Bursa Kerja</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="bursakerja" id="bursakerja" checked="false" value="1">
										<label for="bursakerja"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 p-b-5 align-items-center">
								<div class="col-form-label col-md-9">
									<h5><strong>Video</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="video" id="video" checked="false" value="1">
										<label for="video"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 p-b-5 align-items-center">
								<div class="col-form-label col-md-9">
									<h5><strong>QnA</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="qna" id="qna" checked="false" value="1">
										<label for="qna"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 p-b-5 align-items-center">
								<div class="col-form-label col-md-9">
									<h5><strong>Berita Sekolah</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="berita" id="berita" checked="false" value="1">
										<label for="berita"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 p-b-5 align-items-center">
								<div class="col-form-label col-md-9">
									<h5><strong>Testimoni</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="testimoni" id="testimoni" checked="false" value="1">
										<label for="testimoni"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 bg-silver p-t-5 p-b-5 align-items-center">
								<div class="col-form-label col-md-9">
									<h5><strong>Review</strong></h5>
								</div>
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<input type="checkbox" name="review" id="review" value="1">
										<label for="review"></label>
									</div>
								</div>
							</div>

							<div class="form-group row m-b-15 align-items-center">
								<div class="col-md-3">
									<div class="switcher switcher-success">
										<a class="btn btn-success" href="{{ url('admin-sekolah/edit-brosur') }}">Klik untuk mengedit Info Digital</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- Tagihan  -->
			<!-- History -->
			<!-- begin scroll to top btn -->
			<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
			<!-- end scroll to top btn -->
		</div>
@endsection