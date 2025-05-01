<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = ['id_pembuat', 'tentang'];

    public function pembuat()
    {
        return $this->belongsTo(Pembuat::class, 'id_pembuat');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_berita');
    }
}
