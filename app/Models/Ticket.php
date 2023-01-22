<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cinema(){
        return $this->belongsTo(cinema::class);
    }
    public function hall(){
        return $this->belongsTo(Hall::class);
    }
    public function show(){
        return $this->belongsTo(Show::class);
    }
    public function movie(){
        return $this->belongsTo(Movie::class);
    }
    public function seat(){
        return $this->belongsTo(Seat::class);
    }
}
