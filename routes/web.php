<?php

use App\Http\Controllers\BadanPengurusHarianController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HumasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\DivisiAgamaController;
use App\Http\Controllers\DivisiDanaUsahaController;
use App\Http\Controllers\DivisiKesenianController;
use App\Http\Controllers\DivisiOlahragaController;
use App\Http\Controllers\DivisiOrganisasiController;
use App\Http\Controllers\DivisiPendidikanController;
use App\Http\Controllers\DivisiSarprasController;
use App\Http\Controllers\DivisiSosialController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\GaleriKegiatanController;
use App\Http\Controllers\KompetisiController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\MBKMController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SeminarController;
use App\Models\galeriKegiatan;

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
Route::get('/', function(){
    return view('auth.login'); //seharusnya tampilan about frontend
});
Route::get('/home', function(){
    return view('frontend.home'); //seharusnya tampilan about frontend
});



Route::get('/contact', function(){
    return view('frontend.contact.index'); //seharusnya tampilan about frontend
});

// FRONTEND SEMINAR
Route::get('/seminar',[FrontEndController::class, 'blog_seminar']);
Route::get('/seminar/{slug}',[FrontEndController::class, 'readmoreSeminar'])->name('readmoreSeminar');

//FRONTEND MAGANG
Route::get('/magang',[FrontEndController::class, 'blog_magang']);
Route::get('/magang/{slug}',[FrontEndController::class, 'readmoreMagang'])->name('readmore');

Route::get('/lomba',[FrontEndController::class, 'blog_lomba']);
Route::get('/lomba/{slug}',[FrontEndController::class, 'readmoreLomba'])->name('readmoreLomba');

Route::get('/galeri',[FrontEndController::class, 'blog_galeri']);
Route::get('/galeri/{slug}',[FrontEndController::class, 'readmoreGaleri'])->name('readmoreGaleri');


Route::get('/about',[FrontEndController::class, 'about'])->name('about');
Route::get('/divisi-agama',[FrontEndController::class, 'divisiagama'])->name('divisi_agama');

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login-proses',[LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/register-proses',[LoginController::class, 'register_proses'])->name('register-proses');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');


Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(
    function(){
        Route::get('/', function(){
            return view('dashboard.master.home'); 
        });
        Route::resource('visi-misi',VisiMisiController::class);
        Route::resource('humas',HumasController::class);
        Route::resource('pendidikan',DivisiPendidikanController::class);
        Route::resource('agama',DivisiAgamaController::class);
        Route::resource('dana_usaha',DivisiDanaUsahaController::class);
        Route::resource('kesenian',DivisiKesenianController::class);
        Route::resource('olahraga',DivisiOlahragaController::class);
        Route::resource('organisasi',DivisiOrganisasiController::class);
        Route::resource('sarpras',DivisiSarprasController::class);
        Route::resource('sosial',DivisiSosialController::class);
        Route::resource('bph',BadanPengurusHarianController::class);
        Route::resource('magang',MagangController::class);
        Route::resource('mbkm',MBKMController::class);
        Route::resource('seminar',SeminarController::class);
        Route::resource('project',ProjectController::class);
        Route::resource('galeri-kegiatan',GaleriKegiatanController::class);
        Route::resource('lomba',LombaController::class);
       
        
    });