<?php

namespace App\Http\Controllers;

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
    $all = 'App\Models\Siswa'::all();
    $l = 'App\Models\Siswa'::where('jk', 'l')->get();
    $p = 'App\Models\Siswa'::where('jk', 'p')->get();
    return view('welcome',['page' => 'home', 'page_title' => 'Beranda', 'jml' => $all->count(), 'l' => $l->count(), 'p' => $p->count()]);
})->name('home');

Route::get('/daftar/status', [SiswaController::class, 'status'])->name('daftar.status');
Route::resource('/daftar', SiswaController::class)->names([
    'create' => 'daftar.isi-data',
]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
