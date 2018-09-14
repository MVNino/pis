<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    // Table
	protected $table = 'banner_tbl';
    //Primary Key
    protected $primaryKey = 'banner_id';
    // timestamp
	public $timestamps = false;
}
