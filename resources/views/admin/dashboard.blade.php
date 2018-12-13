@extends('layouts.admin')



@section('content')

    <div class="row">
        @include('includes.flash')
        @include('includes.errors')
        <div class="col-md-12 table-responsive">
            @if(sizeof($requests)>0)
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Approve</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($requests as $index=> $request)
                        <tr>
                            <td>{{$request->user->name}}</td>

                            <td>

                                <form id="logout-form{{$index}}" action="/admin/assign-address" method="POST" >
                                    @csrf
                                    <input placeholder="Enter Address (Without Spaces)" required pattern="[^' ']+" name="address" class="form-control" type="text">
                                    <input name="address_id" value="{{$request->id}}" type="hidden">
                                </form>
                            </td>

                            <td>
                                <a href="/admin/assign-address" class="btn btn-primary btn-sm"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form{{$index}}').submit();">
                                    <i class="ti ti-check"></i>
                                </a>
                            </td>
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