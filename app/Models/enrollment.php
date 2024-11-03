<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollment extends Model
{
    use HasFactory;

    protected $table = 'enrollments';
    public $timestamps = true;
    protected $guarded = [];

    public function batche()
    {
        return $this->belongsTo(batche::class);
    }
    public function student()
    {
        return $this->belongsTo(student::class);
    }

    

}
