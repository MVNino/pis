<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    // Table
	protected $table = 'patient_tbl';
    //Primary Key
	protected $primaryKey = 'patient_id';
	// timestamp
    public $timestamps = false;
}