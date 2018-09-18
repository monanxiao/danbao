<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     * Comment  公司、自然人 附件储存表
     * @return void
     */
    public function up()
    {
          Schema::create('accessories', function (Blueprint $table) {

            $table->increments('id');
            //文件名称
            $table->string('file_name')->comment('文件名称');
            // 每个附件格式
            $table->string('type')->comment('附件格式');
            //附件分类，身份证、营业执照等；
            $table->string('file_belong')->comment('类型分类');
            // 根据分类，取出多个附件并排序
            $table->integer('order_num')->default(0)->comment('数字排序');

            $table->integer('company_id')->default(0)->comment('公司id');

            $table->integer('natural_id')->default(0)->comment('自然人id');

            $table->integer('users_id')->comment('上传人id');

            $table->string('site_url')->comment('路径');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accessories');
    }
}
