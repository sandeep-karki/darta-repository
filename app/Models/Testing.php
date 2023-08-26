<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    use HasFactory;

    protected $table = 'testing';

    protected $fillable = ['title','test_id','image','status','created_by','updated_by'];

    public function createdBy()
    {
        return $this->belongsTo(User::class,'created_by');
    }
    public function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by');
    }
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value == 'publish'? 1: 0;
    }
    public function getStatusAttribute($value)
    {
        return $value == 1? 'publish' : 'un-publish';
    }
    public function test()
    {
        return $this->belongsTo(Test::class);
    }

}
