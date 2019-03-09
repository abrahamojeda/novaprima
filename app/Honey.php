<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Honey extends Model
{
    protected $table = 'honeys';

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }
}
