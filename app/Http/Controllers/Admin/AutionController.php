<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Aution;
use DB;
class AutionController extends Controller
{
  public function index()
    {
        $select = DB::select("select * from autions");

        return view('Admin/Aution/view_autions')->with("select", $select);
    }

    public function store(Request $request)
    {

// $insert =new Aution;
// // $insert->title =>$request['title'];
// $insert->categorey_id =>$request['categorey'];
// $insert->type =>$request['type'];
// $insert->price =>$request['price'];
// $insert->start_date =>$request['start_date'];
// $insert->end_date =>$request['end_date'];
// $insert->status =>$request['status'];


$imageName = time().'.'.$request->image->extension();

$insert = DB::insert("insert into autions values(?,?,?,?,?,?,?,?,?,?,?,?,?)",[null,$request->title,$request->categorey,$request->type,$request->age,$request->height,$request->description,$request->weight,$request->price,$imageName,$request->start_date,$request->end_date,$request->status,]);


// $imageName = time().'.'.$request->image->extension();

$request->image->move(public_path('images'), $imageName);



// if ($request->hasFile('image')) {
//   $image = $request->file('image');
//   $imageName = time() . '.' . $image->getClientOriginalExtension();
//   $image->move(public_path('images'), $imageName);

// }
// dd($image);

return redirect("admin-view-autions");
    }

      public function deleteAution($id)
   {
          $delete_aution = DB::delete("delete from autions where id='$id'");

              return redirect("admin-view-autions");
   }

}










