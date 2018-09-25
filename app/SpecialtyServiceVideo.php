<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialtyServiceVideo extends Model
{
    // Table
	protected $table = 'specialty_service_vid_tbl';
    //Primary Key
	protected $primaryKey = 'video_id';
	// timestamp
	public $timestamps = false;

	public function specialtyService()
	{
		return $this->belongsTo('App\SpecialtyService', 
			'specialty_service_id', 'spec_service_id');
	}
}
