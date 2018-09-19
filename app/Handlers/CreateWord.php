<?php

/**
 * @Author: Gao Yongjian
 * @Date:   2018-09-19 17:07:22
 * @email:   monanxiao@qq.com
 * @Last Modified by:   Mo Nanxiao
 * @Last Modified time: 2018-09-19 17:55:48
 */
namespace App\Handlers;

use Illuminate\Support\Facades\Storage;

class CreateWord{

	//模板测试
	public function create($data){

		//公共地址
		$path = public_path();
		// $templateProcessor = new \PhpOffice\PhpWord\PhpWord();

		$PHPWord = new \PhpOffice\PhpWord\PHPWord();

        $document = $PHPWord->loadTemplate($path . '/' .'评审会表决表.docx');
		//设置变量
		$document ->setValue('Name', '测试1111aaaa');
		$document ->setValue('ame', '测试ame');

		$url = $path . '\\' . '评审会表决表1.docx';

		$data = $document->SaveAs($url);

		// $path = Storage::move($data,$path);

		return $data;

	}
}