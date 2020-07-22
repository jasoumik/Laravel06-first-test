<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class Posts extends Controller
{
    //
    // function index(){
    //    // $data= Post::where('brand_name','Apple')->get();
    // //    $data= Post::orderBy('brand_name','desc')->get()->take(0);
    // //    return view('post',['data'=>$data]);
    // //echo "my Codes";
    // return Post::find(1)->myBrand;
    // }
    function list(){
        return Post::all();
    }
}
