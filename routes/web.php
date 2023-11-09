<?php

use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;



// Route::get('admin', function () {
//     return view('Admin/admin_layout');
// });


Route::get('stripe/{id?}', [StripeController::class, 'stripe'])->name('stripe');
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');


/////////// Admin Panel Routes ////////////////////////////////


////////////////////////////////////////////////////////


//Categorey
// Route::get('/admin-add-categorey', function () {
//     return view('Admin/Categorey/add_categorey');
// });

//  Route::post('admin-save-add-categorey','Admin\CategoreyController@store');

//  Route::get('admin-view-categories',"Admin\CategoreyController@index");

/////////////////////////////////////////////////////////


//User
// Route::get('/admin-add-user', function () {
//     return view('Admin/User/add_user');
// });

// Route::post('admin-save-add-user','Admin\UserController@store');

// Route::get('admin-view-users',"Admin\UserController@index");

/////////////////////////////////////////////////////////


//Auction
// Route::get('/admin-add-aution', function () {
//     return view('Admin/Aution/add_aution');
// });

//  Route::post('admin-save-add-aution','Admin\AutionController@store');

//  Route::get('admin-view-autions',"Admin\AutionController@index");

///////////////////////////////////////////////////////////


//Bid
//  Route::get('/admin-view-bids',"Admin\BidController@index");

///////////////////////////////////////////////////////////



//Subcriber
//  Route::get('admin-view-subcribers',"Admin\SubcriberController@index")->name('subscribe-index');

//  Route::get('/subscribers/{id}', "admin\SubcriberController@delete")->name('subscribers.delete');

/////////////////////////////////////////////////////////////



//Message
//  Route::get('/admin-view-messages',"Admin\MessageController@index");

///////////////////////////////////////////////////////////////

/////////////////// User Panel Routes /////////////////////////


Route::get('/',"User\HomeController@index");
Route::get('home',"User\HomeController@index");
Route::get('view-auction-detail/{id}',"User\HomeController@view_auction_detail");


///////////////  Newsletter /////////////////

Route::get('newsletter', function () {
    // Your newsletter page logic here
    return view('User/newsletter'); // Replace 'newsletter' with the actual name of your newsletter view file
});

Route::match(['get', 'post'],'save-newsletter', "User\HomeController@save_newsletter")->name('newsletter');





///////////////  Contact
Route::get("contact",function(){
	return view("User/contact");
});
Route::get('all-aution',"User\HomeController@allAutions");
Route::post('save-contact',"User\HomeController@store_contact");
Route::get('delete/message/{id}',"User\HomeController@delete_contact");
Route::post('user-save-bid',"User\HomeController@store_bid");
Route::get('delete_cart/{id}',"User\HomeController@delete_bid");
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('about', function () {
    return view('User/about');
});



///////////////////////////// middleware ////////////////////


Route::middleware('checkUserRole')->group(function () {
    // Your admin panel routes go here

Route::get('admin', function () {
    return view('Admin/admin_layout');
});

Route::get('/admin-add-categorey', function () {
    return view('Admin/Categorey/add_categorey');
});


Route::post('admin-save-add-categorey','Admin\CategoreyController@store');

Route::get('admin-view-categories',"Admin\CategoreyController@index");


Route::get('admin_dashboard',"Admin\CategoreyController@dashboard")->name('admin.dashboard');

Route::get('/admin-add-user', function () {
    return view('Admin/User/add_user');
});
Route::get('/admin-edit-user/{id}','Admin\UserController@viewUser');



Route::post('admin-save-add-user','Admin\UserController@store');

Route::get('admin-view-users',"Admin\UserController@index");

Route::get('/admin-add-aution', function () {
    return view('Admin/Aution/add_aution');
});
Route::post('admin-save-add-aution','Admin\AutionController@store');

Route::get('admin-view-autions',"Admin\AutionController@index");


Route::get('/admin-view-bids',"Admin\BidController@index");

Route::get('admin-view-subcribers',"Admin\SubcriberController@index")->name('subscribe-index');

Route::get('/subscribers/{id}', "admin\SubcriberController@delete")->name('subscribers.delete');

Route::get('/admin-view-messages',"Admin\MessageController@index");

Route::get("admin-delete-user/{id}","Admin\UserController@deleteUser");

Route::get("admin-delete-categorey/{id}","Admin\CategoreyController@deleteCategorey");


Route::get("admin-delete-aution/{id}","Admin\AutionController@deleteAution");

Route::get("admin-delete-bid/{id}","Admin\BidController@deleteBid");
Route::get("admin-accept-bid/{id}","Admin\BidController@acceptBid");
Route::get("admin-cancel-bid/{id}","Admin\BidController@cancelBid");
Route::get("admin-view-product/{id}","Admin\BidController@viewBid");

route::get('logout',function(){
    return redirect()->route('logout');

});





});









Route::get('/pending_bid',function(){
return view('User.bids.pending_bid');
});
Route::get('/bids',[HomeController::class,'bids'])->name('bids');

// stripe route
