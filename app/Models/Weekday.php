<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weekday extends Model
{
    use HasFactory;
    public function shows(){
        return $this->hasMany(Show::class);
    }
    public function cinema(){
        return $this->belongsTo(Cinema::class);
    }
}
