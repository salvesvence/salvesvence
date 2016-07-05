<?php namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use Translatable;

    public $translatedAttributes = ['slug', 'firstname', 'lastname', 'info'];

    /**
     * Posts associated with the current author.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
