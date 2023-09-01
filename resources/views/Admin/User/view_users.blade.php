@extends('/Admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable">

        <div class="box span12">
 <a href="{{url('admin-add-user')}}"><button class="btn btn-primary" style="margin: 5px;width:130px">Add New</button></a>
          <div class="box-header" data-original-title>

            <h2><i class="halflings-icon user"></i><span class="break"></span>All Users</h2>
          </div>

          <div class="box-content">
            @include('Admin.message')

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Joining Date</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                    @foreach($select as $value)

                      <tr>
                          <td>{{$value->id}}</td>
                          <td>{{$value->name}}</td>
                          <td>{{$value->email}}</td>
                          <td>{{$value->created_at}}</td>
                          <td>{{$value->role}}</td>
                          <td><a href="admin-edit-user/{{$value->id}}" class="btn btn-success">Edit</a>
                            <a href="admin-delete-user/{{$value->id}}" class="btn btn-danger">Delete</a></td>
                      </tr>

                    @endforeach

              </tbody>


            </table>
          </div>
        </div><!--/span-->

      </div><!--/row-->




@endsection
