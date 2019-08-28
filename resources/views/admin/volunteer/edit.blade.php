@extends('layouts.backend.master')

@section('content')


            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Employee</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('campaign.update',$campaign->id) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @include('admin.campaign._form')\

                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Update Campaign</button>
                        </div>

                    </form>
                </div>
            </div>






@endsection