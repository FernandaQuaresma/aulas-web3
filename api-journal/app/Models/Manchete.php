<?php //abre a execução da linguegem php

namespace App\Models;  //espaço/ambiente de trabalho

use Illuminate\Database\Eloquent\Model; //esta chamando para ser usada
//o componente model

class Manchete extends Model  //a classe manchete esta herdando 
{
    protected $fillable = [
        'titulo',
        'conteudo',
        'data',
    ];
}
