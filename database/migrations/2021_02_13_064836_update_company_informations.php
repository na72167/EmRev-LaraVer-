<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCompanyInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //型の変更 id「bigInt~>int」
        Schema::table('company_informations', function (Blueprint $table) {
            $table->integer('id',true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_informations', function (Blueprint $table) {
            $table->bigIncrements('id',true)->change();
        });
    }
}
