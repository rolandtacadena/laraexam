<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{

    /*
     * Fillable fields for results table
     */
    protected $fillable = [
        'user_id',
        'exam_id',
        'question_id',
        'question',
        'user_answer',
        'correct_answer',
        'remarks',
        'score'
    ];


}
