<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\District;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = ['name_en', 'slug' ,'name_np' , 'district_id'];

    public function district(){
        return $this->belongsTo(District::class);
    }

}
