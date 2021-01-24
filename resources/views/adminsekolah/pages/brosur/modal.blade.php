<!-- ===== Modal daftar baru ====== -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="daftarbaru" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content rounder">
            <div class="modal-header">
                <h5 class="modal-title">Selamat datang di TK Islma Al Muhajirin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body login-modal">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mx-auto text-center">
                            <h5 class="mb-10">Hallo Gunawan</h5>
                            <img src="{{ url('assets\images\guru/gur-1.png') }}') }}" class="mb-10" alt="" style="height: 50px"></a>
                            <p class="mb-3 text-success">Anda Memilih Program Play Group </p>
                        </div>
                    </div>
                    <div class="row kupon-potongan">
                        <div class="col-md-12">
                            <div class="modal-kupon">
                                <p><small>Selamat anda mendapatkan</small></p>
                                <a href="" class="btn btn-outline-danger mb-40">Potongan 20% Biaya masuk</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="para mb-3">Klaim promo dengan mengisi dan update lengkap data diri siswa
                            </p>
                            <button class="btn btn-success w-100" data-toggle="modal" data-target="#modaldaftarPilihan"
                                data-dismiss="modal">Lanjut</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="moda-footer"></div>
        </div>
    </div>
</div>
<!-- ===== tutup modal ===== -->

<!-- ===== Modal daftar pilihan anak ====== -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="modaldaftarPilihan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content rounder">
            <div class="modal-header">
                <h5 class="modal-title">Selamat datang di TK Islma Al Muhajirin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <div class="modal-body login-modal">
                                    <div class="container">
                                            <div class="row">
                                                    <div class="col-md-12 mx-auto text-center">
                                                            <h5 class="pb-10">Hallo Gunawan</h5>
                                                            <img src="{{ url('assets\images\guru/gur-1.png') }}') }}" class="mb-10" alt="" style="height: 50px"></a>
                                                            <p class="mb-3 text-success">Anak mana yang ingin anda daftarkan?</p>
                                                    </div>
                                            </div>
                                            <div class="row kupon-potongan">
                                                    <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                    <p>Anak Kandung</p>
                                                                    <button class="btn btn-success w-100 text-light" data-toggle="modal" data-target="#daftaranak" data-dismiss="modal">Rizky Maulida Al Ambiya</button>
                                                                    <button class="btn btn-success w-100 text-light" data-toggle="modal" data-target="#modaldaftarPilihan" data-dismiss="modal">Maulida Ambiya</button>
                                                                    <button class="btn btn-success w-100 text-light" data-toggle="modal" data-target="#modaldaftarPilihan" data-dismiss="modal">Ambiya Rizky</button>
                                                            </div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-12">
                                                            <p>Saya ingin daftarkan siswa lain</p>
                                                            <button class="btn btn-success" data-toggle="modal" data-target="#modaldaftarPilihan" data-dismiss="modal">Tidak masuk dalam KK saya</button>
                                                    </div>
                                            </div>
                                            </p>
                                    </div>
                                </div> -->
            <div class="modal-body login-modal text-center">
                <div class="container">
                    <h4 class="mb-4">Hallo gunawan</h4>
                    <img class="rounded-circle mb-4" src="{{ url('assets/images/guru/gur3.png') }}') }}" style="height: 60px;">

                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            <p class="mb-10">Anak manakah yang ingin anda daftarkan?</p>
                            <p><small>Anak Kandung</small></p>
                            <a href="daftar-siswa.html" class="btn btn-success w-100 text-light">Rizky Maulid
                                Ambiya</a><br><br>
                            <a href="daftar-siswa.html" class="btn btn-success w-100 text-light">Maulid
                                Ambiya</a><br><br>
                            <a href="daftar-siswa.html" class="btn btn-success w-100 text-light">Ambiya
                                Rizky</a><br><br>
                            <p><small>Saya ingin daftarkan siswa lain</small></p>
                            <a href="Login.html" class="btn btn-success w-100 text-light">Tidak termasuk dalam
                                KK saya</a><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!-- ===== tutup modal ===== -->

<!-- modal slider -->
<div class="modal fade" id="modalSlider" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h5 class="modal-title mr-5" id="modalSlider">Slider</h5>
                <div class="d-flex justify-content-between align-items-center w-100 mr-4">
                    <p class="mr-5 text-success">Ukuran slider 1335 x 684 pixel</p>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash mr-2"></i>Hapus Semua</button>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin-sekolah/edit-brosur/slider') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                <div class="modal-body">
                    <!-- <p class="text-dark">Masukan link gambar bila perlu</p> -->
                    <div class="row">
                        <div class="col-md-6 form">
                            <div class="form-group">
                                <label for="linkgambar"><small>Link gambar</small></label>
                                <input type="text" name="link_gambar[]" class="form-control" id="linkgambar" placeholder="masukan link gambar">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center mt-2 mb-2">Tambah Gambar</p>
                            <div class="d-flex justify-content-center">
                                <label class="upload-img p-5">
                                    <i class="fas fa-plus go1"></i>
                                    <img src="" alt="" id="preview_slider">
                                    <input type="file" name="foto[]" id="foto_slider">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="link_value">

                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-success btn-sm" id="addLink">
                            <i class="fas fa-plus mr-2"></i> Tambah Link Gambar
                        </button>
                    </div>
                    <hr>
                    <div id="dragPhoto2" class="row">
                        @foreach (Auth::user()->sekolah->sekolahslider as $sliderfoto)
                        <div class="col-lg-4 col-md-4 edit-photo-grid">
                            <div class="position-relative">
                                <a class="close-button" href="">
                                    <i class="fas fa-times"></i>
                                </a>
                                <img src="{{ asset('storage/sekolah/slider/'.$sliderfoto->foto) }}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <p class="text-dark"><small>Checklist gambar untuk yang digunakan sebagai background brosur sekolah</small>
                    </p>
                    <button type="submit" class="btn btn-success"></i>Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal slider 2 -->
