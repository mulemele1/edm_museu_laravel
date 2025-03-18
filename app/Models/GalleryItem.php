<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_objeto',
        'quantidade',
        'ano_fabrico',
        'funcionalidade',
        'caracteristicas',
        'fabricante',
        'constituicao',
        'localizacao',
        'estado',
        'data',
        'inventariador',
        'foto'
    ];

    protected $dates = ['data'];
}
