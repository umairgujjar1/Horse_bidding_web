@extends('/Admin/admin_layout')
@section('admin_content')
    <div class="row-fluid sortable">

        {{-- <div class="box span12"> --}}


            <div class="d-flex justify-content-center container mt-5">
                <a href="{{url('admin-view-bids')}}" class="btn rounded btn-primary" style="border-radius:18px">Back</a>
                <div class="card p-3 bg-white"><i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2"><img src="{{asset('images/'.$selected_auction->image)}}" width="300" style="border-radius: 30px;box-shadow:0px 3px 14px 4px black;margin-bottom:10px">
                        <div>
                            <h4 class="mt-5">{{$selected_auction->title}}</h4>
                            <p class="mt-0 text-black-50">{{$selected_auction->status}}</p>
                        </div>
                    </div>
                    <div class="stats mt-2 text-center">
                        <div class="d-flex justify-content-between p-price"><span>Category  ::</span><span> {{$selected_auction->categorey_name}}</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Type ::</span><span> {{$selected_auction->type}}</span></div>
                        {{-- <div class="d-flex justify-content-between p-price"><span>Price ::</span><span> ${{$selected_auction->price}}</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Bid Price</span><span>$7,197.00</span></div>
                </div> --}}
            </div>
    {{-- </div> --}}
    </div>
@endsection
