<?php
namespace Model;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = 'Publication';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'Publication_ID',
        'title',
        'Index_(RSCI/Scopus)',
        'Edition',
        'Pub_date',
        'Graduate student_ID'
    ];
}