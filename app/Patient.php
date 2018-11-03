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

	public function billing()
	{
		return $this->hasOne('App\Billing', 'patient_id', 'patient_id');
	}
}
