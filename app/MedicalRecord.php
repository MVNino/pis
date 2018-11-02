<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    // Table
	protected $table = 'medical_records_tbl';
    //Primary Key
    protected $primaryKey = 'medical_record_id';
    // timestamp
	public $timestamps = false;
}
