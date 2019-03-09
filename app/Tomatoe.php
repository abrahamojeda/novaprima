<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tomatoe extends Model
{
    protected $table = 'tomatoes';

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }

    public function setLotName($value)
    {
        $this->attributes['lot'] = 'T-' + $value;
    }
}
