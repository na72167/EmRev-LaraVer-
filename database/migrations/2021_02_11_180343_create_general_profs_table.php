<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_profs', function (Blueprint $table) {
            $table->bigIncrements('id',true);
            $table->integer('user_id');
            $table->string('username',255)->nullable();
            $table->integer('age')->nullable();
            $table->integer('tel')->nullable();
            $table->string('profImg',255)->nullable();
            $table->integer('zip')->nullable();
            $table->string('addr',255)->nullable();
            $table->tinyInteger('delete_flg')->default(0);
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
        Schema::dropIfExists('general_profs');
    }
}
