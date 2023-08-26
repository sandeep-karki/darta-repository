<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Province;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['name_np', 'province_id', 'name_en'];

    public function province(){
        return $this->belongsTo(Province::class);
    }
}
