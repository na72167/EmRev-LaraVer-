<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDmMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dm_messages', function (Blueprint $table) {
            $table->bigIncrements('id',true);
            $table->datetime('send_date')->nullable();
            /* fkey要設定 */
            $table->integer('to_user');
            $table->integer('from_user');
            $table->string('msg',255)->nullable();
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
        Schema::dropIfExists('dm_messages');
    }
}
