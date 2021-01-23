@extends('layouts.home')

@section('title')
    Cara gampang cari sekolah
@endsection

@section('content')  

  <!-- ========= start courser pencarian========= -->

    <section class="top-courses-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1" id="main-content">
                    <div class="courses-bar">
                        <div class="row">
                            <div class="col-lg-5 col-sm-6">
                            </div>
                            <div class="col-lg-7 col-sm-6">

                            </div>
                        </div>
                    </div>
                <!-- Video Video Sekolah ceritanya video video -->
                    <div class="orderMobile">
                        <div class="online-library-wrapper" data-wow-duration="1s" data-wow-delay="0.3s" id="pencarianVideo">
                            <div class="courses-tab mt-2">
                                <p>Showing 4 - 4 of 36 results</p>
                            </div>
                            <div class="columns">
                                <div class="col-lg-3 col-sm-6 ">
                                    <div class="single-library text-center mt-30 rounder">
                                        <div class="library-image rounder">
                                            <iframe class="video-size" src="https://www.youtube.com/embed/cUA6lBsk494"></iframe>
                                        </div>
                                        <div class="video-content">
                                            <h4 class="video-title">
                                                <a href="https://www.youtube.com/watch?v=cUA6lBsk494&t">Pilih SD atau MI</a>
                                            </h4>
                                            <span class="video-detail">Referensi sekolah untuk anak</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-library text-center mt-30">
                                        <div class="library-image">
                                            <iframe class="video-size" src="https://www.youtube.com/embed/NFl99e0kXFo"></iframe>
                                        </div>
                                        <div class="video-content">
                                            <h4 class="video-title">
                                                <a href="https://www.youtube.com/watch?v=NFl99e0kXFo">7 Madrasah Ibtidaiyah</a>
                                            </h4>
                                            <span class="video-detail">Referensi sekolah untuk anak</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-library text-center mt-30">
                                        <div class="library-image">
                                            <iframe class="video-size" src="https://www.youtube.com/embed/Y1BBLAOLFGE"></iframe>
                                        </div>
                                        <div class="video-content">
                                            <h4 class="video-title">
                                                <a href="https://www.youtube.com/watch?v=Y1BBLAOLFGE">SD negeri di pekayon pasar Rebo</a>
                                            </h4>
                                            <span class="video-detail">Referensi sekolah untuk anak</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="single-library text-center mt-30">
                                        <div class="library-image">
                                            <iframe class="video-size" src="https://www.youtube.com/embed/Xz62lfezJC8"></iframe>
                                        </div>
                                        <div class="video-content">
                                            <h4 class="video-title">
                                                <a href="https://www.youtube.com/watch?v=Xz62lfezJC8">SDIT Al Mughni</a>
                                            </h4>
                                            <span class="video-detail">Referensi sekolah untuk anak</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination-items text-center" style="padding-top: 20px;">
                                <li>
                                    <a class="active" href="#">01</a>
                                </li>
                                <li>
                                    <a href="#">02</a>
                                </li>
                                <li>
                                    <a href="#">03</a>
                                </li>
                                <li>
                                    <a href="#">04</a>
                                </li>
                                <li>
                                    <a href="#">05</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tutup video sekolah  -->

                        {{-- main menu --}}
                        <div class="tab-content" id="contentPencarian">
                            <div class="tab-pane fade show active" id="grid" role="tabpanel">
                                @if(count($sekolahs))
                                    <div class="container-lg mt-2 columns">
                                        <p>Hasil Pencarian : {{ $search }} {{ $provinsi }} {{ $kabkot }} {{ $kecamatan }}</p>
                                    </div>
                                    <div class="courses-wrapper wrapper-2">
                                        <div class="columns" id="results">
                                            @foreach ($sekolahs as $sekolah)
                                                <div class="main-sekolah col-lg-4 col-sm-6 courses-col">
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
                                            @endforeach
                                        </div>
                                        
                                        {{ $sekolahs->links() }}
                                    </div>
                                @else
                                <div class="alert alert-danger">Oops.. Data <b>{{$search}}</b> Tidak Ditemukan</div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

                {{-- sidebar filter --}}

            </div>
        </div>
    </section>

  <!-- ============ tutup course pencarian =============== -->

 @endsection