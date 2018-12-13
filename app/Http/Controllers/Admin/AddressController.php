<?php

namespace App\Http\Controllers\Admin;

use App\Model\Address;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    //

    public function requests(){
        return view('admin.addresses');
    }


    public function assignAddress(Request $request){
        $this->validate($request,[
           'address_id'=>'required',
           'address'=>'required'
        ]);

        $adddress=Address::findOrFail($request->address_id);
        try{
            DB::beginTransaction();
            $adddress->status=1;
            $adddress->name=$request->address;
            $adddress->save();
            DB::commit();

            return redirect('/admin/dashboard')->with('success','Address Assigned');
        }
        catch(\Exception $e){
            DB::rollback();
            dd($e);
        }
    }
}
