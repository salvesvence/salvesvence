<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['author_id', 'category_id'];

    /**
     * The translated attributes
     *
     * @var array
     */
    public $translatedAttributes = ['slug', 'title', 'intro', 'body'];

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
