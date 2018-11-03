<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillingDetail extends Model
{
    // Table
	protected $table = 'billing_details_tbl';
    //Primary Key
    protected $primaryKey = 'billing_details_id';
    // timestamp
	public $timestamps = false;

	public function specialtyService()
	{
		return $this->hasOne('App\SpecialtyService', 'spec_service_id', 'spec_service_id');
	}
}
