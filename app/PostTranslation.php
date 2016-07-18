<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts_translations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = ['slug', 'title', 'intro', 'body'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
