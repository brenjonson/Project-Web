<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/firstPage',function (){
    return view(('firstPage'));
})->name('firstPage');

Route::get('/search',function(){
    return view(('web-project/search'));
})->name('search');

Route::get('/popularItem',[FileUploadController::class, 'showItem'])->name('popularItem');

Route::get('/member', function () {
    return view('web-project/member');
})->middleware('auth')->name('member');

Route::get('/detail',function(){
    return view('web-project/detail');
})->name('detail');

Route::get('/profile', function (){
    return view('profile');
})->middleware('auth')->name('profile');

Route::get('/editProfile',function(){
    return view('web-project/editProfile');
})->middleware('auth')->name('editProfile');

Route::get('/upload', function(){
    return view('web-project/upload');
})->middleware('auth')->name('upload');

Route::post('/upload', [FileUploadController::class, 'upload']);

Route::get('/lost', function(){
    return view('LostItemFound');
});

Route::get('/profile',function(){
    return view('profile');
})->name('profile');

Route::get('/upload',function(){
    return view('upload');
})->name('upload');

Route::get('/index',function(){
    return view('index');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
