<?php
namespace Model;

use Illuminate\Database\Eloquent\Model;

class Defence_report extends Model
{

    protected $table = '`Graduate student`';

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'Report_ID',
        "Dissertation_ID",
        'Employe_ID',
        'Report_date',
        'Report_data'
    ];
}