<?php

namespace Trma;

use Illuminate\Database\Eloquent\Model;

class Projetos extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome_projeto','id_cliente', 'email_cliente', 'detalhes',
    ];
}
