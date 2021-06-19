<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefones extends Model
{
    //use HasFactory;

    protected $fillable = [
        'id_pessoa',
        'id_pessoa_juridica',
        'numero_telefone'
    ];
}
