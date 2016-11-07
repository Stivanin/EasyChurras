<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = [ 
            'socio',
            'nome',
            'endereco',
            'cpf',
            'nascimento',
            'rg',
            'telefone',
            'email',
            'complemento'
    ];
}
