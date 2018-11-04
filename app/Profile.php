<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Table
	protected $table = 'profile_tbl';
    //Primary Key
    protected $primaryKey = 'profile_id';
    // timestamp
	public $timestamps = false;
}
