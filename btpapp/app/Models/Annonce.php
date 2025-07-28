<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Annonce extends Model
{
    use HasFactory;

    protected $table = 'annonces';

    protected $fillable = [
        'titre',
        'introduction',
        'details',
        'photos',
    ];

    protected $casts = [
        'photos' => 'array', // Laravel convertira automatiquement JSON <=> tableau PHP
    ];
}
