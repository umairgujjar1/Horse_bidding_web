<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class SubcriberController extends Controller
{
    public function index()
    {
        $select = DB::select("select * from subscribers");

        return view('Admin/Subcriber/view_subcribers')->with("select", $select);
    }



    public function delete($id)
    {
        // Find the subscriber by ID and delete it from the 'subscribers' table
        $delete = DB::table('subscribers')->where('id', $id)->delete();

        if ($delete) {
            return redirect()->route('subscribe-index')->with('success', 'Subscriber deleted successfully.');
        } else {
            return redirect()->route('subscribe-index')->with('error', 'Failed to delete subscriber.');
        }
    }










}
