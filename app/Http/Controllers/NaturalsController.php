<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Natural;
use App\Models\Accessory;

class NaturalsController extends Controller
{
    //公司客户列表
    public function index(Natural $natural){

    	//取出自然人客户
        $natural = $natural::get();

    	return view('clients.natural',compact('natural'));
    }

    //详情
    public function show($id,Request $request){

        //取出自然人信息
        $natural = Natural::find($id);
        //取出附件信息
        $accessory = Accessory::where('natural_id',$id)->get();
        return view('clients.naturalClientShow',compact('natural','accessory'));
    }
  
    //公司客户创建
    public function create(Request $request){

    	dd($request);
    	
    	return 123;
    }
}
 