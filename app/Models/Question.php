<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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


    public function Answer()
    {
        return $this->hasOne('App\Models\Answer', 'questionID','id')->where('userID', Auth::user()->id);
    }





}
