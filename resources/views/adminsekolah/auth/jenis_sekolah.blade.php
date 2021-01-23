@extends('layouts.home')

@section('title')
    Cara gampang cari sekolah
@endsection

@section('content')
    <div class="container mt-165">
        <div class="row no-gutters">
            <div class="container">
                <h3 class="title mb-50">Pilh sekolah yang ingin anda daftarkan?</h3>
                <div class="col-lg-12">
                    <ul class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="sekolah-online-tab" data-toggle="pill" href="#sekolah-online" role="tab" aria-controls="sekolah-online" aria-selected="true">Lembaga pendidikan Offline</a>
                        </li>
                        {{-- <li class="nav-item" role="presentation">
                            <a class="nav-link" id="sekolah-online-tab" data-toggle="pill" href="#sekolah-offline" role="tab" aria-controls="sekolah-offline" aria-selected="false">Lembaga pendidikan Online
                        </li> --}}
                    </ul>
                    <div class="tab-content" id="nav-tabs">
                        <form action="{{ url('admin-sekolah/register/jenis-sekolah') }}" method="POST">
                        @csrf
                            <div class="tab-pane fade show active" id="sekolah-online" role="tabpanel" aria-labelledby="sekolah-online-tab">
                                <div class="row list-sekolah">
                                    <ul class="tab-list-sekolah">
                                        <p class="mb-10 mt-20"><strong>Prasekolah</strong> </p>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Daycare" class="nav-item cp">Daycare
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Preschool" class="nav-item cp">Preschool
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="TK" class="nav-item cp">TK (Taman Kanak-kanak)
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="PAUD" class="nav-item cp">PAUD
                                        </li>
                                        <p class="mb-10 mt-20"><strong>Sekolah Dasar</strong> </p>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Primary" class="nav-item cp"> Primary
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="SD" class="nav-item cp">SD MI
                                        </li>
                                        <p class="mb-10 mt-20"><strong>Sekolah Menengah Pertama</strong> </p>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Secondary" class="nav-item cp"> Secondary
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="SMP" class="nav-item cp">SMP MTS
                                        </li>
                                        <p class="mb-10 mt-20"><strong>Sekolah Mengengah Atas</strong> </p>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="High School" class="nav-item cp"> High School
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="SMA - MA" class="nav-item cp">SMA - MA
                                        </li>
                                        <p class="mb-10 mt-20"><strong>Sekolah Menengah Kejuruan</strong> </p>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="SMK" classs="nav-item">SMK
                                        </li>
                                        <p class="mb-10 mt-20"><strong>Perguruan Tinggi</strong> </p>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Program Vokasi" class="nav-item cp">Program Vokasi
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Program Sarjana" class="nav-item cp">Program Sarjana
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Program Pasca Sarjana" class="nav-item cp">Program Pasca Sarjana
                                        </li>
                                    </ul>
                                    <ul class="tab-list-sekolah">
                                        <p class="mb-10 mt-20"><strong>Kursus</strong> </p>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Bahasa" class="nav-item cp">Bahasa
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Komputer" class="nav-item cp">Komputer
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio"name="jenis_sekolah" value="Musik"> Musik
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Menggambar" class="nav-item cp"> Menggambar
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Baca" class="nav-item cp"> Baca
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Tari" class="nav-item cp">Tari
                                        </li>
                                        <li>
                                            <input type="radio" name="jenis_sekolah" value="Desain" class="nav-item cp"> Desain
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Keterampilan" class="nav-item cp">  Keterampilan
                                        </li>
                                        <li>
                                            <input type="radio" name="jenis_sekolah" value="Pengobatan" class="nav-item cp"> Pengobatan
                                        </li>
                                        <li>
                                            <input type="radio" name="jenis_sekolah" value="Matematika" class="nav-item cp"> Matematika
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Kursus Lainnya" class="nav-item cp"> Kursus lainnya
                                        </li>
                                        <p class="mb-10 mt-20"><strong>Sekolah Lainnya</strong> </p>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Bimbel" class="nav-item cp"> Bimbel
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="SLB" class="nav-item cp">SLB
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Sekolah Autis"> Sekolah Autis
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="PKBM"> PKBM
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Sekolah Gratis"> Sekolah gratis bagi anak tidak mampu
                                        </li>
                                        <li>
                                            <input type="radio" name="jenis_sekolah" class="nav-item cp" value="Sekolah Pilot"> Sekolah Pilot
                                        </li>
                                        <li>
                                            <input type="radio" name="jenis_sekolah" class="nav-item cp" value="Sekolah Pramugari"> Sekolah Pramugari
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Sekolah Lainnya"> Sekolah Lainnya
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Pondok Pesantren"> Pondok Pesantren
                                        </li>
                                    </ul>
                                    <ul class="tab-list-sekolah">
                                        <p class="mb-10 mt-20"><strong>Sekolah Olahraga</strong> </p>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Sekolah Bola"> Sekolah Bola
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Sekolah Futsal" class="nav-item cp">Sekolah Futsal
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Sekolah Basket"> Sekolah Basket
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Sekolah Atletik"> Sekolah Atletik
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Sekolah Bulutangkis"> Sekolah Bulutangkis
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Sekolah Olahraga Lainnya"> Sekolah Olahraga Lainnya
                                        </li>
                                        <p class="mb-10 mt-20"><strong>Perguruan Beladiri</strong> </p>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Silat" class="nav-item cp">Silat
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Tarung Drajat" class="nav-item cp">Tarung Drajat
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Karate" class="nav-item cp">Karate
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Taekwondo" class="nav-item cp">Taekwondo
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Aikido"> Aikido
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" name="jenis_sekolah" value="Kempo" class="nav-item cp">Kempo
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Kungfu"> Kungfu
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Muaythai"> Muaythai
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Yong Moo do"> Yong Moo do
                                        </li>
                                        <li>
                                            {{-- <i class="far fa-school"></i> --}}
                                            <input type="radio" class="nav-item cp" name="jenis_sekolah" value="Perguruan Beladiri Lainnya"> Perguruan Beladiri Lainnya
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-info">Lanjut <i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                        {{-- <div class="tab-pane fade" id="sekolah-offline" role="tabpanel" aria-labelledby="sekolah-offline-tab">
                            <from>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group mt-10">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="lembaga" name="institusi" class="custom-control-input">
                                                <label class="custom-control-label" for="lembaga">Lembaga</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="perorangan" name="institusi" class="custom-control-input">
                                                <label class="custom-control-label" for="perorangan">Perorangan</label>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="penyediakursus">Penyedia Kursus</label>
                                            <input type="name" class="form-control" id="penyediakursus" placeholder="Masukan nama lembaga anda atau nama anda">
                                        </div>
                                        <div class="form-group">
                                            <label for="materiKursus">Materi Kursus</label>
                                            <input type="name" class="form-control" id="materiKursus" placeholder="Materi yang ingin diajarkan">
                                        </div>
                                        <div class="form-group">
                                            <label for="levelkursus">Level Kursus</label>
                                            <select class="custom-select" id="validationCustom04" required>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-10 ">
                                            <label for="waktukursus" class="mb-3">Materi Kursus</label>
                                            <div class="custom-control custom-radio mb-2">
                                                <input type="radio" id="setiapwaktu" name="waktukursus" class="custom-control-input">
                                                <label class="custom-control-label" for="setiapwaktu">Setiap Waktu</label>
                                            </div>
                                            <div class="custom-control custom-radio pt-3">
                                                <input type="radio" id="dijadwalkan" name="waktukursus" class="custom-control-input">
                                                <label class="custom-control-label" for="dijadwalkan">Dijadwalkan</label>
                                                <div class="form-group row mt-3">
                                                    <div class="input-group input-daterange">

                                                        <input type="text" class="form-control" name="dates" placeholder="tanggal" aria-label="tanggal" aria-describedby="basic-addon1">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="terjadwal" name="waktukursus" class="custom-control-input">
                                                <label class="custom-control-label" for="terjadwal">Terjadwal</label>
                                            </div>
                                            <div class="form-group row ml-4 mt-3">
                                                <div class="form-group">
                                                    <label for="levelkursus">Hari</label>
                                                    <select class="custom-select" id="validationCustom04" required>
                                                        <option>Senin</option>
                                                        <option>Selasa</option>
                                                        <option>Rabu</option>
                                                        <option>Kamis</option>
                                                        <option>Jumat</option>
                                                        <option>Sabtu</option>
                                                    </select>
                                                </div>
                                                <div class="form-group ml-3">
                                                    <label for="levelkursus">Jam</label>
                                                    <select class="custom-select" id="validationCustom04" required>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>
                                                <div class="form-group ml-3">
                                                    <label for="levelkursus">Sampai Jam</label>
                                                    <select class="custom-select" id="validationCustom04" required>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-link"><i class="far fa-plus-circle"></i> Tambah jadwal
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom03">Biaya</label>
                                        <div class="custom-control custom-radio mt-1">
                                            <input type="radio" id="gratis" name="waktukursus" class="custom-control-input">
                                            <label class="custom-control-label" for="gratis">Gratis</label>
                                        </div>

                                        <div class="custom-control custom-radio mt-1">
                                            <input type="radio" id="gratis" name="waktukursus" class="custom-control-input">
                                            <label class="custom-control-label" for="gratis">Berbayar</label>
                                        </div>


                                        <div class="form-group mt-3">
                                            <label for="jumlahBiaya">Jumlah biaya</label>
                                            <input type="name" class="form-control" id="jumlahBiaya" placeholder="Masukan jumlah biaya">
                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                        <div class="input-group">
                                            <a href="daftar-siswa5.html" class="btn btn-info">Simpan
                                        </div>
                                    </div>

                                </div>
                            </from>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .cp{
            cursor: pointer;
        }
    </style>
@endsection

  