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
                                {{-- <p>{{ $sekolah->jenis_sekolah }}</p> --}}
                                <p class="text-light lead pt-3">Cara mudah mencari sekolah</p>
                                <!-- <img class="wow fadeInLeft mt-10" data-wow-duration="1s" data-wow-delay="0.3s" src="assets\images\logo.png" height="80px"> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="login-register-content mt-30 mx-auto wow fadeInUpBig" data-animation="fadeInLeft" data-delay="0.2s">
                        <div class="login-register-form mt-10">
                            <form class="p3rem w-100" method="POST" action="{{ url('admin-sekolah/register/data-sekolah') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="tab" id="tab_form0">
                                    <div class="d-flex justify-content-center pb-3">
                                        <h4>Data Diri Pendaftar</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaSiswa">Nama Lengkap</label>
                                        <input type="text" name="nama_pendaftar" class="form-control" id="namaSiswa">
                                    </div>
                                    <!-- kelamin -->
                                    <div class="form-group">
                                        <label for="status">Status anda</label>
                                        <select class="form-control" id="status" name="status_pendaftar">
                                          <option value="Guru">Guru</option>
                                          <option value="Kepala Sekolah">Kepala Sekolah</option>
                                          <option value="Ketua Yayasan">Ketua Yayasan </option>
                                          <option value="Masyarakat">Masyarakat</option>
                                          <option value="Siswa">Siswa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email_pendaftar" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="nowa">Nomor Whatsapp</label>
                                        <input type="text" name="no_pendaftar" class="form-control" id="nowa">
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-info" id="next_form0">Daftar</button>
                                    </div>
                                </div>
                                <div class="tab" id="tab_form1" style="display: none;">
                                    <div class="pb-3 d-flex justify-content-center">
                                        <h4>Isi data Sekolah</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaSiswa">Nama Sekolah</label>
                                        <input type="text" class="form-control" id="namaSiswa" name="nama_sekolah">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="notlp">No Telepon</label>
                                        <input type="text" class="form-control" id="notlp" name="no_telepon">
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi">Provinsi</label>
                                        <select class="form-control" id="provinsi" name="provinsi_id">
                                            <option selected>Provinsi</option>
                                            @foreach ($provinsi as $prov)
                                                <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kabupaten">KotaMadya / Kabupaten</label>
                                        <select class="form-control" id="kabkot" name="kabkot_id">
                                            <option selected>Kabkot</option>
                                            @foreach ($kabkot as $kabkot)
                                                <option value="{{ $kabkot->id }}">{{ $kabkot->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <select class="form-control" id="kecamatan" name="kecamatan_id">
                                            <option selected>Kecamatan</option>
                                            @foreach ($kecamatan as $kec)
                                                <option value="{{ $kec->id }}">{{ $kec->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="Kelurahan">Kelurahan</label>
                                        <select class="form-control" id="kelurahan" name="kelurahan_id">
                                            <option selected>Kelurahan</option>
                                            @foreach ($kelurahan as $kel)
                                                <option value="{{ $kel->id }}">{{ $kel->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
    
                                    <hr>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-info" id="next_form1">Lanjut <i class="fa fa-arrow-right"></i></button>
                                    </div>
                                </div>
                                <div class="tab" id="tab_form2" style="display: none;">
                                    <div class="d-flex justify-content-center pb-3">
                                        <h4>Isi data Sekolah</h4>
                                    </div>
                                    <div class="form-group text-center">
                                        <span class="mb-3">Review Logo Sekolah</span><br>
                                        <img class="img-thumbnail" id="img_none" src="{{ asset('assets/images/premier.png') }}" style="height:100px">
                                        <img src="" id="img_preview_normal" alt="" style="height: 100px;" class="dn">
                                        <img src="" alt="" id="img_preview_samping" style="height: 100px;" class="dn">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="provinsi">Upload untuk tampilan logo Normal</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="logo_normal" aria-describedby="uploadNormal" name="logo_normal">
                                                <label class="custom-file-label" for="uploadNormal">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-danger" type="button" id="hapusNormal">Hapus</button>
                                                <button class="btn btn-outline-success" type="button" id="uploadNormal">Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="provinsi">Upload untuk tampilan logo Menyamping</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="logo_samping" aria-describedby="uploadSamping" name="logo_samping">
                                                <label class="custom-file-label" for="uploadSamping">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-danger" type="button" id="hapusSamping">Hapus</button>
                                                <button class="btn btn-outline-success" type="button" id="uploadSamping">Upload</button>
                                            </div>
                                        </div>
                                    </div>
    
                                    <hr>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Lanjut <i class="fa fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    .pb-3{
        padding-bottom: 3rem !important;
    }
    .p3rem{
        padding-top: 0 !important;
        padding-right: 3rem !important;
        padding-left: 3rem !important;
        padding-bottom: 3rem !important;
    }
    .dn{
        display: none;
    }
</style>
@endsection