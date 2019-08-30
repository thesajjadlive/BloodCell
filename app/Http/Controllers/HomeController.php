<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

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

    public function find(Request $request)
    {
        $data['title']= 'Find Donor';

        $donor = new Donor();
        $donor = $donor->withTrashed();
        if($request->has('search') && $request->search != null){
            $donor = $donor->where('district','like','%'.$request->search.'%');
        }
        if($request->has('blood_group') && $request->blood_group != null){
            $donor = $donor->where('blood_group',$request->blood_group);
        }
        $donor = $donor->orderBy('id','DESC')->paginate(3);
        $data['donors'] = $donor;

        if (isset($request->blood_group) || $request->search) {
            $render['blood_group'] = $request->blood_group;
            $render['search'] = $request->search;
            $volunteer = $donor->appends($render);
        }

        $data['serial'] = managePagination($donor);
        
        return view('front.find',$data);
    }



}
