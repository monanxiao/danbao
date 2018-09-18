<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *Comment   项目关联人员表
     * @return void
     */
    public function up()
    {
        Schema::create('items_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->comment('用户id');
            $table->integer('items_id')->comment('项目id');
            $table->integer('users_name')->comment('用户名字');
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
        Schema::dropIfExists('items_users');
    }
}
