<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'categorie',
        'description',
        'client',
        'lieu',
        'image',
        'date',
    ];
    protected static function booted()
    {
        static::created(function ($projet) {
            $slug = Str::slug($projet->name) . '-' . $projet->id;
            if ($projet->slug !== $slug) {
                $projet->slug = $slug;
                $projet->saveQuietly(); // évite la boucle infinie
            }
        });

        static::updating(function ($projet) {
            $projet->slug = Str::slug($projet->name) . '-' . $projet->id;
        });
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
