@extends('/Admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable">

        <div class="box span12">
 <a href="{{url('admin-add-aution')}}"><button class="btn btn-primary" style="margin: 5px;width:130px">Add New</button></a>
          <div class="box-header" data-original-title>

            <h2><i class="halflings-icon user"></i><span class="break"></span>All Autions</h2>
          </div>

          <div class="box-content">

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Categorey</th>
                  <th>Type</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                    @foreach($select as $value)

                      <tr >
                          <td>{{$value->id}}</td>
                          <td>{{$value->title}}</td>
                          <td>{{$value->categorey_name}}</td>
                          <td>{{$value->type}}</td>
                          <td>{{$value->price}}</td>
                          <td>
                            <img src="{{asset('images/'.$value->image)}}" alt="" width="80px" style="border-radius: 10px">
                          </td>
                          <td>{{$value->start_date}}</td>
                          <td>{{$value->end_data}}</td>
                          <td>{{$value->status}}</td>
                          <td><a href="admin-delete-aution/{{$value->id}}" class="btn btn-danger">Delete</a></td>
                      </tr>

                    @endforeach



              </tbody>


            </table>
          </div>
        </div><!--/span-->

      </div><!--/row-->




@endsection
