<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelevanciesTable extends Migration
{
    /**
     * Run the migrations.
     *Comment   自然人、公司担保人信息表
     * @return void
     */
    public function up()
    {
        Schema::create('relevancies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('姓名');
            $table->string('type')->comment('关系');
            $table->integer('phone')->comment('手机');
            $table->string('work_unit')->comment('工作单位');
            $table->string('work_address')->comment('单位地址');
            $table->string('address')->comment('家庭住址');
            $table->string('work_phone')->comment('单位座机');
            $table->integer('natural_id')->default(0)->comment('自然人ID');
            $table->integer('company_id')->default(0)->comment('公司ID');
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
        Schema::dropIfExists('relevancies');
    }
}
