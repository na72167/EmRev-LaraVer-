<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review_like extends Model
{
    protected $fillable = [
        'id', 'user_id', 'favorite_recode', 'delete_flg', 'created_at', 'updated_at'
    ];
}
