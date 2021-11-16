<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\StafController;
use App\Http\Controllers\BidangMinatController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\TujuansController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KurikulumsController;
use Illuminate\Support\Facades\App;
use Laravel\Sail\Console\PublishCommand;

// Landing page
Route::get('/', [PublicController::class, 'halamanUtama'])->name('landing');

// Public
Route::get('/pengumuman', [PublicController::class, 'index'])->name('pengumuman');
Route::get('/staf', [PublicController::class, 'staf'])->name('staf');
Route::get('/pengumuman/{announcement}', [PublicController::class, 'show'])->name('pengumuman_detail');
Route::get('/profile_lulusan', [PublicController::class, 'profile_lulusan']);
Route::get('/kurikulum_konten', [PublicController::class, 'kurikulum_konten'])->name('kurikulum_konten');

// Admin
Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false,
]);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::resource('/announcement', AnnouncementController::class);
Route::resource('/staf_pengajar', StafController::class);
Route::resource('/bidangminat', BidangMinatController::class);
Route::resource('/visi_misi', VisiMisiController::class);
Route::resource('/tujuans', TujuansController::class);
Route::resource('/tentang', TentangController::class);
Route::resource('/kurikulums', KurikulumsController::class);
Route::get('/announcement/{id}/delete_doc', [AnnouncementController::class, 'delete_doc'])->name('announcement.delete_doc');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
