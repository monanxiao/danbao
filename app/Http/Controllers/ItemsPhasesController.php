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

use App\Handlers\CreateWord;

class ItemsPhasesController extends Controller
{
    //生成阶段
    public function create_phase(Request $request){

        //生成阶段数据
        $phase = ItemsPhase::insert([
                                    ['phase_name'=>'初审材料','phase_type'=>'csclAdd','created_at'=>date('Y-m-d H:i:s')],
                                    ['phase_name'=>'保前尽职调查','phase_type'=>'bqjzdcAdd','created_at'=>date('Y-m-d H:i:s')],
                                    ['phase_name'=>'反担保落实','phase_type'=>'fdblsAdd','created_at'=>date('Y-m-d H:i:s')],
                                    ['phase_name'=>'风险审查审批','phase_type'=>'fxscspAdd','created_at'=>date('Y-m-d H:i:s')],
                                    ['phase_name'=>'担保函','phase_type'=>'dbhAdd','created_at'=>date('Y-m-d H:i:s')],
                                    ['phase_name'=>'项目变更及审批','phase_type'=>'xmbgjspAdd','created_at'=>date('Y-m-d H:i:s')],
                                    ['phase_name'=>'合同起草、审批及签订、公证','phase_type'=>'htqcspqdgzAdd','created_at'=>date('Y-m-d H:i:s')],
                                    ['phase_name'=>'放款程序','phase_type'=>'fkcxAdd','created_at'=>date('Y-m-d H:i:s')],
                                    ]);
        //生成成功返回上一步操作
        if($phase){
            return back();
        }
    }

    //录入项目阶段表单
    public function create_tables($iid,Request $request,CreateItemsTable $phasecreate)
    {   
        
        //初始资料阶段
        if($request->btn_type == 'cscl')
        {   
            //初审材料
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
            //获取提交的状态
            $status = $request->table_status;
            //要录入的数据库
            $table = new CreateItemsTable();
            //提交的阶段
            $num = 1;
           
            //调用入库方法
            $status = $this->phase_create($data,$iid,$status,$table,$num);
            //是否调用成功
            if($status){

                return back();

            }else{

                return '数据录入有误';
            }

        }elseif ($request->btn_type == 'bqjzdc')
        {
            //保前尽职调查
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
            //获取提交的状态
            $status = $request->table_status;
            //要录入的数据库
            $table = new investigating();
            //提交的阶段
            $num = 2;
            //调用入库方法
            $status = $this->phase_create($data,$iid,$status,$table,$num);
                //是否调用成功
                if($status)
                {

                    return back();
                }else
                {

                    return '数据录入有误';
                }

        }elseif ($request->btn_type == 'fdbls')
        {   //暂无 反担保落实

        }elseif ($request->btn_type == 'fxhbjb')
        {   //风险审查审批
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

            //获取提交的状态
            $status = $request->table_status;
            //要录入的数据库
            $table = new Fxscsp();
            //提交的阶段
            $num = 4;
            //调用入库方法
            $status = $this->phase_create($data,$iid,$status,$table,$num);
                //是否调用成功
                if($status)
                {

                    return back();
                }else
                {

                    return '数据录入有误';
                }

        }elseif ($request->btn_type == 'dbh')
        {   //暂无 担保函

        }elseif ($request->btn_type == 'xmbgjsp') 
        {   
            //项目变更及审批
            //白名单字段
            $data = $request->only([
                                    'loan_bank',
                                    'items_id',
                                    'alteration',
                                    'table_status',
                                    'created_at'
                                   ]);
            // dd($data);exit;
            //获取提交的状态
            $status = $request->table_status;
            //要录入的数据库
            $table = new Xmbgjsp();
            //提交的阶段
            $num = 6;
            //调用入库方法
            $status = $this->phase_create($data,$iid,$status,$table,$num);
                //是否调用成功
                if($status)
                {
                    return back();
                }else
                {
                    return '数据录入有误';
                }
        }elseif ($request->btn_type == 'htqcspjqd')
        {   //暂无 合同起草审批及签订

        }elseif ($request->btn_type == 'fkcx')
        {   //暂无放款程序

        }
    }

    //处理录入阶段表单数据方法
    public function phase_create($data,$iid,$status,$table,$num)
    {

        //data 录入的字段白名单 iid项目id status 提交的状态 table数据表 num 第几阶段
        //项目id
        $data['items_id'] = $iid;
        //入库时间
        $data['created_at'] = date('Y-m-d H:i:s');

        //判断提交的状态
        //状态等于2的时候
        if($status == 2)
        {

            //状态值赋值为2
            $data['table_status'] = 2;

            //获取到的数据入库
            $table = $table::insertGetId($data);

            //假如录入成功，则修改阶段的状态
            if($table)
            {
                //录入阶段状态
                ItemsPhaseCreate::where('items_id', '=', $iid)
                                    ->where('phases_id','=',$num)
                                    ->update(['phases_status'=>'进行中']);
                return 'true';
            }

            //或者等于1的时候 完成阶段录入
        }   elseif($status == 1)
            {

                //状态值赋值为1
                $data['table_status'] = 1;
                //数据入库
                $table = $table::insertGetId($data);
                //修改阶段状态
                if($table)
                {
                        ItemsPhaseCreate::where('items_id', '=', $iid)
                                            ->where('phases_id','=',$num)
                                            ->update(['phases_status'=>'完成']);
                    return 'true';                          
                }
            }else{

                return 'false';
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
  	         //文档阶段
            $type = $request->btn_type;

            $createdword = new CreateWord();

            $iid = 1;
            //调用word模板方法
            $url = $createdword->create($data,$type,$iid);
            dd($url);exit;
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
