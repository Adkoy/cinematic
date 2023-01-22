<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'main_image',
        'map_address',
        'address',
        'description',
        'avg_rate',
        'voters_count',

        'accessibility_rate',
        'facility_rate',
        'serviceability_rate',
        'cleanness_rate',
        'voice_rate',
        'screen_rate',
        'care_rate',
        'hall_rate',
    ];


    public function movies(){
        return $this->belongsToMany(Movie::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function shows(){
        return $this->hasMany(Show::class);
    }
     public function city(){
        return $this->hasOne(City::class);
    }
     public function halls(){
        return $this->hasMany(Hall::class);
    }


}
