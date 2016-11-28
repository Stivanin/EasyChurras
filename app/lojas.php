<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lojas extends Model
{
    protected $fillable = [ 
            'nome',
            'endereco1',
            'endereco2',
            'funcionarios',
            'telefone',
            'data',
    ];
}