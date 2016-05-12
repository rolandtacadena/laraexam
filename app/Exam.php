<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    /*
     * table used for this model
     */
    protected $table = 'exams';

    /*
     * attributes that are mass assignable
     */
    protected $fillable = [
        'name',
        'subject_id',
    ];

}
