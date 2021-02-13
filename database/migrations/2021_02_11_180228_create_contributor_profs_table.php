<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContributorProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributor_profs', function (Blueprint $table) {
            $table->bigIncrements('id',true);
            /* fkey要設定 */
            $table->integer('user_id');
            $table->string('username',255)->nullable();
            $table->integer('age')->nullable();
            $table->integer('tel')->nullable();
            $table->integer('zip')->nullable();
            $table->string('addr',255)->nullable();
            $table->string('affiliation_company',255)->nullable();
            $table->string('incumbent',255)->nullable();
            $table->string('currently_department',255)->nullable();
            $table->string('currently_position',255)->nullable();
            $table->tinyInteger('dm_state')->default(0);
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
        Schema::dropIfExists('contributor_profs');
    }
}
