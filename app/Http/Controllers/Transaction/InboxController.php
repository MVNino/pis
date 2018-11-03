<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Patient;


class InboxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewInbox() {
        return view('admin.transaction.inbox');
    }

    public function viewDetail() {
        return view('admin.transaction.inbox-detail');
    }

    public function viewTrash() {
        return view('admin.transaction.trash');
    }
}
