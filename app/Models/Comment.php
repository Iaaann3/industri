<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = ['id_berita', 'id_users', 'comment'];

    public function berita()
    {
        return $this->belongsTo(Berita::class, 'id_berita');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

}
