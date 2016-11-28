<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    protected $fillable = [ 
            'socio',
            'nome',
            'data',
            'horainicio',
            'horafim',
            'endereco',
            'produtos',
            'complemento'
        
    ];
}
