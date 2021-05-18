<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    public function pharmacies (){
        return $this->hasMany(Pharmacy::class);
    }
    public function employees (){
        return $this->hasMany(Employee::class);
    }
    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }
    public function newsemp(){
        return $this->belongsTo(Newsemp::class);
    }
}
