<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aution;
use App\Models\Bid;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class BidController extends Controller
{
    public function index()
    {

        //    $select = DB::select("select * from bids");
        //    $select = $selected->user;

        $select = Bid::with('user')->get();


        // $user = $bid->user; // Retrieves the associated user


        return view('Admin/Bid/view_bids')->with("select", $select);
    }
    public function deleteBid($id)
    {
        $delete_bid = DB::delete("delete from bids where id='$id'");

        return redirect('/admin-view-bids');
    }
    public function acceptBid($id)
    {
        //   $accept =DB::select("select * from autions where id='$id'");
        //   $accept=User::find($id);
        // $accept = Aution::where('id',$id);
        //   dd($accept);
        //    $data = Aution::find($id);
        //    return $data;


        $bid = Bid::find($id);
        $bid->status = "approved";
        $bid->save();
        return redirect()->back();
        // $bid->update(
        //     [
        //         'status' => "approved"
        //     ]

        // );

        //     $data = Bid::where('id',$id)->get();
        // $dataArray = json_decode($data, true);

        // $horseName = $dataArray[0]['horse_name'];
        // $userId = $dataArray[0]['user_id'];
        // $productName = $horseName;
        // $bidPrice = $dataArray[0]['bid_amount'];


        // $user = User::find($userId);
        // $userName= $user->name;
        // $userEmail= $user->email;

        // echo $horseName ."<br>";
        // echo $userName ."<br>";
        // echo $userEmail ."<br>";
        // echo $bidPrice ."<br>";
        // return $user;

        //    return $data;

        //   $mail_data = [
        // 'user' =>userName,
        //      'title' => $data->title,
        // 'product_name' =>$productName,
        //      'price' => $bidPrice,
        //      'body' => 'Your Bid Has been Accepted.'
        //  ];

        //  Mail::to('umair.gujar0303@gmail.com')->send(new \App\Mail\MyTestMail($mail_data));

        //  dd("Email is Sent.");


    }
    public function cancelBid($id)
    {
        $bid = Bid::find($id);
        $bid->status = "cancel";
        $bid->save();
        return redirect()->back();
    }
    public function viewBid($id)
    {

        $selected_auction = Aution::find($id);

        return view('Admin.Bid.view_aution', compact('selected_auction'));
    }
}
