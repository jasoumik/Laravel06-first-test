<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Post;
use App\Brand;
use Illuminate\Support\Facades\Cache;
class Brands extends Controller
{
    // function save(Request $req){
    //  // print_r($req->input());
    //   $post=new Post;
    //   $post->brand_name = $req->name;
    //   $post->post_id= $req->post_id;
    //   echo $post->save();
    // }
    // function update(Request $req){
    // //   echo  Post::where('id',3)
    // //  ->update(['brand_name'=>$req->name]);
    // // print_r($req->input());
    //   $post=Post::find($req->id);
    //   $post->brand_name=$req->name;
    //   $post->post_id=$req->post_id;
    //   $post->save();
    // function delete(Request $req){
    //    // $post=Post::find($req->id);
    //    //echo $post->delete();
    //    Post::destroy([8]);
    // }
    // function index(){
    //      //echo Cache::set('item',Brand::all());
    //     // echo Cache::get('item');
    //      $data=Cache::rememberForever('bigX',function(){
    //         return Brand::all();
    //      });
    //     //return Brand::all();
    //     return $data;
    // }

    //for api
    public function save(Request $req){
        $brand=new Brand;
        $brand->brand_name=$req->name;
        $brand->post_id=$req->post_id;
        //return Brand::all();
        echo $brand->save();
    }
}
