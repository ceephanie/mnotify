<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaing;

class CampaingController extends Controller
{
    public function getData ()
    {
        $data = Campaing::all();
        
        //  dd($data);
     return view('campaing',["campaings"=>$data]);
    }
    public function showdata(Request $request){
        $showCampaing=new Campaing;
        $data=$showCampaing::all();
        //   dd( $data);
         return view('campaing',['campaings'=>$data ]);
    }

    
}
