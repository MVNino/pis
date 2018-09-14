<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // Table
	protected $table = 'company_tbl';
    //Primary Key
    protected $primaryKey = 'company_id';
    // timestamp
	public $timestamps = false;
}
