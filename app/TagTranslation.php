<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TagTranslation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tags_translations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'name'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
