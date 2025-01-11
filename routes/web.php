<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', function () {
    $data = [
        'num1' => 'value1',
        'num2' => 'value2',
        'num3' => 'value3'
    ];
    return view('home', ['data'=>$data]);
});

