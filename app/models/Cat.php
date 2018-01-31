<?php

class Cat extends Eloquent {

    protected $table = 'cats';
    public $timestamps = true;
    protected $dontFlash = [ 'file' ];

    public function upload()
    {
        return $this->hasOne('Upload');
    }

}
