<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
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
