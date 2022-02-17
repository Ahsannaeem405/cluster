<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveryNumber extends Model
{
    use HasFactory;

    public function Ques()
    {
        return $this->hasMany('App\Models\Question', 'servey_id','id');
    }
}
