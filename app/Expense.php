<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    // Table
	protected $table = 'expense_tbl';
    //Primary Key
    protected $primaryKey = 'expense_id';
    // timestamp
	public $timestamps = false;
}
