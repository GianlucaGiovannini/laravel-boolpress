<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// questi sono tutti i posts con response json customizzabile
/* 
Route::get('posts', function(){

    $posts = Post::all();

    return response()->json([
        'status_code' => 200,
        'status_text' => 'Success',
        'name' => 'Gianluca',
        'posts' => $posts,
    ]);
}); 
*/

// alternativa più veloce
/* 
Route::get('posts', function () {

    $posts = Post::all();

    return $posts;
}); 
*/

// alternativa più veloce con paginazione
/* 
Route::get('posts', function () {

    $posts = Post::paginate(); // se mettiamo i record da mostrare si mette qui tra parentesi

    return $posts;
}); 
*/

// scorciatoia con relazioni 
/* 
Route::get('posts', function () {

    $posts = Post::with(['tags', 'category', 'user'])->get(); 

    return $posts;
}); 
*/

//scorciatoia con relazioni + paginazioni 
/* Route::get('posts', function () {

    $posts = Post::with(['tags', 'category', 'user'])->orderByDesc('id')->paginate(5); 

    return $posts; 

}); */

Route::get('posts', 'API\PostController@index');
Route::get('posts/{post:slug}', 'API\PostController@show');
Route::get('categories', 'API\CategoryController@index');
Route::get('tags', 'API\TagController@index');


