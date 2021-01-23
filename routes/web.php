<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//    return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'HomeController@index')->name('home');
// Route::get('/sendmail', 'HomeController@kirim_email');
Route::get('/detail-sekolah/{slug}', [HomeController::class, 'detail_sekolah'])->name('detail-sekolah');

//------------------ Frontend Brosur Digital ----------------------------------------------
//Running teks
// Route::post('/store-running-teks', [BrosurDigitalController::class, 'storeRunningTeks'])->name('store-running-teks');
// Route::put('/update-running-teks', [BrosurDigitalController::class, 'updateRunningTeks'])->name('update-running-teks');
// Route::delete('/delete-running-teks/{id}', [BrosurDigitalController::class, 'deleteRunningTeks'])->name('delete-running-teks');
// //kontak sekolah
// Route::put('/kontak_sekolah/{id}', [BrosurDigitalController::class, 'kontakSekolah'])->name('kontak_sekolah');
// Route::put('/medsos_sekolah/{id}', [BrosurDigitalController::class, 'medsosSekolah'])->name('medsos_sekolah');
// Route::put('/data_sekolah/{id}', [BrosurDigitalController::class, 'dataSekolah'])->name('data_sekolah');
// Route::post('/promo_sekolah', [BrosurDigitalController::class, 'promoSekolah'])->name('promo_sekolah');
// Route::delete('/delete_promo/{id}', [BrosurDigitalController::class, 'destroyPromoSekolah'])->name('delete-promo-sekolah');
// Route::post('/fasilitas_sekolah', [BrosurDigitalController::class, 'fasilitasSekolah'])->name('fasilitas_sekolah');
// Route::post('/store-teachers', [BrosurDigitalController::class, 'storeTeacher'])->name('store-teachers');
// //QNA
// Route::post('/store-qna', [BrosurDigitalController::class, 'storeQNA'])->name('store-qna');
// //video
// Route::post('/store-videos', [BrosurDigitalController::class, 'storeVideos'])->name('store-videos');
// Route::put('/update-videos', [BrosurDigitalController::class, 'updateVideos'])->name('update-videos');
// Route::delete('/delete-videos/{id}', [BrosurDigitalController::class, 'deleteVideos'])->name('delete-videos');

// //Register Sekolah
// Route::get('/daftar-sekolah', [DaftarSekolahController::class, 'index'])->name('daftar-sekolah');
// Route::get('/daftar-kategori-sekolah', [DaftarSekolahController::class, 'kategori'])->name('daftar-kategori-sekolah');
// Route::get('/register-sekolah', [DaftarSekolahController::class, 'register_sekolah_1'])->name('register-sekolah');
// Route::post('/register-sekolah-2', [DaftarSekolahController::class, 'register_sekolah_2'])->name('register-sekolah-post-2');
// Route::post('/register-sekolah-3', [DaftarSekolahController::class, 'register_sekolah_3'])->name('register-sekolah-post-3');
// Route::post('/register-sekolah-4', [DaftarSekolahController::class, 'register_sekolah_4'])->name('register-sekolah-post-4');

// //Admin Yayasan
// Route::prefix('yayasan')
// 	->namespace('Yayasan')
// 	->group(function(){
// 		Route::get('/', [DashboardController::class, 'index'])->name('yayasan-dashboard');
// 	});

