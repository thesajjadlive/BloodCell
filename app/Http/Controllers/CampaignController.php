<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Campaign List';
        $campaign = new Campaign();
        $campaign = $campaign->withTrashed();
        if($request->has('search') && $request->search != null){
            $campaign = $campaign->where('name','like','%'.$request->search.'%');
        }
        if($request->has('status') && $request->status != null){
            $campaign = $campaign->where('status',$request->status);
        }
        $campaign = $campaign->orderBy('id','DESC')->paginate(3);
        $data['campaigns'] = $campaign;

        if (isset($request->status) || $request->search) {
            $render['status'] = $request->status;
            $render['search'] = $request->search;
            $campaign = $campaign->appends($render);
        }

        $data['serial'] = managePagination($campaign);
        return view('admin.campaign.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create New Campaign';
        return view('admin.campaign.create',$data);
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
            'details'=>'required',
            'venue'=>'required',
            'date'=>'required',
            'status'=>'required',
        ]);

        $campaign= $request->except('_token');

        //file upload
        if ($request->hasFile('file')){
            $file = $request->file('file');
            $file->move('images/campaigns/',$file->getClientOriginalName());
            $campaign['file'] = 'images/campaigns/'.$file->getClientOriginalName();
        }

        $campaign['created_by'] = 1;
        Campaign::create($campaign);
        session()->flash('message','Campaign is Created Successfully!');
        return redirect()->route('campaign.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign)
    {
        $data['title'] = 'Create New Campaign';
        $data['campaign'] = $campaign;
        return view('admin.campaign.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        $request->validate([
            'name'=>'required',
            'details'=>'required',
            'venue'=>'required',
            'date'=>'required',
            'status'=>'required',
        ]);

        $campaign_data= $request->except('_token','_method');

        //file upload
        if ($request->hasFile('file')){
            $file = $request->file('file');
            $file->move('images/campaigns/',$file->getClientOriginalName());
            File::delete($campaign->file);
            $campaign_data['file'] = 'images/campaigns/'.$file->getClientOriginalName();
        }

        $campaign_data['updated_by'] = 1;
        $campaign->update($campaign_data);
        session()->flash('message','Campaign is Updated Successfully!');
        return redirect()->route('campaign.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        session()->flash('message','Campaign is Deleted Successfully!');
        return redirect()->route('campaign.index');
    }

    public function restore($id)
    {
        $campaign = Campaign::onlyTrashed()->findOrFail($id);
        $campaign->restore();
        session()->flash('message','Campaign is Restored Duccessfully!');
        return redirect()->route('campaign.index');
    }

    public function permanent_delete($id)
    {
        $campaign = Campaign::onlyTrashed()->findOrFail($id);
        $campaign->forceDelete();
        session()->flash('message','Camapaign has been permanently deleted!');
        return redirect()->route('campaign.index');
    }
}
