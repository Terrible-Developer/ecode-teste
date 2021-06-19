<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    //use HasFactory;

    protected $fillable = [
        'id_pessoa',
        'id_pessoa_juridica',
        'estado',
        'cidade',
        'endereco',
        'numero'
    ];
}

