<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = [
        'nome',
        'email',
        'PartipacaoExame',
        'InfoExame',
        'tipoParticpacao',
        'provincia',
        'municipio',
        'pais',
        'Instituicao',
        'telefone',
    ];

}
