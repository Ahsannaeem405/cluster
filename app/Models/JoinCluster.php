<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinCluster extends Model
{
    use HasFactory;


    public function User()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function Clusterr()
    {
        return $this->belongsTo('App\Models\Cluster', 'cluster_id');
    }

    public function Event()
    {
        return $this->belongsTo('App\Models\Cluster', 'cluster_id');
    }

}
