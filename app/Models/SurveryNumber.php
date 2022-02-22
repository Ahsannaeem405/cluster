<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class SurveryNumber extends Model
{
    use HasFactory;

    public function Ques()
    {
        return $this->hasMany('App\Models\Question', 'servey_id','id');
    }

    public function Survey()
    {
        return $this->hasOne('App\Models\SurveyReply', 'surveyID','id')->where('userID', Auth::user()->id);
    }



}
