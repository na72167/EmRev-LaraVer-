<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateGeneralProfs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('general_profs', function (Blueprint $table) {
            $table->integer('id',true)->change();
            $table->integer('user_id')->index()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('general_profs', function (Blueprint $table) {
            $table->bigIncrements('id',true)->change();
            $table->Increments('user_id')->dropIndex()->change();
        });
    }
}
