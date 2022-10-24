<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\SantriController;

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
//     return view('navbar');
// });

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('beranda');
});
Route::get('sejarah', function () {
    return view('sejarah');
});

Route::get('visimisi', function () {
    return view('visimisi');
});
Route::get('program', function () {
    return view('program');
});
Route::get('konten-1', function () {
    return view('konten');
});
//register
Route::get('/register', [RegisController::class, 'index'])->middleware('guest'); 
Route::post('/daftar', [RegisController::class, 'store']);
// ?LOGIN//

Route::get('login',[AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('proses_login',[AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::group(['Middleware' => ['auth']], function() {
    Route::group(['Middleware' => ['Cek_login:admin']], function() {
        Route::get('admin',[AdminController::class,'index'])->name('admin')->middleware('auth');
    });
    Route::group(['Middleware' => ['Cek_login:user']], function() {
        Route::get('user',[UserController::class,'index'])->name('user')->middleware('auth');
    });

});



// CRUD TABEL SANTRI

Route::get('/Santri', [SantriController::class, 'index']);

Route::get('/create-santri', [SantriController::class, 'create']);

Route::post('/save-santri', [SantriController::class, 'store']) ->name('simpan');

Route::get('/edit-santri/{id}',[SantriController::class, 'edit']);

Route::put('/update-santri/{id}', [SantriController::class,'update'])->name('update');




Route::delete('/delete-santri/{id}', [SantriController::class,'destroy']);

