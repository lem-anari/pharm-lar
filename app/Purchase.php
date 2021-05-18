<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function pharmacies ()
    {
        return $this->hasMany(Pharmacy::class);
    }
    public function audits ()
    {
        return $this->hasMany(Audit::class);
    }
    public function products ()
    {
        return $this->hasMany(Product::class);
    }
}
