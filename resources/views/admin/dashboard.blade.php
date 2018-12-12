@extends('layouts.admin')



@section('content')

    <div class="row">
        <div class="col-md-12 table-responsive">
            @if(sizeof($requests)>0)
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Approve</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($requests as $request)
                        <tr>
                            <td>{{$request->user->name}}</td>
                            <td><a href="#"></a></td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>

            @else

                <div class="alert alert-warning">
                    No Requests
                </div>

            @endif
        </div>
    </div>
@endsection