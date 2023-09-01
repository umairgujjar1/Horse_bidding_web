@extends('/Admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable"> 

        <div class="box span12">
 <a href="{{url('admin-add-categorey')}}"><button class="btn btn-primary" style="margin: 5px;width:130px">Add New</button></a>
          <div class="box-header" data-original-title>

            <h2><i class="halflings-icon user"></i><span class="break"></span>All Categories</h2>
          </div>

          <div class="box-content">

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Category Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
        
                    @foreach($select as $value)

                      <tr>
                          <td>{{$value->id}}</td>
                          <td>{{$value->categorey_name}}</td>
                          <td>{{$value->status}}</td>
                          <td><a href="admin-delete-categorey/{{$value->id}}" class="btn btn-danger">Delete</a></td>
                      </tr>

                     @endforeach
                  

                
              </tbody>
                
              
            </table>            
          </div>
        </div><!--/span-->
      
      </div><!--/row-->

    
    

@endsection