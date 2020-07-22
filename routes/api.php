<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/user/{id?}', function ($id="No Data Passed") {
//     return view('user',["user"=>$id]);
// });
Route::get('posts','Posts@list');
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');


Route::post('company', 'Companies@valid');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'UserController@details');
//Route::post('company', 'Companies@save');
});