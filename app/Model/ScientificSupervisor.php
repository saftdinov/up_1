<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

class ScientificSupervisor extends Model
{
    public $timestamps = false;
    protected $table = 'scientific_supervisor';
    protected $primaryKey = 'Manager_ID';

    protected $fillable = [
        'Full_Name',
        'Degree_Title'
    ];

    // ✅ Обратное отношение: у руководителя много аспирантов
    public function students()
    {
        return $this->hasMany(GraduateStudent::class, 'Manager_ID', 'Manager_ID');
    }
}