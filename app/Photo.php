<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'post_id',
        'sm_thumbnail',
        'md_thumbnail',
        'lg_thumbnail'
    ];

    /**
     * Get the post associated with the current photo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function post()
    {
        return $this->hasOne(Post::class);
    }

    /**
     * Attach the given post to the current photo
     *
     * @param Post $post
     * @return Model
     */
    public function attachPost(Post $post)
    {
        return $this->post()->save($post);
    }
}
