@extends('master')
@section('content')
<div class="row justify-content-center mt-5">
        <div class="card shadow-sm p-0 col-sm-5">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    JENGA VISITORS
                    <h8>Add User</h8>
                </div>
            </div>
            <div class="card-body">
                <form action="/add-user" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                        <span style="color: tomato">@error('name'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                        <span style="color: tomato">@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" >
                        <span style="color: tomato">@error('password'){{$message}}@enderror</span>
                    </div>
                    <div>
                        <label class="radio-inline"><input type="radio" name="role" value="admin" checked>Admin</label>
                        <label class="radio-inline ml-5"><input type="radio" name="role" value="superadmin">Super Admin</label>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
@endsection

