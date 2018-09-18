<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhaseTypeToItemsPhasesTable extends Migration
{
    /**
     * Run the migrations.
     *Comment 加入阶段表，模态框id
     * @return void
     */
    public function up()
    {
        Schema::table('items_phases', function (Blueprint $table) {
            //
            $table->string('phase_type')->comment('模态框');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items_phases', function (Blueprint $table) {
            // 
            Schema::drop('items_phases');
        });
    }
}
