<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table = 'responsables';

    public function tomatoes()
    {
        return $this->hasMany(tomatoes::class, 'id');
    }
}
