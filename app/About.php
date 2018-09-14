<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    // Table
	protected $table = 'about_tbl';
    //Primary Key
    protected $primaryKey = 'about_id';
    // timestamp
	public $timestamps = false;
}
