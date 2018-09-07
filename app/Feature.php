<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    // Table
	protected $table = 'contact_us_table';
    //Primary Key
	protected $primaryKey = 'contact_us_id';
	// timestamp
	public $timestamps = false;
}
