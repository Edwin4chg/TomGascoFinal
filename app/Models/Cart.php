<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_name',
        'user_email',
        'user_photo',
        'song_id',
        'song_title',
        'song_price',
        'song_description',
        'song_audio',
        'song_photo',
        'song_keywords',
        'song_artist',
        'price',
    ];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}
