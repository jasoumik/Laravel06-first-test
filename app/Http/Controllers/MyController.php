<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class MyController extends Controller
{
    //
    function index(Request $request){
       // echo "Controller Created where id is ".$id;
      // return ["id"=>$id,"user"=>"jasoumik"];
      //return view('user',["name"=>"jarif"]);
    //   if(View::exists('user')){
    //     return view('user',["name"=>"jarif"]);
    //   }else{
    //     return view('set');
    //   }
    echo "<pre>";
    print_r($request->input('search')); //for getting the reqst
    echo '<br>';
    print_r($request->query());//checking query string
    echo "</pre>";
    echo $request->path().'<br>'; //Controller path
    echo $request->url().'<br>'; //to get the specific url
    echo $request->fullUrl().'<br>';//to get the full url
    echo $request->method().'<br>';//to get the method
    if($request->isMethod('GET')){
        echo "Wow! It's a GET";
    }else {
        echo "Sorry,Not a GET :(";
    }
    }
}
