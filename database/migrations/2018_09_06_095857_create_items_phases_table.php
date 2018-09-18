<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsPhasesTable extends Migration
{
    /**
     * Run the migrations.
     *Comment   项目阶段固定表
     * @return void
     */
    public function up()
    {
        Schema::create('items_phases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phase_name')->comment('阶段名称');
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
        Schema::dropIfExists('items_phases');
    }
}
