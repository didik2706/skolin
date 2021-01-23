
	<div id="navigation" class="navigation navigation-landscape">
			<div class="container position-relative">
				<div class="row align-items-center">
					<div class="col-lg-2">
						<div class="header-logo">
							<a href="{{ route('home') }}"><img src="{{ url('assets\images\logo.png') }}" alt=""></a>
						</div>
					</div>
					<div class="col-lg-8 position-static">
						<div class="nav-toggle"></div>
						<nav class="nav-menus-wrapper">
							<ul class="nav-menu">
								<li>
									<a href="#">Kategori</a>
									<ul class="nav-dropdown nav-submenu">
										<li>
											<a href="#">Pra Sekolah</a>
											<ul class="nav-dropdown nav-submenu">
												<li>
													<a href="{{ url('cari/daycare') }}">Daycare</a>
												</li>
												<li>
													<a href="{{ url('cari/preschool') }}">Preschool</a>
												</li>
												<li>
													<a href="{{ url('cari/tk') }}">TK</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">SD</a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="{{ url('cari/primary') }}">Primary</a></li>
												<li><a href="{{ url('cari/sdn') }}">SD Negeri</a></li>
											</ul>
										</li>
										<li>
											<a href="#">SMP</a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="{{ url('cari/secondary') }}">Secondary</a></li>
												<li><a href="{{ url('cari/smp') }}">SMP</a></li>
											</ul>
										</li>
										<li>
											<a href="#">SMA</a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="{{ url('cari/highschool') }}">High School</a></li>
												<li><a href="{{ url('cari/sma') }}">SMA</a></li>
											</ul>
										</li>
										<li>
											<a href="{{ url('cari/smk') }}">SMK</a>
										</li>
										<li>
											<a href="{{ url('cari/kuliah') }}">Perguruan Tinggi</a>
										</li>
										<li>
											<a href="{{ url('cari/pesantren') }}">Pondok Pesantren</a>
										</li>
										<li>
											<a href="#">Sekolah olahraga</a>
											<ul class="nav-dropdown nav-submenu">
												<li>
													<a href="{{ url('cari/sepakbola') }}">Sekolah Sepakbola</a>
												</li>
												<li>
													<a href="{{ url('cari/futsal') }}">Sekolah Futsal</a>
												</li>
												<li>
													<a href="{{ url('cari/basket') }}">Sekolah Basket</a>
												</li>
												<li>
													<a href="{{ url('cari/bulutangkis') }}">Sekolah Bulutangkis</a>
												</li>
												<li>
													<a href="{{ url('cari/atletik') }}">Sekolah Atletik</a>
												</li>
												<li>
													<a href="{{ url('cari/renang') }}">Sekolah Renang</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Beasiswa</a>
									<ul class="nav-dropdown nav-submenu">
										<li>
											<a href="{{ url('cari/beasiswa-dn') }}">Dalam Negeri</a>
										</li>
										<li>
											<a href="{{ url('cari/beasiswa-ln') }}">Luar Negeri</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">Magang</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="{{ url('cari/magang-dn') }}">Dalam Negeri</a></li>
										<li><a href="{{ url('cari/magang-ln') }}">Luar Negeri</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Kursus</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="{{ url('cari/bahasa') }}">Kursus Bahasa</a></li>
										<li><a href="{{ url('cari/komputer') }}">Kursus Komputer</a></li>
										<li><a href="{{ url('cari/musik') }}">Kursus Musik</a></li>
										<li><a href="{{ url('cari/tari') }}">Kursus Tari</a></li>
										<li><a href="{{ url('cari/desain') }}">Kursus Desain</a></li>
										<li><a href="{{ url('cari/keterampilan') }}">Kursus Keterampilan</a></li>
										<li><a href="{{ url('cari/baca') }}">Kursus Baca</a></li>
										<li><a href="{{ url('cari/pengobatan') }}">Kursus Pengobatan</a></li>
										<li><a href="{{ url('cari/matematika') }}">Kursus Matematika</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Lainnya</a>
									<ul class="nav-dropdown nav-submenu">
										<li>
											<a href="{{ url('cari/bimbel') }}">Bimbel</a>
										</li>
										<li>
											<a href="{{ url('cari/beladiri') }}">Perguruan Beladiri</a>
										</li>
										<li>
											<a href="{{ url('cari/slb') }}">SLB</a>
										</li>
										<li>
											<a href="{{ url('cari/pilot') }}">Sekolah Pilot</a>
										</li>
										<li>
											<a href="{{ url('cari/pramugari') }}">Sekolah Pramugari</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="{{ url('cari/promo') }}">Promo</a>
								</li>
								<li>
									<a href="{{ url('cari/payment') }}">Payment</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-lg-2 position-static">
						<div class="header-search">
							<form action="#">
								<input type="text" placeholder="Cari sekolah">
								<button><i class="fas fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>
