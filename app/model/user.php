<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'user';

    protected $fillable = [
        'nombre',
        'password'
    ];

    public $timestamps = false;
}
