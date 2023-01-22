<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'director',
        'description',
        'poster',
        'teaser',
        'rate',
        'voters_count',
    ];
    public function celebs(){
        return $this->belongsToMany(Celeb::class);
    }
    public function genres(){
        return $this->belongsToMany(Genre::class);
    }
     public function halls(){
        return $this->hasMany(Hall::class);
    }
    public function cinemas(){
        return $this->belongsToMany(Cinema::class);
    }
     public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function shows(){
        return $this->hasMany(Show::class);
    }
     public function seats(){
        return $this->hasMany(Seat::class);
    }
}
