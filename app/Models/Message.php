<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'message',
    ];
    protected static function booted()
    {
         static::created(function ($message) {
            $slug = Str::slug($message->nom) . '-' . $message->id;
            if ($message->slug !== $slug) {
                $message->slug = $slug;
                $message->saveQuietly(); // évite la boucle infinie
            }
        });

        static::updating(function ($message) {
            $message->slug = Str::slug($message->nom) . '-' . $message->id;
        });

    }
}