//Admin Sekolah
// Route::prefix('sekolah')
// 	->middleware(['auth:sanctum', 'verified','role:Sekolah'])
// 	->namespace('Sekolah')
// 	->group(function(){
// 		Route::get('/', [DashboardSekolahController::class, 'index'])->name('sekolah-dashboard');
// 		//Data Sekolah
// 		Route::get('/data-sekolah', [InfoSekolahController::class, 'data_sekolah'])->name('data-sekolah');
// 		Route::put('/data-sekolah/{id}', [InfoSekolahController::class, 'update_sekolah'])->name('update-data-sekolah');
// 		Route::put('/update-profile/{id}', [InfoSekolahController::class, 'update_profile'])->name('update-profile');
// 		//kontak sekolah
// 		Route::get('/kontak-sekolah', [InfoSekolahController::class, 'kontak_sekolah'])->name('kontak-sekolah');
// 		Route::put('/update-kontak-sekolah/{id}', [InfoSekolahController::class, 'update_kontak'])->name('update-kontak-sekolah');
// 		//cabang sekolah
// 		Route::get('/cabang-sekolah', [InfoSekolahController::class, 'cabang_sekolah'])->name('cabang-sekolah');
// 		//kategori dan program
// 		Route::get('/kategori-program', [InfoSekolahController::class, 'kategori_program_sekolah'])->name('kategori-program');
// 	});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Admin Sekolah
Route::namespace('AdminSekolah')->group(function(){
	Route::group(['prefix' => 'admin-sekolah'], function() {
		// login dan register
		Route::get('login', 'LoginController@showLogin');
		Route::post('login', 'LoginController@postLogin');
		Route::get('register', 'RegisterController@showRegister');
		Route::get('register/jenis-sekolah', 'RegisterController@showRegisterJenis');
		Route::post('register/jenis-sekolah', 'RegisterController@postRegisterJenis');
		Route::get('register/data-sekolah', 'RegisterController@showRegisterData');
		Route::post('register/data-sekolah', 'RegisterController@postRegisterData');
		Route::get('register/verifikasi', 'RegisterController@showVerifikasi');
		Route::post('register/verifikasi', 'RegisterController@postVerifikasi');
		Route::get('/register/verify', 'RegisterController@verifyUser')->name('admin-sekolah.register.verify');
		
		// get provinsi kabkot kecamatan kelurahan data
		Route::get('register/filter-kabkot', 'AjaxController@filterKabkot');
		Route::get('register/filter-kecamatan', 'AjaxController@filterKecamatan');
		Route::get('register/filter-kelurahan', 'AjaxController@filterKelurahan');
	
		// dashboard
		Route::get('dashboard', 'DashboardController@home');
		// Brosur digital
		Route::get('brosur-digital', 'BrosurController@index');
		Route::get('edit-brosur', 'BrosurController@edit');
		// tambah running text
		Route::post('edit-brosur/running-text', 'BrosurController@postRunningText');
		Route::patch('edit-brosur/datasekolah', 'BrosurController@patchDataSekolah');
		Route::post('edit-brosur/promo', 'BrosurController@postPromo');
		Route::post('edit-brosur/profile', 'BrosurController@postProfile');
		Route::post('edit-brosur/guru', 'BrosurController@postGuru');
		// detail guru
		Route::get('guru/detail/{id}', 'BrosurController@detailGuru');
		Route::post('edit-brosur/fasilitas', 'BrosurController@postFasilitas');
		Route::post('edit-brosur/prestasi', 'BrosurController@postPrestasi');
		Route::post('edit-brosur/prakerin', 'BrosurController@postPrakerin');
		Route::post('edit-brosur/bursa-kerja', 'BrosurController@postBursa');
		Route::post('edit-brosur/beasiswa', 'BrosurController@postBeasiswa');
		Route::post('edit-brosur/faq', 'BrosurController@postFaq');
		Route::patch('edit-brosur/kontak', 'BrosurController@patchKontak');
		Route::post('edit-brosur/sosialmedia', 'BrosurController@postSosial');
		Route::post('edit-brosur/berita', 'BrosurController@postBerita');
		Route::post('edit-brosur/slider', 'BrosurController@postSlider');
		Route::post('edit-brosur/foto', 'BrosurController@postFoto');
		Route::post('edit-brosur/ekstra', 'BrosurController@postEkstra');
		Route::post('edit-brosur/jadwal', 'BrosurController@postJadwal');
		Route::post('edit-brosur/video', 'BrosurController@postVideo');
		Route::post('edit-brosur/program', 'BrosurController@postProgram')->name('edit-brosur/program');
		Route::post('edit-brosur/add-program', 'BrosurController@postAddProgram');
		Route::post('edit-brosur/add-folder', 'BrosurController@postFolder')->name('edit-brosur/add-folder');

		// update page sekolah
		Route::patch('edit-brosur/page1/{id}', 'BrosurController@patchPage1');
		Route::patch('edit-brosur/page2/{id}', 'BrosurController@patchPage2');
		Route::patch('edit-brosur/page3/{id}', 'BrosurController@patchPage3');
		Route::patch('edit-brosur/page4/{id}', 'BrosurController@patchPage4');
		Route::patch('edit-brosur/page5/{id}', 'BrosurController@patchPage5');
		Route::patch('edit-brosur/page6/{id}', 'BrosurController@patchPage6');
		Route::patch('edit-brosur/page7/{id}', 'BrosurController@patchPage7');
		Route::patch('edit-brosur/page8/{id}', 'BrosurController@patchPage8');
		Route::patch('edit-brosur/page9/{id}', 'BrosurController@patchPage9');
		Route::patch('edit-brosur/page10/{id}', 'BrosurController@patchPage10');
		Route::patch('edit-brosur/page11/{id}', 'BrosurController@patchPage11');
		Route::patch('edit-brosur/page12/{id}', 'BrosurController@patchPage12');
		Route::patch('edit-brosur/page13/{id}', 'BrosurController@patchPage13');
		Route::patch('edit-brosur/page14/{id}', 'BrosurController@patchPage14');
		Route::patch('edit-brosur/page15/{id}', 'BrosurController@patchPage15');
	});
});

