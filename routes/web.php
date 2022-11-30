<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::post('home', function () {
    return "Phuong thuc post";
});

Route::put('home', function () {
    return "Phuong thuc put";
});

// Route::delete('home', function () {
//     return "Phuong thuc delete";
// });

// Route::patch('home', function () {
//     return "Phuong thuc patch";
// });

// Route::match(['get','post'],'home',function() {

//     return $_SERVER['Request_method'];
// });

// Router::any('home',function(Request $request) {
//     return $request->method();
// });

//chuyen huong dentrang khac
// Route::redirect('home','product','301');

// Route::view('home','product');

Route::prefix('admin')->group(function() {
    Route::get('home', function () {
        return view('home');
    });
    
    Route::post('home', function () {
        return "Phuong thuc post";
    });
});