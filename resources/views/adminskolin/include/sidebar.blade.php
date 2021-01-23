<div id="sidebar" class="sidebar bg-light">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow d-flex"></div>
                    <div class="image">
                        <img src="assets/img/user/user-13.jpg" alt="" />
                    </div>
                    <div class="info">
                        <p>Gunaawan</p>
                        <p>{{ Auth::user()->nama}} <small>{{ Auth::User()->no_whatsapp }}</small></p>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                    <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav active">
            <li class="nav-header">Navigation</li>
            <li class="has-sub active">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-th-large"></i>
                    <span>Dashboard</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="dashboard-sekolah.html">Dashboard</a></li>
                    <li><a href="{{ url('skolin-panel/daftar-sekolah') }}">Daftar Sekolah</a></li>
                    <li><a href="data-sekolah2.html">Kontak Sekolah</a></li>
                    <li class=""><a href="data-sekolah3.html">Cabang Sekolah</a></li>
                    <li class=""><a href="kategori-smk.html">Kategori dan program</a></li>
                </ul>
            </li>
            <li class="">
                <a href="pesan.html">
                    <i class="fas fa-envelope"></i>
                    <span>Pesan</span>
                </a>
            </li>
            <li class="">
                <a href="{{ url('admin-sekolah/brosur-digital') }}">
                    <i class="fas fa-tablet-alt"></i>
                    <span>Info Digital</span>
                </a>
            </li>
            <li class="">
                <a href="info-digital.html">
                    <i class="fas fa-arrow-alt-circle-up"></i>
                    <span>Upgrade Paket</span>
                </a>
            </li>
            <li class="">
                <a href="daftar-online.html">
                    <i class="fa fa-sign-in-alt"></i>
                    <span>Daftar Online</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-chart-area"></i>
                    <span>Grafik</span>
                </a>
                <ul class="sub-menu">
                    <li class=""><a href="grafik-pengunjung.html">Pengunjung</a></li>
                    <li><a href="grafik-pendaftar.html">Pendaftar</a></li>
                    <li class=""><a href="grafik-siswa.html">Siswa</a></li>
                </ul>
            </li>
            <li class="">
                <a href="">
                    <i class="fa fa-user-graduate"></i>
                    <span>Data Siswa</span>
                </a>
            </li>
            <li class="">
                <a href="lowongan-kerja.html">
                    <i class="fa fa-user-md"></i>
                    <span>Lowongan Kerja</span>
                </a>
            </li>
            <li class="">
                <a href="">
                    <i class="fa fa-exchange-alt"></i>
                    <span>Transaksi</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-ad"></i>
                    <span>Iklan</span>
                </a>
                <ul class="sub-menu">
                    <li class=""><a href="iklan.html">Sekolah Rekomendasi</a></li>
                    <li><a href="iklan2.html">Iklan Per Daerah</a></li>
                </ul>
            </li>
            <li class="">
                <a href="">
                    <i class="fa fa-user-tie"></i>
                    <span>Admin</span>
                </a>
            </li>
            <li class="">
                <a href="Verifikasi.html">
                    <i class="fa fa-user-check"></i>
                    <span>Verifikasi Akun</span>
                </a>
            </li>

            <li class="">
                <a href="">
                    <i class="fa fa-door-open"></i>
                    <span>Keluar</span>
                </a>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                        class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>