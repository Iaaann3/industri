<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = ['naka', 'deks_kate'];

    public function pembuat()
    {
        return $this->hasMany(Pembuat::class, 'id_kategori');
    }
}
