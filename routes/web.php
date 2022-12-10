<?php

use App\Http\Controllers\ResultKeluhanController;
use App\Http\Controllers\ResultQuisionerController;
use App\Models\Daftar_keluhan;
use App\Models\Quisioners;
use Illuminate\Support\Facades\Route;

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




// Route::get('/login', function () {
//     return view('pages.login');
// });


// Route::get('/admin/home', function () {
//     return view('pages.admin/home');
// });





// Route::get('/register', function () {
//     return view('pages.registrasi');
// });



Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
    Route::resource('resultquisioner', ResultQuisionerController::class);
    Route::resource('resultkeluhan', ResultKeluhanController::class);
    Route::get('/quisioner', function () {
        $angka = 1;
        $dataPertanyaan = Quisioners::all();
        $dataKeluhan = Daftar_keluhan::all();
        return view('pages.quisioner', compact('angka', 'dataPertanyaan', 'dataKeluhan'));
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin/home', function () {
//     return view('pages.admin/home');
// });