<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Tag extends Model
{
    use SoftDeletes, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'is_featured', 'slug'
    ];

    /**
     * Convert the model to its string representation.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
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
                'source' => ['name'],
                'onUpdate' => true,
                'includeTrashed' => true,
            ],
        ];
    }

    // Each Tag any Models
    public function categories()
    {
        return $this->morphedByMany('App\Category', 'taggable');
    }

    // A tag have many courses
    public function courses()
    {
        return $this->morphedByMany('App\Course', 'taggable');
    }

    // Set the name attribute to Upper case
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
}
