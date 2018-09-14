<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    // Table
	protected $table = 'contact_us_tbl';
    //Primary Key
	protected $primaryKey = 'contact_us_id';
	// timestamp
	public $timestamps = false;
}
