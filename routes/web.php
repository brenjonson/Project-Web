<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function (){
    return view(('firstPage'));
})->name('firstPage');

Route::get('/search',function(){
    return view(('search'));
})->name('search');

Route::get('/popularItem',function(){
    return view(('popularItem'));
})->name('popularItem');

Route::get('/member', function () {
    return view('member');
})->middleware('auth')->name('member');

Route::get('/detail',function(){
    return view('detail');
})->name('detail');

Route::get('/editProfile',function(){
    return view('editProfile');
})->name('editProfile');

Route::get('/profile',function(){
    return view('profile');
})->name('profile');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
