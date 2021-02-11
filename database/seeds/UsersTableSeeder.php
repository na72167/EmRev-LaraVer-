<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

// php artisan make:seeder UsersTableSeeder

// seederファイルを作るコマンド
// php artisan make:seeder UsersTableSeeder

// seedsフォルダ内のUsersTableSeederクラス内のメソッドを実行する。
// php artisan db:seed --class=UsersTableSeeder

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'test taro',
            'email' => 'test@exsample.com',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
