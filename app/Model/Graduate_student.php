<?php
namespace Model;

use Illuminate\Database\Eloquent\Model;

class Graduate_student extends Model
{
    protected $table = 'graduate_students';

    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'Graduate student_ID',
        'Full_name',
        'Department',
        'enrollment_date',
        'Manager_ID'
    ];
}