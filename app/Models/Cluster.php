<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cluster extends Model
{
    use HasFactory;


    public function Cluster()
    {
        return $this->hasMany('App\Models\JoinCluster', 'id');
    }

    public function join()
    {
        return $this->hasOne('App\Models\JoinCluster', 'cluster_id','id')->where('user_id',Auth::user()->id)->where('status',0);
    }



}
