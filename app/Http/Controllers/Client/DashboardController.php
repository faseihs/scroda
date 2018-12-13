<?php

namespace App\Http\Controllers\Client;

use App\Model\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('client.dashboard');
    }


    public function addressRequest(){
        if(Auth::user()->addressRequest){
            return redirect('/client/dashboard')->with('primary','Address Already Requested');
        }

        if(Auth::user()->address){
            return redirect('/client/dashboard')->with('primary','Address Already Assigned');
        }


        try{
            DB::beginTransaction();
            $address= new Address();
            $address->user_id=Auth::user()->id;
            $address->status=0;
            $address->save();
            DB::commit();
            return redirect('/client/dashboard')->with('success','Address Requested');
        }
        catch(\Exception $e){
            DB::rollback();
            dd($e);
        }
    }


    public function subscribe(){
        $user=Auth::user();
        $user->subscribed=1;
        $user->save();
        return redirect('/client/dashboard')->with('success','Subscribed');
    }

    public function unsubscribe(){
        $user=Auth::user();
        $user->subscribed=0;
        $user->save();
        return redirect('/client/dashboard')->with('success','Unsubscribed');
    }
}
