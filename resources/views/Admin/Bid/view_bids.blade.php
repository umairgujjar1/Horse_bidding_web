@extends('/Admin/admin_layout')
@section('admin_content')
    <div class="row-fluid sortable">

        <div class="box span12">
            <!--  <a href="{{ url('#') }}"><button class="btn btn-primary" style="margin: 5px;width:130px">Add New</button></a> -->
            <div class="box-header" data-original-title>

                <h2><i class="halflings-icon user"></i><span class="break"></span>All Bids</h2>
            </div>

            <div class="box-content">

                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            {{-- <th>Aution ID</th> --}}

                            <th>product Name</th>
                            <th>Customer ID</th>
                            <th>Bid Amount</th>
                            <th>Bid Date</th>
                            <th>Bid Status</th>
                            <th>Action</th>
                            <th>Remove</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($select as $value)
                            <tr>
                                <td>{{ $value->id }}</td>
                                {{-- <td>{{$value->aution_id}}</td> --}}
                                <td>{{ $value->horse_name }}
                                    <a href="admin-view-product/{{ $value->aution_id }}"><p style="font-width:10px;color:rgb(119, 236, 98) ">View horse</p>
                                    </a></td>
                                <td>{{ $value->user->name }}</td>
                                <td>${{ $value->bid_amount }}</td>
                                <td>{{ $value->bid_date }}</td>
                                <td>
                                    @if ($value->status == "approved")
                                    <p style="background-color: green;width:70px;color:white;border-radius:5px">Approved</p>

                                    @else
                                    <p style="background-color: rgb(190, 72, 51);width:70px;color:white;border-radius:5px;height:20px">Canceled</p>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-success" href="admin-accept-bid/{{ $value->id }}">Accept</a>
                                    <a class="btn btn-primary" href="admin-cancel-bid/{{ $value->id }}">Cancel</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="admin-delete-bid/{{ $value->id }}">Delete</a>
                                </td>

                            </tr>
                        @endforeach




                    </tbody>


                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection
