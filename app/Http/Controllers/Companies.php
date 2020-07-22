<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
class Companies extends Controller
{
    //
    // function list(){
    //     $data=DB::table('posts')->paginate(1);
    //     return view('companies',['data'=>$data]);
    // }
    // public function save(Request $req){
    //     $company=new Company;
    //     $company->name=$req->name;
    //     $company->address=$req->address;
    //     //return company::all();
    //     echo $company->save();
    // }
    // function update(Request $req){
    //        //return $req->input();
    //        $company=Company::find($req->id);
    //        $company->address=$req->add;
    //        if($company->save()){
    //            return "success";
    //        }
    // }

    function valid(Request $req){
        $valid=Validator::make($req->all(),[
            'address'=>"required"
        ]);
        if($valid->fails()){
            return response()->json([
                'error' => $valid->errors()
            ],401);
        }
        $company=new Company;
        $company->name=$req->name;
        $company->address=$req->address;
        echo $company->save();
    }
}
