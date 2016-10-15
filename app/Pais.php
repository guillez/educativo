<?php

namespace Educativo;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable =
    [
        'nombre',
        'abreviacion'
    ];
}
