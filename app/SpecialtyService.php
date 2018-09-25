<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialtyService extends Model
{
    // Table
	protected $table = 'specialty_service_tbl';
    //Primary Key
	protected $primaryKey = 'spec_service_id';
	// timestamp
	public $timestamps = false;

	public function specialtyServiceVid()
	{
		return $this->hasMany('App\SpecialtyServiceVideo', 'specialty_service_id', 'spec_service_id');
	}
}