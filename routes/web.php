<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::view('/profile', 'profile')->name('profile');
Route::view('/events', 'events')->name('events');
Route::view('/congregation', 'congregation')->name('congregation');
Route::view('/services', 'services')->name('services');
Route::view('/marketplace', 'marketplace')->name('marketplace');
Route::view('/donation', 'donation')->name('donation');
Route::view('/announcements', 'announcements')->name('announcements');
Route::view('/help', 'help')->name('help');
Route::view('/admin', 'admin')->name('admin');

// ========== route resource ==========
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/gereja', function () {
    return view('home');
})->name('home');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/kegiatan', function () {
    return view('kegiatan.kegiatan-user');
})->name('kegiatan-user');
Route::get('/admin/kegiatan', function () {
    return view('kegiatan.kegiatan-admin');
})->name('kegiatan-admin');
Route::get('/donation', function () {
    return view('donation');
})->name('donation');
Route::get('/umkm', function () {
    return view('umkm.umkm-user');
})->name('umkm-user');
Route::get('/umkm/create', function () {
    return view('umkm.umkm-user-create');
})->name('umkm-user-create');
Route::get('/admin/umkm', function () {
    return view('umkm.umkm-admin');
})->name('umkm-admin');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

//  ========== Jemaat Controller ==========
use App\Http\Controllers\JemaatController;

Route::resource('jemaat', JemaatController::class);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ========== UMKM Controller ==========
// use App\Http\Controllers\UMKMController;

// // Rute utama untuk daftar UMKM (bisa diakses semua jemaat) --> belum jadi
// Route::get('/umkm', [UMKMController::class, 'index'])->name('umkm.index');

// // Rute untuk autentikasi jemaat sebelum membuat UMKM --> belum jadi
// Route::prefix('umkm')->group(function () {
//     Route::get('/auth', [UMKMController::class, 'authForm'])->name('umkm.authForm');
//     Route::post('/auth', [UMKMController::class, 'authenticateJemaat'])->name('umkm.authenticateJemaat');
// });

// // Rute CRUD UMKM (Hanya untuk jemaat yang sudah terverifikasi) --> belum jadi
// Route::middleware('verified_jemaat')->prefix('umkm')->group(function () {
//     Route::get('/create', [UMKMController::class, 'create'])->name('umkm.create');
//     Route::post('/validate-jemaat', [UMKMController::class, 'validateJemaat'])->name('umkm.validateJemaat');
//     Route::get('/create-form/{jemaat_id}', [UMKMController::class, 'createForm'])->name('umkm.createForm');
//     Route::post('/', [UMKMController::class, 'store'])->name('umkm.store');
//     Route::get('/{id}/edit', [UMKMController::class, 'edit'])->name('umkm.edit');
//     Route::put('/{id}', [UMKMController::class, 'update'])->name('umkm.update');
//     Route::delete('/{id}', [UMKMController::class, 'destroy'])->name('umkm.destroy');
// });

// ========== Kegiatan ==========
