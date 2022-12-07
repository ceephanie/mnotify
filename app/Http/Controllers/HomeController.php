<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Group;
use App\Campaing;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function pieChart()
    {
        return view ('pie');
    }

    public function showdata(){
        $showGroup=new Group;
        $showContact=new Contact;
        $showCampaing= new Campaing;
        $datafromCampaing=strval($showCampaing::count());
        $datafromGroups=strval($showGroup::count());
        $datafromContacts=strval($showContact::count());
        // dd( $datafromGroups);
        return view('home',['groupCount'=>$datafromGroups, 'contactCount'=>$datafromContacts,'campaingCount'=>$datafromCampaing]);
    }



}
