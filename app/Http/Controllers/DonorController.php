<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Donor List';
        $donor = new Donor();
        $donor = $donor->withTrashed();
        if($request->has('search') && $request->search != null){
            $donor = $donor->where('name','like','%'.$request->search.'%');
        }
        if($request->has('status') && $request->status != null){
            $donor = $donor->where('status',$request->status);
        }
        $donor = $donor->orderBy('id','DESC')->paginate(5);
        $data['donors'] = $donor;

        if (isset($request->status) || $request->search) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $donor = $donor->appends($render);
        }

        $data['serial'] = managePagination($donor);
        return view('admin.donor.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create New Donor';
        return view('admin.donor.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'blood_group'=>'required',
            'district'=>'required',
            'gender'=>'required',
            'status'=>'required',
        ]);

        $donor= $request->except('_token');


        /*//file upload
        if ($request->hasFile('file')){
            $file = $request->file('file');
            $file->move('images/donors/',$file->getClientOriginalName());
            $donor['file'] = 'images/donors/'.$file->getClientOriginalName();
        }*/



        $donor['created_by'] = 1;
        Donor::create($donor);
        session()->flash('message','Donor is Created Successfully!');
        return redirect()->route('donor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        $donor->delete();
        session()->flash('message','Donor is Deleted Successfully!');
        return redirect()->route('donor.index');
    }

    public function restore($id)
    {
        $donor = Donor::onlyTrashed()->findOrFail($id);
        $donor->restore();
        session()->flash('message','Donor is Restored Duccessfully!');
        return redirect()->route('donor.index');
    }

    public function permanent_delete($id)
    {
        $donor = Donor::onlyTrashed()->findOrFail($id);
        $donor->forceDelete();
        session()->flash('message','Donor has been permanently deleted!');
        return redirect()->route('donor.index');
    }
}
