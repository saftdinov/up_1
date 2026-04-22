<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'Employee_ID',
        "Full_name",
        'Position',
        'User_ID'
    ];
}