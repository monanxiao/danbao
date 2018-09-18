<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *Comment   公司客户信息表
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name')->comment('公司名称');
            $table->string('legal_person',5)->comment('法人');
            $table->integer('registered_capital')->comment('注册资本');
            $table->string('establish_time')->comment('成立时间');
            $table->string('registered_address')->comment('注册地址');
            $table->string('state')->default('在营')->comment('公司状态');
            $table->string('company_type')->comment('公司类型');
            $table->string('business_address')->comment('经营地址');
            $table->string('scale')->default('小')->comment('企业规模');
            $table->string('source')->comment('客户来源');
            $table->string('credit_code')->comment('统一信用代码');
            $table->string('company_machin')->comment('公司座机');
            $table->integer('rank')->comment('客户级别');
            $table->string('check_in')->comment('登记机关');
            $table->string('open_account')->comment('开户行');
            $table->bigInteger('open_num')->comment('开户账号');
            $table->string('frame')->comment('经营范围');
            $table->string('state_operation')->comment('经营状况');            
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
        Schema::dropIfExists('companies');
    }
}
