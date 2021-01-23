<script id="document-template" type="text/x-handlebars-template">
    <div class="delete_add_more_item tab" id="delete_add_more_item">
        <div class="input-group mb-3">
            <input type="hidden" name="sekolah_id[]" value="{{ Auth::user()->sekolah->id }}" id="sekolah_id">
            <input type="text" class="form-control" aria-describedby="basic-addon1" name="text[]" id="text">
            <div class="input-group-prepend">
                <button class="btn btn-outline-danger" type="button">
                    <i class="fas fa-trash removeaddmore" style="cursor: pointer;"></i>
                </button>
            </div>
        </div>
    </div>
</script>

<script id="document-template2" type="text/x-handlebars-template">
    <div class="delete_add_more_item2 tab2" id="delete_add_more_item2">
        <div class="input-group mb-4">
            <input type="text" class="form-control" aria-describedby="basic-addon1"
                placeholder="Prestasi yang anda miliki" name="nama_prestasi[]" id="nama_prestasi">
            <div class="input-group-prepend">
                <button class="btn btn-outline-danger" type="button" id="button-addon1">
                    <i class="fas fa-trash removeaddmore2" style="cursor: pointer;"></i>
                </button>
            </div>
        </div>
    </div>
</script>

<script id="document-template3" type="text/x-handlebars-template">
    <div class="delete_add_more_item3 tab3" id="delete_add_more_item3">
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-describedby="basic-addon1"
                placeholder="Nama perusahaan" name="nama_perusahaan[]" id="nama_perusahaan">
            <div class="input-group-prepend">
                <button class="btn btn-outline-danger" type="button" id="button-addon1">
                    <i class="fas fa-trash removeaddmore3"></i>
                </button>
            </div>
        </div>
    </div>
</script>

<script id="document-template4" type="text/x-handlebars-template">
    <div class="delete_add_more_item4 tab4" id="delete_add_more_item4">
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-describedby="basic-addon1"
                placeholder="Nama perusahaan" name="nama_perusahaan[]" id="nama_perusahaan">
            <div class="input-group-prepend">
                <button class="btn btn-outline-danger" type="button" id="button-addon1">
                    <i class="fas fa-trash removeaddmore4"></i>
                </button>
            </div>
        </div>
    </div>
</script>

<script id="document-template5" type="text/x-handlebars-template">
    <div class="delete_add_more_item5 tab5" id="delete_add_more_item5">
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Syarat pendaftaran" id="syarat" name="syarat[]">
            <div class="input-group-prepend">
                <button class="btn btn-outline-danger" type="button" id="button-addon1">
                    <i class="fas fa-trash removeaddmore5"></i>
                </button>
            </div>
        </div>
    </div>
</script>

<script id="document-template6" type="text/x-handlebars-template">
    <div class="delete_add_more_item6 tab6" id="delete_add_more_item6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-describedby="basic-addon1"
                placeholder="Nama Ekstrakulikuler" name="nama_ekstrakulikuler[]" id="nama_ekstrakulikuler">
            <div class="input-group-prepend">
                <button class="btn btn-outline-danger" type="button" id="button-addon1">
                    <i class="fas fa-trash removeaddmore6"></i>
                </button>
            </div>
        </div>
    </div>
</script>

<script id="document-template7" type="text/x-handlebars-template">
    <div class="delete_add_more_item7 tab7" id="delete_add_more_item7">
        <div class="row">
            <div class="col-md-6">
                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Rincian" name="rincian[]" id="rincian">
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Harga" name="harga[]" id="harga">
                    <div class="input-group-append">
                        <button class="btn btn-outline-danger" type="button"><i class="fas fa-trash removeaddmore7"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>

<script id="document-template8" type="text/x-handlebars-template">
    <div class="delete_add_more_item8 tab8" id="delete_add_more_item8">
        <li class="nav-item mr-3" role="presentation">
            <input type="text" class="btn btn-outline-success btn-sm" name="nama_folder[]" id="nama_folder ">
                <i class="fas fa-folder mr-2"></i>
                
        
        </li>
    </div>
</script>

<script id="document-template9" type="text/x-handlebars-template">
    <div class="delete_add_more_item9 tab" id="delete_add_more_item9">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  
                    <input type="text" name="link_gambar[]" class="form-control" id="linkgambar" placeholder="masukan link gambar">
                </div>
            </div>
            <div class="col-md-4">
                <p class="text-center mt-2 mb-2">Tambah Gambar</p>
                <div class="d-flex justify-content-center">
                    <label class="upload-img p-5">
                        <i class="fas fa-plus go"></i>
                        <img src="" alt="" id="preview_slider">
                        <input type="file" name="foto[]" id="foto_slider">
                    </label>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-outline-danger" type="button">
                    <i class="fas fa-trash removeaddmore9"></i>
                </button>
            </div>
        </div>
    </div>
</script>

<script id="document-template10" type="text/x-handlebars-template">
    <div class="delete_add_more_item10 tab" id="delete_add_more_item10">
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
            <div class="col-md-2">
                <button class="btn btn-outline-danger" type="button">
                    <i class="fas fa-trash removeaddmore10"></i>
                </button>
            </div>
        </div>
    </div>
</script>

<script id="document-template11" type="text/x-handlebars-template">
    <div class="delete_add_more_item11 tab" id="delete_add_more_item11">
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
    </div>
</script>