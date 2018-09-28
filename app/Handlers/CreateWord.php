<?php

/**
 * @Author: Gao Yongjian
 * @Date:   2018-09-19 17:07:22
 * @email:   monanxiao@qq.com
 * @Last Modified by:   Mo Nanxiao
 * @Last Modified time: 2018-09-28 17:54:29
 */
namespace App\Handlers;

class CreateWord{

	//模板测试
	public function create($data,$num,$iid){

		//$data数据集合 $iid项目id $num 阶段
		// return $num;exit;
		//引入word扩展
		$PHPWord = new \PhpOffice\PhpWord\PHPWord();
		//公共目录
		$path = public_path();
		//创建目录
		//判断目录是否存在，不存在则创建
		$res = $path . '\\' . 'items\\' . $iid . '\phase\\';

		if(is_dir($res)){

				$res = 'items\\' . $iid . '\phase\\';

			}else{

				 mkdir(iconv("UTF-8", "GBK",'items\\' . $iid . '\phase\\'),0777,true);

				 $res = 'items\\' . $iid . '\phase\\';
			}

		//判断传入文件
		if ($num == '1'){
			// return $data;exit;
			//读取委托担保申请书模板
			$document = $PHPWord->loadTemplate($path . '/mb_word/' .'委托担保申请书.docx'); 
			//生成的文件名称
			$wtdb = $res . '委托担保申请书.docx';
			// 执行保存文件
			 $this->word_va($document,$wtdb,$data);
			//读取担立项审批表
			$document = $PHPWord->loadTemplate($path . '/mb_word/' .'立项审批表.docx');
			//生成的文件名称
			$lxsp =  $res . '立项审批表.docx';
			// 执行保存文件
			$this->word_va($document,$lxsp,$data);
			//读取担保意向函模板
			$document = $PHPWord->loadTemplate($path . '/mb_word/' .'担保意向函.docx'); 
			//生成的文件名称
			$dbyx =  $res . '担保意向函.docx';
			// 执行保存文件
			$this->word_va($document,$dbyx,$data);
			//地址集合
			$url = ['委托担保申请书' => $wtdb,'立项审批表' => $lxsp,'担保意向函' => $dbyx];

			$dataword = [$wtdb,$lxsp,$dbyx];

		}elseif ($num == '2'){

				//读取担保意向函模板
				$document = $PHPWord->loadTemplate($path . '/mb_word/' .'融资担保业务审批表.docx');
				//生成的文件名称
				$rzdn =  $res . '融资担保业务审批表.docx';
				// 执行保存文件
				$this->word_va($document,$rzdn,$data);
				//地址集合
				$url = ['融资担保业务审批表' => $rzdn];
				//返回数据集合
				$dataword = [$rzdn];

		}elseif ($num == '3'){

				//读取担保意向函模板
				// $document = $PHPWord->loadTemplate($path . '/' .'担保函.docx');
				//生成的文件名称
				// $url =  $res . '担保函.docx';

		}elseif ($num == '4'){

				//读取评审会表决表模板
				$document = $PHPWord->loadTemplate($path . '/mb_word/' .'评审会表决表.docx');
				//生成的文件名称
				$pshbjb =  $res . '评审会表决表.docx';
				// 执行保存文件
				$this->word_va($document,$pshbjb,$data);

				//读取评审会决议表模板
				$document = $PHPWord->loadTemplate($path . '/mb_word/' .'评审会决议表.docx');
				//生成的文件名称
				$pshjyb =  $res . '评审会决议表.docx';
				// 执行保存文件
				$this->word_va($document,$pshjyb,$data);

				//地址集合
				$url = ['评审会表决表' => $pshbjb,'评审会决议表'=>$pshjyb];

				//返回数据集合
				$dataword = [$pshbjb,$pshjyb];
				

		}elseif ($num == '5'){

				//读取担保意向函模板
				$document = $PHPWord->loadTemplate($path . '/mb_word/' .  '担保函.docx');
				//生成的文件名称
				$dbh =  $res . '担保函.docx';
				// 执行保存文件
				$this->word_va($document,$dbh,$data);

				//地址集合
				$url = ['担保函' => $dbh];

				//返回数据集合
				$dataword = [$dbh];

		}elseif ($num == '6'){

				//读取评审会表决表模板
				$document = $PHPWord->loadTemplate($path . '/mb_word/' .'项目变更审批表.docx');
				//生成的文件名称
				$xmbgjspb =  $res . '项目变更审批表.docx';
				// 执行保存文件
				$this->word_va($document,$xmbgjspb,$data);

				//地址集合
				$url = ['项目变更审批表' => $xmbgjspb];

				//返回数据集合
				$dataword = [$xmbgjspb];

		}elseif ($num == 'fktzs'){

				//读取担保意向函模板
				$document = $PHPWord->loadTemplate($path . '/' .  '放款审批表.docx');
				//生成的文件名称
				$url =  $res . '放款审批表.docx';
				//读取担保意向函模板
				$document = $PHPWord->loadTemplate($path . '/' .  '放款通知书.docx');
				//生成的文件名称
				$url =  $res . '放款通知书.docx';
		}
		
			//返回路径
			return $url;
	}

		//公共变量区域

