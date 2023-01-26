<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    use HasFactory;
    protected $table = 'inscricoes';
    protected $fillable = [
        'name',
        'cpf',
        'igreja',
        'value'
    ];
}
