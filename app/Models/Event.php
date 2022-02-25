<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Event extends Model
{
    use HasFactory;


    public function Event()
    {
        return $this->belongsTo('App\Models\JoinCluster', 'join_cluster_ID');
    }


    // public function Join()
    // {
    //     return $this->hasOne('App\Models\Event',  'event_id', 'id')->where('user_id',Auth::user()->id);
    // }

    public function Join()
    {
        return $this->hasOne('App\Models\EventJoin', 'event_id', 'id')->where('user_id', Auth::user()->id);
    }


    public function JoinEvent()
    {
        return $this->hasMany('App\Models\EventJoin', 'event_id', 'id');
    }



    public function User()
    {
        return $this->belongsTo('App\Models\User', 'userid');
    }


    public function UserExist($id)
    {
      return User::whereDoesntHave('Join', function ($query) use ($id) {
            $query->where('event_id', $id);
        })->get();
        // return $this->belongsTo('App\Models\User', 'userid');
    }
}
