<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_Login;


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
//Route Index
Route::get('/', [C_Login::class,'index']);
// route login
route::post('login', [C_Login::class,'login'])->name('login');
// route logout
Route::post('/logout', [C_Login::class,'logout']);
//Route Registration
Route::get('/register', [C_login::class,'register']);
//Route Dashboard
Route::get('/dashboard', [C_login::class,'dashboard'])->name('dashboard');
// //Route Kategori
// Route::get('/kategoris/{{ kategori->slug }}', [C_login::class,'kategori']);
Route::get('/kategoris/{kategori_slug}',[C_login::class, 'viewCategory'])->name('kategoris');
//Route TambahData
Route::get('/tambahData', [C_login::class,'tambahData']); 
// Route Create
Route::post('/createProduk', [C_login::class,'createData'])->name('createProduk'); 