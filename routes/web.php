<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResourceController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [Homecontroller::class, 'home']);

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/about', [Homecontroller::class, 'about']);
Route::resource('/contact', ResourceController::class);
Route::get('/simple', [Homecontroller::class, 'simple']);

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', [ContactController::class, 'contact']);

// Route::get('/', function () {
//     $data = [
//         'num1' => 'value1',
//         'num2' => 'value2',
//         'num3'   => 'value3'
//     ];
//     return view('home', ['data'=>$data]);
// });

                // Route::get('post');
                // Route::post('post');
                // Route::get('post/{id}');
                // Route::get('post/{id}/edit');
                // Route::put('post/{id}');
                // Route::delete('post/{id}');

