<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Info;
class InfoController extends Controller
{
    public function showView()
    {
        $info = Info::where('id','>',0)->first();

        return view('vendor.adminlte.info.info',compact('info'));

    }
    public function editInfo()
    {
        $info = Info::where('id','>',0)->first();
        return view('vendor.adminlte.info.update',compact('info'));
    }

    public function updateInfo(Request $request)
    {
        try {
            $data = $request->except('_method','_token');

            Info::where('id',$data['id'])->update($data);

           return redirect()->route('info');

        } catch (\Exception $e) {
            throw $e;
        }
   
    }
}
