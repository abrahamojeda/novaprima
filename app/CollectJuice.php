<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollectJuice extends Model
{
    protected $table = 'collect_juices';

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }

    public function tomatoe()
    {
        return $this->belongsTo(Tomatoe::class);
    }
}
