<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;
    public function users(){
        return $this->hasMany(User::class);
    }
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function movies(){
        return $this->hasMany(Movie::class);
    }
     public function weekdays(){
        return $this->hasMany(Weekday::class);
    }
     public function halls(){
        return $this->hasMany(Hall::class);
    }


}
