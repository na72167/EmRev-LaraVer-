<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmployeeReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_reviews', function (Blueprint $table) {
            $table->foreign('employee_id')
            ->references('user_id')
            ->on('contributor_profs')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('review_company_id')
            ->references('id')
            ->on('company_informations')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
            $table->dropForeign('employee_reviews_employee_id_foreign');
            $table->dropForeign('employee_reviews_review_company_id_foreign');
        });
    }
}
