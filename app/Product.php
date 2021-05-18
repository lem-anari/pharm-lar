<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }
    public function supply(){
        return $this->belongsTo(Supply::class);
    }
}