// Admin Skolin
Route::namespace('AdminSkolin')->group(function(){
	Route::group(['prefix' => 'skolin-panel'], function(){
		Route::get('login', 'LoginController@showLogin');
		Route::post('login', 'LoginController@postLogin');
		
		Route::get('dashboard', 'DashboardController@home');
		Route::get('daftar-sekolah', 'Pages\SekolahController@index');
	});
});

// Page Pencarian
Route::namespace('Page')->group(function(){
	Route::group(['prefix' => 'cari'], function(){
		Route::get('all-sekolah', 'CariController@cariSekolah');
		Route::get('daycare', 'CariController@daycare');
		Route::get('filter-daycare', 'CariController@getDayCare');
		Route::get('preschool', 'CariController@preschool');
		Route::get('filter-preschool', 'CariController@getPreSchool');
		Route::get('tk', 'CariController@tk');
		Route::get('filter-tk', 'CariController@getTk');
		Route::get('primary', 'CariController@primary');
		Route::get('filter-primary', 'CariController@getPrimary');
		Route::get('sdn', 'CariController@sdn');
		Route::get('filter-sdn', 'CariController@getSdn');
		Route::get('secondary', 'CariController@secondary');
		Route::get('filter-secondaru', 'CariController@getSecondary');
		Route::get('smp', 'CariController@smp');
		Route::get('filter-smp', 'CariController@getSmp');
		Route::get('highschool', 'CariController@highSchool');
		Route::get('filter-highschool', 'CariController@getHighSchool');
		Route::get('sma', 'CariController@sma');
		Route::get('filter-sma', 'CariController@getSma');
		Route::get('smk', 'CariController@smk');
		Route::get('filter-smk', 'CariController@getSmk');
		Route::get('kuliah', 'CariController@kuliah');
		Route::get('filter-kuliah', 'CariController@getKuliah');
		Route::get('pesantren', 'CariController@pesantren');
		Route::get('filter-pesantren', 'CariController@getPesantren');
		Route::get('sepakbola', 'CariController@sepakbola');
		Route::get('filter-sepakbola', 'CariController@getSepakbola');
		Route::get('futsal', 'CariController@futsal');
		Route::get('filter-futsal', 'CariController@getFutsal');
		Route::get('basket', 'CariController@basket');
		Route::get('filter-basket', 'CariController@getBasket');
		Route::get('bulutangkis', 'CariController@bulutangkis');
		Route::get('filter-bulutangkis', 'CariController@getBuluTangkis');
		Route::get('atletik', 'CariController@atletik');
		Route::get('filter-atletik', 'CariController@getAtletik');
		Route::get('renang', 'CariController@renang');
		Route::get('filter-renang', 'CariController@getRenang');
		// Route::get('beasiswa-dn', 'CariController@beasiswaDn');
		// Route::get('beasiswa-ln', 'CariController@beasiswaLn');
		// Route::get('magang-dn', 'CariController@magangDn');
		// Route::get('magang-ln', 'CariController@magangLn');
		Route::get('bahasa', 'CariController@bahasa');
		Route::get('filter-bahasa', 'CariController@getBahasa');
		Route::get('komputer', 'CariController@komputer');
		Route::get('filter-komputer', 'CariController@getKomputer');
		Route::get('musik', 'CariController@musik');
		Route::get('filter-musik', 'CariController@getMusik');
		Route::get('tari', 'CariController@tari');
		Route::get('filter-tari', 'CariController@getTari');
		Route::get('desain', 'CariController@desain');
		Route::get('filter-desain', 'CariController@getDesain');
		Route::get('keterampilan', 'CariController@keterampilan');
		Route::get('filter-keterampilan', 'CariController@getKeterampilan');
		Route::get('baca', 'CariController@baca');
		Route::get('filter-baca', 'CariController@getBaca');
		Route::get('pengobatan', 'CariController@pengobatan');
		Route::get('filter-pengobatan', 'CariController@getPengobatan');
		Route::get('matematika', 'CariController@matematika');
		Route::get('filter-matematika', 'CariController@getMatematika');
		Route::get('bimbel', 'CariController@bimbel');
		Route::get('filter-bimbel', 'CariController@getBimbel');
		Route::get('beladiri', 'CariController@beladiri');
		Route::get('filter-beladiri', 'CariController@getBeladiri');
		Route::get('slb', 'CariController@slb');
		Route::get('filter-slb', 'CariController@getSlb');
		Route::get('pilot', 'CariController@pilot');
		Route::get('filter-pilot', 'CariController@getPilot');
		Route::get('pramugari', 'CariController@pramugari');
		Route::get('filter-pramugari', 'CariController@getPramugari');
		// Route::get('promo', 'CariController@promo');
		// Route::get('payment', 'CariController@payment');
	});
	Route::get('rekomendasi', 'PageController@rekom');
	Route::get('lembaga-unggulan', 'PageController@unggul');
});
