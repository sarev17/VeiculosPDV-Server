<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'produto',
        'marca',
        'modelo',
        'exercicio',
        'cor',
        'renavam',
        'fabricacao',
        'compra',
        'venda',
        'obs',
    ];
}
