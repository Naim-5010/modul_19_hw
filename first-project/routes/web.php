<?php

use App\Http\Controllers\democontrollers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
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

// Route::get('/', function () {

//     // dd(config("app.name"));
//     // dd(config("queue.default"));
//     // dd($_ENV);    
//     return view('welcome');
// });


// Route::get('/hello/{num1}/{num2}', [democontrollers::class, "action"]);

// Route::get('/',function(){
// return "hello";
// });


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
