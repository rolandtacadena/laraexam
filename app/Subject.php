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
        'admin_id', 'name', 'description', 'photo'
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

    /**
     * A subject is created by admin.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

}
