<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\CreateItemsTable;
use App\Models\ItemsPhaseCreate;
use App\Models\investigating;
use App\Models\Fxscsp;
use App\Models\Xmbgjsp;
use App\Models\ItemsPhase;

class ItemsPhasesController extends Controller
{
    //生成阶段
    public function create_phase(Request $request){

        //生成阶段数据
        $phase = ItemsPhase::insert([
                                    ['phase_name'=>'初审材料','phase_type'=>'csclAdd','created_at'=>date('Y-m-d H:i:s')],
                                    ['phase_name'=>'保前尽职调查','phase_type'=>'bqjzdcAdd','created_at'=>date('Y-m-d H:i:s')],
                                    ['phase_name'=>'风险审查审批','phase_type'=>'fxscspAdd','created_at'=>date('Y-m-d H:i:s')]
                                    ]);
        //生成成功返回上一步操作
        if($phase){
            return back();
        }
    }

    //录入项目阶段表单
    public function create_tables($iid,Request $request,CreateItemsTable $phasecreate){

        //反担保落实
        // dd($request);exit;
        //项目变更及审批
        if($request->btn_type == 'xmbgjsp')
        {
            // dd($request);exit;
            //白名单字段
            $data = $request->only([
                                    'loan_bank',
                                    'items_id',
                                    'alteration',
                                    'table_status',
                                    'created_at'
                                   ]);
            //项目id
            $data['items_id'] = $iid;
            //数据创建时间
            $data['created_at'] = date('Y-m-d H:i:s');
            //获取提交状态
            $status = $request->table_status;
            //判断状态
            if($status == 2)
            {
                //获取当前状态
                $data['table_status'] = 2;
                //数据入库
                $id = Xmbgjsp::insertGetId($data);
                 //执行成功，修改阶段状态
                if($id)
                {

                    //修改阶段状态
                    ItemsPhaseCreate::where('items_id', '=', $iid)
                                            ->where('phases_id','=',4)
                                            ->update(['phases_status'=>'进行中']);
                    return back();
                }
                
            }elseif($status == 1)
            {
                //修改数据表状态
                 $data['table_status'] = 1;
                //数据入库
                 $id = Xmbgjsp::insertGetId($data);
                //执行成功，修改阶段状态
                if($id)
                {

                    //修改阶段状态
                    ItemsPhaseCreate::where('items_id', '=', $iid)
                                            ->where('phases_id','=',4)
                                            ->update(['phases_status'=>'完成']);
                    return back();
                }
            }
        }
        //风险审查审批阶段
        if($request->btn_type == 'fxhbjb'){
            //白名单字段
            $data = $request->only([
                                    'risk_name',
                                    'item_name',
                                    'assure',
                                    'commit',
                                    'content',
                                    'items_id',
                                    'table_status',
                                    'created_at'
                                ]);
            //项目id
            $data['items_id'] = $iid;
            //数据创建时间
            $data['created_at'] = date('Y-m-d H:i:s');
            //获取提交状态
            $status = $request->table_status;
            //判断提交状态
            if($status == 2){
                //修改数据表状态
                $data['table_status'] = 2;
                //数据入库
                $id = Fxscsp::insertGetId($data);
                //执行成功，修改阶段状态
                if($id){

                    //修改阶段状态
                    ItemsPhaseCreate::where('items_id', '=', $iid)
                                            ->where('phases_id','=',3)
                                            ->update(['phases_status'=>'进行中']);
                    return back();
                }

            }elseif($status == 1){
                 //修改数据表状态
                $data['table_status'] = 1;
                //数据入库
                $id = Fxscsp::insertGetId($data);
                //执行成功，修改阶段状态
                if($id){

                    //修改阶段状态
                    ItemsPhaseCreate::where('items_id', '=', $iid)
                                            ->where('phases_id','=',3)
                                            ->update(['phases_status'=>'完成']);
                    return back();
                }
            }
            
        }
        //保前尽职调查入库
        if($request->btn_type == 'bqjzdc')
        {
            //录入的字段白名单
            $data = $request->only([
                                    'items_id',
                                    'jrjg_name',
                                    'dklx',
                                    'fzze',
                                    'dbye',
                                    'dkln',
                                    'dkqx',
                                    'ssyq',
                                    'sshy',
                                    'users_name',
                                    'dc_time',
                                    'dc_yijian',
                                    'remark',
                                    'table_status',
                                    'created_at'
                                    ]);
            //项目id
            $data['items_id'] = $iid;
            //阶段数据创建时间
            $data['created_at'] = date('Y-m-d H:i:s');
            //提交数据 修改、保存、完成
            $status = $request->table_status;
            //判断提交类型
            if($status == 2)
            {
                //修改数据状态
                $data['table_status'] = 2;
                //数据入库
                $id = investigating::insertGetId($data);

                //执行成功，修改阶段状态
                if($id){

                    //修改阶段状态
                    ItemsPhaseCreate::where('items_id', '=', $iid)
                                            ->where('phases_id','=',2)
                                            ->update(['phases_status'=>'进行中']);
                    return back();
                }
            }

            if($status == 1){
                //修改数据状态
                $data['table_status'] = 1;
                //数据入库
                $id = investigating::insertGetId($data);

                //执行成功，修改阶段状态
                if($id){

                    //修改阶段状态
                    ItemsPhaseCreate::where('items_id', '=', $iid)
                                            ->where('phases_id','=',1)
                                            ->update(['phases_status'=>'完成']);
                    return back();
                }
            }
        }
        //初始资料阶段
        if($request->btn_type == 'cscl')
        {
        	//录入的字段白名单
        	$data = $request->only([
        							'loans_use',
        							'borrower',
        							'deadline',
        							'rate',
        							'measure',
        							'loans_money',
        							'table_status',
        							'items_id',
        							'created_at'
        							]);
        	//项目id
        	$data['items_id'] = $iid;
        	//入库时间
        	$data['created_at'] = date('Y-m-d H:i:s');
      	
        	//获取操作状态
        	$status = $request->table_status;
        	//保存为可修改状态
        	if($status == 2)
            {
        		$data['table_status'] = 2;

    	    	//数据入库
    	    	$phasecreate = $phasecreate::insertGetId($data);

    			//修改阶段状态
    			    if($phasecreate)
    			    {
    			    		ItemsPhaseCreate::where('items_id', '=', $iid)
    			    							->where('phases_id','=',1)
    											->update(['phases_status'=>'进行中']);
    					return back();
    			    }

    	   }

    	    //保存成功进入下一阶段
        	if($status == 1)
            {
        		$data['table_status'] = 1;
    	    	//数据入库
    	    	$phasecreate::insertGetId($data);
    			//修改阶段状态
    			    if($phasecreate)
    			    {
    			    		ItemsPhaseCreate::where('items_id', '=', $iid)
    			    							->where('phases_id','=',1)
    											->update(['phases_status'=>'完成']);
    					return back();							
    			    }
    				
        	}
        }	
    }
    //更新表单数据
    public function update_tables($pid,Request $request)
    {   
        //初审材料
        $phasecreate = new CreateItemsTable();
        //保前尽职调查调查
        $bqjzdc = new investigating();

        //保前尽职调查
        if($request->btn_type == 'bqjzdc')
        {
            $data = $request->only([
                                    'jrjg_name',
                                    'dklx',
                                    'fzze',
                                    'dbye',
                                    'dkln',
                                    'dkqx',
                                    'ssyq',
                                    'sshy',
                                    'users_name',
                                    'dc_time',
                                    'dc_yijian',
                                    'remark',
                                    'table_status'
                                ]);

            $status = $request->table_status;
            //判断提交状态
            if($status == 2){

                $bqjzdc::where('id',$pid)->update($data);
                return back();

            }else if($status == 1){

                $data['table_status'] = 1;
                //数据入库
                $bqjzdc::where('id',$pid)->update($data);
                //获取项目id
                $iid = $bqjzdc::where('id',$pid)->select('items_id')->first();
                //修改阶段状态
                    if($bqjzdc)
                    {
                            ItemsPhaseCreate::where('items_id', '=', $iid['items_id'])
                                                ->where('phases_id','=',2)
                                                ->update(['phases_status'=>'完成']);
                        return back();
                    }
            }
        }

        //初审材料
        if($request->btn_type == 'cscl')
        {
    		//获取表单数据
    	   	$data = $request->only([
    							'loans_use',
    							'borrower',
    							'deadline',
    							'rate',
    							'measure',
    							'loans_money',
    							'table_status',
    							'items_id',
    							'created_at'
    							]);
  	         
        	//获取操作状态
        	$status = $request->table_status;
        	//判断修改状态
        	if($status == 2)
            {
        		//修改表单数据
        		$phasecreate::where('id',$pid)->update($data);
                return back();

        	}else if($status == 1)
            {
        		$data['table_status'] = 1;
    	    	//数据入库
    	    	$phasecreate::where('id',$pid)->update($data);
    	    	//获取项目id
    	    	$iid = $phasecreate::where('id',$pid)->select('items_id')->first();
    			//修改阶段状态
    			    if($phasecreate)
    			    {
    			    		ItemsPhaseCreate::where('items_id', '=', $iid['items_id'])
    			    							->where('phases_id','=',1)
    											->update(['phases_status'=>'完成']);
    					return back();
    			    }
        	}
        }
        	

    }
    
}
