<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    // Table
	protected $table = 'about_table';
    //Primary Key
    protected $primaryKey = 'about_id';
    // timestamp
	public $timestamps = false;
}
