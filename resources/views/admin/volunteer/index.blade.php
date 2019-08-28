@extends('layouts.backend.master')

@section('content')



        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">{{ $title }}</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{ route('volunteer.create') }}" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add volunteer</a>
            </div>
        </div>


            <form class="row filter-row">

                <div class="col-sm-6 col-md-4">
                    <div class="form-group form-focus">
                        <label class="focus-label">Search by volunteer Name</label>
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
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Bood Group</th>
                            <th>Streed Address</th>
                            <th>District</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($volunteers as $volunteer)
                        <tr>
                            <td>{{ $serial++ }}</td>
                            <td>
                                <img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle" alt=""> <h2>{{ $volunteer->name }}</h2>
                            </td>
                            <
                            <td width="30%">{{ $volunteer->email }}</td>
                            <td>{{ $volunteer->phone }}</td>
                            <td>{{ $volunteer->blood_group }}</td>
                            <td>{{ $volunteer->street_address }}</td>
                            <td>{{ $volunteer->district }}</td>
                            <td>{{ $volunteer->gender }}</td>
                            <td>
                                <span class="custom-badge {{ $volunteer->status == 'Active'?'status-green':'status-red' }} ">{{ $volunteer->status }}</span>
                            </td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        @if($volunteer->deleted_at == null)
                                        <a class="dropdown-item" href="{{ route('volunteer.edit', $volunteer->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <form action="{{ route('volunteer.destroy',$volunteer->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" href="#" onclick="return confirm('Are you confirm to delete this volunteer?')" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</button>

                                        </form>

                                            @else
                                            <form action="{{ route('volunteer.restore',$volunteer->id) }}" method="post">
                                                @csrf
                                                <button class="dropdown-item" href="#" onclick="return confirm('Are you confirm to restore this volunteer?')" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Restore</button>

                                            </form>

                                            <form action="{{ route('volunteer.permanent_delete',$volunteer->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="dropdown-item" href="#" onclick="return confirm('Are you confirm to permanently delete this volunteer?')" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Permanent Delete</button>

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
                {{ $volunteers->render() }}
            </div>
        </div>



@endsection