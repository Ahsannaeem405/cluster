<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifica extends Model
{
    use HasFactory;

    public function Event()
    {
        return $this->belongsTo('App\Models\Event', 'eventID');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User', 'userid');
    }
}
