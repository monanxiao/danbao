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

class ItemsController extends Controller
{
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
        $phase =  Item::LeftJoin('items_phase_creates','items.id','=','items_phase_creates.items_id')
                            ->LeftJoin('items_phases','items_phase_creates.phases_id','=','items_phases.id')
                            ->where('items.id',$iid)
                            ->select('items.*','items_phases.*','items_phase_creates.phases_status')
                            ->get();
        
        //调用方法获取阶段数据
        //第一阶段数据
        $cscl = new CreateItemsTable();
        $cscl_array = $this->phaseDataGet($iid,$cscl);
        //数据集合
        $phasetable = $cscl_array['phasetable'];
        //数据状态
        $phasestatus = $cscl_array['phasestatus'];

        //第二阶段数据
        $bqjzdc = new investigating();        
        $bqjzdc_array = $this->phaseDataGet($iid,$bqjzdc);
        //数据集合
        $bqjzdc_data = $bqjzdc_array['phasetable'];
        //数据状态
        $bqjzdc_status = $bqjzdc_array['phasestatus'];
        // dd();exit;

        //第三阶段数据
       
                            
        return view('items.itemsPhaseShow',compact('items','phase','company','phasetable','phasestatus','bqjzdc_data','bqjzdc_status'));
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
