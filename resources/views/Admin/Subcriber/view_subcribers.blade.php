@extends('/Admin/admin_layout')
@section('admin_content')

<div class="row-fluid sortable"> 

        <div class="box span12">
<!--  <a href="{{url('#')}}"><button class="btn btn-primary" style="margin: 5px;width:130px">Add New</button></a> -->
          <div class="box-header" data-original-title>

            <h2><i class="halflings-icon user"></i><span class="break"></span>All Subcribers</h2>
          </div>

          <div class="box-content">

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Email</th>
                  <th>subscriber date</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @if(!empty($select))
                    @foreach($select as $value)

                      <tr>
                          <td>{{$value->id}}</td>
                          <td>{{$value->email}}</td>
                          <td>{{$value->subscribed_date}}</td>
                          <td><a class="btn btn-danger" href="{{ route('subscribers.delete', ['id' => $value->id]) }}">Delete</a></td>
                      </tr>

                     @endforeach
                  @endif


                
              </tbody>
                
              
            </table>            
          </div>
        </div><!--/span-->
      
      </div><!--/row-->

    
    

@endsection