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
use App\Models\PhaseAcessory;
use App\Models\MbWord;

use App\Handlers\CreateWord;
use App\Handlers\FileUploadHandler;

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
            $file = $request->business_license;
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
            $status = $this->phase_create($data,$iid,$status,$table,$num,$file,$request);
            //是否调用成功
            if($status){

                return back();

            }else{

                return '数据录入有误';
            }

        }elseif ($request->btn_type == 'bqjzdc')
        {
            //保前尽职调查
            
            //初审材料
            $file = $request->business_license;
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
            $status = $this->phase_create($data,$iid,$status,$table,$num,$file);
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
                                    'created_at',
                                    'user_vip',
                                    'oppose',
                                    'consent',
                                    'items_yq',
                                    'fdb_ls',
                                    'zrwy',
                                    'pshjy',
                                    'bjyj',
                                    'fxkzyq'
                                ]);
            //附件
            $file = $request->business_license;
            //获取提交的状态
            $status = $request->table_status;
            //要录入的数据库
            $table = new Fxscsp();
            //提交的阶段
            $num = 4;
            //调用入库方法
            $status = $this->phase_create($data,$iid,$status,$table,$num,$file);
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

    //更新表单数据
    public function update_tables($iid,Request $request)
    {   
        //$iid 项目id $request 数据集合

        //初审材料
        if($request->btn_type == 'cscl')
        {   
            //数据库 初审材料
            $table = new CreateItemsTable();

            //获取表单数据 设置白名单
            $data = $request->only([
                                'loans_use',
                                'borrower',
                                'deadline',
                                'rate',
                                'measure',
                                'loans_money',
                                'table_status',
                                'items_id'
                                ]);
            //获取文件
             $file = $request->business_license;
            //获取项目id
            $data['items_id'] = $iid;
            //获取操作状态
            $status = $request->table_status;
            //第一个阶段
            $pid = 1;
            // dd($data);exit;
            //调用更新方法
            $status = $this->phase_update($table,$data,$pid,$status,$file,$request,$iid);

            //判断是否执行成功
            if($status){

                return back();
            }
        }

        //保前尽职调查
        if($request->btn_type == 'bqjzdc')
        {   
            //设置操作数据库
            $table = new investigating();
            //数据库白名单设置
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
            //获取附件
            $file = $request->business_license;
             //获取项目id
            $data['items_id'] = $iid;
            //获取操作状态
            $status = $request->table_status;
            //第一个阶段
            $pid = 2;
            //调用更新方法
            $status = $this->phase_update($table,$data,$pid,$status,$file);
            //判断是否执行成功
            if($status){

                return back();
            }
        }

        //反担保落实
        
        //风险审查审批
        if($request->btn_type == 'fxhbjb')
        {   
            
            //数据库白名单设置
            $data = $request->only([
                                    'risk_name',
                                    'item_name',
                                    'assure',
                                    'commit',
                                    'content',
                                    'items_id',
                                    'table_status',
                                    'created_at',
                                    'user_vip',
                                    'oppose',
                                    'consent',
                                    'items_yq',
                                    'fdb_ls',
                                    'zrwy',
                                    'pshjy',
                                    'bjyj',
                                    'fxkzyq'
                                ]);
            //获取文件
             $file = $request->business_license;
            //设置操作数据库
            $table = new Fxscsp();
             //获取项目id
            $data['items_id'] = $iid;
            //获取操作状态
            $status = $request->table_status;
            //第一个阶段
            $pid = 4;
            //调用更新方法
            $status = $this->phase_update($table,$data,$pid,$status,$file);
            //判断是否执行成功
            if($status){

                return back();
            }
        }

    }

    //处理更新表单数据方法
    public function phase_update($table,$data,$pid,$status,$file,$request,$iid)
    {   
        //$table 操作的数据库 $data 白名单字段 $iid 项目id $pid阶段id $status 操作状态 $request 数据集合
        $uploader = new FileUploadHandler();

        //实例化文件上传类
        $createword = new CreateWord();

        //判断当前状态
        if($status == 2)
        {   
            //判断是否有文件数据
            if($file){
               //遍历文件
                foreach($file as $fv){

                    //储存到指定位置
                    $url = $uploader->save($fv,$data['items_id']);
                    //获取返回地址
                    $accesory = PhaseAcessory::insert([
                                                        'items_id'  => $data['items_id'],
                                                        'phases_id' => $pid,
                                                        'file_name' => $url['file_name'],
                                                        'site_url'  =>  $url['path'],
                                                        'created_at' => date('Y-m-d H:i:s')
                                                        ]);
                } 
            }
            //调用模板创建模板方法   
             $createword->create($request,$pid,$iid);
            //更新数据
             $table::where('items_id',$iid)->update($data);
             
            //执行成功后返回真假数据
            return true;

        }else if($status == 1)
        {
            //判断是否有文件数据
            if($file){
               //遍历文件
                foreach($file as $fv){

                    //储存到指定位置
                    $url = $uploader->save($fv,$data['items_id']);
                    //获取返回地址
                    $accesory = PhaseAcessory::insert([
                                                        'items_id'  => $data['items_id'],
                                                        'phases_id' => $pid,
                                                        'file_name' => $url['file_name'],
                                                        'site_url'  =>  $url['path'],
                                                        'created_at' => date('Y-m-d H:i:s')
                                                        ]);
                } 
            }
            //状态改为1
            $data['table_status'] = $status;
             //调用模板创建模板方法   
             $createword->create($request,$pid,$iid);
            //数据更新入库
            $stu = $table::where('items_id',$iid)->update($data);
            //判断是否更新成功
            if($stu){
                //修改阶段状态
                $status = ItemsPhaseCreate::where([
                                                    ['items_id', '=', $data['items_id']],
                                                    ['phases_id','=',$pid]
                                                ])->update(['phases_status'=>'完成']);

                return true;                 
            } 
        }

    }

    //处理录入阶段表单数据方法
    public function phase_create($data,$iid,$status,$table,$num,$file,$request)
    {

        //data 录入的字段白名单数据 iid项目id status 提交的状态 table数据表 num 第几阶段
        $uploader = new FileUploadHandler();
        // 实例化模板储存表
        $mb_word =  new MbWord();
        //实例化文件上传类
        $createword = new CreateWord();

        //项目id
        $data['items_id'] = $iid;
        //入库时间
        $data['created_at'] = date('Y-m-d H:i:s');
        
        //判断提交的状态
        //状态等于2的时候
        if($status == 2)
        {   

            //判断是否有文件数据
            if($file){
               //遍历文件
                foreach($file as $fv){

                    //储存到指定位置
                    $url = $uploader->save($fv,$iid);
                    //获取返回地址
                    $accesory = PhaseAcessory::insert([
                                                        'items_id'  => $iid,
                                                        'phases_id' => $num,
                                                        'file_name' => $url['file_name'],
                                                        'site_url'  =>  $url['path'],
                                                        'created_at' => date('Y-m-d H:i:s')
                                                        ]);
                } 
            }
            //状态值赋值为2
            $data['table_status'] = 2;

            //获取到的数据入库
            $table = $table::insertGetId($data);

            //假如录入成功，则修改阶段的状态
            if($table)
            {
                //调用模板创建模板方法
                 $array = $createword->create($request,$num,$iid);
                 // return $array;exit;
                //储存文件地址
                 foreach($array as $k => $v){
                    //遍历数据入库
                    $mb_word->insert([
                                        'mb_name'   =>  $k,
                                        'items_id'  =>  $iid,
                                        'phase_id'  =>  $num,
                                        'site_url'  =>  $v,
                                        'created_at'=>  date('Y-m-d H:i:s')
                                    ]);
                 }

                //录入阶段状态
                ItemsPhaseCreate::where('items_id', '=', $iid)
                                    ->where('phases_id','=',$num)
                                    ->update(['phases_status'=>'进行中']);

                return 'true';
                
            }

            //或者等于1的时候 完成阶段录入
        }   elseif($status == 1)
            { 
            
                //判断是否有文件数据
                if($file){
                   //遍历文件
                    foreach($file as $fv){

                        //储存到指定位置
                        $url = $uploader->save($fv,$iid);

                        //获取返回地址
                        $accesory = PhaseAcessory::insert([
                                                            'items_id'  => $iid,
                                                            'phases_id' => $num,
                                                            'file_name' => $url['file_name'],
                                                            'site_url'  =>  $url['path'],
                                                            'created_at' => date('Y-m-d H:i:s')
                                                            ]);
                    } 
                }
                //状态值赋值为1
                $data['table_status'] = 1;
                //数据入库
                $table = $table::insertGetId($data);
                //修改阶段状态
                if($table)
                {                   

                    //调用模板创建模板方法
                     $array = $createword->create($request,$num,$iid);

                    //储存文件地址
                     foreach($array as $k => $v){
                        //遍历数据入库
                        $mb_word->insert([
                                            'mb_name'   =>  $k,
                                            'items_id'  =>  $iid,
                                            'phase_id'  =>  $num,
                                            'site_url'  =>  $v,
                                            'created_at'=>  date('Y-m-d H:i:s')
                                        ]);
                     }

                    //修改阶段状态
                    ItemsPhaseCreate::where('items_id', '=', $iid)
                                            ->where('phases_id','=',$num)
                                            ->update(['phases_status'=>'完成']);
                    return 'true';                                                  
                }
            }else{

                return 'false';
            }

    } 
    
}
