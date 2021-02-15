<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //useで引っ張ってきたクラスはサービスプロパイダを経由して
    //インスタンス化されている。(型宣言は基本アノテーションを使って行う。)
    //https://qiita.com/yuzgit/items/5df7924d62ba4c788279
    protected function login(Request $request)
    {
        Log::debug('ログイン情報に対してバリテーションを行います。');

        // バリテーションに引っかかった場合はリクエストを送信したページにリダイレクトされる。
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        Auth::attempt(['email' => $request['email'], 'password' => $request['password']]);

        return redirect('/myPage/'.Auth::id());

    }

    protected function logout()
    {
        Log::debug('ログアウトします');

        Auth::logout();

        return redirect('/');

    }
}
