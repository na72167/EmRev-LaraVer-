<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //useで引っ張ってきたクラスはサービスプロパイダを経由して
    //インスタンス化されている。(型宣言は基本アノテーションを使って行う。)
    //https://qiita.com/yuzgit/items/5df7924d62ba4c788279
    protected function register(Request $request)
    {
        Log::debug('登録情報に対してバリテーションを行います。');

        // 入力情報に対してバリテーションを行う
        // confirmed name="xxx"のフィールドとname="xxx_confirmation"のフィールドが同一の値か検証される。
        // ところで$this->validate()は何をしてる？
        // https://liginc.co.jp/359544
        // $request内に無いname属性の物があると正しく走らない。
        // バリテーションに引っかかった場合はリクエストを送信したページにリダイレクトされる。
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $latestUser = User::create([
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/myPage/'.$latestUser->id);
    }
}
