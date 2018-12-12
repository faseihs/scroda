<?php

namespace App\Http\Controllers\Admin;

use App\Model\Address;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //

    public function index(){
        $requests=Address::where('status',0)->get();
        return view('admin.dashboard',compact('requests'));
    }

    //Clients Get Function
    public function clients(){
        $clients=User::where('role_id',2)->get();
        return view('admin.clients',compact('clients'));
    }



}
