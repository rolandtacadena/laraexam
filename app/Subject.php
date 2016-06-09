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
        'name', 'description', 'photo'
    ];

    /**
     * Returns all exams for the subject.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

}
