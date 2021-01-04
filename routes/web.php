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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/home', 'ManageController@home')->name('home');
Route::get('/home', 'ManageController@tampilTerbaru');

//---Produk Men
Route::get('/menbajupendek', 'WebController@menbajupendek');
Route::get('/menbajupanjang', 'WebController@menbajupanjang');
Route::get('/mensweater', 'WebController@mensweater');
Route::get('/menjaket', 'WebController@menjaket');

//---Komentar 1
Route::get('/komen1', 'KomenController@komen1');
Route::get('/editkomen1/{id}','KomenController@editkomen1');
Route::post('/updatekomen1/{id}','KomenController@updatekomen1');  
Route::get('/deletekomen1/{id}','KomenController@deletekomen1'); 
Route::get('/addkomen1','KomenController@addkomen1');
Route::post('/createkomen1','KomenController@createkomen1');

//---Komentar 2
Route::get('/komen2', 'KomenController@komen2');
Route::get('/editkomen2/{id}','KomenController@editkomen2');
Route::post('/updatekomen2/{id}','KomenController@updatekomen2');  
Route::get('/deletekomen2/{id}','KomenController@deletekomen2'); 
Route::get('/addkomen2','KomenController@addkomen2');
Route::post('/createkomen2','KomenController@createkomen2');

//---Komentar 3
Route::get('/komen3', 'KomenController@komen3');
Route::get('/editkomen3/{id}','KomenController@editkomen3');
Route::post('/updatekomen3/{id}','KomenController@updatekomen3');  
Route::get('/deletekomen3/{id}','KomenController@deletekomen3'); 
Route::get('/addkomen3','KomenController@addkomen3');
Route::post('/createkomen3','KomenController@createkomen3');

//---Komentar 4
Route::get('/komen4', 'KomenController@komen4');
Route::get('/editkomen4/{id}','KomenController@editkomen4');
Route::post('/updatekomen4/{id}','KomenController@updatekomen4');  
Route::get('/deletekomen4/{id}','KomenController@deletekomen4'); 
Route::get('/addkomen4','KomenController@addkomen4');
Route::post('/createkomen4','KomenController@createkomen4');

//---Komentar 5
Route::get('/komen5', 'KomenController@komen5');
Route::get('/editkomen5/{id}','KomenController@editkomen5');
Route::post('/updatekomen5/{id}','KomenController@updatekomen5');  
Route::get('/deletekomen5/{id}','KomenController@deletekomen5'); 
Route::get('/addkomen5','KomenController@addkomen5');
Route::post('/createkomen5','KomenController@createkomen5');

//---Komentar 6
Route::get('/komen6', 'KomenController@komen6');
Route::get('/editkomen6/{id}','KomenController@editkomen6');
Route::post('/updatekomen6/{id}','KomenController@updatekomen6');  
Route::get('/deletekomen6/{id}','KomenController@deletekomen6'); 
Route::get('/addkomen6','KomenController@addkomen6');
Route::post('/createkomen6','KomenController@createkomen6');

//---Komentar 7
Route::get('/komen7', 'KomenController@komen7');
Route::get('/editkomen7/{id}','KomenController@editkomen7');
Route::post('/updatekomen7/{id}','KomenController@updatekomen7');  
Route::get('/deletekomen7/{id}','KomenController@deletekomen7'); 
Route::get('/addkomen7','KomenController@addkomen7');
Route::post('/createkomen7','KomenController@createkomen7');

//---Komentar 8
Route::get('/komen8', 'KomenController@komen8');
Route::get('/editkomen8/{id}','KomenController@editkomen8');
Route::post('/updatekomen8/{id}','KomenController@updatekomen8');  
Route::get('/deletekomen8/{id}','KomenController@deletekomen8'); 
Route::get('/addkomen8','KomenController@addkomen8');
Route::post('/createkomen8','KomenController@createkomen8');

//---Komentar 9
Route::get('/komen9', 'KomenController@komen9');
Route::get('/editkomen9/{id}','KomenController@editkomen9');
Route::post('/updatekomen9/{id}','KomenController@updatekomen9');  
Route::get('/deletekomen9/{id}','KomenController@deletekomen9'); 
Route::get('/addkomen9','KomenController@addkomen9');
Route::post('/createkomen9','KomenController@createkomen9');

