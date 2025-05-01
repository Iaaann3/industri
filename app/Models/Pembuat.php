<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembuat extends Model
{
    protected $table = 'pembuat';

    protected $fillable = ['nama', 'email', 'cover', 'judul', 'isi', 'id_kategori'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function berita()
    {
        return $this->hasMany(Berita::class, 'id_pembuat');
    }
}
