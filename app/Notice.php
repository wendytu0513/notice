<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = "notice";
    protected $primaryKey = 'id';

    function department() {
        return $this->hasOne(Department::class, 'departmentid');
    }
}
