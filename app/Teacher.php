<?php

namespace App;

use App\Http\Requests\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    /*
     * Table used for this model.
     */
    protected $table = 'teachers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
     * Admin can create many subjects.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    /**
     * Admin manages many students
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Return the subjects that has exams.
     *
     * @return mixed
     */
    public function subjectsWithExams()
    {
        return $this->subjects()->has('exams')->get();
    }

    /**
     * Store subject.
     *
     * @param array $subject
     */
    public function createSubject(array $subject)
    {
        $this->subjects()->create($subject);
    }
}
