@extends('master')
@section('content')
    <div class=" custom-product">
        <div class="col-sm-10 mt-4">
            <div >
                <div class="trending-wrapper">
                    <h6>VISITORS</h6>
                    <table class="table table-striped mt-3">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Office</th>
                            <th>Checkin</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($visitors as $visitor)
                            <tr style="height: 10px">
                                <td>{{$visitor->first_name}} {{$visitor->last_name}}</td>
                                <td>{{$visitor->phone}}</td>
                                <td>{{$visitor->office}}</td>
                                <td>{{$visitor->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
