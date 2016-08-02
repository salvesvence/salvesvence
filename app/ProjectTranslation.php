<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectTranslation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects_translations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = ['slug', 'title', 'description'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
