<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $fillable = [
        'titulo',
        'sinopse',
        'lancamento',
    ];
}
