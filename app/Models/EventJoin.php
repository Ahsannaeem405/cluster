<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventJoin extends Model
{
    use HasFactory;
    public function EventJoin()
    {
        return $this->belongsTo('App\Models\Event', 'event_id');
    }


    public function User()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }





}
