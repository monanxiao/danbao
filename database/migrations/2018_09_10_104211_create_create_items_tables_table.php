<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateItemsTablesTable extends Migration
{
    /**
     * Run the migrations.
     *Comment 第一阶段初审材料记录表
     * @return void
     */
    public function up()
    {
        Schema::create('create_items_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('items_id')->comment('项目id');
            $table->string('loans_use')->comment('贷款用途');
            $table->string('borrower')->comment('贷款人');
            $table->integer('deadline')->comment('担保期限');
            $table->integer('loans_money')->comment('担保金额');
            $table->float('rate')->comment('担保费率');
            $table->string('measure')->comment('反担保措施');
            $table->integer('table_status')->comment('数据表状态');
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
        Schema::dropIfExists('create_items_tables');
    }
}
