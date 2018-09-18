<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsXmbgjspTablesTable extends Migration
{
    /**
     * Run the migrations.
     *Coment 项目变更及审批
     * @return void
     */
    public function up()
    {
        Schema::create('items_xmbgjsp_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('loan_bank')->comment('贷款银行');
            $table->integer('items_id')->comment('项目id');
            $table->string('alteration')->comment('变更事由');
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
        Schema::dropIfExists('items_xmbgjsp_tables');
    }
}
