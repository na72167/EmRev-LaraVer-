<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Employee_review extends Model
{
    protected $fillable = [
        'id', 'employee_id', 'review_company_id', 'joining_route', 'occupation', 'position',
        'enrollment_period', 'enrollment_status', 'employment_status', 'welfare_office_environment',
        'working_hours', 'holiday', 'in_company_system', 'corporate_culture', 'ease_of_work_for_women',
        'rewarding_work', 'image_gap', 'business_outlook', 'strengths_and_weaknesses', 'annual_income_salary',
        'general_estimation_title', 'general_estimation', 'username', 'like_count', 'delete_flg', 'created_at', 'updated_at'
    ];

    /**
     * リレーション関係 : employee_id -> Company_information.id
     */
    public function Employee_id()
    {
        return $this->belongsTo('App\Http\Models\Contributor_prof', 'id');
    }

    /**
     * リレーション関係 : review_company_id -> Company_information.id
     */
    public function Review_company_id()
    {
        return $this->belongsTo('App\Http\Models\Company_information', 'id');
    }

}
