<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokumentasi extends Model
{
    protected $primarykey = 'id';

    protected $fillable = [
        'kategori_id', 'judul', 'penulis', 'isi', 'gambar'
    ];
}
