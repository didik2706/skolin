@extends('adminsekolah.layouts.master')

@section('title')
    Cara gampang cari sekolah
@endsection

@section('content')

    <div class="wrapper">
        <div class="">
            <div class="row no-gutters">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="cover">
                        <div class="cover-content my-auto text-center">
                            <div class="wow fadeInLeft">
                                <h2 class="text-light px-5">Selamat datang di Skolin</h2>
                                <p class="text-light lead pt-3">Cara mudah mencari sekolah</p>
                                <!-- <img class="wow fadeInLeft mt-10" data-wow-duration="1s" data-wow-delay="0.3s" src="assets\images\logo.png" height="80px"> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <form action="{{ url('admin-sekolah/register/verifikasi') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container tab" id="tab_form3">
                            <div class="pencarian-sekolah d-flex flex-column align-items-center">
                                <h5 class="mb-50">Terimakasih telah melakukan pendaftaran</h5>
                                <div class="list-hasil-pencarian p-10 rounded">
                                    <div class="list-pencarian-content d-flex align-items-center p-10">
                                        <img src="{{ asset('/storage/sekolah/files/'.$sekolah->logo_normal) }}" class="img-thumbnail" style="height: 80px;">
                                        <div class="list-pencarian-text pl-4">
                                            <h5>{{ $sekolah->nama_sekolah }}</h5>
                                            <p class="">{{ $sekolah->alamat }}</p>
                                        </div>
                                        <button type="button" class="btn btn-outline-success" id="next_form3">Verifikasi</button>
                                        {{-- <button type="button" class="btn btn-info" id="next_form3">Lanjut <i class="fa fa-arrow-right"></i></button> --}}
                                        {{-- <a href="{{ url('admin-sekolah/dashboard') }}" class="btn btn-outline-success">Verifikasi</a> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="container d-flex justify-content-center">
                                <div>
                                    <div class="alert alert-success mt-50" role="alert ">
                                        Sekolah yang anda dasftarkan akan kami proses 1 x 24 jam
                                    </div>
                                    <p class="text-center mt-30">
                                        <small>
                                            Silahkan verifikasi untuk melengkapi informasi sekolah
                                        </small>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center mt-30">
                                <a href="{{ url('admin-sekolah/register') }}" class="btn btn-info">Kembali ke pencarian</a>
                            </div>
                        </div>
                        <div class="login-register-content mt-30 mx-auto wow fadeInUpBig tab" data-animation="fadeInLeft" data-delay="0.2s" id="tab_form4" style="display: none;">
                            {{-- <div class="d-flex justify-content-center">
                                <h4>Isi data Sekolah</h4>
                            </div> --}}
                            <div class="login-register-form mt-10">
                                <div>
                                    <div class="login-register-form mt-10">
                                        <p class="mb-2"><strong>Silakan lengkapi untuk proses verifikasi</strong></p>
                                        <div class="form-group">
                                            <label for="namaSiswa">Status Anda di lembaga pendidikan (Nama Jabatan)</label>
                                            <input type="text" class="form-control" id="namaSiswa" name="status">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">No Whataspp anda yang memverifikasi</label>
                                            <input type="text" class="form-control" id="alamat" name="no_whatsapp">
                                        </div>
                                        <div class="form-group">
                                            <label for="notlp">Email Sekolah</label>
                                            <input type="email" class="form-control" id="notlp" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="password2">Ulangi Password</label>
                                            <input type="password" class="form-control" id="password2" name="password-confirmation">
                                        </div>
                                        <div class="form-group mt-30">
                                            <button type="submit" class="btn btn-info" id="next_form3">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection