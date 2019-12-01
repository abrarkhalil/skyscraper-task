<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('blogger')->user();

    //dd($users);

    return view('blogger.home');
})->name('home');

