<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherServiceVideo extends Model
{
    // Table
	protected $table = 'other_service_vid_tbl';
    //Primary Key
	protected $primaryKey = 'video_id';
	// timestamp
	public $timestamps = false;
}
