<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
 //Get the api from http://127.0.0.1:8000/api/testing-the-api
Route::get('/testing-the-api', function(){
    return ['message' => 'hello'];
});

//posts
//CRUD is basically
//1. get all (GET) /api/posts
//2. create post (POST) /api/posts
//3. get a single (GET) /api/posts/{id}
//4. update a single (PUT/PATCH) /api/posts/{id}
//5. delete (DELETE) /api/posts/{id}

Route::get('/posts', function(){
    $post = Post::create([
        'title' => 'my first post', 
        'slug' => 'my-first-post'
    ]);
    return $post;
});
// to create a resource (posts) in laravel
//1. create the database and migrations
//2. create a model
//2.5 create a service? Eloquent ORM
//3. create a controller to go get info from the database
//4. return that info
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
