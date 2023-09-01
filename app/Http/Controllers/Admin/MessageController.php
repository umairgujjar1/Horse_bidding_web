<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class MessageController extends Controller
{
    public function index()
    {
        $select = DB::select("select * from messages");

        return view('Admin/Message/view_messages')->with("select", $select);
    }
}
