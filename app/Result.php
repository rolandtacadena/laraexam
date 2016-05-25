<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
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
