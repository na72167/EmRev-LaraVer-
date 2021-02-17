<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_information extends Model
{
    protected $fillable = [
        'id', 'company_name', 'industry', 'company_url', 'zip1', 'zip2', 'zip3', 'location',
        'number_of_employees', 'year_of_establishment', 'representative', 'listed_year',
        'average_annual_income', 'average_age', 'number_of_reviews', 'delete_flg', 'created_at', 'updated_at'
    ];
}
