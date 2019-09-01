@extends('layouts.frontend.master')
@section('content')
    <section class="page-header" style="height:200px; padding-top: 50px;">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">

                    <h3>
                        OUR TEAM
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="{{ route('home') }}">Home</a> / Team
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!-- TEAM SECTION 01 -->

    <section class="section-content-block section-secondary-bg">

        <div class="container wow fadeInUp">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Founders</h2>
                    <p class="section-subheading">The Founders who give their time and talent to build up the organization.</p>
                </div> <!-- end .col-sm-10  -->

            </div> <!-- end .row  -->

            <div class="row">

                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                    <div class="team-layout-1">

                        <figure class="team-member">
                            <a href="#" title="ALEXANDER GARY">
                                <img src="{{ asset('frontend/images/team_9.jpg') }}" alt="ALEXANDER GARY"/>
                            </a>

                        </figure> <!-- end. team-member  -->

                        <article class="team-info">
                            <h3>ALEXANDER GARY</h3>
                            <h4>Co-Founder</h4>
                        </article>

                        <div class="team-content">

                            <div class="team-social-share text-center clearfix">
                                <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                            </div> <!-- end .author-social-box  -->

                        </div>

                    </div> <!--  end team-layout-1 -->

                </div> <!--  end .col-md-4 col-sm-12  -->

                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                    <div class="team-layout-1">

                        <figure class="team-member">
                            <a href="#" title="MELISSA MUNOZ">
                                <img src="{{ asset('frontend/images/team_6.jpg') }}" alt="MELISSA MUNOZ" />
                            </a>

                        </figure> <!-- end. team-member  -->

                        <article class="team-info">
                            <h3>MELISSA MUNOZ</h3>
                            <h4>Founder</h4>
                        </article>

                        <div class="team-content">

                            <div class="team-social-share text-center clearfix">
                                <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                            </div> <!-- end .author-social-box  -->

                        </div>

                    </div> <!--  end team layout-1 -->

                </div> <!--  end .col-md-4 col-sm-12  -->

                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                    <div class="team-layout-1">

                        <figure class="team-member">
                            <a href="#" title="JOHN ABRAHAM">
                                <img src="{{ asset('frontend/images/team_7.jpg') }}" alt="JOHN ABRAHAM" />
                            </a>

                        </figure> <!-- end. team-member  -->

                        <article class="team-info">
                            <h3>JOHN ABRAHAM</h3>
                            <h4>Co-Founder</h4>
                        </article>
                        <div class="team-content">

                            <div class="team-social-share text-center clearfix">
                                <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                            </div> <!-- end .author-social-box  -->

                        </div>

                    </div> <!--  end team-layout-1 -->

                </div> <!--  end .col-md-4 col-sm-12  -->


            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .section-our-team -->

    <!-- TEAM SECTION 02 -->

    <section class="section-content-block section-team-bg">

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12">
                    <h2 class="text-uppercase">Our Volunteers</h2>
                    <h4>The volunteers who give their time and talents help to fulfill our mission.</h4>
                </div> <!-- end .col-sm-10  -->

            </div> <!-- end .row  -->

            <div class="row text-center">

                <div class="team-carousel owl-carousel" data-nav="true" data-items="4">

                    @foreach($teams as $team)

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="team-layout-1">

                            <figure class="team-member">
                                <a href="#" title="MOJORLOA PHOG">
                                    <img width="250px" height="280px" src="{{ asset($team->file) }}" alt="MOJORLOA PHOG"/>
                                </a>

                            </figure> <!-- end. team-member  -->

                            <article class="team-info">
                                <h3>{{ $team->name }}</h3>
                            </article>

                            <div class="team-content">

                                <div class="team-social-share text-center clearfix">
                                    <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                    <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                    <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                    <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                </div> <!-- end .author-social-box  -->

                            </div>

                        </div> <!--  end team-layout-1 -->

                    </div> <!--  end .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->


                  @endforeach

                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .section-our-team -->


@endsection




@push('library-css')

@endpush



@push('custom-css')

@endpush



@push('library-js')

@endpush



@push('custom-js')

@endpush