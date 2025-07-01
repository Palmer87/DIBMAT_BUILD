<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Devis extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'message',
        'numero',

    ];
    protected $casts = [
    'created_at' => 'datetime',
];

    protected static function booted()
    {
        static::created(function ($devis) {
            $slug = Str::slug($devis->nom . '-' . $devis->id);
            if ($devis->slug !== $slug) {
                $devis->slug = $slug;
                $devis->saveQuietly(); // évite la boucle infinie
            }
        });

        static::updating(function ($devis) {
            $devis->slug = Str::slug($devis->nom . '-' . $devis->id);
        });
    }
}
