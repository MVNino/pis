<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficialReceipt extends Model
{
    // Table
	protected $table = 'official_receipt_tbl';
    //Primary Key
	protected $primaryKey = 'or_id';
	// timestamp
    public $timestamps = false;
}
