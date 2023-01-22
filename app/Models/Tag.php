<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'name',
        'icon',
    ];
    public function cinemas(){
        return $this->belongsToMany(Cinema::class);
    }
}
