<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Phone;
use App\Http\Requests\PhoneRequest;
use DB;
class HomeController extends Controller
{
    public function showHomeView()
    {
          return view('vendor.adminlte.dashboard');
    }


    //address

    public function showAddressView()
    {

        $listAddress = Address::orderBy('name' ,'ASC')->get();
        $action = 0;
        return view('vendor.adminlte.config.address', compact('listAddress','action'));
    }

    public function showCreateAddressView()
    {

        $listAddress = Address::orderBy('name' ,'ASC')->get();
        $action = 1;
        return view('vendor.adminlte.config.address', compact('listAddress','action'));
    }


    public function showAddress($id)
    {   
        try {
            $address = Address::findOrFail($id);
            $action = 2;
            $listAddress = Address::orderBy('name' ,'ASC')->get();
            return view('vendor.adminlte.config.address',compact('listAddress','address','action'));
        } catch (Exception $e) {
             return  redirect()->back();
        }
        
    }

    public function createAddress(PhoneRequest $request)
    {
       try {
          DB::beginTransaction();
          $data = $request->except('_method','_token');
          Address::create($data);
          DB::commit();
          return redirect()->route('address');
        } catch (\Exception $e) {
          DB::rollback();
          return  redirect()->back();
        }
    }

    public function updateAddress(PhoneRequest $request)
    {
         try {
          DB::beginTransaction();
          $address = Address::findOrFail($request->id);
          $address->name = $request->name;
          $address->full = $request->full;
          $address->save();
          DB::commit();
          return redirect()->route('address');
        } catch (\Exception $e) {
          DB::rollback();
          return  redirect()->back();
        }
    }


    //phone

    public function showPhoneView()
    {
        $listPhone = Phone::orderBy('name' ,'ASC')->get();
        $action = 0;
        return view('vendor.adminlte.config.phone',compact('action','listPhone'));
    }

    public function showCreatePhoneView()
    {
        $listPhone = Phone::orderBy('name' ,'ASC')->get();
        $action = 1;
        return view('vendor.adminlte.config.phone',compact('action','listPhone'));
    }

    public function showPhone($id)
    {
        try {
            $phone = Phone::findOrFail($id);
            $action = 2;
            $listPhone = Phone::orderBy('name' ,'ASC')->get();
            return view('vendor.adminlte.config.phone',compact('listPhone','phone','action'));
        } catch (Exception $e) {
             return  redirect()->back();
        } 
    }

    public function createPhone(Request $request)
    {
         try {
          DB::beginTransaction();
          $data = $request->except('_method','_token');
          Phone::create($data);
          DB::commit();
          return redirect()->route('phone');
        } catch (\Exception $e) {
          DB::rollback();
          return  redirect()->back();
        }
    }

    public function updatePhone(Request $request)
    {
         try {
          DB::beginTransaction();
          $phone = Phone::findOrFail($request->id);
          $phone->name = $request->name;
          $phone->phone = $request->phone;
          $phone->save();
          DB::commit();
          return redirect()->route('phone');
        } catch (\Exception $e) {
          DB::rollback();
          return  redirect()->back();
        }
    }
}
