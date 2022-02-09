<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    public function Event()
    {
        return $this->belongsTo('App\Models\JoinCluster', 'join_cluster_ID');
    }
}
