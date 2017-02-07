<?php

class Upload extends Eloquent
{

	protected $guarded = array();
	protected $table = 'uploads';
	protected $dontFlash = [ 'file' ];

	public static function saveUpload($data)
	{
		DB::table('uploads')->insert($data);
	}


	public function project()
	{
		return $this->belongsTo('Project');
	}


}