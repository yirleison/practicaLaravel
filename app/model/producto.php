<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'valor_unitario'
    ];

    public $autoincrement = false;
}
