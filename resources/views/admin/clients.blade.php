@extends('layouts.admin')



@section('content')
    <div class="row">
        <div class="col-md-12 table-responsive">
            @if(sizeof($clients)>0)
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subscribed</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <td>{{$client->name}}</td>
                            <td>{{$client->email}}</td>
                            <td>{!! $client->subscribed==0?'<i class="ti ti-close"></i>' :'<i class="ti ti-check"></i>' !!}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>

            @else

                <div class="alert alert-warning">
                    No Clients
                </div>

            @endif
        </div>
    </div>

@endsection