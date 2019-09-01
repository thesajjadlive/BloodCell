@extends('layouts.frontend.master')
@section('content')
    <!--  PAGE HEADING -->

    <section class="page-header" style="height:200px; padding-top: 50px;" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        Find Donor
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="{{ route('home') }}">Home</a> /Find Donor
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  MAIN CONTENT  -->

    <section class="section-content-block section-404" style="padding-top: 20px;">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 message-container-404">

                    <p class="message-text-404">
                        Please check to make sure you've typed correctly.
                    </p> <!-- end 404-message-text  -->

                    <div class="search-form-404">
                        <form action=" " id="search-form" class="search-form" method="get">

                            <div class="input-group">
                                <span class="input-group-addon" ><i class="fa fa-search"></i></span>
                                <select class="form-control" name="blood_group" style="width:20%; height: 42px; border: 1px; box-shadow: none; border: 1px solid #EEE;">
                                    <option @if(request()->blood_group == 'A+') selected @endif value="A+">A+</option>
                                    <option @if(request()->blood_group == 'A-') selected @endif value="A-">A-</option>
                                    <option @if(request()->blood_group == 'B+') selected @endif value="B+">B+</option>
                                    <option @if(request()->blood_group == 'B-') selected @endif value="B-">B-</option>
                                    <option @if(request()->blood_group == 'O+') selected @endif value="O+">O+</option>
                                    <option @if(request()->blood_group == 'O-') selected @endif value="O-">O-</option>
                                    <option @if(request()->blood_group == 'AB+') selected @endif value="AB+">AB+</option>
                                    <option @if(request()->blood_group == 'AB-') selected @endif value="AB-">AB-</option>
                                </select>
                                <input style="width:80%; display:inline;" type="text" value="{{ request()->search }}" name="search" class="form-control" placeholder="Where do you need?. e.g. Dhaka">
                            </div>

                            <input type="hidden" name="find" value="submit" />

                        </form> <!-- end #search-form  -->
                    </div> <!-- end .search-form-404  -->

                    <div class="message-text-404" >
                        <h5 style="text-align: center;" >
                            <a href="tel:+880-1219-123456" style="text-decoration: none; color:#627a75">
                                <i class="fa fa-phone"></i>
                                +880-1219-123456
                            </a>
                        </h5>
                    </div>
                </div>

                    <h5>Recently Registered Donors :</h5>


                @if(isset($_GET['find']))
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                <tr>
                                    {{--<th>SL No.</th>--}}
                                    <th>Name</th>
                                    <th>Bood Group</th>
                                    <th>District</th>
                                    <th>Email</th>
                                    <th>Phone</th>

                                    {{--<th class="text-right">Action</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($donors as $index=>$donor)

                                        <tr>
                                            {{--<td>{{ $serial++ }}</td>--}}
                                            <td>
                                                {{ $donor->name }}
                                            </td>
                                            <td>{{ $donor->blood_group }}</td>
                                            <td>{{ $donor->district }}</td>
                                            <td>
                                                <a href="mailto:{{ $donor->email }}" style="text-decoration: none; color:black">
                                                    {{ $donor->email }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="tel:+88{{ $donor->phone }}" style="text-decoration: none; color:black">
                                                    Call Now !
                                                </a>
                                            </td>

                                        </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        {{ $donors->render() }}
                    </div>
                @endif






                @if(!isset($_GET['find']))
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                <tr>
                                    {{--<th>SL No.</th>--}}
                                    <th>Name</th>
                                    <th>Bood Group</th>
                                    <th>District</th>
                                    <th>Email</th>
                                    <th>Phone</th>

                                    {{--<th class="text-right">Action</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($donors as $index=>$donor)
                                    @if($index <= 4)
                                        <tr>
                                            {{--<td>{{ $serial++ }}</td>--}}
                                            <td>
                                                {{ $donor->name }}
                                            </td>
                                            <td>{{ $donor->blood_group }}</td>
                                            <td>{{ $donor->district }}</td>
                                            <td>
                                                <a href="mailto:{{ $donor->email }}" style="text-decoration: none; color:black">
                                                    {{ $donor->email }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="tel:+88{{ $donor->phone }}" style="text-decoration: none; color:black">
                                                    Call Now !
                                                </a>
                                            </td>

                                        </tr>
                                    @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif


                </div> <!--  end col-sm-12  -->

            </div>

         <!-- end row  -->

        </div> <!--  end container -->

    </section> <!-- end .main-content  -->

@endsection




@push('library-css')

@endpush



@push('custom-css')

@endpush



@push('library-js')

@endpush



@push('custom-js')

@endpush