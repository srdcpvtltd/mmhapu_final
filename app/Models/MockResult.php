<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MockResult extends Model
{
    use HasFactory;

    // protected $table = 'mock_results';
    protected $fillable = [
        'user_id',
        'quiz_id',
        'quiz_score',
        'achieved_score',
    ];

}
