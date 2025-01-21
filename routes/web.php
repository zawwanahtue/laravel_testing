<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [Homecontroller::class, 'home']);

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/about', [Homecontroller::class, 'about']);

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/contact', [ContactController::class, 'contact']);

// Route::get('/', function () {
//     $data = [
//         'num1' => 'value1',
//         'num2' => 'value2',
//         'num3' => 'value3'
//     ];
//     return view('home', ['data'=>$data]);
// });
