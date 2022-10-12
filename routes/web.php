<?php

use App\Http\Controllers\KontakController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UiController;
use App\Models\About;
use App\Models\Berita;
use App\Models\Hero;
use App\Models\Kontak;
use App\Models\Lembaga;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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
//routing dashboard
Route::resource('/about',AboutController::class)->middleware('auth');
Route::resource('/banner',HeroController::class)->middleware('auth');
Route::resource('/unit',LembagaController::class)->middleware('auth');
Route::resource('/news',BeritaController::class)->middleware('auth');
Route::resource('/kontak',KontakController::class)->middleware('auth');


Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/daftar',[DaftarController::class,'index'])->middleware('guest');
Route::post('/daftar',[DaftarController::class,'store'])->middleware('guest');


Route::get('/berita/{slug}',[UiController::class,'detailBerita']);

Route::get('/', function () {
    return view('index',[
        'title' => 'Home',
        'banner' =>  Hero::whereStatus('landing')->get()
    ]);
});
Route::get('/lembaga', function () {
    return view('lembaga.index',[
        'title' => 'Lembaga',
        'banner' =>  Hero::whereStatus('lembaga')->get(),
        'lembaga' =>  Lembaga::all(),
    ]);
});
Route::get('/kajian', function () {
    return view('kajian.index',[
        'title' => 'Galeri & Kajian'
    ]);
});
Route::get('/berita', function () {
    return view('berita.index',[
        'title' => 'Berita',
        'berita' => Berita::latest()->get(),
    ]);
});
Route::get('/kontakus', function () {
    return view('kontak.index',[
        'title' => 'Kontak',
        'kontak' => Kontak::orderByDesc('id')->limit(1)->get()
    ]);
});
Route::get('/tentang', function () {
    return view('about.index',[
        'title' => 'About',
        'banner' =>  Hero::whereStatus('about')->get(),
        'tentang' =>  About::all()
    ]);
});

Route::get('/dashboard',[Controller::class,'indexDash'])->middleware('auth');

