<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrowsingHistoryRecodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('browsing_history_recodes', function (Blueprint $table) {
            $table->bigIncrements('id',true)->unique();
            /* fkey要設定 */
            $table->integer('review_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->tinyInteger('delete_flg')->default(0);
            $table->timestamp('browsing_history_date')->CURRENT_TIMESTAMP();
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
        Schema::dropIfExists('browsing_history_recodes');
    }
}
