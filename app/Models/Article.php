<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'contenu',
        'publie',
        'image',
    ];

    protected static function booted()
    {
        static::created(function ($article) {
            $slug = Str::slug($article->titre) . '-' . $article->id;
            if ($article->slug !== $slug) {
                $article->slug = $slug;
                $article->saveQuietly(); // évite la boucle infinie
            }
        });

        static::updating(function ($article) {
            $article->slug = Str::slug($article->titre) . '-' . $article->id;
        });
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
