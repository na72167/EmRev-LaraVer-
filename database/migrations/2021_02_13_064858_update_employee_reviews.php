<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEmployeeReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_reviews', function (Blueprint $table) {
            $table->integer('id',true)->change();
            $table->integer('employee_id')->index()->change();
            $table->integer('review_company_id')->index()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_reviews', function (Blueprint $table) {
            $table->bigIncrements('id',true)->change();
            $table->integer('employee_id')->dropIndex()->change();
            $table->integer('review_company_id')->dropIndex()->change();
        });
    }
}
