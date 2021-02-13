<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDmMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dm_messages', function (Blueprint $table) {
            $table->foreign('from_user')
            ->references('user_id')
            ->on('contributor_profs')
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
        Schema::table('dm_messages', function (Blueprint $table) {
            $table->dropForeign('dm_messages_from_user_foreign');
        });
    }
}
