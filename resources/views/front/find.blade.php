@extends('layouts.frontend.master')
@section('content')
    <!--  PAGE HEADING -->

    <section class="page-header" data-stellar-background-ratio="1.2">

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

    <section class="section-content-block section-404">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 message-container-404">

                    <p class="message-text-404">
                        Please check to make sure you've typed correctly.
                    </p> <!-- end 404-message-text  -->

                    <div class="search-form-404">
                        <form action="#" id="search-form" class="search-form" method="get">

                            <div class="input-group">
                                <span class="input-group-addon" ><i class="fa fa-search"></i></span>
                                <select class="form-control" name="bloodGroup" style="width:15%; height: 42px; border: 1px; box-shadow: none; border: 1px solid #EEE;">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                                <input style="width:85%; display:inline;" type="text" class="form-control" placeholder="where do you need?. e.g. dhaka">
                            </div>

                            <input type="hidden" value="submit" />

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




                </div> <!--  end col-sm-12  -->

            </div> <!-- end row  -->

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