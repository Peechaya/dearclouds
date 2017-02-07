<?php

class Project extends Eloquent {
 
    protected $table = 'projects';
    public $timestamps = true;
    protected $dontFlash = [ 'file' ];

    public function upload()
    {
        return $this->hasOne('Upload');
    }
 
}