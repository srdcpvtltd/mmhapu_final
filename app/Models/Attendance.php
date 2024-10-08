<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    public function getTitle(){
        return $this->belongsTo(AttendanceTitle::class,'title_id');
    }
}
