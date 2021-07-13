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
Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');

Route::get('lra/cari', 'LraController@cari');
Route::get('provinsi/cari', 'ProvinsiController@cari');
Route::get('kabkota/cari', 'KabkotaController@cari');

Route::resource('lra', 'LraController');  

Route::resource('provinsi', 'ProvinsiController');

Route::get('kabkota', 'KabkotaController@index');
Route::get('kabkota/create', 'KabkotaController@create');
Route::get('kabkota/{kabkota}', 'KabkotaController@show');
Route::get('kabkota/{kabkota}/edit', 'KabkotaController@edit');
Route::patch('kabkota/{kabkota}', 'KabkotaController@update');
Route::post('kabkota', 'KabkotaController@store');
Route::delete('kabkota/{kabkota}', 'KabkotaController@destroy');

Route::resource('user', 'UserController');

Route::get('dprovinsi', function() {
    DB::table('provinsi')->insert([
        [
            'nama_provinsi' => 'DKI Jakarta',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
        [
            'nama_provinsi' => 'Jawa Barat',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
        [
            'nama_provinsi' => 'Jawa Tengah',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
        [
            'nama_provinsi' => 'Jawa Timur',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
        [
            'nama_provinsi' => 'Sumatera Barat',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
        [
            'nama_provinsi' => 'Sumatera Utara',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
    ]);
});

Route::get('dkabkota', function() {
    DB::table('kabkota')->insert([
        [
            'nama_kabkota' => 'Jakarta Utara',
            'id_provinsi'   => '1',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
        [
            'nama_kabkota' => 'Jakarta Pusat',
            'id_provinsi'   => '1',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
        [
            'nama_kabkota' => 'Jakarta Timur',
            'id_provinsi'   => '1',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
        [
            'nama_kabkota' => 'Jakarta Barat',
            'id_provinsi'   => '1',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
        [
            'nama_kabkota' => 'Bandung',
            'id_provinsi'   => '2',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
        [
            'nama_kabkota' => 'Cirebon',
            'id_provinsi'   => '2',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
        [
            'nama_kabkota' => 'Padang',
            'id_provinsi'   => '5',
            'created_at'    => '2020-10-08 10:10:15',
            'updated_at'    => '2020-10-08 10:10:15'
        ],
    ]);
});
