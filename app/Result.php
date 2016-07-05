<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    /*
     * Table used for this model.
     */
    protected $table = 'results';

    /*
     * Fillable fields for results table.
     */
    protected $fillable = [
        'user_id',
        'exam_id',
        'question_id',
        'question',
        'user_answer',
        'correct_answer',
        'remarks'
    ];


}
