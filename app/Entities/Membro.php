<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membro extends Model
{
    use SoftDeletes;

    protected $table = 'Membros';

    protected $fillable = [
        'nome',
        'atividade'
    ];
}
