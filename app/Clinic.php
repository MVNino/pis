<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    // Table
	protected $table = 'clinic_contact_tbl';
    //Primary Key
    protected $primaryKey = 'clinic_contact_id';
    // timestamp
	public $timestamps = false;
}
