<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::view('/', 'web-project.firstPage')->name('firstPage');
Route::get('/', [FileUploadController::class, 'showForFP'])->name('firstPage');
Route::view('/search', 'web-project.search')->name('search');
Route::get('/popularItem', [FileUploadController::class, 'showItem'])->name('popularItem');
Route::get('/item/{id}', [FileUploadController::class, 'showItemDetail'])->name('item.detail');
Route::get('/search', [FileUploadController::class, 'showForSearch'])->name('search');

// Authentication routes
Route::middleware(['auth'])->group(function () {
    Route::view('/member', 'web-project.member')->name('member');
    Route::get('/profile', [FileUploadController::class, 'showProfile'])->name('profile');
    Route::view('/editProfile', 'web-project.editProfile')->name('editProfile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::view('/uploadFound', 'web-project.uploadForm.uploadFound')->name('uploadFound');
    Route::post('/uploadFound', [FileUploadController::class, 'upload']);
    Route::view('/uploadFind', 'web-project.uploadForm.uploadFind')->name('uploadFind');
    Route::post('/uploadFind', [FileUploadController::class, 'upload']);
    Route::post('/location/store', [LocationController::class, 'saveLocation']);;
    Route::view('/lost', 'web-project.LostItemFound')->name('lost');
    Route::get('/member', [FileUploadController::class, 'showForMember'])->name('member');
});

// Jetstream dashboard route
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});
