<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;
    public function shows(){
        return $this->hasMany(Show::class);
    }
    public function weekdays(){
        return $this->hasMany(Weekday::class);
    }
}
