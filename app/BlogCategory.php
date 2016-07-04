<?php namespace App;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Dimsav\Translatable\Translatable;

class BlogCategory extends EloquentModel
{
    use Translatable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog_categories';

    public $translatedAttributes = ['slug', 'name'];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
