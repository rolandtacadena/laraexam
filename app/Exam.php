<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    /*
     * Table used for this model.
     */
    protected $table = 'exams';

    /*
     * Attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'description',
        'subject_id',
    ];

    /*
     * Name attribute accessor.
     */
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    /*
     * Name attribute mutator.
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    /**
     * Local scope query to return the latest exams.
     *
     * @param $query
     * @return mixed
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc')->get();
    }

    /**
     * Local scope query to return the oldest exams.
     *
     * @param $query
     * @return mixed
     */
    public function scopeOldest($query)
    {
        return $query->orderBy('created_at', 'asc')->get();
    }

    /**
     * Returns the subject where the exam belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * Returns the list of questions for this exam.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    /**
     * Exam has many takers.
     *
     * @return $this
     */
    public function takers()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('completed', 'num_correct', 'num_wrong');
    }

    /**
     * Count exam questions.
     *
     * @return mixed
     */
    public function questionCount()
    {
        return $this->questions()->count();
    }

}