//---Komentar 10
Route::get('/komen10', 'KomenController@komen10');
Route::get('/editkomen10/{id}','KomenController@editkomen10');
Route::post('/updatekomen10/{id}','KomenController@updatekomen10');  
Route::get('/deletekomen10/{id}','KomenController@deletekomen10'); 
Route::get('/addkomen10','KomenController@addkomen10');
Route::post('/createkomen10','KomenController@createkomen10');

//---Komentar 11
Route::get('/komen11', 'KomenController@komen11');
Route::get('/editkomen11/{id}','KomenController@editkomen11');
Route::post('/updatekomen11/{id}','KomenController@updatekomen11');  
Route::get('/deletekomen11/{id}','KomenController@deletekomen11'); 
Route::get('/addkomen11','KomenController@addkomen11');
Route::post('/createkomen11','KomenController@createkomen11');

//---Komentar 12
Route::get('/komen12', 'KomenController@komen12');
Route::get('/editkomen12/{id}','KomenController@editkomen12');
Route::post('/updatekomen12/{id}','KomenController@updatekomen12');  
Route::get('/deletekomen12/{id}','KomenController@deletekomen12'); 
Route::get('/addkomen12','KomenController@addkomen12');
Route::post('/createkomen12','KomenController@createkomen12');

//---Komentar 13
Route::get('/komen13', 'KomenController@komen13');
Route::get('/editkomen13/{id}','KomenController@editkomen13');
Route::post('/updatekomen13/{id}','KomenController@updatekomen13');  
Route::get('/deletekomen13/{id}','KomenController@deletekomen13'); 
Route::get('/addkomen13','KomenController@addkomen13');
Route::post('/createkomen13','KomenController@createkomen13');

//---Produk Women
Route::get('/womenbajupendek', 'WebController@womenbajupendek');
Route::get('/womenbajupanjang', 'WebController@womenbajupanjang');
Route::get('/womensweater', 'WebController@womensweater');
Route::get('/womenjaket', 'WebController@womenjaket');
Route::get('/womengamis', 'WebController@womengamis');

//---Produk Kids
Route::get('/kidsbajupendek', 'WebController@kidsbajupendek');
Route::get('/kidsbajupanjang', 'WebController@kidsbajupanjang');
Route::get('/kidssweater', 'WebController@kidssweater');
Route::get('/kidsjaket', 'WebController@kidsjaket');

//--------------Baru--------------------------
Route::get('/baru', 'ManageController@baru');
//route untuk menampilkan halaman tambah data
Route::get('/baru/add', 'ManageController@addTerbaru');
//route untuk memproses penambahan data
Route::post('/baru/create', 'ManageController@createTerbaru');
//route untuk menampilkan halaman edit data
Route::get('/baru/edit/{id}', 'ManageController@editTerbaru');
//route untuk memproses update data
Route::post('/baru/update/{id}', 'ManageController@updateTerbaru');
//route untuk memproses hapus data
Route::get('/baru/delete/{id}', 'ManageController@deleteTerbaru');
//route untuk menjalankan fungsi cetak pdf halaman manage produk terbaru
Route::get('/baru/cetak_pdf', 'ManageController@cetakTerbaru');

//--------------Men--------------------------
Route::get('/men', 'ManageController@men')->name('men');
//route untuk menampilkan halaman tambah data
Route::get('/men/add', 'ManageController@addMen');
//route untuk memproses penambahan data
Route::post('/men/create', 'ManageController@createMen');
//route untuk menampilkan halaman edit data
Route::get('/men/edit/{id}', 'ManageController@editMen');
//route untuk memproses update data
Route::post('/men/update/{id}', 'ManageController@updateMen');
//route untuk memproses hapus data
Route::get('/men/delete/{id}', 'ManageController@deleteMen');
//route untuk menjalankan fungsi cetak pdf halaman manage produk women
Route::get('/men/cetak_pdf', 'ManageController@cetakMen');

//--------------Women--------------------------
Route::get('/women', 'ManageController@women');
//route untuk menampilkan halaman tambah data
Route::get('/women/add', 'ManageController@addWomen');
//route untuk memproses penambahan data
Route::post('/women/create', 'ManageController@createWomen');
//route untuk menampilkan halaman edit data
Route::get('/women/edit/{id}', 'ManageController@editWomen');
//route untuk memproses update data
Route::post('/women/update/{id}', 'ManageController@updateWomen');
//route untuk memproses hapus data
Route::get('/women/delete/{id}', 'ManageController@deleteWomen');
//route untuk menjalankan fungsi cetak pdf halaman manage produk women
Route::get('/women/cetak_pdf', 'ManageController@cetakWomen');

