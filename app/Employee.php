<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function audit(){
        return $this->belongsTo(Audit::class);
    }
    public function salary(){
        return $this->belongsTo(Salary::class);
    }
    public function newsemp(){
        return $this->belongsTo(Newsemp::class);
    }
}
