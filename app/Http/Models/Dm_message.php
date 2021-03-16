<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Dm_message extends Model
{
    protected $fillable = [
        'id', 'send_date', 'to_user', 'from_user', 'msg', 'delete_flg', 'created_at', 'updated_at'
    ];
}
