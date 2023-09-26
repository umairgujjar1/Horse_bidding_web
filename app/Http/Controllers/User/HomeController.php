<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Aution;
use App\Models\Bid;
use App\Models\Message;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\DB as FacadesDB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // $all_auctions = DB::select("select * from autions");
        $all_auctions = Aution::orderBy('id','desc')->take(8)->get();

        if (!empty($request->get('search'))) {

            $all_auctions = Aution::where('title', 'like', '%' . $request->get('search') .'%')->get();

        }
        // $all_auctions =$auctions;


        return view('User/home')->with("all_auctions", $all_auctions);
    }
    public function allAutions(Request $request)
    {
        // $all_auctions = DB::select("select * from autions");
        $all_auctions = Aution::all();


        // $all_auctions =$auctions;


        return view('User.all_autions')->with("all_auctions", $all_auctions);
    }

    public function view_auction_detail($id)
    {
        $selected_auction = DB::select("select * from autions where id='$id'");

        return view('User/view_auction_detail')->with("selected_auction", $selected_auction);
    }


    public function store_contact(Request $request)
    {
        $insert = DB::insert("insert into messages values(?,?,?,?,?)", [null, $request->name, $request->email, $request->phone, $request->message, date('Y-m-d')]);

        return redirect('contact');
    }
    public function delete_contact($id)
    {
        $delete = Message::find($id)->delete();

        return redirect()->back();
    }


    public function save_newsletter(Request $request)
    {
        // Validate the incoming request data if needed
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Insert the subscriber into the 'subscribers' table
        $insert = DB::table('subscribers')->insert([
            'email' => $request->email,
            'subscribed_date' => date("Y-m-d"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Optionally, you can check if the insertion was successful and handle accordingly
        if ($insert) {
            return redirect()->route('newsletter')->with('success', 'You have been subscribed to the newsletter.');
        } else {
            return redirect()->route('newsletter')->with('error', 'An error occurred while subscribing. Please try again.');
        }
    }



    // public function save_newsletter(Request $request)
    // {
    //     $insert = DB::insert("insert into subscribers values(?,?,?)", [null, $request->email, date("Y-m-d")]);

    //     return redirect('newsletter');
    // }


    public function store_bid(Request $request)
    {

        $bid = new Bid;
        $bid->aution_id = $request->aution_id;
        $bid->horse_name = $request->horse_name;
        $bid->user_id = Auth::user()->id;
        $bid->bid_amount = $request->amount;
        $bid->aution_price = $request->aution_price;
        $bid->save();
        // $insert = DB::insert("insert into bids values(?,?,?,?,?,?,?)", [null, $request->aution_id, $request->horse_name, Auth::user()->id, $request->amount, date("Y-m-d"), "none"]);

        return redirect('home')->with('success', 'Thank You For Bidding!');
    }
    public function delete_bid($id)
    {
        $bid = Bid::find($id)->delete();
        return redirect()->back()->with('success', 'Bid Has Been Deleted!');
    }
    public function bids(Request $request)
    {
        $id = Auth::user()->id;
        $products = Bid::where('user_id', $id)->latest()->get();
        return view('User.bids', compact('products'));
    }
}
