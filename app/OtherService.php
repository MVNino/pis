<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherService extends Model
{
    // Table
	protected $table = 'other_services_tbl';
    //Primary Key
	protected $primaryKey = 'other_services_id';
	// timestamp
	public $timestamps = false;
}
