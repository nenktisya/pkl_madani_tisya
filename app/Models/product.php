<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';
    protected $primarykey = 'id';
    protected $guarted = 'id';
    protected $attributes = [
        'judul',
        'deskripsi',
        'gambar',
        'harga',
        'stok'

    ];
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'gambar',
        'harga',
        'stok'

    ];
}
