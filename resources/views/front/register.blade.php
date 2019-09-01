@extends('layouts.frontend.master')
@section('content')
    <section class="page-header" style="height:200px; padding-top: 50px;" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        Registration
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="{{ route('home') }}">Home</a> / Registration
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  MAIN CONTENT  -->

    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row">

                <div class="col-sm-2"></div>
                <div class="col-sm-8 wow fadeInLeft">

                    <div class="contact-form-block">

                        @include('layouts.backend._messages')

                        <h2 class="contact-title" >Register with us</h2>

                        <div class="tab">
                            <button class="tablinks pull-right" onclick="openForm(event, 'Volunteer')">As Volunteer</button>
                            <button class="tablinks pull-right" onclick="openForm(event, 'Donor')" id="defaultOpen">As Donor</button>
                        </div>

                        <div id="Donor" class="tabcontent">

                            <h6>Donor Registration Form</h6>

                            <form role="form" action="{{ route('donor.register') }}" method="post" enctype="multipart/form-data" id="contact-form">

                                @csrf

                                @include('front._form')

                                <div class="form-group">
                                    &nbsp; &nbsp;<label for="gender">Gender :</label> &nbsp; &nbsp; &nbsp;
                                    <label class="radio-inline"><input class="form-check-input" type="radio" name="gender" value="male">Male</label>
                                    <label class="radio-inline"><input class="form-check-input" type="radio" name="gender" value="female">Female</label>
                                    @error('gender')
                                    <div class="pl-1 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button style="background: #888787;" type="reset" class="btn btn-theme">Reset</button>
                                    <input type="submit" class="btn btn-theme" value="Submit" name="Save">
                                </div>

                            </form>
                        </div>

                        <div id="Volunteer" class="tabcontent">

                            <h6>Volunteer Registration Form</h6>

                            <form role="form" action="{{ route('volunteer.register') }}" method="post" id="contact-form" enctype="multipart/form-data">
                                @csrf

                                @include('front._form')

                                <div class="form-group">
                                    <input type="text" required class="form-control form-control-line @error('street_address') is-invalid @enderror" id="address" name="street_address" placeholder="Street Address" data-msg="Please Write Your Address" />
                                    @error('street_address')
                                    <div class="pl-1 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    &nbsp; &nbsp;<label for="gender">Gender :</label> &nbsp; &nbsp; &nbsp;
                                    <label class="radio-inline"><input class="form-check-input" type="radio" name="gender" value="male">Male</label>
                                    <label class="radio-inline"><input class="form-check-input" type="radio" name="gender" value="female">Female</label>
                                    @error('gender')
                                    <div class="pl-1 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    &nbsp; &nbsp;<label for="photo">Image :</label>
                                    <label class="radio-inline"><input type="file" required class="form-control-file form-control-line @error('file') is-invalid @enderror" id="photo" name="file" placeholder="Select Photo" data-msg="Please Select Your Photo"></label>
                                    @error('file')
                                    <div class="pl-1 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <button style="background: #888787;" type="reset" class="btn btn-theme">Reset</button>
                                    <button type="submit" class="btn btn-theme">Submit</button>
                                </div>

                            </form>
                        </div>

                    </div> <!-- end .contact-form-block  -->

                </div> <!--  end col-sm-6  -->

                <div class="col-sm-2"></div>

            </div> <!-- end row  -->



        </div> <!--  end .container -->

    </section> <!-- end .section-content-block  -->


@endsection




@push('library-css')
    <link rel="stylesheet" href="{{ asset('frontend/css/tab-style.css') }}" />
@endpush



@push('custom-css')

@endpush



@push('library-js')

@endpush



@push('custom-js')
    <script>
        function openForm(evt, formName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(formName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endpush