<?php

namespace App\Http\Controllers;

use App\Volunteer;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Volunteer List';
        $volunteer = new Volunteer();
        $volunteer = $volunteer->withTrashed();
        if($request->has('search') && $request->search != null){
            $volunteer = $volunteer->where('name','like','%'.$request->search.'%');
        }
        if($request->has('status') && $request->status != null){
            $volunteer = $volunteer->where('status',$request->status);
        }
        $volunteer = $volunteer->orderBy('id','DESC')->paginate(3);
        $data['volunteers'] = $volunteer;

        if (isset($request->status) || $request->search) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $volunteer = $volunteer->appends($render);
        }

        $data['serial'] = managePagination($volunteer);
        return view('admin.volunteer.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create New Volunteer';
        return view('admin.volunteer.create',$data);
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
            'street_address'=>'required',
            'district'=>'required',
            'gender'=>'required',
            'status'=>'required',
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
        session()->flash('message','Volunteer is Created Successfully!');
        return redirect()->route('volunteer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
        $data['title'] = 'Create New Volunteer';
        $data['volunteer'] = $volunteer;
        return view('admin.volunteer.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'blood_group'=>'required',
            'street_address'=>'required',
            'district'=>'required',
            'gender'=>'required',
            'status'=>'required',
        ]);

        $volunteer_data= $request->except('_token','_method');

        //file upload
        if ($request->hasFile('file')){
            $file = $request->file('file');
            $file->move('images/volunteers/',$file->getClientOriginalName());
            File::delete($volunteer->file);
            $volunteer_data['file'] = 'images/volunteers/'.$file->getClientOriginalName();
        }
        $volunteer_data['updated_by'] = 1;
        $volunteer->update($volunteer_data);
        session()->flash('message','Volunteer is Updated Successfully!');
        return redirect()->route('volunteer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        $volunteer->delete();
        session()->flash('message','Volunteer is Deleted Successfully!');
        return redirect()->route('volunteer.index');
    }

    public function restore($id)
    {
        $volunteer = Volunteer::onlyTrashed()->findOrFail($id);
        $volunteer->restore();
        session()->flash('message','Volunteer is Restored Duccessfully!');
        return redirect()->route('volunteer.index');
    }

    public function permanent_delete($id)
    {
        $volunteer = Volunteer::onlyTrashed()->findOrFail($id);
        $volunteer->forceDelete();
        session()->flash('message','Volunteer has been permanently deleted!');
        return redirect()->route('volunteer.index');
    }
}
