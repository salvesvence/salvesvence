<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug'];

    /**
     * Create the slug field when we save a new project register.
     */
    public static function boot()
    {
        parent::boot();

        static::saving(function($category) {
            $category->slug = str_slug($category->name);
        });
    }

    /**
     * Posts associated with the current category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
