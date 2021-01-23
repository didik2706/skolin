@extends('layouts.home')

@section('title')
    Cara gampang cari sekolah
@endsection

@section('content')
    <div class="container">
      <div class="row no-gutters" style="height: 100vh;">
        <div class="col-lg-6 d-flex align-items-center">
          <div class="login-register-content mt-30 wow fadeInUpBig" data-animation="fadeInLeft" data-delay="0.2s">
            <div class="d-flex justify-content-between align-items-center">
              <!-- <img class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" src="assets\images\logo.png" height="50px"> -->
              <div class="text-left ml-40">
                <p>Daftarkan Sekolah</p>
              </div>
            </div>
            <div class="login-register-form mt-10">
              <form class="p-5 w-100" id="pencarianSekolah">
              {{-- <form class="p-5 w100" method="POST" action="{{ url('admin-sekolah/register') }}">
                @csrf  --}}
                <label for="inputSekolah">Masukan nama Sekolahmu</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                      <i class="fas fa-search"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Tulis nama sekolah atau nama jalan" aria-label="input email" aria-describedby="basic-addon1" name="nama_sekolah">
                </div>
                <p class="pt-30">Sekolahmu tidak ada dalam pencarian?</p>
                <hr>
                <a href="{{ url('admin-sekolah/register/jenis-sekolah') }}" class="text-white btn btn-success w-100 mb-3"><i class="fas fa-school mr-2"></i>Daftarkan</a>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-center">
          <div class="pencarian-sekolah d-flex flex-column ">
            <label>Hasil Pencarian</label>
            <div class="list-hasil-pencarian p-10 rounded">
              <div class="list-pencarian-content d-flex align-items-center p-10">
                <img src="assets/images/muhajirin.jpg" class="img-thumbnail" style="height: 80px;">
                <div class="list-pencarian-text pl-4">
                  <h5>SMK AL Muhajirin</h5>
                  <p class="">Jl. Kelapa Cengkir Raya No. 100, Pondok Kelapa Duren Sawit Jakarta Timur</p>
                </div>
                <a href="#" class="btn btn-outline-success">Verifikasi</a>
              </div>
            </div>
            <div class="list-hasil-pencarian p-10 rounded">
              <div class="list-pencarian-content d-flex align-items-center p-10">
                <img src="assets/images/muhajirin.jpg" class="img-thumbnail" style="height: 80px;">
                <div class="list-pencarian-text pl-4">
                  <h5>SMK AL Muhajirin</h5>
                  <p class="">Jl. Kelapa Cengkir Raya No. 100, Pondok Kelapa Duren Sawit Jakarta Timur</p>
                </div>
                <a href="#" class="btn btn-outline-success">Verifikasi</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
@endsection
