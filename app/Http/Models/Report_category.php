<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Report_category extends Model
{
    protected $fillable = [
        'id', 'name', 'delete_flg', 'created_at', 'updated_at'
    ];
}
