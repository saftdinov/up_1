<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    protected $table = 'Thesis';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'Dissertation_ID',
        'Defense_date',
        'Topic',
        'Status',
        'Graduate student_ID',
    ];
}