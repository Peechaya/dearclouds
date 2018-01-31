<?php

class Subtitle extends Eloquent {

    protected $table = 'subtitles';
    public $timestamps = true;
    protected $dontFlash = [ 'file' ];

    public function upload()
    {
        return $this->hasOne('Upload');
    }

}
