<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Info;
use App\Models\Phone;
use App\Models\Address;

class HomeController extends Controller
{
    public function showHome()
    {
        
     
        return view('homepage.home');
    }




    /**
     * Get Quick Search
     *
     * @return Array
     */

    public function quickSearch(Request $request)
    {
        # code...
    }





   
    public function showInfo()
    {  
        $info = Info::where('id','>',0)->first();

        return view('homepage.info',compact('info'));
    }

}
