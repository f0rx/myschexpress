<?php

namespace App;

use App\Http\Controllers\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instructor extends Model
{
    use SoftDeletes, Uuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'used_id', 'bio', 'organization', 'secondary_email', 'website'
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['user'];

    // Each Instructor model is associated with a User model/Profile
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // An instructor can have many Courses
    public function courses()
    {
        return $this->morphedByMany('App\Course', 'teachable');
    }
}
