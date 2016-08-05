<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['author_id', 'category_id', 'slug', 'title', 'body'];

    /**
     * Create the slug field when we save a new post register.
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function($post) {
            $post->author_id = Auth::user()->id;
        });

        static::saving(function($post) {
            $post->slug = str_slug($post->title);
        });
    }

    /**
     * User associated with the current post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'author_id');
    }

    /**
     * Category associated with the current post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Tags associated with the current post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    /**
     * If the current post is owner from the user given.
     *
     * @param User $user
     * @return bool
     */
    public function isOwnedBy(User $user)
    {
        return $user->id === $this->user_id;
    }
}
