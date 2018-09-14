<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // Table
	protected $table = 'services_tbl';
    //Primary Key
	protected $primaryKey = 'service_id';
	// timestamp
	public $timestamps = false;
}
