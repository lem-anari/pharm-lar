<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    public function audit(){
        return $this->belongsTo(Audit::class);
    }
    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }
    public function supply(){
        return $this->belongsTo(Supply::class);
    }
}
