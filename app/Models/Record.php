<?php

namespace App\Models;

class Record extends BaseModel
{
    protected $fillable = ['register_no', 'register_date', 'applicant', 'education_id', 'age', 'applicant_contact', 'permanent_province', 'permanent_district', 'permanent_municipality', 'permanent_ward_no', 'suspect_name', 'crime_id', 'cheat_id', 'cheat_contact_number', 'bank_type_id', 'bank_id', 'bank_account_no', 'total_scam_amount'];
}
