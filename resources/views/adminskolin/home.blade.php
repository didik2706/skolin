@extends('adminskolin.layouts.app')
@section('content')
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <a class="pull-right btn-success btn" href="../index.html">Halaman Admin Skolin</a>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <div class="alert alert-success fade show col-10">Selamat Datang {{ Auth::User()->nama }}</div>
        <!-- end page-header -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-stats bg-success">
                    <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                    <div class="stats-info">
                        <h4>ADMIN</h4>
                        <p>5</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-stats bg-success">
                    <div class="stats-icon"><i class="fa fa-link"></i></div>
                    <div class="stats-info">
                        <h4>GURU STAFF</h4>
                        <p>30</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-stats bg-success">
                    <div class="stats-icon"><i class="fa fa-users"></i></div>
                    <div class="stats-info">
                        <h4>SISWA</h4>
                        <p>120</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-stats">
                    <div class="stats-info">
                        <button class="btn btn-primary">Like 1087</button>
                        <button class="btn btn-primary">Share 1087</button>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-8 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="flot-chart-5">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs  btn-default" data-click="panel-expand">Mingguan</a>
                            <a href="javascript:;" class="btn btn-xs  btn-success" data-click="panel-reload">Bulanan</a>
                            <a href="javascript:;" class="btn btn-xs  btn-warning" data-click="panel-collapse">Tahunan</a>
                        </div>
                        <h4 class="panel-title">Jumlah Kunjungan</h4>
                    </div>
                    <div class="panel-body">
                        <div>
                            <canvas id="myChart" width="480" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-4 -->
        </div>
        <div class="row">
            <!-- begin col-4 -->
            <!-- end col-4 -->
            <div class="col-md-5">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">

                        </div>
                        <h4 class="panel-title">Aktifitas</h4>
                    </div>
                    <div class="panel-body">
                        <div class="widget-list widget-list-rounded " data-id="widget">
                            <div class="widget-list-item">
                                <div class="widget-list-media">
                                    <img src="assets/img/user/user-12.jpg" alt="" class="rounded" />
                                </div>
                                <div class="widget-list-content">
                                    <h4 class="widget-list-title">Perubahan Info Digital</h4>
                                    <a class="widget-list-desc text-success" href="#">Gunawan</a>
                                </div>
                                <div class="widget-list-action" style="width: 40%; text-align: right;">
                                    <a href="#" class="text-muted">
                                        Senin, 27 Juli 2020
                                    </a>
                                </div>
                            </div>
                            <div class="widget-list-item">
                                <div class="widget-list-media">
                                    <img src="../assets/images/campus-1.jpg" alt="" class="rounded" />
                                </div>
                                <div class="widget-list-content">
                                    <h4 class="widget-list-title">Saat ini ada terdaftar sebgai siswa di</h4>
                                    <a class="widget-list-desc text-success" href="#">SMPN 13 Jakarta</a>
                                </div>
                                <div class="widget-list-action" style="width: 40%; text-align: right;">
                                    <a href="#" class="text-muted">
                                        Senin, 27 Juli 2020
                                    </a>
                                </div>
                            </div>
                            <div class="widget-list-item">
                                <div class="widget-list-media">
                                    <img src="assets/img/user/user-12.jpg" alt="" class="rounded" />
                                </div>
                                <div class="widget-list-content">
                                    <h4 class="widget-list-title">Saat ini ada terdaftar sebgai siswa di</h4>
                                    <a class="widget-list-desc text-success" href="#">SMPN 13 Jakarta</a>
                                </div>
                                <div class="widget-list-action" style="width: 40%; text-align: right;">
                                    <a href="#" class="text-muted">
                                        Senin, 27 Juli 2020
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <div class="col-md-7	">
                <!-- begin panel -->
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Transaksi terbaru</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table m-b-0">
                                <tbody>
                                    <tr>
                                        <td class="with-img"><img src="assets/img/user/user-12.jpg" class="rounded" height="40"  /></td>
                                        <td><strong>Wahyu Gunawan</strong></td>
                                        <td>Kelas 4 SD</td>
                                        <td>SPP</td>
                                    </tr>
                                    <tr>
                                        <td class="with-img"><img src="assets/img/user/user-12.jpg" class="rounded" height="40"  /></td>
                                        <td><strong>Wahyu Gunawan</strong></td>
                                        <td>Kelas 4 SD</td>
                                        <td>SPP</td>
                                    </tr>
                                    <tr>
                                        <td class="with-img"><img src="assets/img/user/user-12.jpg" class="rounded" height="40"  /></td>
                                        <td><strong>Wahyu Gunawan</strong></td>
                                        <td>Kelas 4 SD</td>
                                        <td>SPP</td>
                                    </tr>
                                    <tr>
                                        <td class="with-img"><img src="assets/img/user/user-12.jpg" class="rounded" height="40"  /></td>
                                        <td><strong>Wahyu Gunawan</strong></td>
                                        <td>Kelas 4 SD</td>
                                        <td>SPP</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end panel -->
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection