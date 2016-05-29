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
        'description',
        'subject_id',
    ];

    /*
     * Name attribute accessor
     */
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    /*
     * Name attribute mutator
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    /**
     * Returns the subject where the exam belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * Returns the list of questions for this exam
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    /**
     * Exam has many takers
     *
     * @return $this
     */
    public function takers()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('completed', 'num_correct', 'num_wrong');
    }

}
