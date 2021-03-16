<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class General_prof extends Model
{
    protected $fillable = [
        'id', 'user_id', 'username', 'age', 'tel', 'profImg', 'zip', 'addr', 'delete_flg', 'created_at', 'updated_at'
    ];
}
