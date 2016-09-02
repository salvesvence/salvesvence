<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['sm_thumbnail', 'md_thumbnail', 'lg_thumbnail'];

    /**
     * Get the post associated with the current photo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
