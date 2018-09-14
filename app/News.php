<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // Table
	protected $table = 'news_tbl';
    //Primary Key
	protected $primaryKey = 'news_id';
	// timestamp
	public $timestamps = false;
}
