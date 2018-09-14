<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    // Table
	protected $table = 'faq_tbl';
    //Primary Key
	protected $primaryKey = 'faq_id';
	// timestamp
	public $timestamps = false;
}