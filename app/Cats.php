<?php

namespace NewsGame;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cats extends Model
{
    use SoftDeletes;
    protected $table='categorias';
}
