<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_id', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getNameAttribute($value)
    {
        return ucwords($value);
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
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    /*
     * Return admin who manages the user.
     */
    public function administrator()
    {
        return $this->admin;
    }

}
