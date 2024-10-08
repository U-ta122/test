<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;  //外部にあるPostControllerクラスを使えるようにします。
use App\Http\Controllers\CategoryController;

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

Route::get('/', [PostController::class, 'index']);  

// Route::get('/', function() {
//     return view('posts.index');
// });

Route::post('/posts', [PostController::class, 'store']);

Route::delete('/posts/{post}', [PostController::class,'delete']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::put('/posts/{post}', [PostController::class, 'update']);

Route::get('/posts/{post}', [PostController::class ,'show']);
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

Route::get('/categories/{category}', [CategoryController::class,'index']);