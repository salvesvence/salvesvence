<?php

namespace app\Traits;

use App\Photo;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

trait Imageble
{
    /**
     * @var $photo
     */
    protected $photo;

    /**
     * @var $baseDir
     */
    protected $baseDir;

    /**
     * @var $fileName
     */
    protected $fileName;

    /**
     * Create new photo register
     *
     * @param $post
     * @param $baseDir
     * @param $fileName
     * @return $this
     */
    public function thumbnails($post, $baseDir, $fileName)
    {
        $this->baseDir = public_path() . $baseDir;
        $this->fileName = $fileName;

        $this->photo = Photo::create([
            'post_id' => $post->id,
            'sm_thumbnail' => $baseDir . 'sm_thumbnail/' . $fileName,
            'md_thumbnail' => $baseDir . 'md_thumbnail/' . $fileName,
            'lg_thumbnail' => $baseDir . 'lg_thumbnail/' . $fileName
        ]);

        return $this;
    }

    /**
     * Store all necessary thumbnails
     */
    public function handle()
    {
        $path = $this->baseDir . $this->fileName;

        if(File::exists($path)) {

            foreach($this->ratios() as $key => $value) {
                $subDir = $this->baseDir . "{$key}_thumbnail";

                if( !File::exists($subDir) ) {
                    File::makeDirectory($subDir);
                }

                $this->resize($path, $subDir . '/' . $this->fileName, $value);
            }
        }
    }

    /**
     * Get all necessary image ratios.
     *
     * @return array
     */
    private function ratios()
    {
        return ['sm' => 50, 'md' => 150, 'lg' => 300];
    }

    /**
     * Resize the original image to all necessary ratios
     *
     * @param $initialPath
     * @param $finalPath
     * @param $ratio
     */
    private function resize($initialPath, $finalPath, $ratio)
    {
        Image::make($initialPath)->resize($ratio, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($finalPath);
    }
}
