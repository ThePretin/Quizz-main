<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    protected $table = 'perguntas';

    protected $fillable = [
        'texto',
        'opcao_a',
        'opcao_b',
        'opcao_c',
        'opcao_d',
        'resposta_correta',
        'imagem',
        'pontos',
    ];
}
