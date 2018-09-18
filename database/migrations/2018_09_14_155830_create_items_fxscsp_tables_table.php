<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsFxscspTablesTable extends Migration
{
    /**
     * Run the migrations.
     *Comment 风险审查审批
     * @return void
     */
    public function up()
    {
        Schema::create('items_fxscsp_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('risk_name')->comment('风险经理');
            $table->string('item_name')->comment('主办项目经理');
            $table->integer('items_id')->comment('项目id');
            $table->string('assure')->comment('担保性质');
            $table->string('commit')->comment('备注');
            $table->string('content')->comment('其他需求');
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
        Schema::dropIfExists('items_fxscsp_tables');
    }
}
