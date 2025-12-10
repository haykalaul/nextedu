<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';
    protected $fillable = [
        'judul',
        'img',
        'sinopsis',
        'link',
        'jurusan_id',
        'kategori_id',
    ];

    // Relasi ke tabel jurusan
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
}
