<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAcademicQualification extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name_of_exam',
        'name_of_board',
        'attended_school',
        'passing_year',
        'total_marks',
        'marks',
        'percentage'
    ];

    public function student()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function exam()
    {
        return $this->belongsTo(Passed_exam::class,'name_of_exam');
    }
    public function board()
    {
        return $this->belongsTo(Board::class,'name_of_board');
    }
}
