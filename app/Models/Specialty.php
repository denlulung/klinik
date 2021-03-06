<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

     public function doctor()
     {
         return $this->hasMany('App\Models\Doctor');
     }

    protected $fillable = [
        'title',
        'description',
        'img',
        'slug',
    ];

    protected $attributes = [
        'img' => 'default.jpg',
    ];
}
