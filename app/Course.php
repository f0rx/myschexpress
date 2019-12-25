<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use Sluggable, SoftDeletes;

    /**
     * An array to append tag names
     */
    private $tabs;

    /**
     * An array to hold filtered instructor data
     */
    private $instructors;

    public function __construct()
    {
        $this->tabs = [];
        $this->instructors = [];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'category_id', 'is_featured', 'summary', 'overview'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['category'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['tabs', 'authors'];

    /**
     * Convert the model to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->title;
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => ['title'],
                'onUpdate' => true,
                'includeTrashed' => true,
            ],
        ];
    }

    /**
     * Get the route key for the model
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Each Course belongsTo a Category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    // A Course can have many Tags
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    // Sift through the Tags and get each name
    public function getTabsAttribute()
    {
        $this->morphToMany('App\Tag', 'taggable')->each(function ($tag) {
            array_push($this->tabs, $tag->name);
        });
        return $this->tabs;
    }

    // A course can have many Instructors
    public function instructors()
    {
        return $this->morphToMany('App\Instructor', 'teachable');
    }

    // Sift through the Instructors and hide some attributes
    public function getAuthorsAttribute()
    {
        $this->morphToMany('App\Instructor', 'teachable')->each(function ($instructor) {
            $instructor->makeHidden(['user_id', 'created_at', 'updated_at', 'deleted_at']);
            $instructor->user->makeHidden(['email_verified_at', 'created_at', 'updated_at', 'deleted_at']);
            array_push($this->instructors, $instructor);
        });
        return $this->instructors;
    }
}
