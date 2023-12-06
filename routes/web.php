<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AlLowonganController;
use App\Http\Controllers\LandingController;

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

Route::get('/login', function () {
    return view('login');
})->middleware('auth');

Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class, 'authenticating']);
Route::get('logout',[AuthController::class, 'logout']);

Route::get('/sidebar', function () {
    return view('admin.sidebar');
});
Route::get('/dashboard', function () {
    return view('alumni.dashboard');
});

Route::get('login_alumni',[LoginController::class,'loginalumni']);
Route::post('login/auth',[LoginController::class, 'authenticating
']);

Route::get('/landing_page', function () {
    return view('landing_page.index');
});
Route::get('/pricing', function () {
    return view('landing_page.pricing');
});
Route::get('/contact', function () {
    return view('landing_page.contact');
});
Route::get('features',[LandingController::class,'index_per']);
Route::get('blog',[LandingController::class,'index_loker']);


Route::get('alumni',[AlumniController::class,'show']);
Route::get('alumni/add',[AlumniController::class,'add']);
Route::post('alumni/create',[AlumniController::class,'create']);
Route::get('alumni/delete/{id}',[AlumniController::class,'delete']);
Route::get('alumni/edit/{id}',[AlumniController::class,'edit']);
Route::post('alumni/update/{id}',[AlumniController::class,'update']);

Route::get('perusahaan',[PerusahaanController::class,'show']);
Route::get('perusahaan/add',[PerusahaanController::class,'add']);
Route::post('perusahaan/create',[PerusahaanController::class,'create']);
Route::get('perusahaan/delete/{id_perusahaan}',[PerusahaanController::class,'delete']);
Route::get('perusahaan/edit/{id_perusahaan}',[PerusahaanController::class,'edit']);
Route::post('perusahaan/update/{id_perusahaan}',[PerusahaanController::class,'update']);

Route::get('lowongan',[LowonganController::class,'show']);
Route::get('lowongan/add',[LowonganController::class,'add']);
Route::post('lowongan/create',[LowonganController::class,'create']);
Route::get('lowongan/delete/{id_loker}',[LowonganController::class,'delete']);
Route::get('lowongan/edit/{id_loker}',[LowonganController::class,'edit']);
Route::post('lowongan/update/{id_loker}',[LowonganController::class,'update']);

Route::get('lamaran',[LamaranController::class,'show']);
Route::get('lamaran/add',[LamaranController::class,'add']);
Route::post('lamaran/create',[LamaranController::class,'create']);
Route::get('lamaran/delete/{id_lamaran}',[LamaranController::class,'delete']);
Route::get('lamaran/edit/{id_lamaran}',[LamaranController::class,'edit']);
Route::post('lamaran/update/{id_lamaran}',[LamaranController::class,'update']);

Route::get('loker',[PageController::class,'show']);
Route::get('loker/add',[PageController::class,'add']);
Route::post('loker/create',[PageController::class,'create']);

Route::get('alperusahaan',[PerusahaanController::class,'perusahaan']);

