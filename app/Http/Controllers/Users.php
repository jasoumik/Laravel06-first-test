<?php

namespace App\Http\Controllers;
use App\NewUser;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    function list(){
        
    }
    // function index(Request $request){
    //    // print_r($request->file());

    //    echo $request->file('user_img')->store('upload');

    //     // $data=['name'=>'jasoumik','head'=>'<h1>Break the brick</h1>'];
    //     // return view('user',['data'=>$data]);
    // }
   // function dbCheck(){
    //return NewUser::all();
   // return Post::all();
        // $user=DB::table('posts')
        // ->join('users','posts.id','users.post_id')
        // ->get();
        //->max('id');
        // ->where('title','Fourth Post')
        // ->update([
        //         'title' =>'Fourth Post',
        //         'content'=>'This is the fourth post'
        //      ]);
        // ->insert([
        //     'title' =>'Fourth Post',
        //     'content'=>'This is fourth post'
        // ]);
        //->where('title','Third Post')
        //->delete();
        //->count();
        //->find(3);
    //    ->where('id','1')
    //    ->get();
       // print_r($user);
        //echo "Hello DB";
    //}

}
