<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function (){
    return view(('firstPage'));
});

Route::get('/search',function(){
    return view(('search'));
});

Route::get('/popularItem',function(){
    return view(('popularItem'));
});

Route::get('/member', function () {
    return view('member');
})->middleware('auth');


Route::get('/detail',function(){
    return view('detail');
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
