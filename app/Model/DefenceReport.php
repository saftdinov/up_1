<?php
namespace Model;

use Illuminate\Database\Eloquent\Model;

class DefenceReport extends Model
{

    protected $table = 'graduate_student';

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'Report_ID',
        "Dissertation_ID",
        'Employee_ID',
        'Report_date',
        'Report_data'
    ];
}