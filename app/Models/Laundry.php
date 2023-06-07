<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'customer',
        'kategori',
        'treatment',
        'tanggal_ambil',
        'harga',
        'gambar'
    ];
}
