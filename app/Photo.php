<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['sm_thumbnail', 'md_thumbnail', 'lg_thumbnail'];
}
