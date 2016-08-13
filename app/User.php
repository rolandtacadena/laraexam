<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /*
     * Table used for this model.
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_id', 'name', 'email', 'password', 'status'
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
     * User can take many exams.
     *
     * @return $this
     */
    public function exams()
    {
        return $this->belongsToMany(Exam::class)
            ->withPivot('completed', 'num_correct', 'num_wrong');
    }

    /**
     * A student/user is managed by admin.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }


    /**
     * Return admin who manages the user.
     *
     * @return mixed
     */
    public function managingTeacher()
    {
        return $this->teacher;
    }

}
