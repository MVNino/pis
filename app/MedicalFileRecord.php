<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalFileRecord extends Model
{
    // Table
	protected $table = 'medical_file_record_tbl';
    //Primary Key
    protected $primaryKey = 'medical_file_record_id';
    // timestamp
	public $timestamps = false;
}
