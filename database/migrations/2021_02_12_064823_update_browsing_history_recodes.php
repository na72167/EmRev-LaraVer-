<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBrowsingHistoryRecodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //型の変更 id「bigInt~>int」
        //indexの付属
        Schema::table('browsing_history_recodes', function (Blueprint $table) {
            $table->integer('id',true)->change();
            $table->integer('review_id')->change();
            $table->integer('user_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('browsing_history_recodes', function (Blueprint $table) {
            $table->bigIncrements('id',true)->change();
            $table->integer('review_id')->dropIndex()->change();
            $table->integer('user_id')->dropIndex()->change();
        });
    }
}
