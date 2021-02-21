<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckloggedIn
{
    //Closureクラス・・・対象引数に挿入された関数を無名関数として扱う為のオブジェクトを生成するクラス
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //第二引数で対象ルーティングを受け取る。
    //即時実行するためにClosureインスタンスを入れる。
    public function handle($request, Closure $next)
    {
        //Auth::check()・・・ユーザーがログインしているかをtrueかfalseで返す処理
        if(!Auth::check()){
            //セッション内処理に「ログインしてください」と入力する。
            //ログインしていなかった場合ルーティング内のname(‘login’)を通してログインページに返す処理を走らせる。
            return redirect('home');
        }
        //指定アクションを後から走らせる処理
        return $next($request);
    }
}
