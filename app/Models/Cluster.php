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


    public function User()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function join()
    {
        return $this->hasOne('App\Models\JoinCluster', 'cluster_id','id')->where('user_id',Auth::user()->id)->where('status',0);
    }

    public function JoinClust()
    {
        return $this->hasOne('App\Models\JoinCluster', 'cluster_id','id')->where('user_id',Auth::user()->id);
    }

    public function joindetail()
    { 
        return $this->hasMany('App\Models\JoinCluster', 'cluster_id','id')->where('status',2);
    }
    public function topCluster()
    {
        return $this->hasMany('App\Models\JoinCluster', 'cluster_id','id')->where('status',1);
      //  return $this->topCluster2()->count;

    }
    public function selectCluster()
    {
        return $this->hasMany('App\Models\JoinCluster','cluster_id',"id");
      //  return $this->topCluster2()->count;

    }

    public function topEvent()
    {
        return $this->hasMany('App\Models\Event', 'cluster_id');

    }
    
}
