<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function berita()
    {
        return $this->hasMany(Berita::class, 'kategoris_id', 'id');
    }
}
