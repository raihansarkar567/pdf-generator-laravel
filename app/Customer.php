<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $table = 'attendances';
    protected $fillable = [
        'created_at',
        'updated_at',
        'employee_id',
    ];
}
