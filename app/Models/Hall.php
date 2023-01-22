<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'capacity',
    ];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function show(){
        return $this->belongsToMany(Show::class);
    }
    public function cinema(){
        return $this->belongsTo(Cinema::class);
    }
    public function seats(){
        return $this->hasMany(Seat::class);
    }
}
