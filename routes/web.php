<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\authController;
use App\Http\Controllers\noteController;

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
    return view('login');
});

Route::get('/register',function(){
    return view('register');
});

// Route::get('/home',function(){
//     return view('home');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/update/{id}', function () {
    return view('update');
});

Route::post('note/add',[noteController::class,'addNote']);

Route::post('/actionlogin',[authController::class,'actionlogin']);
Route::post('/actionregister',[authController::class, 'actionregister']);
Route::post('/addNote',[noteController::class,'addNote']);
Route::get('/updateNote',[noteController::class,'updateNote']);
Route::get('/deleteNote/{id}',[noteController::class,'deleteNote']);

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();

    $token = csrf_token();

    // ...
});

