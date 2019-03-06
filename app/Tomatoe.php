<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tomatoe extends Model
{
    protected $table = 'tomatoes';

    public $timestamps = false;

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
