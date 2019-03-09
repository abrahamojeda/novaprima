<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function tomatoes()
    {
        return $this->hasMany(tomatoes::class, 'id');
    }

    public function honeys()
    {
        return $this->hasMany(honeys::class, 'id');
    }

    public function scopeTomatoeProviders($query)
    {
        return $query->where('material', 'Tomate');
    }

    public function scopeHoneyProviders($query)
    {
        return $query->where('material', 'Miel');
    }
}
