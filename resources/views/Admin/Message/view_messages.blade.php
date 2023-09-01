@extends('/Admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable">

        <div class="box span12">
<!--  <a href="{{url('#')}}"><button class="btn btn-primary" style="margin: 5px;width:130px">Add New</button></a> -->
          <div class="box-header" data-original-title>

            <h2><i class="halflings-icon user"></i><span class="break"></span>All Messages</h2>
          </div>

          <div class="box-content">

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  {{-- <th>Phone</th> --}}
                  <th>Message</th>
                  <th>Message Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              @if(!empty($select))
                    @foreach($select as $value)

                      <tr>
                          <td>{{$value->id}}</td>
                          <td>{{$value->name}}</td>
                          <td>{{$value->email}}</td>
                          {{-- <td>{{$value->phone}}</td> --}}
                          <td>{{$value->message}}</td>
                          <td>{{$value->date}}</td>
                          <td><a class="btn btn-danger" href="{{ URL ::to('delete/message')}}/{{$value->id}} ">Delete</a></td>
                      </tr>

                     @endforeach
                  @endif


              <tbody>


              </tbody>


            </table>
          </div>
        </div><!--/span-->

      </div><!--/row-->




@endsection
