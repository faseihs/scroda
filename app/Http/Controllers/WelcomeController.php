<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class WelcomeController extends Controller
{
    //

    public function test(){
        return Response::view('welcome')->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    }

    public function index(){
        return view('welcome_new');
    }

    public function privacyPolicy(){
        return view('policy');
    }
}
