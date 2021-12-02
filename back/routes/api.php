<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('signup',[UserController::class, "createUser"]);
Route::post('signin',[UserController::class, "signIn"]);
Route::post('signout',[UserController::class, "signOut"]);

Route::get('users',[UserController::class, "getUsers"]);
Route::get('users/{id}',[UserController::class, "getUser"]);
Route::post('users',[UserController::class, "createUser"]);
Route::put('users/{id}',[UserController::class, "updateUser"]);
Route::delete('users/{id}',[UserController::class, "deleteUser"]);


// CATEGORY 

Route::get('category',[CategoryController::class,'index']);
Route::post('category',[CategoryController::class,'store']);
Route::get('category/{id}',[CategoryController::class,'show']);
Route::put('category/{id}',[CategoryController::class,'update']);
Route::delete('category/{id}',[CategoryController::class,'destroy']);
Route::get('/category/search/{name}', [CategoryController::class, 'search']);