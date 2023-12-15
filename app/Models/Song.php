<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'price',
        'description',
        'audio',
        'photo',
        'keywords',
        'artist',
    ];

    public function checkouts()
    {
        return $this->belongsToMany(Checkout::class, 'checkout_song')->withPivot('price');
    }
}
