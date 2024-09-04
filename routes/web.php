<?php

use Illuminate\Support\Facades\Route;

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
    return view( 'welcome');
});
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'world';
});

Route::get('/s', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2241760062 <br/> Daffa Abiyu Aidil Amru';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' .$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function
($Id) {
 return 'Halaman Artikel dengan ID-'.$Id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/profile', function () {
    //
   })->name('profile');

   use App\Http\Controllers\UserProfileController;

   Route::get(
       '/user/profile', [UserProfileController::class, 'show']
   )->name('profile');
   
   Route::redirect('/here', '/there');
   Route::view('/welcome', 'welcome');
   Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

   