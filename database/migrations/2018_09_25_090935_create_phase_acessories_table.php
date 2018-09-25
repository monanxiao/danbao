<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhaseAcessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *Comment 项目阶段附件记录表
     * @return void
     */
    public function up()
    {
        Schema::create('phase_acessories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('items_id')->comment('项目id');
            $table->integer('phases_id')->comment('阶段id');
            $table->string('file_name')->comment('文件名字');
            $table->string('site_url')->comment('附件地址');
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
        Schema::dropIfExists('phase_acessories');
    }
}
