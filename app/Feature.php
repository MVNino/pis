<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    // Table
	protected $table = 'features';
    //Primary Key
	protected $primaryKey = 'features_id';
	// timestamp
	public $timestamps = false;
}
