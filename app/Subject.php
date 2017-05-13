<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /*
     * Table used in this model.
     */
    protected $table = 'subjects';

    /*
     * Attributes that are mass assignable.
     */
    protected $fillable = [
        'teacher_id', 'name', 'description', 'photo'
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

    /*
  * Description attribute accessor.
  */
    public function getDescriptionAttribute($value)
    {
        return ucwords($value);
    }

    /*
     * Description attribute mutator.
     */
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = strtolower($value);
    }

    /**
     * Returns all exams for the subject.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    /**
     * A subject is created by admin.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin()
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * Local scope query to return the latest subjects.
     *
     * @param $query
     * @return mixed
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc')->get();
    }

    /**
     * Local scope query to return the oldest subjects.
     *
     * @param $query
     * @return mixed
     */
    public function scopeOldest($query)
    {
        return $query->orderBy('created_at', 'asc')->get();
    }

    /**
     * Exam count for the subject
     *
     * @return mixed
     */
    public function examCount()
    {
        return $this->exams()->count();
    }

    /**
     * Exam count for the subject that has questions.
     *
     * @return mixed
     */
    public function examsWithQuestions() {
        return $this->exams()->has('questions');
    }

    /**
     * Store exam
     *
     * @param array $exam
     */
    public function createExam(array $exam)
    {
        $this->exams()->create($exam);
    }

}
