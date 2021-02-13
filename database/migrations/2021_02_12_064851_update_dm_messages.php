<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDmMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dm_messages', function (Blueprint $table) {
            $table->integer('id',true)->change();
            $table->integer('from_user')->index()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dm_messages', function (Blueprint $table) {
            $table->bigIncrements('id',true)->change();
            $table->integer('from_user')->dropIndex()->change();
        });
    }
}
