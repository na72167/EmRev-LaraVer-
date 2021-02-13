<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_reviews', function (Blueprint $table) {
            $table->bigIncrements('id',true);
            /* fkey要設定 */
            $table->integer('employee_id');
            $table->integer('review_company_id');
            $table->string('joining_route',255)->nullable();
            $table->string('occupation',255)->nullable();
            $table->string('position',255)->nullable();
            $table->string('enrollment_period',255)->nullable();
            $table->string('enrollment_status',255)->nullable();
            $table->string('employment_status',255)->nullable();
            $table->string('welfare_office_environment',255)->nullable();
            $table->integer('working_hours');
            $table->string('holiday',255)->nullable();
            $table->string('in_company_system',255)->nullable();
            $table->string('corporate_culture',255)->nullable();
            $table->string('ease_of_work_for_women',255)->nullable();
            $table->string('rewarding_work',255)->nullable();
            $table->string('image_gap',255)->nullable();
            $table->string('business_outlook',255)->nullable();
            $table->string('strengths_and_weaknesses',255)->nullable();
            $table->string('annual_income_salary',255)->nullable();
            $table->string('general_estimation_title',255)->nullable();
            $table->string('general_estimation',255)->nullable();
            $table->string('username',255)->nullable();
            $table->integer('like_count')->default(0);
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
        Schema::dropIfExists('employee_reviews');
    }
}
