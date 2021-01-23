@extends('adminskolin.layouts.app')
@section('content')
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <h3 class="page-header">Transaksi</h3>
    <!-- end page-header -->
    <!-- begin row -->


    <div class="panel-body bg-silver m-b-15">
        <div class="form-group row">
            <p class="col-form-label col-md-8">Hasil <a>1</a> dari <a>100</a></p>
            <div class="col-md-4">
                <input type="search" class="form-control" placeholder="Search"/>
            </div>
        </div>
    </div>


    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Tagihan</h1>
    <!-- end page-header -->
    <!-- begin row -->
    {{-- paginate daftar sekolah --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table m-b-0 table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Sekolah</th>
                                    <th>Alamat</th>
                                    <th>No. Telepon</th>
                                    <th>Akreditasi</th>
                                    <th>Fax</th>
                                    <th>Link Sekolah</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            @foreach ($sekolahs as $sekolah)
                                <tbody>
                                    <tr>
                                        <td>{{ $sekolah->nama_sekolah }}</td>
                                        <td>{{ $sekolah->alamat }}, {{ $sekolah->provinsi->name }}</td>
                                        <td>{{ $sekolah->no_telepon }}</td>
                                        <td>{{ $sekolah->akreditasi }}</td>
                                        <td>{{ $sekolah->fax }}</td>
                                        <td>{{ $sekolah->link_sekolah }}</td>
                                        <td>
                                            <a href="{{ url('skolin-panel/detail-sekolah', $sekolah->id) }}">
                                                <i class="fa fa-detail"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        {{ $sekolahs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
@endsection