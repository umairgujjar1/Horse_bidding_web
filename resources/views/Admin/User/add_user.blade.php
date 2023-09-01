@extends('Admin/admin_layout')
@section('admin_content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Add User</h2>
            </div>
            <div class="box-content">



                <form action="{{ URL::to('admin-save-add-user') }}" method="post">
                    @csrf

                    <div class="control-group">
                        <label class="control-label" for="date01">Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="name"
                                value="@if (!empty($user)) {{ $user->name }} @endif" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Email</label>
                        <div class="controls">
                            <input type="email" class="input-xlarge" name="email"
                                value="@if (!empty($user)) {{ $user->email }} @endif" required>
                        </div>
                    </div>

                    <div class="control-group">
                        <select name="role" class="control-label" id="">
                            <option
                                @if (!empty($user)) {{ $user->role == 'user' }} selected @else value="user" @endif>
                                User</option>
                            <option
                                @if (!empty($user)) {{ $user->role == 'admin' }} selected @else value="admin" @endif>
                                Admin</option>
                        </select>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="date01">Password</label>
                        <div class="controls">
                            <input type="password" class="input-xlarge" name="password" required>
                        </div>
                    </div>

                    <input type="hidden" value="@if (!empty($user)){{ $user->id}}@endif"
                        name="user_id">
                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" class="input-xlarge btn btn-primary" name="member_name" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div><!--/span-->

    </div><!--/row-->
@endsection
