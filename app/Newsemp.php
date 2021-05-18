<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsemp extends Model
{
    public function employees (){
        return $this->hasMany(Employee::class);
    }
    public function audits (){
        return $this->hasMany(Audit::class);
    }
}
