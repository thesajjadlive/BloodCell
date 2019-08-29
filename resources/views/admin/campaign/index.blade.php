@extends('layouts.backend.master')

@section('content')



        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">{{ $title }}</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{ route('campaign.create') }}" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Campaign</a>
            </div>
        </div>


            <form class="row filter-row">

                <div class="col-sm-6 col-md-4">
                    <div class="form-group form-focus">
                        <label class="focus-label">Search by Campaign Name</label>
                        <input value="{{ request()->search }}" name="search" type="text" class="form-control floating">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group form-focus select-focus">
                        <label class="focus-label">Search by Status</label>
                        <select name="status" class="select floating">
                            <option value="">Select Status</option>
                            <option @if(request()->status == 'Active') selected @endif value="Active">Active</option>
                            <option @if(request()->status == 'Inactive') selected @endif value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <button type="submit" class="btn btn-success btn-block"> Search </button>
                </div>
            </form>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Deatils</th>
                            <th>Venue</th>
                            <th>Organizer</th>
                            <th>Image</th>
                            <th >Campaigning Date</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($campaigns as $campaign)
                        <tr>
                            <td>{{ $serial++ }}</td>
                            <td>
                                <h2>{{ $campaign->name }}</h2>
                            </td>
                            <td ><p style="max-height: 100px; max-width:100%; overflow: scroll; ">{{ $campaign->details }}</p></td>
                            <td>{{ $campaign->venue }}</td>
                            <td>{{ $campaign->organizer }}</td>
                            <td><img style="height: 100px; width: 100px" src="{{ asset($campaign->file) }}" alt=""></td>
                            <td>{{ $campaign->date }}</td>
                            <td>
                                <span class="custom-badge {{ $campaign->status == 'Active'?'status-green':'status-red' }} ">{{ $campaign->status }}</span>
                            </td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        @if($campaign->deleted_at == null)
                                        <a class="dropdown-item" href="{{ route('campaign.edit', $campaign->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <form action="{{ route('campaign.destroy',$campaign->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" href="#" onclick="return confirm('Are you confirm to delete this Campaign?')" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</button>

                                        </form>

                                            @else
                                            <form action="{{ route('campaign.restore',$campaign->id) }}" method="post">
                                                @csrf
                                                <button class="dropdown-item" href="#" onclick="return confirm('Are you confirm to restore this Campaign?')" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Restore</button>

                                            </form>

                                            <form action="{{ route('campaign.permanent_delete',$campaign->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" href="#" onclick="return confirm('Are you confirm to permanently delete this Campaign?')" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Permanent Delete</button>

                                            </form>

                                            @endif

                                    </div>
                                </div>
                            </td>
                        </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {{ $campaigns->render() }}
            </div>
        </div>



@endsection