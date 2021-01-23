@extends('layouts.home')
@section('title')
    Cara gampang cari sekolah
@endsection
@section('content')  
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
            <!-- Tutup video sekolah  -->

            <div class="tab-content" id="contentPencarian">
              <div class="tab-pane fade show active" id="grid" role="tabpanel">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title d-flex">
                            <h2 class="sub-title">
                                Lembaga Pendidikan Unggulan
                            </h2>
                        </div>
                    </div>
                  </div>
                <div class="courses-wrapper wrapper-2">
                  <div class="columns">
                    @foreach ($ungguls as $sekolah)
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
                    @endforeach
                  </div>
                  {{ $ungguls->links() }}
                </div>
                <div class="container-lg mt-4">
                    <p>Showing {{ $ungguls->count() }} of {{$ungguls->total()}} results</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection