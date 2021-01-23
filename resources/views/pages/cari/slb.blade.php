@extends('layouts.home')

@section('title')
    Cara gampang cari sekolah
@endsection

@section('content')  

  <!-- ========= start courser pencarian========= -->

    <section class="top-courses-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-1" id="main-content">
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
                                {{-- <div class="container-lg mt-2">
                                    <p>Showing 1 - 16 of 36 results</p>
                                </div> --}}
                                <div class="courses-wrapper wrapper-2">
                                    <div class="columns">
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
                                <div class="container-lg mt-4">
                                    <p>Showing {{ $sekolahs->count() }} of {{$sekolahs->total()}} results</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- sidebar filter --}}
                <div class="col-lg-3 col-filter show mt-50">

                    <div class="courses-sidebar">
                      <div class="courses-sidebar-fee card-header bg-light rounder mt-30">
                        <div class="sidebar-title">
                          <h5>Cari sekolah</h5>
                        </div>
                        <br>
                        <form action="{{ url('cari/all-sekolah') }}" method="get">
                          <div class="input-group input-group-sm mb-3">
                              <input type="text" class="form-control " placeholder="Ketik nama sekolah" name="cari">
                                  <div class="input-group-append">
                                      <button class="btn btn-outline-success" type="submit" id="button-addon2">Cari</button>
                                  </div>
                          </div>
                      </form>
                        <br>
                        <div class="sidebar-title">
                          <h5>Filter</h5>
                        </div>
                        <form class="fee-items" action="{{ url('cari/filter-slb') }}" method="GET">
                          <div class="courses-search tab-filter">
                              <input type="text" placeholder="Nama SLB" name="search_list">
                          </div>
                          <div class="courses-select tab-filter w-100">
                              <select  name="provinsi">
                                  <option selected>Provinsi</option>
                                  @foreach ($provinsi as $prov)
                                      <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="courses-select tab-filter w-100">
                              <select  name="kabkot">
                                  <option selected>Kabkot</option>
                                  @foreach ($kabkot as $kabkot)
                                      <option value="{{ $kabkot->id }}">{{ $kabkot->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="courses-select tab-filter w-100">
                              <select  name="kecamatan">
                                  <option selected>Kecamatan</option>
                                  @foreach ($kecamatan as $kec)
                                      <option value="{{ $kec->id }}">{{ $kec->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <button class="btn btn-outline-success btn-sm mt-3 collapsed" type="submit">Search</button>
                        <br>
                      </form>
                        <button class="btn btn-outline-success btn-sm mt-3 collapsed" id="filterBtn" data-toggle="collapse"
                          data-target="#filterTab" aria-expanded="false" aria-controls="filterTab">More filter</button>
                        <br>
                      </div>
          
                      <div class="mt-5 col-filter show" id="filterTab">
                        <div class="sidebar-title">
                          <h5 class="sub-title">Jenjang</h5>
                        </div>
                        <ul class="category-items">
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                TKLB
                              </label>
                            </div>
                          </li>
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                SDLB
                              </label>
                            </div>
                          </li>
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                SMPLB
                              </label>
                            </div>
                          </li>
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                SMALB
                              </label>
                            </div>
                          </li>
                        </ul>
                        <br>
                        <div class="sidebar-title">
                          <h5 class="sub-title">Level</h5>
                        </div>
                        <ul class="category-items">
                          <li>
          
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                SLB A (Tuna Netra)
                              </label>
                            </div>
                          </li>
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                SLB B (Tuna Rungu)
                              </label>
                            </div>
                          </li>
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                SLB C (Tuna Grahita)
                              </label>
                            </div>
                          </li>
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                SLB D (Tuna Daksa)
                              </label>
                            </div>
                          </li>
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                SLB E (Tuna Laras)
                              </label>
                            </div>
                          </li>
                          <li>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                SLB F (Tuna Ganda)
                              </label>
                            </div>
                          </li>
                        </ul>
                        <br>
          
                        <div class="courses-sidebar-fee bg-light rounder mt-30">
                          <div class="sidebar-title">
                            <h5>Biaya</h5>
                          </div>
                          <br>
                          <label>Biaya Bulanan</label>
                          <form class="fee-items">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                              </div>
                              <input type="text" class="form-control" placeholder="Minimum harga " aria-label="Minimal harga"
                                aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                              </div>
                              <input type="text" class="form-control" placeholder="Maksimal harga " aria-label="Maksimal harga"
                                aria-describedby="basic-addon1">
                            </div>
                          </form>
                          <br>
          
                          <!-- Biaya masuk dong -->
                          <label>Biaya Masuk</label>
                          <form class="fee-items">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                              </div>
                              <input type="text" class="form-control" placeholder="Minimum harga " aria-label="Minimal harga"
                                aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp</span>
                              </div>
                              <input type="text" class="form-control" placeholder="Maksimal harga " aria-label="Maksimal harga"
                                aria-describedby="basic-addon1">
                            </div>
                          </form>
                        </div>
                      </div>
          
                    </div>
                  </div>

            </div>
        </div>
    </section>

  <!-- ============ tutup course pencarian =============== -->

 @endsection