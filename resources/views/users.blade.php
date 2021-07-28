@extends('master')
@section('content')
    <div class=" custom-product">
        <div class="col-sm-10 mt-4">
            <div >
                <div class="trending-wrapper">
                    <div class="d-flex justify-content-between">
                        <h6>USERS</h6>
                        <a href="/add-user" class="btn btn-info">Add User</a>
                    </div>
                    <table class="table table-striped mt-3">
                    <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr style="height: 10px">
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>

                            <td>
                                @if($user->role != 'superadmin')
                                    <a class="btn btn-sm" href="#removeUserModal" data-toggle="modal" data-target="#removeUserModal"><i class="fa fa-trash"></i></a>
                                @endif
                            </td>
                        </tr>
                        @include('modals/remove-user-modal')
                    @endforeach
                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
