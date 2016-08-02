<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use Translatable;

    /**
     * The translated attributes
     *
     * @var array
     */
    public $translatedAttributes = ['slug', 'title', 'description'];
}
