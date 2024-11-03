<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batche extends Model
{
    use HasFactory;

    protected $table = 'batches';
    public $timestamps = false;
    protected $guarded = [];

    public function course()
{
    return $this->belongsTo(Course::class);
}

}
