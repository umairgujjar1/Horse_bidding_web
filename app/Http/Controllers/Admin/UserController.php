<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $select = DB::select("select * from users");

        return view('Admin/User/view_users')->with("select", $select);
    }

    public function viewUser($id)
    {


        $user = User::find($id);
        // return $users;
        return view('Admin.User.add_user',compact('user'));
    }
    public function store(Request $request)
    {


        // $insert = DB::insert("insert into users values(?,?,?,?,?)",[$request->name,$request->role,$request->email,Hash::make($request->password)]);
    if(!empty($request->user_id)){
     $id = $request->user_id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('admin-view-users')->with('success','User Setting Has been Changes!');
    }

        $insert = new User();
        $insert->name = $request->name;
        $insert->email = $request->email;
        $insert->role = $request->role;
        $insert->password = Hash::make($request->password);
        $insert->save();
        return redirect("admin-view-users");
    }
    public function deleteUser($id)
    {
        $delete_user = DB::delete("delete from users where id='$id'");

        return redirect('admin-view-users');
    }
}
