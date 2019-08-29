<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $data['title']= 'Home';
        return view('front.home',$data);
    }

    public function about()
    {
        $data['title']= 'About Us';
        return view('front.about',$data);
    }

    public function find()
    {
        $data['title']= 'Find Donor';
        return view('front.find',$data);
    }



}
