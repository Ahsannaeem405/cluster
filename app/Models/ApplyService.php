<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyService extends Model
{
    use HasFactory;
    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id');
    }
    public function ServiceUsers()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    
}
