<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestigatingsTable extends Migration
{
    /**
     * Run the migrations.
     *Comment 第二阶段保前尽职调查表
     * @return void
     */
    public function up()
    {
        Schema::create('investigatings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('items_id')->comment('项目ID');
            $table->string('jrjg_name')->comment('金融机构名称');
            $table->string('dklx')->default('RMB')->comment('贷款种类');
            $table->string('fzze')->default(0)->comment('负债总额');
            $table->string('dbye')->default(0)->comment('本公司担保余额');
            $table->string('dkln')->default(0)->comment('贷款利率');
            $table->string('dkqx')->default(0)->comment('贷款期限');
            $table->string('ssyq')->comment('所属园区');
            $table->string('sshy')->comment('所属行业'); 
            $table->string('users_name')->comment('调查人名字');
            $table->string('dc_time')->comment('调查人时间');
            $table->string('dc_yijian')->comment('调查人意见');           
            $table->string('remark')->comment('反担保物人信息');
            $table->integer('table_status')->default(0)->comment('数据表状态');
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
        Schema::dropIfExists('investigatings');
    }
}
