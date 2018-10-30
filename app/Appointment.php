<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    // Table
	protected $table = 'appointment_tbl';
    //Primary Key
	protected $primaryKey = 'appointment_id';
	// timestamp
    public $timestamps = false;
    
    // public function patient()
	// {
	// 	return $this->belongsTo('App\Patient', 
	// 		'patient_id', 'patient_id');
	// }
}
