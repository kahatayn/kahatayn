<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
>>>>>>> c53e042863812bee9e4eeb422bbdb167a6f92db8
}
