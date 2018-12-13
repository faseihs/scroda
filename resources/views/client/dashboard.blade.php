@extends('layouts.client')



@section('content')
    @include('includes.flash')
    <div class="row">

        @if(Auth::user()->subscribed==0)
        <div class="col-md-12 text-center">
            <a class="btn btn-primary btn-block" href="/client/subscribe"><i class="ti ti-check"></i> Subscribe To Notifications </a>
        </div>

            @else

            <div class="col-md-12 text-center">
                <a class="btn btn-danger btn-block" href="/client/unsubscribe"><i class="ti ti-face-sad"></i> Unsubscribe To Notifications </a>
            </div>


        @endif



        @if(!Auth::user()->address && !Auth::user()->addressRequest)

        <div style="margin-top: 16px;" class="col-md-12 text-center">
            <a class="btn btn-secondary btn-block" href="/client/address-request"><i class="ti ti-envelope"></i> Request for Address </a>
        </div>

        @endif

        @if(Auth::user()->address)
            <div style="margin-top: 16px;" class="col-md-12">
            <div class="alert alert-primary">
                <strong>Address :</strong> {{Auth::user()->address->name}}
            </div>
            </div>
        @endif


    </div>

@endsection