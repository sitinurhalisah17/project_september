<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kategoris()
    {
        return $this->belongsTo(Kategori::class, 'kategoris_id');
    }
}
