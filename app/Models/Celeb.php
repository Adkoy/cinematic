<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celeb extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'main_image',
        'profession',
        'description',
    ];
    public function movies(){
        return $this->belongsToMany(Movie::class);
    }

}
