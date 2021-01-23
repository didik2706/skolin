@extends('adminsekolah.pages.brosur.home')
@section('content')
<section class="teacher-details mt-50">
    <div class="container">
        <div class="row">
            <di class="col-md-2">
                <a class="btn btn-link" href="{{ url('admin-sekolah/edit-brosur') }}">
                    <i class="fas fa-arrow-left lead text-dark"></i>
                </a>
            </di>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="teacher-image teacher-img">
                    <a href="#">
                        <img src="{{ asset('storage/sekolah/guru/'.$guru->foto) }}" alt="teacher">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 teachers-col">
                <div class="mt-45">
                    <table class="table">
                        <h4 class="sub-title mb-4">Data Guru</h4>
                        <tr>
                            <th>Nama</th>
                            <td>: {{ $guru->nama_pengajar }}</td>
                        </tr>
                        <tr>
                            <th>Jabatan</th>
                            <td>: {{ $guru->jabatan }}</td>
                        </tr>
                        <tr>
                            <th>Pendidikan</th>
                            <td>: {{ $guru->pend_terakhir }}</td>
                        </tr>
                        <tr>
                            <th>Universitas</th>
                            <td>: {{ $guru->nama_sekolah }}</td>
                        </tr>
                    </table>
                </div>
                <hr>
                <h5 class="sub-title mb-3">Achievement</h5>
                <div class="d-flex justify-content-lg-between achieve-visi-misi">
                    <ul class="achievement-guru">
                        <li class="achievement-guru-list">
                            <i class="far fa-circle-notch mr-2"></i>
                            <span>{{ $guru->penghargaan }}</span>
                        </li>
                    </ul>
                    <hr>
                    <ul>
                        <li class="achievement-guru-list">
                            <h5 class="sub-title mb2">Visi</h5>
                            <span>{{ $guru->visi }}</span>
                        </li>
                        <br>
                        <li class="achievement-guru-list">
                            <h5 class="sub-title mb2">Moto</h5>
                            <span>{{ $guru->motto }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection