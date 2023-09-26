<?php

namespace App\Models;

class Record extends BaseModel
{
    protected $fillable = [
        'register_no', 'register_date', 'applicant', 'education_id', 'age', 'applicant_gender', 'applicant_contact', 'permanent_province', 'permanent_district', 'permanent_municipality', 'permanent_ward_no',
        'temporary_province', 'temporary_district', 'temporary_municipality', 'temporary_ward_no', 'suspect_name', 'crime_id', 'cheat_id', 'suspect_contact_number', 'bank_account_no', 'total_scam_amount'
    ];

    public function cheat(){
        return $this->belongsTo(Cheat::class, 'cheat_id');
    }

    public function crime(){
        return $this->belongsTo(Crime::class, 'crime_id');
    }

    public function permanentProvince(){
        return $this->belongsTo(Province::class, 'permanent_province');
    }

    public function permanentDistrict(){
        return $this->belongsTo(District::class, 'permanent_district');
    }

    public function permanentMunicipality(){
        return $this->belongsTo(Municipality::class, 'permanent_municipality');
    }

    public function temporaryProvince(){
        return $this->belongsTo(Province::class, 'temporary_province');
    }

    public function temporaryDistrict(){
        return $this->belongsTo(District::class, 'temporary_district');
    }

    public function temporaryMunicipality(){
        return $this->belongsTo(Municipality::class, 'temporary_municipality');
    }



}
