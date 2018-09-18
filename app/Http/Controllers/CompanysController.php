<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Company;
use App\Models\Accessory;


class CompanysController extends Controller
{
    //公司客户列表
    public function index(Company $company){
    	//取出公司客户
        $company = $company::get();

    	return view('clients.companys',compact('company'));
    }

    //详情页
    public function show($id,Request $request){
        //取出公司信息
       $company =  Company::find($id);

        //取出证件信息
       $accessory = Accessory::where('company_id',$id)->get();

        return view('clients.companyClientShow',compact('company','accessory'));
        // dd($id);
    }

    public function store(Request $request){
        // dd($request);
        return 123;
    }

    //公司客户创建
    public function create(Request $request){

    	dd($request);exit;
    	
    	return 123;
    }
}
