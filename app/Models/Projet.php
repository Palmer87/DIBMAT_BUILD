<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'client', 'lieu', 'categorie', 'date', 'description', 'image', 'imagecliche'
    ];

    protected $casts = [
        'imagecliche' => 'array', // permet de le manipuler directement comme un tableau
    ];


    
}
