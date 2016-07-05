<?php namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Translatable;

    public $translatedAttributes = ['slug', 'name'];

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
