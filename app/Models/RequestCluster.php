<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCluster extends Model
{
    use HasFactory;


    public function User()
    {
            return $this->belongsTo('App\Models\User', 'user_id');
        }

        public function Cluster()
        {
                return $this->belongsTo('App\Models\Cluster', 'cluster_id');
            }



}
