<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug'];

    /**
     * Create the slug field when we save a new tag register.
     */
    public static function boot()
    {
        parent::boot();

        static::saving(function($tag) {
            $tag->slug = str_slug($tag->name);
        });
    }

    /**
     * Posts associated with the current tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
