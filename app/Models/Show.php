<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;
    public function seats(){
        return $this->hasMany(Seat::class);
    }
    public function movie(){
        return $this->belongsTo(Movie::class);
    }
    public function hall(){
        return $this->belongsTo(hall::class);
    }
}
