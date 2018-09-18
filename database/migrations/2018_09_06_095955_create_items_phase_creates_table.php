<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsPhaseCreatesTable extends Migration
{
    /**
     * Run the migrations.
     *Comment   项目阶段记录 生成表
     * @return void
     */
    public function up()
    {
        Schema::create('items_phase_creates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phases_id')->comment('阶段id');
            $table->string('items_id')->comment('项目id');
            $table->string('phases_status')->default('未开始')->comment('阶段状态');
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
        Schema::dropIfExists('items_phase_creates');
    }
}
