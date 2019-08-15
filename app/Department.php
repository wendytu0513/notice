<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = "departments";
    protected $primaryKey = 'departmentid';

    function notice() {
        return $this->hasMany(Notice::class, 'departmentid');
    }
}
