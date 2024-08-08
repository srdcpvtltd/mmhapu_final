<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name','state_id','slug','code'];

    public function state()
    {
        return $this->belongsTo(State::class,'state_id');
    }
}
