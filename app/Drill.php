<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drill extends Model
{
    // DBで間違ってもへんこうさせたくないカラム(ユーザーID、管理者権限など)にはロックをかけておく事が出来る。
    // ロックのかけ方はfillableかguardedの2種類がある。
    // どちらかしか出来ない。

    // fillableだとモデルがその属性以外を持たなくなる。(fillメソッドにしか対応出来ないが、カラムが増えるほど足していく必要あり。)
    protected $fillable = ['title','kategory_neme','problem0','problem1','problem2','problem3','problem4','problem5','problem6','problem7','problem8',
        'problem9'];
    //モデルからその属性が取り除かれる。（カラムが増えてもほとんど変更しなくて良い)
    // protected $guarded =['id'];
}
