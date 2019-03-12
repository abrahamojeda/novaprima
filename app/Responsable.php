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

    public function grinds()
    {
        return $this->hasMany(grinds::class, 'id');
    }

    public function collect_juices()
    {
        return $this->hasMany(collect_juices::class, 'id');
    }
}
