<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'college_id',
        'phone',
        'course_id',
        'subject_id',
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function college()
    {
        return $this->belongsTo(User::class,'college_id');         
    }
}
