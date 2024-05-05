<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCatalogue extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'nama_barang',
        'harga',
        'stok',
        'Photo'
    ];
}
