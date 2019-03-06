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

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
