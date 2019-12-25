<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Formats a table to utilize the UUID column
 */
trait Uuid
{
    protected static function bootUuid()
    {
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    /**
     * Find a model by its primary key.
     *
     * @param $uuid
     * @return $mixed
     */
    public static function findU($uuid)
    {
        return static::where(static::getPrimaryKey(), '=', $uuid)->first();
    }

    /**
     * Find a model by its primary key or throw an exception.
     *
     * @param $uuid
     * @return $mixed ||
     */
    public static function findUOrFail($uuid)
    {
        $result = static::findU($uuid);

        if (!is_null($result)) {
            return $result;
        }

        throw (new ModelNotFoundException)->setModel(
            get_class(new static),
            "- Ensure this UUID '" . $uuid . "' corresponds to that of the Model"
        );
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    public static function getPrimaryKey()
    {
        return (new static)->getKeyName();
    }
}
