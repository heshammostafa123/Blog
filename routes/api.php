<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
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

Route::apiresource('posts',PostController::class);
Route::apiresource('categories',CategoryController::class);

Route::get('category/{slug}/posts',[PostController::class,'categoryPosts']);
Route::get('searchposts/{query}',[PostController::class,'searchposts']);


Route::post('login',[UserController::class,'login']);
Route::post('register',[UserController::class,'register']);
Route::middleware('auth:api')->group(function () {
    Route::get('user', [UserController::class,'details']);
    Route::post('comment/create',[CommentController::class,'store']);
    Route::get('getUnreadNotifications', 'UserController@getUnreadNotifications');
    Route::get('getAllNotifications', 'UserController@getAllNotifications');
    Route::put('markNotificationAsRead', 'UserController@markNotificationAsRead');
});

Route::group(['prefix'=>'/admin','middleware'=>'auth:api'],function(){
    Route::get('posts',[AdminController::class,'getPosts']);
    Route::get('categories',[AdminController::class,'getCategories']);
    Route::post('addPost',[AdminController::class,'addPost']);
    Route::post('updatePost',[AdminController::class,'updatePost']);
    Route::post('deletePosts',[AdminController::class,'deletePosts']);
});