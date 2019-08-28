@extends('layouts.backend.master')

@section('content')


            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Employee</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{ route('volunteer.store') }}" method="post" enctype="multipart/form-data">

                        @include('admin.volunteer._form')

                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Create Volunteer</button>
                        </div>

                    </form>
                </div>
            </div>






@endsection