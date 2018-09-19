<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Natural;
use App\Models\Item;
//引入word类
use App\Handlers\CreateWord;

class StaticPagesController extends Controller
{
    //客户列表
    public function ClientsIndex(Company $company,Natural $natural){
    	//取出公司客户
    	$company = $company::get();
    	//取出自然人客户
    	$natural = $natural::get();
    	return view('clients.clients',compact('company','natural'));
    }

    //公司项目列表
    public function ClientsCompanyItems($cid,Request $request){

            //取出本公司所有项目
    	      $item =  Item::where('companys_id',$cid)->get();

            //取出公司名称
            $company = Company::find($cid);

    		return view('clients.clientsCompanyitems',compact('cid','item','company'));
    }

    //自然人项目列表
    public function ClientsNaturalItems($cid,Request $request){

              //取出本公司所有项目
              $item =  Item::where('naturals_id',$cid)->get();
              //取出自然人姓名
              $natural = Natural::find($cid);
              
            return view('clients.clientsnAturalitems',compact('cid','item','natural'));
    }
    //模板录入测试
    public function word(CreateWord $created){
        $data =1;
        $array = $created->create($data);
        dd($array);
    }
}
