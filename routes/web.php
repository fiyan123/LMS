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

Auth::routes();



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
        Route::get('/dashboard', function () {
                return view('guru.dashboard');
            });  
        });
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