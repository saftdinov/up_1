<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    public $timestamps = false;
    protected $table = 'thesis';
    protected $primaryKey = 'Dissertation_ID';

    protected $fillable = [
        'Topic',
        'Defense_date',
        'Graduate student_ID',
        'Status'
    ];

    public function student()
    {
        return $this->belongsTo(GraduateStudent::class, 'Graduate student_ID', 'Graduate student_ID');
    }
}