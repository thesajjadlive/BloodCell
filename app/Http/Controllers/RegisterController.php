<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Volunteer;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $data['title'] = 'Registartion';
        return view('front.register',$data);
    }

    public function volunteer_store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'blood_group'=>'required',
            'street_address'=>'required',
            'district'=>'required',
            'gender'=>'required',
        ]);

        $volunteer= $request->except('_token');


        //file upload
        if ($request->hasFile('file')){
            $file = $request->file('file');
            $file->move('images/volunteers/',$file->getClientOriginalName());
            $volunteer['file'] = 'images/volunteers/'.$file->getClientOriginalName();
        }



        $volunteer['created_by'] = 1;
        Volunteer::create($volunteer);
        session()->flash('message','Welcome, your registration has been successfully done! Please wait for approval.');
        return redirect()->route('front.register');
    }

    public function donor_store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'blood_group'=>'required',
            'district'=>'required',
            'gender'=>'required',
        ]);

        $donor= $request->except('_token');
        //$donor['created_by'] = auth();
        Donor::create($donor);
        session()->flash('message','Welcome, your registration has been successfully done!');
        return redirect()->route('front.register');
    }
}
