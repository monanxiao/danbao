<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Accessory;
use App\Models\Company;
use App\Models\Natural;

class MovementsController extends Controller
{
    //创建公司
    public function create_company(Request $request,Accessory $accessory,Company $company){

        // dd($request);exit;
        //入库字段
        $data = $request->only([
                                'company_name',
                                'legal_person',
                                'registered_capital',
                                'establish_time',
                                'registered_address',
                                'state',
                                'company_type',
                                'business_address',
                                'scale',
                                'source',
                                'credit_code',
                                'company_machin',
                                'rank',
                                'check_in',
                                'open_account',
                                'open_num',
                                'frame',
                                'state_operation',
                                'created_at'
                                ]);
        //赋值入库时间
       $data['created_at'] = date('Y-m-d H:i:s');

        //公司录入表单信息并返回录入id
        $cid = $company::insertGetId($data);
        if($cid){

    	//营业执照
    	$business_license = $request->business_license;
    	//身份证
    	$identity_card = $request->identity_card;
    	//开户许可证
    	$licence_opening = $request->licence_opening;
    	//特种经营许可证
    	$licence = $request->licence;
        // 用户id
        $uid = 1;
        //判断图片是否为空
        //传入图片，判断图片格式并返回数组集合(储存地址、图片格式、图片类、图片名字)；
        if(!empty($business_license)){

            //调用layout方法
            $business_license = $this->layout($business_license,$cid); 
            //附件入库
           Accessory::insert([
                                'file_name' => $business_license['name'],
                                'type' => $business_license['ext'],
                                'file_belong' => '营业执照',
                                'order_num'   => 1,
                                'company_id'  => $cid,
                                'users_id'    => $uid,
                                'site_url'    => $business_license['path'],
                                'created_at'  => date('Y-m-d H:i:s')
                            ]);
        }
        if(!empty($identity_card)){
            //调用layout方法
            $identity_card = $this->layout($identity_card,$cid);
            //附件入库
            Accessory::insert([
                                'file_name' => $identity_card['name'],
                                'type' => $identity_card ['ext'],
                                'file_belong' => '身份证',
                                'order_num'   => 1,
                                'company_id'  => $cid,
                                'users_id'    => $uid,
                                'site_url'    => $identity_card ['path'],
                                'created_at'  => date('Y-m-d H:i:s')
                            ]);
        } 
        if(!empty($licence_opening)){
             //调用layout方法
            $licence_opening = $this->layout($licence_opening,$cid);
             //附件入库
            Accessory::insert([
                                'file_name' => $licence_opening['name'],
                                'type' => $licence_opening['ext'],
                                'file_belong' => '开户许可证',
                                'order_num'   => 1,
                                'company_id'  => $cid,
                                'users_id'    => $uid,
                                'site_url'    => $licence_opening['path'],
                                'created_at'  => date('Y-m-d H:i:s')
                            ]);
        }
        if(!empty($licence)){
             //调用layout方法
            $licence = $this->layout($licence,$cid);
             //附件入库
            Accessory::insert([
                                'file_name' => $licence['name'],
                                'type' => $licence['ext'],
                                'file_belong' => '特种经营许可证',
                                'order_num'   => 1,
                                'company_id'  => $cid,
                                'users_id'    => $uid,
                                'site_url'    => $licence['path'],
                                'created_at'  => date('Y-m-d H:i:s')
                            ]);     
        } 

        return '上传成功';   
        }else{
            return '录入失败';
        }
           
        
    }

    //创建自然人信息
    public function create_natural(Request $request,Natural $natural,Accessory $accessory){

        $data = $request->only([
                                    'natural_name',
                                    'marriage',
                                    'phone',
                                    'plane',
                                    'address',
                                    'work_name',
                                    'natural_unit',
                                    'trade',
                                    'work_address',
                                    'work_plane',
                                    'postcode',
                                    'annual_income',
                                    'accumulation_fund',
                                    'social_security',
                                    'education',
                                    'profession',
                                    'work_age',
                                    'borrowed',
                                    'have_default',
                                    'source',
                                    'created_at'
                                ]);
        //赋值入库时间
       $data['created_at'] = date('Y-m-d H:i:s');

       $nid = $natural::insertGetId($data);

       if($nid)
    {
        //身份证
        $identity_card = $request->identity_card;
        //驾驶证
        $driver_license = $request->driver_license;
        //其他证件
        $else_licence = $request->else_licence;
        // 用户id
        $uid = 1;
        //判断图片是否为空
        //传入图片，判断图片格式并返回数组集合(储存地址、图片格式、图片类、图片名字)；
            if(!empty($identity_card)){

                //调用layout方法
                $business_license = $this->layout($identity_card,$nid); 
                //附件入库
               Accessory::insert([
                                    'file_name' => $business_license['name'],
                                    'type' => $business_license['ext'],
                                    'file_belong' => '身份证',
                                    'order_num'   => 1,
                                    'natural_id'  => $nid,
                                    'users_id'    => $uid,
                                    'site_url'    => $business_license['path'],
                                    'created_at'  => date('Y-m-d H:i:s')
                                ]);
            }
            if(!empty($driver_license))
            {
                //调用layout方法
                $identity_card = $this->layout($driver_license,$nid);
                //附件入库
                Accessory::insert([
                                    'file_name' => $identity_card['name'],
                                    'type' => $identity_card ['ext'],
                                    'file_belong' => '驾驶证',
                                    'order_num'   => 1,
                                    'natural_id'  => $nid,
                                    'users_id'    => $uid,
                                    'site_url'    => $identity_card ['path'],
                                    'created_at'  => date('Y-m-d H:i:s')
                                ]);
            } 
            if(!empty($else_licence))
            {
                 //调用layout方法
                $licence_opening = $this->layout($else_licence,$nid);
                 //附件入库
                Accessory::insert([
                                    'file_name' => $licence_opening['name'],
                                    'type' => $licence_opening['ext'],
                                    'file_belong' => '其他证件',
                                    'order_num'   => 1,
                                    'natural_id'  => $nid,
                                    'users_id'    => $uid,
                                    'site_url'    => $licence_opening['path'],
                                    'created_at'  => date('Y-m-d H:i:s')
                                ]);
            }

            return '上传成功';   

        }else{
                return '录入失败';
            }
         
    }
 


    //判断图片格式和储存图片地址返回地址、名字、格式方法
    public function layout($image,$id){
        //文件格式数组
    	$allowed_ext = ['png','jpeg','jpg','gif','bmp'];
        //获取文件格式
        $image_ext = $image->getClientOriginalExtension();
        //获取文件名称
        $image_name = $image->getClientOriginalName();

    	// 判断文件格式是否存在，不存在则返回错误
    	if(!in_array($image_ext, $allowed_ext)){

    		return '请上传正确的图片';
    	}else{

            if(!empty($id) && $id != 0 && $id != null){
                //公司上传的图片储存地址
                $image_path = "/uploads/image/" . $id . '/';
                // 文件具体存储的物理路径，`public_path()` 获取的是 `public` 文件夹的物理路径。
                $file_path = public_path() . $image_path;
                 //公司文件移动到公司文件下
                 $image->move($file_path, $image_name);

                 $url_path = $image_path . $image_name;
                 //返回图片名称、图片格式、图片地址
                 return ['name'=>$image_name,'ext'=>$image_ext,'path'=> $url_path];
            }
    	}

    }

}
