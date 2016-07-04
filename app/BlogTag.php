<?php namespace App;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Dimsav\Translatable\Translatable;

class BlogTag extends EloquentModel
{
    use Translatable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog_tags';

    public $translatedAttributes = ['slug', 'name'];

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
