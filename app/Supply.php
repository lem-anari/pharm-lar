<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    public function pharmacies ()
    {
        return $this->hasMany(Pharmacy::class);
    }
    public function products ()
    {
        return $this->hasMany(Product::class);
    }
}
