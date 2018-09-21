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
}
