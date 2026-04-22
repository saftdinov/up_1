<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public $timestamps = false;
    protected $table = 'publication';
    protected $primaryKey = 'Publication_ID';

    protected $fillable = [
        'Title',
        'Edition',
        'Pub_date',
        'Index_(RSCI/Scopus)',
        'Graduate student_ID'
    ];

    public function student()
    {
        return $this->belongsTo(GraduateStudent::class, 'Graduate student_ID', 'Graduate student_ID');
    }
}