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
    return view('dashboard');
});

Auth::routes();

    
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sma/index', 'SmaController@index');
Route::get('/sma/index/lulus/{tahunlulus}', 'SmaController@viewbytahunlulus');
Route::get('/search', 'SmaController@search');
Route::get('/search', 'SmaController@searchbyname');
Route::get('/sma/index/add', 'SmaController@add');
Route::post('/sma/siswa/store', 'SmaController@store');
Route::post('/sma/siswa/administrasi-lunas/store', 'SmaController@storelunas');
Route::get('/sma/siswa/administrasi-lunas/{id}','SmaController@makelunas');
Route::get('/sma/siswa/detail/{id}', 'SmaController@detail');
Route::get('/sma/siswa/detail/mapeladd/{id}', 'SmaController@mapeladd');
Route::post('/sma/siswa/detail/mapeladd/store/{id}', 'SmaController@mapelstore');
Route::get('/sma/siswa/edit/{id}', 'SmaController@edit');
Route::put('/sma/siswa/update/{id}', 'SmaController@update');
Route::delete('/sma/siswa/delete/{id}', 'SmaController@delete');
Route::delete('/sma/siswa/detail/mapel/delete/{id}','SmaController@mapeldelete');

//mapel
Route::get('/sma/mapel', 'MapelController@index');
Route::get('/sma/mapel/add', 'MapelController@add');
Route::post('/sma/mapel/store', 'MapelController@store');
Route::get('/sma/mapel/edit/{id}', 'MapelController@edit');
Route::put('/sma/mapel/update/{id}', 'MapelController@update');
Route::delete('/sma/mapel/delete/{id}', 'MapelController@delete');

//user 

Route::get('/admin/user','UserController@index');
Route::delete('/admin/user/delete/{id}','UserController@delete');
Route::get('/admin/user/role/{id}','UserController@makeadmin');

//depan
Route::get('/sma/ceklulus', 'SiswaController@ceklulus');
Route::post('/sma/login','SiswaController@login')->name('smalogin');
Route::get('/sma/detaillulus/{id}', 'SiswaController@detaillulus');
