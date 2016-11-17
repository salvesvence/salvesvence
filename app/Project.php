<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'name', 'description'];

    /**
     * Create the slug field when we save a new project register.
     */
    public static function boot()
    {
        parent::boot();

        static::saving(function($project) {
            $project->slug = str_slug($project->name);
        });
    }
}
