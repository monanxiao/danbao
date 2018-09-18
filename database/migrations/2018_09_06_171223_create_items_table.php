<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *Comment   项目记录表
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('items_name')->comment('项目名称');
            $table->string('items_type')->comment('项目类型');  
            $table->string('items_status')->default('未开始')->comment('项目状态');
            $table->integer('companys_id')->default(0)->comment('公司ID');
            $table->integer('naturals_id')->default(0)->comment('自然人ID');
            $table->integer('users_id')->comment('创建者');
            $table->string('users_name')->comment('创建者名字');
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
        Schema::dropIfExists('items');
    }
}
