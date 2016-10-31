<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionarios extends Model
{
    protected $fillable = [ 
            'contrato',
            'nome',
            'endereco',
            'cpf',
            'nascimento',
            'rg',
            'ctps',
            'cargo',
            'salario',
            'vencimento',
            'telefone',
            'email',
            'hora',
            'beneficios',
            'complemento'
    ];
}
