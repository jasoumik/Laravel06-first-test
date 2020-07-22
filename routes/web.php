<?php

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

//use Illuminate\Routing\Route;

use App\Larademo\Larademo;
use App\Larademo\LarademoFacade;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
   return view('welcome');
  
   // LarademoFacade::sayHello();
//    $to_name="jasoumik";
//    $to_email="jastrading2019@gmail.com";
//    $data=array("name"=>"Nobin","body"=>"test mail");
//    Mail::send('mail', $data, function ($msg) use ($to_name,$to_email){
//     $msg->to($to_email)->subject('Lara Mail Subject');
//    });
});
Route::get('/set/{id?}', function ($id="No Data Passed") {
   $burgs=[
      ['type'=>'chicken normal','base'=>'Without Cheese'],
      ['type'=>'chicken Spicy','base'=>'Cheese'],
      ['type'=>'chicken Supreme','base'=>'Without Cheese'],
      ['type'=>'Beef','base'=>'Without Cheese']
   ];
   $name=request('name');
   return view('set',['burgers'=>$burgs,'name'=>$name,'id'=>$id]);
});
//localization
// Route::get('/{lang}', function ($lang) {
//     App::setLocale($lang);
//     return view('welcome');
// });



// Route::get('/user/{id?}', function ($id="No Data Passed") {
//     return view('user',["user"=>$id]);
// })->middleware('ageChecker');
// Route::redirect("/here","/welcome");
// Route::get("/myController","MyController@index");
// Route::view('/userview','userview');
// Route::view('/viewuser','user');
// Route::post('/UserController','UserController@formSubmit');
// Route::get('db',"Users@dbCheck");
// Route::get('/company','Companies@list');
// Route::get('/myuser','Users@index');
// Route::post('/upload','Users@index');
// Route::view('/form','userform');
// Route::get('/posts','Posts@index');
// Route::view('/brandform','userview');
// Route::post('/brandSubmit','Brands@save');
// Route::view('/brandformupdate','brandview');
// Route::post('/brandUpdate','Brands@update');
// Route::view('/delete','brandview');
// Route::post('/branddelete','Brands@delete');
// Route::get('/pdf','PDFMaker@generate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cache','Brands@index');
Route::get('/eventtest','UsersAuth@index');
Route::view('ajax','profile');