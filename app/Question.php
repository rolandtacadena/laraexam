<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /*
     * Table used for this model.
     */
    protected $table = 'questions';

    /*
     * Attributes that are mass assignable.
     */
    protected $fillable = [
        'question',
        'exam_id',
        'choice1',
        'choice2',
        'choice3',
        'choice4',
        'answer'
    ];

    /**
     * Returns the exam to which this question belongs.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