	// ------------------------------开始--------------------------------------
	public function word_va($document,$savaname,$data){

		//客户名称
		$document ->setValue('clientname', $data->company_name);
		//经营场所
		$document ->setValue('business_address', $data->business_address);

		//经营项目
		$document ->setValue('frame', $data->frame);
		//成立时间
		$document ->setValue('establish_time', $data->establish_time);

		//法人
		$document ->setValue('legal_person',$data->legal_person);
		//注册资本
		$document ->setValue('registered_capital', $data->registered_capital);

		//金融机构负债总额
		$document ->setValue('fzze',$data->fzze);
		//本公司在保余额
		$document ->setValue('dbye',$data->dbye);

		//贷款人
		$document ->setValue('borrower', $data->borrower);
		//贷款金额
		// $document ->setValue('legal_person',$data->legal_person);
		//贷款利率
		$document ->setValue('dkln',$data->dkln);
		//贷款期限
		$document ->setValue('dkqx',$data->dkqx);
		//贷款种类
		$document ->setValue('dklx',$data->dklx);
		//担保金额
		$document ->setValue('loans_money', $data->loans_money);
		//担保费率
		$document ->setValue('rate', $data->rate);
		//担保期限
		$document ->setValue('deadline', $data->deadline);
		//贷款银行
		$document ->setValue('loan_bank', $data->loan_bank);
		//贷款类型
		$document ->setValue('items_type', $data->legal_person);
		//变更事由
		$document ->setValue('alteration', $data->alteration);
		//所属园区
		$document ->setValue('ssyq', $data->ssyq);
		//所属行业
		$document ->setValue('sshy', $data->sshy);
		//企业划型
		$document ->setValue('company_machiny', $data->company_machin);
		//担保人意见
		$document ->setValue('dc_yijian', $data->dc_yijian);
		//调查人
		$document ->setValue('users_name', $data->users_name);
		//调查时间
		$document ->setValue('dc_time', $data->dc_time);
		
		// 主办项目经理
		$document ->setValue('item_name', $data->item_name);
		// 风险经理
		$document ->setValue('risk_name', $data->risk_name);
		// 贷款机构
		$document ->setValue('jrjg_name', $data->jrjg_name);
		// 担保性质
		$document ->setValue('assure', $data->assure);
		// 担保费
		$document ->setValue('money_sum', $data->money_sum);
		// 其他要求
		$document ->setValue('content', $data->content);
		// 备注
		$document ->setValue('commit', $data->commit);
		// 表决意见
		$document ->setValue('bjyj', $data->bjyj);
		// 风险控制要求
		$document ->setValue('fxkzyq', $data->fxkzyq);
		//参会成员
		$document ->setValue('user_vip', $data->user_vip);
		// 同意票
		$document ->setValue('consent', $data->consent);
		// 反对票
		$document ->setValue('oppose', $data->oppose);
		// 项目实施要求
		$document ->setValue('items_yq', $data->items_yq);
		// 反担保落实要件
		$document ->setValue('fdb_ls', $data->fdb_ls);
		// 主任委员意见
		$document ->setValue('zrwy', $data->zrwy);
		// 评审会决议
		$document ->setValue('pshjy', $data->pshjy);

		//反担保措施
		$document ->setValue('measure', $data->measure);
		//经营情况
		$document ->setValue('state_operation', $data->state_operation);
		//大写金额，调用num_to_rmb方法转为大写人民币
		$document ->setValue('A_loans_money', $this->num_to_rmb($data->loans_money));
		
		//贷款用途
		$document ->setValue('loans_use', $data->loans_use);
		
		//生成时间
		$document ->setValue('time', date('Y-m-d'));
		//储存数据
		$document->SaveAs($savaname);

	}
	
	// --------------------------------结束-------------------------------------




	//数字转换为大写
	function num_to_rmb($num){
		    $c1 = "零壹贰叁肆伍陆柒捌玖";
		    $c2 = "分角元拾佰仟万拾佰仟亿";
		    //精确到分后面就不要了，所以只留两个小数位
		    $num = round($num, 2); 
		    //将数字转化为整数
		    $num = $num * 100;
		    if (strlen($num) > 10) {
		        return "金额太大，请检查";
		    } 
		    $i = 0;
		    $c = "";
		    while (1) {
		        if ($i == 0) {
		            //获取最后一位数字
		            $n = substr($num, strlen($num)-1, 1);
		        } else {
		            $n = $num % 10;
		        }
		        //每次将最后一位数字转化为中文
		        $p1 = substr($c1, 3 * $n, 3);
		        $p2 = substr($c2, 3 * $i, 3);
		        if ($n != '0' || ($n == '0' && ($p2 == '亿' || $p2 == '万' || $p2 == '元'))) {
		            $c = $p1 . $p2 . $c;
		        } else {
		            $c = $p1 . $c;
		        }
		        $i = $i + 1;
		        //去掉数字最后一位了
		        $num = $num / 10;
		        $num = (int)$num;
		        //结束循环
		        if ($num == 0) {
		            break;
		        } 
		    }
		    $j = 0;
		    $slen = strlen($c);
		    while ($j < $slen) {
		        //utf8一个汉字相当3个字符
		        $m = substr($c, $j, 6);
		        //处理数字中很多0的情况,每次循环去掉一个汉字“零”
		        if ($m == '零元' || $m == '零万' || $m == '零亿' || $m == '零零') {
		            $left = substr($c, 0, $j);
		            $right = substr($c, $j + 3);
		            $c = $left . $right;
		            $j = $j-3;
		            $slen = $slen-3;
		        } 
		        $j = $j + 3;
		    } 
		    //这个是为了去掉类似23.0中最后一个“零”字
		    if (substr($c, strlen($c)-3, 3) == '零') {
		        $c = substr($c, 0, strlen($c)-3);
		    }
		    //将处理的汉字加上“整”
		    if (empty($c)) {
		        return "零元整";
		    }else{
		        return $c . "整";
		    }
		}
}