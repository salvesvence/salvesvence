<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories_translations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id', 'locale', 'slug', 'name'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
