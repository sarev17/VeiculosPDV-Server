<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juros extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'taxa',
        'forma',
    ];
}
