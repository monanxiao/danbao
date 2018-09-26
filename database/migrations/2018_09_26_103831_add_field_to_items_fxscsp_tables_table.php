<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToItemsFxscspTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items_fxscsp_tables', function (Blueprint $table) {
            //
                $table->string('user_vip')->comment('参会成员');
                $table->string('bjyj')->comment('表决意见');
                $table->string('fxkzyq')->comment('风险控制要求');
                $table->integer('oppose')->comment('反对票数');
                $table->integer('consent')->comment('同意票数');
                $table->string('items_yq')->comment('项目实施要求');
                $table->string('fdb_ls')->comment('反担保落实要件');
                $table->string('zrwy')->comment('主任委员意见');
                $table->string('pshjy')->comment('评审会决议');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items_fxscsp_tables', function (Blueprint $table) {
            //
            Schema::drop('items_fxscsp_tables');
        });
    }
}
