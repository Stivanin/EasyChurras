<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class convenios extends Model
{
    protected $fillable = [ 
            'nome',
            'vencimento',
            'desconto',
    ];
}
