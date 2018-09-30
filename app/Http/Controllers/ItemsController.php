<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Item;
use App\Models\ItemsPhaseCreate;
use App\Models\ItemsPhase;
use App\Models\Company;
use App\Models\CreateItemsTable;
use App\Models\investigating;
use App\Models\PhaseAcessory;
use App\Models\Fxscsp;
use App\Models\MbWord;
use App\Models\Xmbgjsp;

class ItemsController extends Controller
{
    //取出所有项目列表
    public function show(){

        //取出所有项目、所属客户、创建人
        // $items = Item::all();
        $items = Item::Leftjoin('companies','items.companys_id','=','companies.id')
                        ->Leftjoin('naturals','items.naturals_id','=','naturals.id')
                        ->select('items.*','naturals.natural_name','companies.company_name')
                        ->get();
        // dd($items);

        return view('items.items_list',compact('items'));
    }
    //创建公司项目
    public function CreateItems(Request $request,ItemsPhaseCreate $phaseCreate){

        //取出所有阶段
        $phase = ItemsPhase::get();

        //判断客户类型存在将创建项目
        if($request->type == 'company')
        {
                //添加公司项目
                $items = Item::insertGetId([
                                            'items_name'    =>  $request->items_name,
                                            'items_type'    =>  $request->state,
                                            'companys_id'   =>  $request->cid,
                                            'users_id'      =>  1,
                                            'users_name'    =>  '李四',
                                            'created_at'    =>  date('Y-m-d H:i:s')
                                    ]);
                //创建项目阶段
                if($items)
                {   
                    foreach($phase as $pv){

                        $phaseCreate::insertGetId([

                                                    'phases_id'  =>   $pv['id'],
                                                    'items_id'   =>   $items,
                                                    'created_at' => date('Y-m-d H:i:s')
                                                    
                                                    ]);
                    }
                    //返回上一次操作
                    return back();

                }
                return $items;
        }elseif($request->type == 'natural')
        {

            //添加自然人项目
            $items = Item::insertGetId([
                                            'items_name'    =>  $request->items_name,
                                            'items_type'    =>  $request->state,
                                            'naturals_id'   =>  $request->cid,
                                            'users_id'      =>  1,
                                            'users_name'    =>  '李四',
                                            'created_at'    =>  date('Y-m-d H:i:s')
                                        ]);

            //创建项目阶段
             if($items)
            {
                foreach($phase as $pv){

                        $phaseCreate::insertGetId([

                                                    'phases_id'  =>   $pv['id'],
                                                    'items_id'   =>   $items,
                                                    'created_at' => date('Y-m-d H:i:s')
                                                    
                                                    ]);
                    }
                    //返回上一次操作
                    return back();
            }
        }
    	
    }

    //项目阶段详情
    public function ItemsShow($iid){

        //取出项目名称
        $items = Item::find($iid);
        $company = Company::find($items->companys_id);

        //取出项目阶段
        $phase =    Item::LeftJoin('items_phase_creates','items.id','=','items_phase_creates.items_id')
                                ->LeftJoin('items_phases','items_phase_creates.phases_id','=','items_phases.id')
                                ->where('items.id',$iid)
                                ->select('items.*','items_phases.*','items_phase_creates.phases_status')
                                ->get();
        //取出项目阶段附件
        $url =  Item::LeftJoin('phase_acessories','items.id','=','phase_acessories.items_id')
                            ->where('items.id',$iid)
                            ->select('phase_acessories.phases_id','phase_acessories.site_url','phase_acessories.file_name')
                            ->get();

        //取出阶段word模板
        $mb_words = item::LeftJoin('mb_words','items.id','=','mb_words.items_id')
                                ->where('items.id',$iid)
                                ->select('mb_words.*')
                                ->get();
        //调用方法获取阶段数据
        //第一阶段数据 初审材料
        $cscl = new CreateItemsTable();
        $cscl_array = $this->phaseDataGet($iid,$cscl);
        //数据集合
        $phasetable = $cscl_array['phasetable'];
        //数据状态
        $phasestatus = $cscl_array['phasestatus'];

        //第二阶段数据 保前尽职调查
        $bqjzdc = new investigating();        
        $bqjzdc_array = $this->phaseDataGet($iid,$bqjzdc);
        //数据集合
        $bqjzdc_data = $bqjzdc_array['phasetable'];
        //数据状态
        $bqjzdc_status = $bqjzdc_array['phasestatus'];

        //第三阶段数据 反担落实
        //暂无反担保落实
        //第四阶段 风险审查审批
        $fxscsp = new Fxscsp();
        $fxscsp_array = $this->phaseDataGet($iid,$fxscsp);
        //数据集合
        $fxscsp_data = $fxscsp_array['phasetable'];
        //数据状态
        $fxscsp_status = $fxscsp_array['phasestatus'];

        //第五阶段担保函
        
        //第六阶段项目变更及审批
        $xmbgjsp = new Xmbgjsp();
        $xmbgjsp_array = $this->phaseDataGet($iid,$xmbgjsp);
        //数据集合
        $xmbgjsp_data = $xmbgjsp_array['phasetable'];
        //数据状态
        $xmbgjsp_status = $xmbgjsp_array['phasestatus'];


        return view('items.itemsPhaseShow',compact('items','phase','company','phasetable','phasestatus','bqjzdc_data','bqjzdc_status','url','fxscsp_data','fxscsp_status','mb_words','xmbgjsp_data','xmbgjsp_status'));
    }
    //获取阶段数据
    public function phaseDataGet($iid,$data){

        //判断是否存在数据，存在取出数据集合
           $array =  $data::where('items_id',$iid)->count();
        //判断是否存在数据，如果存在则取出
           if($array == 0){
              $phasestatus = 0;
              $phasetable = 0;
              return ['phasetable'=>$phasetable,'phasestatus'=>$phasestatus];
           }else{
                //如果有数则取出一条集合
               $phasetable = $data::where('items_id',$iid)->first();
               $phasestatus = 1;
               return ['phasetable'=>$phasetable,'phasestatus'=>$phasestatus];
           }
    }
}
