<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function Option()
    {
        return $this->hasMany('App\Models\Opition', 'question_id','id');
    }

    public function Ans()
    {
        return $this->hasOne('App\Models\Answer', 'questionID','id');
    }




}
