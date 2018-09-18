<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNaturalsTable extends Migration
{
    /**
     * Run the migrations.
     *Comment   自然人信息表
     * @return void
     */
    public function up()
    {
        Schema::create('naturals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('natural_name')->comment('自然人姓名');
            $table->string('marriage')->comment('婚姻状况');
            $table->bigInteger('phone')->comment('手机');
            $table->string('plane')->comment('座机');
            $table->string('source')->comment('客户来源');
            $table->string('address')->comment('住宅地址');
            $table->string('work_name')->comment('单位名称');
            $table->string('natural_unit')->comment('单位性质');
            $table->string('trade')->comment('所属行业');
            $table->string('work_address')->comment('单位地址');
            $table->string('work_plane')->comment('单位座机');
            $table->bigInteger('postcode')->comment('单位邮编');
            $table->integer('annual_income')->comment('本人年收入');
            $table->integer('accumulation_fund')->comment('公积金金额');
            $table->integer('social_security')->comment('社保年限');
            $table->string('education')->comment('学历');
            $table->string('profession')->comment('职位');
            $table->string('work_age')->comment('工作年限');           
            $table->string('borrowed')->default(0)->comment('已贷款');
            $table->string('have_default')->comment('已违约');
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
        Schema::dropIfExists('naturals');
    }
}
