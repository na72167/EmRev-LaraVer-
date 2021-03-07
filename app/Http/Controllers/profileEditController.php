<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\User;

class profileEditController extends Controller
{
    protected function profileEditGetId(){
        // ResetPasswordControllerから取得
        log::debug('ログインユーザーのID情報を取得します。');
        if(!Auth::check()){
            //セッション内処理に「ログインしてください」と入力する。
            //ログインしていなかった場合ルーティング内のname(‘login’)を通してログインページに返す処理を走らせる。
            return redirect('home');
        }
        return redirect('/profileEdit/'.Auth::id());
    }
}
