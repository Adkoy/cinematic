<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'time',
        'date',
        'weekday',
        'price',
    ];

    public function seats(){
        return $this->belongsToMany(Seat::class);
    }
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function cinema(){
        return $this->belongsTo(Cinema::class);
    }
    public function movie(){
        return $this->belongsTo(Movie::class);
    }
    public function halls(){
        return $this->belongsToMany(hall::class);
    }
}
