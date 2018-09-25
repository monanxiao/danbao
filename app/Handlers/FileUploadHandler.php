<?php

namespace App\Handlers;

class FileUploadHandler
{
    // 只允许以下后缀名的文件上传
    protected $allowed_ext = ["png", "jpg", "gif", 'jpeg','doc','docx','xls','pdf'];

    public function save($file, $iid)
    {
        // dd($file->getClientOriginalExtension());exit;
        //获取文件名称
        $file_name =  $file->getClientOriginalName();
        // 构建存储的文件夹规则，值如：uploads/images/avatars/201709/21/
        // 文件夹切割能让查找效率更高。

        //上传的图片储存地址
        $folder_image_name = "uploads/" . $iid . "/image";
        //上传的文件储存地址
        $folder_file_name = "uploads/" . $iid . "/file/doc";
        //上传xls地址
        $folder_xls_name = "uploads/" . $iid . "/file/xls";
        //上传pdf地址
        $folder_pdf_name = "uploads/" . $iid . "/file/pdf";

        // 文件具体存储的物理路径，`public_path()` 获取的是 `public` 文件夹的物理路径。
        // 值如：/home/vagrant/Code/larabbs/public/uploads/images/avatars/201709/21/
        //是否doc文档
        $upload_file_path = public_path() . '/' . $folder_file_name;
        //是否xls文档
        $upload_xls_path = public_path() . '/' . $folder_xls_name;
        //是否pdf文档
        $upload_pdf_path = public_path() . '/' . $folder_pdf_name;
        //是否图片
        $upload_image_path = public_path() . '/' . $folder_image_name;

        // 获取文件的后缀名，因图片从剪贴板里黏贴时后缀名为空，所以此处确保后缀一直存在
        // $extension_png = strtolower($file->getClientOriginalExtension()) ?: 'png';
        // $extension_doc = strtolower($file->getClientOriginalExtension()) ?: 'doc';

        // 拼接文件名，加前缀是为了增加辨析度，前缀可以是相关数据模型的 ID 
        // 值如：1_1493521050_7BVc9v9ujP.png
        $filename_png = $iid . '_' . $file_name;
        $filename_doc = $iid . '_' . $file_name;
        $filename_xls = $iid . '_' . $file_name;
        $filename_pdf = $iid . '_' . $file_name;

        // 如果上传的不是图片将终止操作
        // if ( ! in_array($extension_png, $this->allowed_ext)) {
        //     return false;
        if(! in_array($file->getClientOriginalExtension(),$this->allowed_ext)){
            return false;
        }else
        {

            if (($file->getClientOriginalExtension() == "png") || ($file->getClientOriginalExtension() == "jpg") || ($file->getClientOriginalExtension() == "jpeg") )
        {
            // 将文件移动到我们的目标存储路径中
            $file->move($upload_image_path, $filename_png);
            return [
                    'path' => "/$folder_image_name/$filename_png",
                    'file_name' => $file_name
                   ];
        }else if ($file->getClientOriginalExtension() == "doc" || $file->getClientOriginalExtension() == "docx")
        {
            // 将文件移动到我们的目标存储路径中
            $file->move($upload_file_path, $filename_doc);
            return [
                'path' => "/$folder_file_name/$filename_doc",
                'file_name' => $file_name
               ];

        }else if($file->getClientOriginalExtension() == "xls"){

            // 将文件移动到我们的目标存储路径中
            $file->move($upload_xls_path, $filename_xls);
            return [
                'path' => "/$folder_xls_name/$filename_xls",
                'file_name' => $file_name
               ];

        }else if($file->getClientOriginalExtension() == "pdf"){

             // 将文件移动到我们的目标存储路径中
            $file->move($upload_pdf_path, $filename_pdf);
            return [
                'path' => "/$folder_pdf_name/$filename_pdf",
                'file_name' => $file_name
               ];
        }else{
            return false;
        }
    }

    }
}