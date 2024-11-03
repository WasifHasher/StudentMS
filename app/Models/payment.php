<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    public $timestamps = true;
    protected $guarded = [];

    public function enrollment()
    {
        return $this->belongsTo(enrollment::class);
    }

    public function batche()
    {
        return $this->belongsTo(batche::class);
    }

   

}
