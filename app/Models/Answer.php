<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Answer extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->hasOne('App\Models\User', 'id' ,'userID');
    }


    public function Ques()
    {
        return $this->belongsTo('App\Models\Question', 'questionID');
    }


}
