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
}
