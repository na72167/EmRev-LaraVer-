<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id', //ユーザーID
        'email', //email
        'password', //パスワード
        'roll', //権限
        'report_flg', //通報確認用フラグ
        'emailToken', //認証トークン
        'auth_key_limit', //ログイン情報の期限保持
        'created_at',  //ユーザーデータ作成時刻
        'updated_at', //最終更新日時
        'deleted_at' //ソフトデリートフラグ
    ];

    /**
     * リレーション関係 : id -> general_profs.user_id
     */
    public function general_prof()
    {
        return $this->hasOne('App\Core\Http\Models\General_prof', 'user_id');
    }
}
