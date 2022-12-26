<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    public function hall(){
        return $this->belongsTo(hall::class);
    }
    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }
    public function cinema(){
        return $this->hasMany(Cinema::class);
    }
}
