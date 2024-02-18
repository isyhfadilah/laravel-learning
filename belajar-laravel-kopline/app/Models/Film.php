<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_film';

    protected $fillable = [
        'id_film',
        'judul_film',
        'image',
        'harga',
        'time',
        'date'
    ];
}
