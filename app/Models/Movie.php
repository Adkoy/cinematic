<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function cinemas(){
        return $this->hasMany(Cinema::class);
    }
}
