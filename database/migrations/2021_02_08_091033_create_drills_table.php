<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// laravel内でマイグレーションファイルを作成する際には以下の様にコマンドを打つ。
// php artisan make:migration create_drills_table --create=drills
// 変更が出来たら,php artisan migrate
// ・DBが作られたか確認
// (ターミナル上で)
// use (DB名)
// その後テーブル一覧を表示する。
// SHOW tables

// ・ロールバック
// 新しい機能を追加する際などにカラムを追加して
// 不具合が起きるなど事はよくある。
// その際にするのが「ロールバック」

// 詳しい処理はdownメソッド内に書く。
// php artisan migrate:rollback
// 以下の様にすると 何段階前まで戻るか指定できる。
// php artisan migrate:rollback --step=5

// マイグレーションコマンド一回実行につき1マイグレーションとカウントされる。
// 一回コマンドを打つ際にマイグレーションファイルが複数個あっても1マイグレーション。

// 必ずマイグレーションファイルを作ったら、ロールバック出来るかどうか確認する！

// dropIfExists・・・指定するテーブルが存在した際に削除するメソッド。

class CreateDrillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //この中にはDBの変更内容を書く。
    public function up()
    {
        Schema::create('drills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('category_name');
            $table->string('problem0');
            $table->string('problem1');
            $table->string('problem2');
            $table->string('problem3');
            $table->string('problem4');
            $table->string('problem5');
            $table->string('problem6');
            $table->string('problem7');
            $table->string('problem8');
            $table->string('problem9');
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
        Schema::dropIfExists('drills');
    }
}
