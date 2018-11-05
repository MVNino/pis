<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Patient;
use App\Contact;
use Carbon;


class InboxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewInbox() {

        $messages = Contact::all();
        $count = Contact::where('status', 1)->count();
        return view('admin.transaction.inbox', ['messages'=>$messages, 'count'=>$count]);
    }

    public function viewDetail($id) {
        $message = Contact::findOrFail($id);
        $count = Contact::where('status', 1)->count();
        return view('admin.transaction.inbox-detail', ['message'=>$message, 'count'=>$count]);
    }

    public function viewTrash() {
        $messages = Contact::all();
        $count = Contact::where('status', 0)->count();
        $countInbox = Contact::where('status', 1)->count();
        return view('admin.transaction.trash',['messages'=>$messages, 'count'=>$count, 'countInbox'=>$countInbox]);
    }

    public function deleteMessage($id)
    {
      try
      {
          $message = Contact::find($id);
          $message->status = 0;

          if ($message->save())
          {
              return redirect()->back()->with('success', 'Message Deleted!');
          }

      }
      catch (\Exception $e)
      {
          return $e->getMessage();
      }
  }
}
