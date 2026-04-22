<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class GraduateStudent extends Model
{
    public $timestamps = false;
    protected $table = 'graduate_students';
    protected $primaryKey = 'Graduate student_ID';

    protected $fillable = [
        'Full_name',
        'Department',
        'enrollment_date',
        'Manager_ID'
    ];

    // ✅ Отношение к научному руководителю
    public function supervisor()
    {
        // belongsTo: этот аспирант принадлежит одному руководителю
        return $this->belongsTo(
            ScientificSupervisor::class,
            'Manager_ID',          // Внешний ключ в таблице graduate_students
            'Manager_ID'           // Первичный ключ в таблице scientific_supervisor
        );
    }

    public function thesis()
    {
        return $this->hasOne(Thesis::class, 'Graduate student_ID', 'Graduate student_ID');
    }

    public function publications()
    {
        return $this->hasMany(Publication::class, 'Graduate student_ID', 'Graduate student_ID');
    }
}