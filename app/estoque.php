<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estoque extends Model
{
    protected $fillable = [ 
            'codigo',
            'tipo',
            'quantidade',
            'nome',
            'preco',
            'data',
            'fornecedor',
            'observacoes',
    ];
}