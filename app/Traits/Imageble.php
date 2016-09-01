<?php namespace App\Traits;

use App\Photo;
use Illuminate\Support\Facades\File;

trait Imageble
{
    protected $photo;

    protected $baseDir;

    protected $fileName;

    /**
     * Create new photo register
     *
     * @param $model
     * @param $baseDir
     * @param $fileName
     * @return $this
     */
    public function thumbnails($model, $baseDir, $fileName)
    {
        $this->baseDir = $baseDir;
        $this->fileName = $fileName;

        $this->photo = Photo::create([
            'sm_thumbnail' => $baseDir . 'sm_thumbnail/' . $fileName,
            'md_thumbnail' => $baseDir . 'md_thumbnail/' . $fileName,
            'lg_thumbnail' => $baseDir . 'lg_thumbnail/' . $fileName
        ]);

        return $this;
    }

    public function create()
    {
        $path = $this->baseDir . $this->fileName;

        if(File::exists()) {

            foreach(['sm', 'md', 'lg'] as $key) {
                File::copy($path, $this->photo->$key{'_thumbnail'});
            }
        }
    }
}