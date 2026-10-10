<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/home', function () {
    return 'Selamat Pagi Dunia, Fairuz Mohammad Yafi , 707082430002
    ';
});