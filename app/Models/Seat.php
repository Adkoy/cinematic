<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'price',
        'place',
    ];

    public function hall(){
        return $this->belongsTo(hall::class);
    }
    public function shows(){
        return $this->belongsToMany(show::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function movie(){
        return $this->belongsto(Movie::class);
    }
    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }
}
