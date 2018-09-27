<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMbWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mb_words', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mb_name')->comment('模板名称');
            $table->integer('items_id')->comment('项目id');
            $table->integer('phase_id')->comment('阶段id');
            $table->string('site_url')->comment('模板路径');
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
        Schema::dropIfExists('mb_words');
    }
}
