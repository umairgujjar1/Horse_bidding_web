<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class CategoreyController extends Controller
{
    public function index()
    {
        $select = DB::select("select * from categories");

        return view('Admin/Categorey/view_categories')->with("select", $select);
    }

 
   public function store(Request $request)
   {

    $insert = DB::insert("insert into categories values(?,?,?)",[null,$request->category_name,$request->status]);

      return redirect("admin-view-categories");
}
 public function deleteCategorey($id)
   {
          $delete_categorey = DB::delete("delete from categories where id='$id'");

              return redirect('admin-view-Categorey');
   }

}