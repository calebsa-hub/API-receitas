<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    protected $fillable = ['nome', 'descricao','etapas','nivelDeDificuldade', 'nivelDeQualidade','categoria','foto'];
}