<div class="modal fade" id="modalPhoto" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h5 class="modal-title mr-5" id="modalSlider">Photo</h5>
                <div class="d-flex justify-content-between align-items-center w-100 mr-4">
                    <p class="mr-5">Ukuran slider 1335 x 684 pixel</p>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash mr-2"></i>Hapus Semua</button>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin-sekolah/edit-brosur/foto') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                <div class="modal-body">
                    <button class="btn btn-outline-success btn-sm mb-3" type="button" id="addFolder" data-toggle="modal" data-target="#modalFolder">
                        <i class="fas fa-folder-plus mr-2"></i>
                        Buat folder baru
                    </button>
                    <div class="nav-item mr-3" role="presentation" id="value_folder">
                            
                    </div>
                    <div class="col-md-4 mb-2">
                        <p class="text-center mt-2 mb-2">Tambah Gambar</p>
                        <div class="d-flex justify-content-center" id="hide_upload">
                            <label class="upload-img p-5">
                                <i class="fas fa-plus go2"></i>
                                <img src="" alt="" id="preview_folder">
                                <input type="file" name="foto" id="foto_folder">
                            </label>
                        </div>
                    </div>
                    @foreach(Auth::user()->sekolah->sekolahfoto as $fotos)
                       
                        <button class="btn btn-outline-success btn-sm btn-toggle btn-{{$fotos->nama_folder}} {{ $loop->first ? 'active' : '' }}" type="button" data="{{$fotos->nama_folder}}">
                            <i class="fas fa-folder mr-2"></i>
                            <input type="radio" name="nama_folder" value="{{$fotos->nama_folder}}">
                            {{ $fotos->nama_folder }}
                        </button>
                        {{-- <div class="nav-item mr-3 mt-5" id="value_folder" role="presentation">
                            <button class="btn btn-outline-success btn-sm btn-toggle btn-{{$fotos->nama_folder}} {{ $loop->first ? 'active' : '' }}" type="button" data="{{$fotos->nama_folder}}">
                                <i class="fas fa-folder mr-2"></i>
                                {{ $fotos->nama_folder }}
                            </button>
                        </div> --}}
                        {{-- <div class="row">
                            <div class="col-md-4">
                                <p class="text-center mt-2 mb-2">Tambah Gambar</p>
                                <div class="d-flex justify-content-center">
                                    <label class="upload-img p-5">
                                        <i class="fas fa-plus"></i>
                                        <input type="file" name="foto">
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show content-area content-{{$fotos->nama_folder}}" role="tabpanel" aria-labelledby="">
                                <div id="dragPhoto" class="row">
                                    <div class="col-lg-4 col-md-4 edit-photo-grid">
                                        <div class="form-check d-flex">
                                            <input class="form-check-input form-control-lg" type="checkbox" value="" id="defaultCheck1">
                                            <div class="position-relative" for="defaultCheck1">
                                                <a class="close-button" href="">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                <img class="thumbnail" src="{{ asset('storage/sekolah/foto/'.$fotos->foto) }}" alt="Folder">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <p class="text-dark"><small>Checklist gambar untuk yang digunakan sebagai background brosur sekolah</small>
                    </p>
                    <button type="submit" class="btn btn-success"></i>Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- modal folder --}}

<div class="modal fade" id="modalFolder" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h5 class="modal-title mr-5" id="modalSlider">Masukan Nama Folder</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <!-- <p class="text-dark">Masukan link gambar bila perlu</p> -->
                    <div class="row">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="masukan nama folder" aria-describedby="basic-addon1" name="nama_folder" id="nama_folder">
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-success" id="btnAppendFolder"></i>Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modalDataSekolah" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Sekolah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin-sekolah/edit-brosur/datasekolah') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <input type="hidden" name="sekolah_id" value="{{ Auth::User()->sekolah->id }}">
                    <div class="form-group mb-4">
                        <label for="Nama Sekolah"><strong>Nama sekolah</strong></label>
                        <input type="name" class="form-control" id="Nama Sekolah" value="{{ Auth::user()->sekolah->nama_sekolah }}" name="nama_sekolah">
                    </div>
                    <div class="form-group mb-4">
                        <label for="Alamat"><strong>Alamat</strong></label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" value="{{ Auth::user()->sekolah->alamat }}" name="alamat" aria-label="Alamat"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-success" type="button" type="button">Tambah Alamat</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="akreditasi"><strong>Akreditasi</strong></label>
                        <select class="form-control" id="akreditasi" name="akreditasi">
                            <option value="{{ Auth::User()->sekolah->akreditasi }}"></option>
                            <option value="Tidak Terakreditasi">Tidak Terakreditasi</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="tags"><strong>Tags</strong></label>
                        {{-- <input type="text" name="tags" id="tags"
                        class="form-control" value="{{ Auth::user()->sekolah->sekolahtag->tag_name }}"> --}}
                        <input type="text" name="tags" id="tags" class="form-control" value="{{ Auth::user()->sekolah->sekolahtag->tag_name }}">
                    </div>

                    <div class="input-group">
                        <div class="row">
                            <div class="col">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="logo-normal" name="logo_normal" aria-describedby="logo-normal" value="{{ Auth::User()->sekolah->logo_normal }}">
                                    <label class="custom-file-label" for="logo-normal"><small>Logo Normal</small></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="logo-memanjang" name="logo_samping" aria-describedby="logo-memanjang" value="{{ Auth::User()->sekolah->logo_samping }}">
                                    <label class="custom-file-label" for="logo-memanjang"><small>Logo Memanjang</small></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal running teks -->
