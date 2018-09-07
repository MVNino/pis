<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // Table
	protected $table = 'company_table';
    //Primary Key
	protected $primaryKey = 'company_id';
}
