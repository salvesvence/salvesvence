<?php namespace App\Traits;

use App\Photo;

trait Imageble
{
    protected $dir;

    public function thumbnails($model, $dir)
    {
        $this->dir = $dir;

        Photo::create([
            'sm_thumbnail' => '',
            'md_thumbnail' => '',
            'lg_thumbnail' => ''
        ]);
    }
}