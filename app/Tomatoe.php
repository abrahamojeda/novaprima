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

    public function grinds()
    {
        return $this->hasMany(grinds::class, 'id');
    }

    public function collect_juices()
    {
        return $this->hasMany(collectjuice::class, 'id');
    }
}