//--------------Kid--------------------------
Route::get('/kid', 'ManageController@kid');
//route untuk menampilkan halaman tambah data
Route::get('/kid/add', 'ManageController@addKid');
//route untuk memproses penambahan data
Route::post('/kid/create', 'ManageController@createKid');
//route untuk menampilkan halaman edit data
Route::get('/kid/edit/{id}', 'ManageController@editKid');
//route untuk memproses update data
Route::post('/kid/update/{id}', 'ManageController@updateKid');
//route untuk memproses hapus data
Route::get('/kid/delete/{id}', 'ManageController@deleteKid');
//route untuk menjalankan fungsi cetak pdf halaman manage produk women
Route::get('/kid/cetak_pdf', 'ManageController@cetakKid');
//--------------how to buy & sale-------------------
//route untuk how to buy
Route::get('/howToBuy', 'ManageController@howToBuy');

//route untuk sale
Route::get('/sale', 'ManageController@sale');
Route::get('/sale', 'ManageController@men');
Route::get('/sale', 'ManageController@women');
Route::get('/sale', 'ManageController@kid');

//---------Transaksi----------------------
//tampil manage transaksi
route::get('/manageTransaksi','ManageController@transaksi');
//tambah transaksi
//---------
route::get('/men/bajupanjang/transaksi/{id}','ManageController@addMenBajuPanjangTransaksi');
route::get('/men/bajupendek/transaksi/{id}','ManageController@addMenBajuPendekTransaksi');
route::get('/men/sweater/transaksi/{id}','ManageController@addMenSweaterTransaksi');
route::get('/men/jacket/transaksi/{id}','ManageController@addMenJacketTransaksi');
//---------
route::get('/women/bajupanjang/transaksi/{id}','ManageController@addWomenBajuPanjangTransaksi');
route::get('/women/bajupendek/transaksi/{id}','ManageController@addWomenBajuPendekTransaksi');
route::get('/women/sweater/transaksi/{id}','ManageController@addWomenSweaterTransaksi');
route::get('/women/jacket/transaksi/{id}','ManageController@addWomenJacketTransaksi');
route::get('/women/gamis/transaksi/{id}','ManageController@addWomenGamisTransaksi');
//-----------
route::get('/kid/bajupanjang/transaksi/{id}','ManageController@addKidBajuPanjangTransaksi');
route::get('/kid/bajupendek/transaksi/{id}','ManageController@addKidBajuPendekTransaksi');
route::get('/kid/sweater/transaksi/{id}','ManageController@addKidSweaterTransaksi');
route::get('/kid/jacket/transaksi/{id}','ManageController@addKidJacketTransaksi');
/*route::get('/men/transaksi',function(){
	return view('addMenTransaksi');
});
*/
route::get('/transaksi/edit/{$id}','ManageController@editTransaksi');
route::get('/transaksi/update/{id}','ManageController@updateTransaksi');
route::get('/transaksi/delete/{id}','ManageController@deleteTransaksi');
route::get('/transaksi/cetak_pdf','ManageController@cetakTransaksi');
route::post('/men/transaksi/create','ManageController@createTransaksi');
route::post('/women/transaksi/create','ManageController@createTransaksi');
route::post('/kid/transaksi/create','ManageController@createTransaksi');
Auth::routes();
route::get('/',function(){
    return view('auth/login');
});
Route::get('/home2', 'ManageController@tampilTerbaru')->name('home');
//-------manage user--------
Route::get('/manageUser', 'ManageController@manageUser');
Route::get('/editUser/{id}','ManageController@editUser');
Route::post('/updateUser/{id}','ManageController@updateUser');  
Route::get('/deleteUser/{id}','ManageController@deleteUser'); 
Route::get('/addUser','ManageController@addUser');
Route::post('/createUser','ManageController@createUser');
Route::get('/user/cetak_pdf', 'ManageController@cetakUser');
route::get('/test',function(){
    return view('test');
});
