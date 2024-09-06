<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController; 
Route::resource('photos', PhotoController::class); 
Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
    ]); 
    Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' 
    ]);  

// Route::get('/hello', function() {
//     return 'Hello World';
// });

Route::get('/world',function () {
    return 'world';
});

Route::get('/halo',function () {
    return 'Selamat Datang';
});

Route::get('/identitas',function () {
    return '2241760139  M. Hasan Basri';
});

Route::get('/user/{name}', function ($name) { 
    return 'Nama Saya '.$name; 
    }); 

    Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID-'.$id;
// });

Route::get('/user/{name?}', function ($name='Hasan') {
    return 'Nama saya '.$name; 
}); 

Route::get('/hello',[WelcomeController::class, 'hello']);

Route::get('/index',[HomeController::class, 'index']);

Route::get('/name',[AboutController::class, 'name']);

// Route::get('/articles/{$id}',[WelcomeController::class, 'idsaya']);

Route::get('/articles/{id}', [ArticleController::class, 'idsaya']);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/greeting', function () { 
//     return view('blog.hello', ['name' => 'Hasan']); 
//     }); 

Route::get('/greeting', [WelcomeController::class, 
'greeting']);