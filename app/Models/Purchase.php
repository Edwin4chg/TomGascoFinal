<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'song_ids', 'currency', 'mountpayed'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Update the relationship name to "songs" since it's a one-to-many relationship
    public function songs()
    {
        // Explode the comma-separated song_ids and convert them to an array of integers
        $songIds = array_map('intval', explode(',', $this->song_ids));

        // Use the "hasMany" relationship with the array of song IDs
        return $this->hasMany(Song::class, 'id')->whereIn('id', $songIds);
    }
}