<div class="modal fade" id="modalRunningText" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Running Teks</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @foreach (Auth::User()->sekolah->runningtext as $running)
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            value="{{ $running->text }}" readonly>
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-danger" type="button">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
                <form action="{{ url('admin-sekolah/edit-brosur/running-text') }}" method="post">
                    @csrf
                    <div id="running_value">
                    
                    </div>
                    <div class="form-group">
                        <a class="btn btn-outline-success btn-sm" id="addRunning"> <i class="fas fa-plus mr-2"></i>Tambah Running
                            teks</a>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm fr">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- tutup running teks -->


<!-- Keunggulan pop up -->
{{-- <div class="modal fade" id="modalRunningText" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" contenteditable="true">Keunggulan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Sebutkan keunggulan lembaga pendidikan anda</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-describedby="basic-addon1" value="Keunggulan">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-danger" type="button" id="button-addon1">x</button>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" aria-describedby="basic-addon1" value="Keunggulan">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-danger" type="button" id="button-addon1">x</button>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-success" type="button">Tambah Keunggulan</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div> --}}

{{-- modal promo --}}
<div class="modal fade" id="modalPromo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		    <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Promo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <form action="{{ url('admin-sekolah/edit-brosur/promo') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
					<div class="form-group mb-4">
						<label for="promo"><strong>Jumlah tiket promo yang inginditampilkan</strong></label>
						<select class="form-control" id="promo" name="jumlah_tiket">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
					<div class="form-group mb-4">
						<label><strong>Promo Yang dilakukan</strong></label>
						<div class="input-group">
							<div class="form-check inline-check mr-4">
                                <label class="form-check-label">
								    <input class="form-check-input" type="radio" name="jenis" value="Cashback" id="exampleRadios1" value="Cashback" checked> Cashback
								</label>
							</div>
							<div class="form-check inline-check">
                                <label class="form-check-label">
									<input class="form-check-input" type="radio" name="jenis" id="Presentase Diskon" value="Presentase Diskon" checked> Presentase Diskon
								</label>
							</div>
						</div>
					</div>
					<div class="form-group mb-4">
						<label for="jumlahPromo"><strong>Judul Promo</strong></label>
						<input type="text" class="form-control" id="jumlahPromo" placeholder="Judul Promo" name="judul">
					</div>
					<div class="form-group mb-4">
						<div class="row">
							<div class="col">
                                <label for="promo"><strong>Masa berlaku promo</strong></label>
                                <input type="date" class="form-control" name="awal">
                                {{-- <select class="form-control" id="promo">
                                    <option>12-8-2020</option>
                                    <option>Sampai</option>
                                </select> --}}
							</div>
							<div class="col">
                                <label for="promo">Sampai</label>
                                {{-- <select class="form-control" id="promo">
                                    <option>12-10-2020</option>
                                    <option>Berapa</option>
                                </select> --}}
                                <input type="date" class="form-control" name="akhir">
							</div>
						</div>
					</div>
					<div class="form-group mb-4">
						<label for="jumlahPromo"><strong>Syarat dan ketentuan Promo</strong></label>
						<textarea class="form-control" id="syarat" placeholder="" name="syarat"></textarea>
					</div>
					<div class="form-group">
						<div class="col-md-4">
							<div class="d-flex">
                                <label class="upload-img">
                                    <i class="fas fa-camera"></i>
                                    <input type="file" name="foto">
                                </label>
							</div>
							<small class="text-center">Upload Gambar Promo</small>
						</div>
                    </div>
                    <button type="submit" class="btn btn-success fr">Save changes</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal profile -->
<div class="modal fade" id="modalProfile" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center justify-content-between">
                <form action="{{ url('admin-sekolah/edit-brosur/page1', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page1" value="{{ Auth::user()->sekolah->sekolahpage->page1 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin-sekolah/edit-brosur/profile') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                    <div class="row">
                        <div class="col-md-4 mx-auto">
                            <p class="text-center">Masukan photo</p>
                            <div class="d-flex justify-content-center">
                                <label class="upload-img">
                                    <i class="fas fa-camera"></i>
                                    <input type="file" name="foto">
                                </label>
                            </div>
                            <span class="text-center mt-2"><small>Anda bisa menyisipkan foto pendiri / ketua yayasan / Kepala Sekolah dll</small></span>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group mb-4 mt-3">
                                <label for="nama">Nama</label>
                                <input class="form-control" id="syarat" placeholder="Nama ketua" name="nama">
                            </div>
                            <div class="form-group mb-4 mt-3">
                                <label for="nama">Jabatan</label>
                                <input class="form-control" id="syarat" placeholder="Jabatan" name="jabatan">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="Nama Sekolah">
                            <strong>Isi Profile, Sejarah, dll</strong>
                        </label>
                        <textarea id="summernote" name="profile"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success fr">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal guru -->
<div class="modal fade" id="modalGuru" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <form action="{{ url('admin-sekolah/edit-brosur/page2', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page2" value="{{ Auth::user()->sekolah->sekolahpage->page2 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari pengajar"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div id="drag" class="columns">
                        @foreach (Auth::user()->sekolah->sekolahguru as $guru)
                        <div class="col-md-3 col-sm-6">
                            <div class="text-center">
                                <div class="teacher-image">
                                    <div class="position-relative">
                                        <a class="close-button" href="">
                                            <i class="fas fa-times"></i>
                                        </a>
                                        <img src="{{ asset('storage/sekolah/guru/'.$guru->foto) }}" alt="teacher">
                                    </div>
                                </div>
                                <div class="teacher-content">
                                    <h6 class="name">{{ $guru->nama_pengajar }}</h6>
                                    <span class="designation">{{ $guru->jabatan }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-4 col-sm-6">
                            <div class="d-flex justify-content-center align-items-center">
                                <a class="tambah-guru text-center" href="#" data-target="#modalSubGuru"
                                    data-toggle="modal" data-dismiss="modal">
                                    <i class="fas fa-plus"></i>
                                    Tambah guru
                                </a>
                            </div>
                        </div>
                    </div>



                    <!-- <button class="btn btn-outline-success  type="button"mt-5" data-target="#modalSubGuru" data-toggle="modal"
                            data-dismiss="modal"><i class="fas fa-plus mr-2"></i>Tambah Guru</button> -->
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <p><small>Geser untuk mengatur posisi</small></p>
                <button class="btn btn-success" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- tutup Modal guru -->

<!-- modal guru Kedua -->
<div class="modal fade" id="modalSubGuru" tabindex="-1" role="dialog" aria-hidden="true"
    style="overflow: auto">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pengajarTitle">Tambah Pengajar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('admin-sekolah/edit-brosur/guru') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                    <div class="form-group">
                        <input type="text" class="form-control" id="namaPengajar" placeholder="Nama Pengajar" name="nama_pengajar">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="jabatan" placeholder="Jabatan / guru Bidang" name="jabatan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pendidikanterakhir" placeholder="Pendidikan terakhir" name="pend_terakhir">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="namasekolah" placeholder="Nama Sekolah" name="nama_sekolah">
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="achievement / prestasi keorganisasian" name="penghargaan">
                            <div class="input-group-append">
                                <button class="btn btn-outline-success" type="button" type="button">Tambah Achievment</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Visi" aria-label="visi" aria-describedby="basic-addon2" name="visi">
                            <div class="input-group-append">
                                <button class="btn btn-outline-success" type="button" type="button">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="moto" placeholder="Moto / Kiat pnyemangat" name="motto">
                    </div>
                    <div class="form-group col-4 mt-4">
                        <div class="img-slider">
                            <!-- <input type="file" class="custom-file-input" id="inputGroupFile01"> -->
                            <input type="file" class="img-thumbnail img-slider-edit" name="foto">
                        </div>
                        <small class="text-center">Foto pengajar</small>
                    </div>
                    <button type="submit" class="btn btn-success fr">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- tutup modal gutu kedua -->

<!-- modal fasilitas -->
<div class="modal fade" id="modalFasilitas" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">

            <div class="modal-header d-flex align-items-center">
                <form action="{{ url('admin-sekolah/edit-brosur/page3', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page3" value="{{ Auth::user()->sekolah->sekolahpage->page3 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-4 mr-4">
                <form action="{{ url('admin-sekolah/edit-brosur/fasilitas') }}" method="post">
                    @csrf
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                <div class="input-group mb-3 input-group-sm">
                                    <input type="text" class="form-control" placeholder="Cari fasilitas" aria-label="" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <h5 contenteditable="true">Fasilitas Sekolah</h5>
                        <small> (Tulisan ini bisa diubah)</small> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-4">
                                    <label for="">Nama Fasilitas</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="masukan nama fasilitas ..." name="nama_fasilitas[]" id="nama_fasilitas">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Fasilitas Icon</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="fa fa-info" name="icon[]" id="icon">
                            </div>
                        </div>
                        <div id="value_fasilitas">

                        </div>
                        <div class="row">
                            <button class="btn btn-outline-success btn-sm" type="button" id="addFasilitas">Tambah Fasilitas</button>
                        </div>
                        <div class="row mt-3 mb-3">
                            <ul class="col-md-12">
                                <li>Daftar icon dapat dilihat di 
                                    <a href="https://fontawesome.com/icons" target="_blank">Font Awesome</a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Gedung milik sendiri">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\school.png') }}"></span>
                                <input type="hidden" name="image_fasilitas" value="{{ url('assets\images\icon\school.png') }}">
                                <p class="pl-3">Gedung Milik sendiri</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Lab Bahasa">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\headset.png') }}"></span>
                                <p class="pl-3">Lab Bahasa</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Perpustakaan">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\bookshelf.png') }}"></span>
                                <p class="pl-3">Perpusatakaan</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Halaman Bermain">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\halaman bermain.png') }}"></span>
                                <p class="pl-3">Halaman bermain</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Lab IPA">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\lab.png') }}"></span>
                                <p class="pl-3">Lab Ipa</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Lab Komputer">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\tower-pc.png') }}"></span>
                                <p class="pl-3">Lab komputer</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Musholla">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\mosque.png') }}"></span>
                                <p class="pl-3">Musholla</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Kantin">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\lunch.png') }}"></span>
                                <p class="pl-3">Kantin</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Parkir Mobil">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\travel.png') }}"></span>
                                <p class="pl-3">Parkir Mobil</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Parkir Motor">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\motorcycle.png') }}"></span>
                                <p class="pl-3">Parkir Motor</p>
                            </div>
                        </div>
                        <hr>
                        <h5 contenteditable="true">Fasilitas Kelas</h5>
                        <small> (Tulisan ini bisa diubah)</small>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="AC">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\ac.png') }}"></span>
                                <p class="pl-3">Ruangan ber AC</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Projector">
                                <span><img src="{{ url('assets\images\icon\conference.png') }}"></span>
                                <p class="pl-3">Projector</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="CCTV">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\cctv.png') }}"></span>
                                <p class="pl-3">CCTV</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="WIFI">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\wifi.png') }}"></span>
                                <p class="pl-3">Wifi</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Audio Visual">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\audio visual.png') }}"></span>
                                <p class="pl-3">Audio Visual</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Mesjid Ibadah">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\mosque.png') }}"></span>
                                <p class="pl-3">Mesjid tempat Ibadah</p>
                            </div>
                        </div>
                        <hr>
                        <h5 contenteditable="">Fasiitas Lingkungan</h5>
                        <small> (Tulisan ini bisa diubah)</small>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Mesjid">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\masjid.png') }}"></span>
                                <p class="pl-3">Mesjid</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Minimarket">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\minimarket.png') }}"></span>
                                <p class="pl-3">Minimarket</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="ATM BCA">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\atm.png') }}"></span>
                                <p class="pl-3">ATM BCA</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Tukan Fotokopi">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\fotokopi.png') }}"></span>
                                <p class="pl-3">Tukang Fotokopi</p>
                            </div>
                            <div class="col-md-4 col-sm-12 fasilitas-detail d-flex align-items-center">
                                <input class="form-check-input" name="nama_fasilitas[]" type="checkbox" value="Pasar">
                                <span class="ml-2"><img src="{{ url('assets\images\icon\pasar.png') }}"></span>
                                <p class="pl-3">Pasar</p>
                            </div>
                        </div> --}}
                        <button type="submit" class="btn btn-success fr">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- tutup modal fasilitas -->

<!-- modal jam belajar -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalJadwal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content rounder">
            <div class="modal-header d-flex align-items-center">
                <form action="{{ url('admin-sekolah/edit-brosur/page5', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page5" value="{{ Auth::user()->sekolah->sekolahpage->page5 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin-sekolah/edit-brosur/jadwal') }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="sekolah_id" value="{{ Auth::User()->sekolah->id }}">
                    <div class="d-flex justify-content-end">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jumlah_sesi" id="inlineRadio1"
                                    value="Satu Sesi"> <strong>Satu Sesi </strong>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jumlah_sesi" id="inlineRadio2"
                                    value="Dua Sesi"> <strong>Dua Sesi </strong>
                            </label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="jumlah_sesi" id="inlineRadio3"
                                    value="Tiga Sesi"> <strong>Tiga Sesi </strong>
                            </label>
                        </div>
                    </div>
                <hr>
                <div class="d-flex justify-content-around">
                    <div class="col-md-4">
                        <label for="">
                            <strong>Hari</strong>
                        </label>
                    </div>
                    <div class="col-md-3">
                        <label for="">
                            <strong>Jam</strong>
                        </label>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                    <div class="d-flex justify-content-around">
                        <div class="col-md-4 pr0">
                            <div class="form-group">
                                <select name="hari[]" class="form-control" id="hari">
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 pr0">
                            <div class="form-group">
                                <input type="time" class="form-control" name="dari_jam[]" id="dari_jam">
                            </div>
                        </div>
                        <div class="col-md-3 pr0">
                            <div class="form-group">
                                <input type="time" class="form-control" name="sampai_jam[]" id="sampai_jam">
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div id="time_value">

                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-success btn-sm" type="button" id="addTime">Tambah Jadwal</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- buka jam belajar -->

<!-- modal prestasi -->
<div class="modal fade" id="modalPrestasi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <form action="{{ url('admin-sekolah/edit-brosur/page6', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page6" value="{{ Auth::user()->sekolah->sekolahpage->page6 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-2 lead text-dark"><small>Sebutkan prestasi yang pernah diraih dilembaga pendidikan
                        anda</small></p>
                <form action="{{ url('admin-sekolah/edit-brosur/prestasi') }}" method="post">
                    @csrf
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}" id="sekolah_id">
                    <div class="input-group mb-3">
                        <textarea type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Kalimat pembuka" name="kalimat_pembuka"></textarea>
                    </div>
                    <div id="prestasi_value">

                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-success btn-sm" id="addPrestasi">
                            <i class="fas fa-plus mr-2"></i>
                            Tambah Prestasi</button>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success fr">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- buka modal program -->
<div class="modal fade" id="modalProgram" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <form action="{{ url('admin-sekolah/edit-brosur/page7', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page7" value="{{ Auth::user()->sekolah->sekolahpage->page7 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-2 lead text-dark"><small>Program yang ada pada lembaga pendidikan anda.</small></p>
                {{-- <form action="{{ url('admin-sekolah/edit-brosur/program') }}" method="post">
                    @csrf --}}
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}" id="sekolahId">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Program 1" name="nama_program" id="namaProgram">
                        <div class="input-group-append">
                            <button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
                            <button class="btn btn-outline-secondary" data-target="#subModalProgram" data-toggle="modal"
                                data-dismiss="modal" type="button" id="btn-deskripsi">Deskripsi
                                Program</button>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <button class="btn btn-outline-success  type="button"btn-sm">
                            <i class="fas fa-plus mr-2"></i>
                            Tambah Program</button>
                    </div> --}}
                    {{-- <button type="submit" class="btn btn-success fr">Save</button> --}}
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>
<!-- tutup modal program -->

<!-- buka sub modal -->
<div class="modal fade" id="subModalProgram" role="dialog" tabindex="-1" aria-hidden="true"
    style="overflow: auto">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <h5 class="modal-title" contenteditable="true">Deskripsi Program</h5>
                <button class="ml-3 btn btn-outline-success btn-xs">Rename</button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin-sekolah/edit-brosur/add-program') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <input type="hidden" name="sekolah_id" id="sek_id">
                    <input type="hidden" name="nama_program" id="name_pro">
                    <div class="form-group col-4">
                        <div class="">
                            <label class="upload-img">
                                <i class="fas fa-camera"></i>
                                <input type="file" name="foto">
                            </label>
                        </div>
                        <small class="text-center">Sisipkan Photo</small>
                    </div>
                    <div class="form-group mb-2">
                        <label for="Nama Sekolah" contenteditable="true"><strong>Apa itu Program
                                1</strong></label class="ml-3 btn btn-outline-success btn-sm">Rename</button>
                        <textarea class="form-control" id="syarat" placeholder="Deskripsi Program" name="deskripsi" ></textarea>
                    </div>
                    {{-- <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Tulis kolom">
                        <div class="input-group-append">
                            <button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
                            <button class="btn btn-outline-success" type="button" type="button">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div> --}}
    
                    <div class="form-group mb-2">
                        <label for="Nama Sekolah" contenteditable="true"><strong>Keunggulan
                                Program</strong></label class="ml-3 btn btn-outline-success btn-sm">Rename</button>
                        <textarea class="form-control" id="syarat" placeholder="Keunggulan Program Anda" name="keunggulan"></textarea>
                    </div>
                    {{-- <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Tulis kolom">
                        <div class="input-group-append">
                            <button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
                            <button class="btn btn-outline-success" type="button" type="button">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div> --}}
    
                    <div class="form-group mb-2">
                        <label for="Nama Sekolah" contenteditable="true"><strong>Yang dipelajari
                                Program ini</strong></label class="ml-3 btn btn-outline-success btn-sm">Rename</button>
                        <textarea class="form-control" id="syarat" placeholder="Tulis kalimat" name="yang_dipelajari"></textarea>
                    </div>
                    {{-- <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Tulis kolom">
                        <div class="input-group-append">
                            <button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
                            <button class="btn btn-outline-success" type="button" type="button">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div> --}}
    
                    <div class="form-group mb-2">
                        <label for="Nama Sekolah" contenteditable="true"><strong>Setelah Lulus /
                                Prospek kerja</strong></label class="ml-3 btn btn-outline-success btn-sm">Rename</button>
                        <textarea class="form-control" id="syarat" placeholder="Tulis kalimat" name="prospek"></textarea>
                    </div>
                    {{-- <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Tulis kolom">
                        <div class="input-group-append">
                            <button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
                            <button class="btn btn-outline-success" type="button" type="button">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div> --}}
    
                    <hr>
    
                        <div class="d-flex justify-content-end">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="jumlah_sesi" id="inlineRadio1"
                                        value="Satu Sesi"> <strong>Satu Sesi </strong>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="jumlah_sesi" id="inlineRadio2"
                                        value="Dua Sesi"> <strong>Dua Sesi </strong>
                                </label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="jumlah_sesi" id="inlineRadio3"
                                        value="Tiga Sesi"> <strong>Tiga Sesi </strong>
                                </label>
                            </div>
                        </div>
    
                    <hr>
    
                    <div class="form-group mb-2">
                        <label for="Nama Sekolah" contenteditable="true"><strong>Syarat Pendaftaran</strong></label
                            class="ml-3 btn btn-outline-success btn-sm">Rename</button>
                        <textarea class="form-control" id="syarat" placeholder="Tulis kalimat" name="syarat"></textarea>
                    </div>
                    {{-- <div class="input-group mb-5">
                        <input type="text" class="form-control" placeholder="Tulis kolom">
                        <div class="input-group-append">
                            <button class="btn btn-outline-danger" type="button"><i class="fas fa-trash"></i></button>
                            <button class="btn btn-outline-success" type="button" type="button">Tambah
                                kolom</button>
                        </div>
                    </div> --}}
    
                    <label for="Biaya" contenteditable="true"><strong>Biaya</strong></label>
                    <button class="ml-3 btn btn-outline-success btn-xs">Rename</button>
                    <div id="rincian_value">
                        
                    </div>
                    <button class="btn btn-outline-success" type="button" id="addRincian"><i class="fas fa-plus"></i></button>
    
                </div>
                <div class="modal-footer mb-4">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Aktifkan tombol daftar
                        </label>
                    </div>
                    <button class="btn btn-success" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- tutup sub modal -->

<!-- modal prakerin -->

<div class="modal fade" id="modalPrakerin" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{ url('admin-sekolah/edit-brosur/page8', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page8" value="{{ Auth::user()->sekolah->sekolahpage->page8 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead"><small>Program yang ada di Lembaga Pendidkan anda</small></p>
                <form action="{{ url('admin-sekolah/edit-brosur/prakerin') }}" method="post">
                    @csrf
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                    <div class="input-group mb-3">
                        <textarea type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Kalimat pembuka" name="kalimat_pembuka"></textarea>
                    </div>
                    <div id="prakerin_value">
    
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-success" id="addPrakerin">Tambah Kolom</button>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 fr">
                            <div class="pull-left">Geser untuk mengatur posisi</div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- tuutp modal prakerin -->

<!-- modal bursa kerja -->
<div class="modal fade" id="modalBursaKerja" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{ url('admin-sekolah/edit-brosur/page9', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page9" value="{{ Auth::user()->sekolah->sekolahpage->page9 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead"><small>Program yang ada di Lembaga Pendidkan anda</small></p>
                <form action="{{ url('admin-sekolah/edit-brosur/bursa-kerja') }}" method="post">
                    @csrf
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                    <div class="input-group mb-3">
                        <textarea type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Kalimat pembuka" name="kalimat_pembuka"></textarea>
                    </div>
                    <div id="bursa_value">
    
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-success" type="button" id="addBursa">Tambah Kolom</button>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 fr">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- tuutp modal bursa Kerja -->

<!-- modal Beasiswa -->
<div class="modal fade" id="modalBeasiswa" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{ url('admin-sekolah/edit-brosur/page10', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page10" value="{{ Auth::user()->sekolah->sekolahpage->page10 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead text-success"><small>Program yang ada di Lembaga Pendidkan anda</small></p>
                <form action="{{ url('admin-sekolah/edit-brosur/beasiswa') }}" method="post">
                    @csrf
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                    <div class="input-group mb-3">
                        <textarea type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Kalimat pembuka" name="kalimat_pembuka"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Nama Beasiswa" name="nama_beasiswa">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Deskripsi" name="deskripsi">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Nama perusahaan pemberi" name="peusahaan_pemberi">
                    </div>
                    <div id="beasiswa_value">

                    </div>
    
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-success btn-sm" id="addBeasiswa"><i class="fas fa-plus mr-2"></i>Tambah
                            Syarat</button>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- tuutp modal Beasiswa -->

<!-- buka modal qna -->
<div class="modal fade" id="modalQna" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{ url('admin-sekolah/edit-brosur/page11', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page11" value="{{ Auth::user()->sekolah->sekolahpage->page11 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin-sekolah/edit-brosur/faq') }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Pertanyaan" name="pertanyaan">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Jawaban" name="jawaban">
                        {{-- <div class="input-group-prepend">
                            <button class="btn btn-outline-danger" type="button" id="button-addon1">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div> --}}
                    </div>
    
                    {{-- <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Pertanyaan">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Jawaban">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-danger" type="button" id="button-addon1">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
    
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Pertanyaan">
                        <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Jawaban">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-danger" type="button" id="button-addon1">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Tambah QNA</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- tutup modal qna -->

<!-- modal kontak person -->
<div class="modal fade" id="modalKontak" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{ url('admin-sekolah/edit-brosur/page12', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page12" value="{{ Auth::user()->sekolah->sekolahpage->page12 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin-sekolah/edit-brosur/kontak') }}" method="post">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                <p class="mb-2 lead text-dark"><small>Masukan beberapa kontak penting agar orang lain bisa
                        menghubungi anda</small></p>
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fab fa-whatsapp"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            value="{{ Auth::user()->no_whatsapp }}" name="no_whatsapp">
                    </div>
    
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-globe"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            value="{{ Auth::user()->sekolah->link_sekolah }}" name="link_sekolah">
                    </div>
    
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-phone"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            value="{{ Auth::user()->sekolah->no_telepon }}" name="no_telepon">
                    </div>
    
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            value="{{ Auth::user()->email }}" name="email">
                    </div>
                    <!-- <div class="form-group">
                        <button class="btn btn-outline-success  type="button"btn-sm">
                            <i class="fas fa-plus mr-2"></i>
                            Tambah Prestasi</button>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- tutup modal kontak -->

<!-- modal sosial media -->
<div class="modal fade" id="modalSosialMedia" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{ url('admin-sekolah/edit-brosur/page13', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page13" value="{{ Auth::user()->sekolah->sekolahpage->page13 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin-sekolah/edit-brosur/sosialmedia') }}" method="post">
                @csrf
                <div class="modal-body">
                <p class="mb-2 lead text-dark"><small>Masukan akun sosial media sekolah anda, supaya bisa dicari
                        dengan mudah</small></p>
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fab fa-facebook-square"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Nama facebook" name="facebook">
                    </div>
    
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fab fa-twitter-square"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Akun twitter" name="twitter">
                    </div>
    
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fab fa-instagram"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Akun Instagram" name="instagram">
                    </div>
    
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fab fa-youtube"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Youtube Sekolah" name="youtube">
                    </div>    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- tutup modal sosial media -->

<!-- Modal Berita -->

<div class="modal fade" id="modalBerita" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <form action="{{ url('admin-sekolah/edit-brosur/page15', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page15" value="{{ Auth::user()->sekolah->sekolahpage->page15 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="lead text-success mb-3"><small>Masukan berita-berita tentang sekolah anda</small></p>
                <form action="{{ url('admin-sekolah/edit-brosur/berita') }}" method="post">
                    @csrf
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Judul Berita" name="judul">
                    </div>
    
                    <div class="input-group mb-3">
                        <textarea type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Isi berita / Deskripsi" name="deskripsi"></textarea>
                    </div>
    
                    <div class="d-flex">
                        <label class="upload-img">
                            <i class="fas fa-camera"></i>
                            <input type="file" name="foto">
                        </label>
                    </div>
                    <span class="text-center w-100">
                        <small>Masukan gambar untuk thumbnail berita</small>
                    </span>
                    <button type="submit" class="btn btn-success text-right">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Tutup Modal Berita -->

	<!-- modal eskul -->
<div class="modal fade" id="modalEskul" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex align-items-center">
                <form action="{{ url('admin-sekolah/edit-brosur/page4', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page4" value="{{ Auth::user()->sekolah->sekolahpage->page4 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('admin-sekolah/edit-brosur/ekstra') }}" method="post">
                @csrf
                <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                <div class="modal-body">
                    <small>Masukan ekstrakulikuler yang ada disekolah anda</small>
                    <div class="input-group mb-3">
                        <textarea type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Kalimat pembuka" name="kalimat_pembuka"></textarea>
                    </div>
                    <div id="ekstra_value">
    
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-success btn-sm" type="button" id="addEkstra">Tambah Kolom</button>
                    </div>
                    {{-- <div class="form-group">
                        <button type="button" id="addEkstra" class="btn btn-outline-success btn-sm"><i class="fas fa-plus mr-2"></i>
                            Tambah Eksul
                        </button>
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- tutup modal eskul -->

<!-- modal Video -->
<div class="modal fade" id="modalVideo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{ url('admin-sekolah/edit-brosur/page14', Auth::user()->sekolah->sekolahpage->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="page14" value="{{ Auth::user()->sekolah->sekolahpage->page14 }}" class="page-custom">
                    <button class="ml-3 btn btn-outline-success btn-xs" type="submit">Rename</button>
                </form>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ url('admin-sekolah/edit-brosur/video') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="sekolah_id" value="{{ Auth::user()->sekolah->id }}">
                    <div class="input-group mt-2 mb-3">
                        <input type="text" class="form-control" aria-describedby="basic-addon1"
                            placeholder="Link Youtube" name="link">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-danger" type="button" id="button-addon1">
                                <i class="fas fa-trash"></i>
                            </button>
                            <button class="btn btn-outline-success" type="submit" id="button-addon1">
                                <i class="fas fa-plus"></i>
                            </button>
    
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- tutup modal video -->

<div class="modal fade" id="moreGuru" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">

            <div class="modal-header d-flex align-items-center">
                <h5 class="modal-title" id="titleFasilitas" contenteditable="true">
                    More Guru </h5> <button class="ml-3 btn btn-outline-success btn-xs">Rename</button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-4 mr-4">
                <div class="row">
                    @foreach (Auth::user()->sekolah->sekolahguru as $gurus)
                        <div class="col-md-3">
                            <div class="single-teacher text-center">
                                <div class="teacher-image">
                                    <a href="{{ url('admin-sekolah/guru/detail', $gurus->id) }}">
                                        <img src="{{ asset('storage/sekolah/guru/'.$gurus->foto) }}" alt="teacher">
                                    </a>
                                </div>
                                <div class="teacher-content">
                                    <h4 class="name"><a href="{{ url('admin-sekolah/guru/detail', $gurus->id) }}">{{ $gurus->nama_pengajar }}</a></h4>
                                    <span class="designation">{{ $gurus->jabatan }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detailGuru" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">

            <div class="modal-header d-flex align-items-center">
                <h5 class="modal-title" id="titleFasilitas" contenteditable="true">
                    More Guru </h5> <button class="ml-3 btn btn-outline-success btn-xs">Rename</button>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-4 mr-4">
                <div class="row">
                    @foreach (Auth::user()->sekolah->sekolahguru as $gurus)
                        <div class="col-md-3">
                            <div class="single-teacher text-center">
                                <div class="teacher-image">
                                    <a href="guru-detail.html">
                                        <img src="{{ asset('storage/sekolah/guru/'.$gurus->foto) }}" alt="teacher">
                                    </a>
                                </div>
                                <div class="teacher-content">
                                    <h4 class="name"><a href="guru-detail.html">{{ $gurus->nama_pengajar }}</a></h4>
                                    <span class="designation">{{ $gurus->jabatan }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fr{
        float: right;
        position: relative;
    }
    .pr0{
        padding-right: 0 !important;
    }
    #delete_add_more_item11{
        margin-top: 10px;
    }
</style>