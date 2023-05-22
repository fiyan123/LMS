<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\DataGuruController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\UploadTugasController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'Admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('layouts.admin');
    });
    Route::resource('jurusan', JurusanController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('pelajaran', PelajaranController::class);
    Route::resource('data_guru', DataGuruController::class);
    Route::resource('data_siswa', DataSiswaController::class);

});
Route::prefix('guru')->middleware(['auth', 'Guru'])->group(function () {
        Route::get('dashboard', function () {
                return view('guru.dashboard');
            }); 
        Route::resource('upload_tugas', UploadTugasController::class);
});

// Route::group(['prefix' => 'upload-tugas', 'as' => 'upload_tugas.'], function () {
//     Route::get('/', 'UploadTugasController@index')->name('index');
//     Route::get('/show/{id}', 'UploadTugasController@show')->name('show');
//     Route::any('/create', 'UploadTugasController@create')->name('create');
//     Route::any('/store', 'UploadTugasController@store')->name('store');
//     Route::get('/edit/{id}', [UploadTugasController::class, 'edit'])->name('edit');
//     Route::any('/update/{id}', 'UploadTugasController@update')->name('update');
//     Route::any('destroy', 'UploadTugasController@destroy')->name('delete');
//     Route::delete('hapusData/{id}', 'UploadTugasController@hapusData')->name('hapusData');
//     Route::get('/download-kkpr/{file}', 'UploadTugasController@downloadKKPR')->name('download-dokumen-kkpr');
//     Route::get('/download-imb/{file}', 'UploadTugasController@downloadIMB')->name('download-dokumen-imb');
//     Route::get('/download-surat-adat/{file}', 'UploadTugasController@downloadSuratAdat')->name('download-surat-adat');
// });

Route::prefix('siswa')->middleware(['auth', 'Siswa'])->group(function () {
        Route::get('/dashboard', function () {
                return view('siswa.dashboard');
            });  
        Route::get('/tugas/detail_tugas', function () {
                return view('siswa.tugas.detail_tugas');
            });  
            Route::resource('tugas', TugasController::class);
            // Route::get('detail_tugas', TugasController::class,'indo')->name('detail_tugas.indo');
            // Route::get('/detail_tugas', 'TugasController@indo');

        });
        
        
//         Route::prefix('admin')->middleware(['auth', 'Admin'])->group(function () {
//             // Route::group(['middleware' => 'Admin'], function () {
//                 // route yang hanya bisa diakses oleh admin
//             Route::get('/dashboard', function () {
//                 return view('layouts.admin');
//                 Route::resource('jurusan', JurusanController::class);
//                 Route::resource('kelas', KelasController::class);
//             });
//         });
        
//         Route::prefix('guru')->middleware(['auth', 'Guru'])->group(function () {
//             // Route::group(['middleware' => 'Guru'], function () {
//                 // route yang hanya bisa diakses oleh user
//         Route::get('/dashboard', function () {
//                 return view('layouts.guru');
//             });  
// });

// Route::prefix('siswa')->middleware(['auth', 'Siswa'])->group(function () {
// // Route::group(['middleware' => 'User'], function () {
//     // route yang hanya bisa diakses oleh pengunjung
// });