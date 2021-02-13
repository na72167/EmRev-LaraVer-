<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBrowsingHistoryRecodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('browsing_history_recodes', function (Blueprint $table) {
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('review_id')
            ->references('id')
            ->on('employee_reviews')
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
        Schema::table('browsing_history_recodes', function (Blueprint $table) {
            $table->dropForeign('browsing_history_recodes_user_id_foreign');
            $table->dropForeign('browsing_history_recodes_id_foreign');
        });
    }
}
