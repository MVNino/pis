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

    protected $dates = [
    	'appointment_date'
	];
    
	public function patient()
	{
		return $this->belongsTo('App\Patient', 'patient_id', 'patient_id');
	}

	public function listAppointments($status)
	{
		return $this->join('patient_tbl', 'appointment_tbl.patient_id', '=', 'patient_tbl.patient_id')
        	->selectRaw('appointment_id as id, patient_tbl.patient_id, CONCAT(lname,", ",fname, " ", mname) as full_name, contact_no, email, appointment_date, DATE_FORMAT(appointment_date, "%M %d, %Y")as custom_appointment_date, 
        		DATE_FORMAT(time, "%h:%i %p") as time')
            ->where('status', $status)
            ->get();
	}
}
