<?php

namespace App;

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
}
