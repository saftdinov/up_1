<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Scientific_supervisor extends Model
{
    protected $table = 'Scientific_supervisor';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'Manager_ID',
        'Full_Name',
        'Degree_Title',
    ];
}