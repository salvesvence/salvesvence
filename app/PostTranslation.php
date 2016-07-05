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
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
