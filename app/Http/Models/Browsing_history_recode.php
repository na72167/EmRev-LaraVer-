<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Browsing_history_recode extends Model
{
    protected $fillable = [
        'id', 'review_id', 'user_id', 'delete_flg', 'browsing_history_date', 'created_at', 'updated_at'
    ];
}
