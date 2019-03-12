<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grind extends Model
{
    protected $table = 'grinds';

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }

    public function tomatoe()
    {
        return $this->belongsTo(Tomatoe::class);
    }
}
