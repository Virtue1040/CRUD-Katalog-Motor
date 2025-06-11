<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    /** @use HasFactory<\Database\Factories\KatalogFactory> */
    use HasFactory;

    protected $fillable = [
        'id_katalog',
        'id_user',
        'judul',
        'manufacturer',
        'harga',
        'imageUrl'
    ];

    protected $primaryKey = 'id_katalog';
}
