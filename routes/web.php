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
    return view('home');
});


Route::get('/admin', 'AdminController@index');


Route::get('/pages/charts', function () {
    return view('admin/pages/charts/chartjs');
});


//konfirmasi
Route::get('/pages/konfirmasi_klinik', function () {
    return view('admin/pages/konfirmasi/klinikakreditasi');
});
Route::get('api/konklinik', 'KonfirmasiController@apiKonklinik')->name('api.konklinik');
Route::get('api/kon_perilmu/{bidang_ilmu}', 'KonfirmasiController@apiPerilmu');
Route::post('konfirmasi/update/{id}', 'KonfirmasiController@update');

//end 


Route::get('/pages/registrasi_klinik', function () {
    return view('admin/pages/registrasi/klinikakreditasi');
});

Route::get('registrasi', 'RegistrasiController@index');
Route::post('registrasi/store', 'RegistrasiController@store');
Route::get('registrasi/klinik', 'RegistrasiController@klinik');
Route::get('registrasi/getPS', 'RegistrasiController@getPS');

Route::get('api/regklinik', 'RegistrasiController@apiRegklinik')->name('api.regklinik');
Route::get('api/perilmu/{bidang_ilmu}', 'RegistrasiController@apiPerilmu');

Route::get('registrasi/seminar', 'SeminarController@index');
Route::post('seminar/store', 'SeminarController@store');
Route::get('registrasi/seminar', 'SeminarController@seminar');
Route::get('seminar/getPS', 'SeminarController@getPS');

Route::get('registrasi/pameran', 'PameranController@index');
Route::post('pameran/store', 'PameranController@store');
Route::get('registrasi/pameran', 'PameranController@pameran');
Route::get('pameran/getPS', 'PameranController@getPS');

Route::get('login', function() {
    echo "form login";   
});

// Route::get('register', function () {
//     $data =[
//         'name' => 'Administrator',
//         'username' => 'admin',
//         'email' => 'admin@admin.com',
//         'password' => bcrypt('123456'),
//         'akses' => 'admin',
//         'created_at' => NOW(),
//         'updated_at' => NOW()
//     ];

//     $query = DB::table('users')->insert($data);

//     echo "Berhasil";
    
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
