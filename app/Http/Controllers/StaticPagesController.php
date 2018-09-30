<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Natural;
use App\Models\Item;
use App\Handlers\CreateWord;
use Illuminate\Support\Facades\Storage;
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

    //取出所有word
    public function Wordshow(){
       // 取到磁盘实例
        $disk = Storage::disk('mb_word');

        $directory = '/mb_word/';
        // 获取目录下的文件
        $mb_word = $disk->files($directory);
        // dd($mb_word);
        return view('staticpages.word_list',compact('mb_word'));
    }
    //预览word
    public function word(){

        $createword = new CreateWord();
        $request = 1;
        $num = 1;
        $iid =6;
       //调用模板创建模板方法
                 $array = $createword->create($request,$num,$iid);

                 dd($array);exit;
        return view('staticpages.word');
    }

}
