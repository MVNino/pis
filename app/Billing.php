<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    // Table
	protected $table = 'billing_tbl';
    //Primary Key
    protected $primaryKey = 'billing_id';
    // timestamp
	public $timestamps = false;

	public function patient()
	{
		return $this->belongsTo('App\Patient', 'patient_id', 'patient_id');
	}

	public function billingDetails()
	{
		return $this->hasMany('App\BillingDetail', 'billing_id', 'billing_id');
	}

}
