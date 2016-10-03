<?php

namespace Coffee;

use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    protected $fillable = ['responsable', 'direccion', 'semilla_id'];
}
