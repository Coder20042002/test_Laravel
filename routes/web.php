<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CategoriesController;
// use App\Http\Controllers\HomeController;
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

Route::prefix('categories')->group(function() {
    //danh sach chuyen muc
    Route::get('/',[CategoriesController::class,'index']);

    //edit chuyen muc
    Route::get('/edit/{id}',[CategoriesController::class,'getCategory']);
});
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('home', function () {
//     return view('home');
// })->name('home');

// Route::post('home', function () {
//     return "Phuong thuc post";
// });

// Route::put('home', function () {
//     return "Phuong thuc put";
// });

// // Route::delete('home', function () {
// //     return "Phuong thuc delete";
// // });

// // Route::patch('home', function () {
// //     return "Phuong thuc patch";
// // });

// // Route::match(['get','post'],'home',function() {

// //     return $_SERVER['Request_method'];
// // });

// // Router::any('home',function(Request $request) {
// //     return $request->method();
// // });

// //chuyen huong dentrang khac
// // Route::redirect('home','product','301');

// // Route::view('home','product');

// Route::prefix('admin')->group(function() {
//     //lay url
//     Route::get('tintuc/{slug?}-{id?}.html', function ($slug=null,$id=null) {
//         $content ='Path/admin voi tham so ';
//         $content .='id ='.$id.'<br/>';
//         $content .='slug ='.$slug;
//         return $content;
//     })//validex
//     ->where('id','\d+')->where('slug','.+')->name('admin.tintuc');
//     //     [
//     //         //cach khac [a-z]+
//     //         'slug'=>'.+',
//     //         "id"=>'[0-9]+'
//     //     ]
//     // );
    
    

//     Route::get('home', function () {
//         return view('home');
//     });

//     Route::post('home', function () {
//         return "Phuong thuc post";
//     });
// });

// //middware
// Route::prefix('admin')->middleware('checkMiddleware')->group(function() {
//     //lay url
//     Route::get('tintuc/{slug?}-{id?}.html', function ($slug=null,$id=null) {
//         $content ='Path/admin voi tham so ';
//         $content .='id ='.$id.'<br/>';
//         $content .='slug ='.$slug;
//         return $content;
//     })//validex
//     ->where('id','\d+')->where('slug','.+')->name('admin.tintuc');
    
    

//     Route::get('home', function () {
//         return view('home');
//     });

//     Route::post('home', function () {
//         return "Phuong thuc post";
//     });
// });


// //controller ket noi
// Route::get('/','App\Http\Controllers\HomeController@check')->name('home');

// Route::get('/chuyenmuc',[HomeController::class, 'getCategory']);