@extends('layouts.frontend.master')
@section('content')
    <!--  PAGE HEADING -->

    <section class="page-header">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">

                    <h3>
                        About Us
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="{{ route('home') }}">Home</a> / About Us
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  FEATURED ABOUT US SECTION-->

    <section class="section-content-block">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                    <div class="about-us-container theme-custom-box-shadow">

                        <div class="row section-heading-wrapper margin-bottom-11">

                            <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator">
                                <h2><strong>Who We Are?</strong></h2>
                                <span class="heading-separator heading-separator-horizontal"></span>
                            </div> <!-- end .col-sm-10  -->

                        </div>

                        <div class="about-details">

                            <p>Blood Buddies is for public donation center with blood donation members in the changing health care system.</p>


                            <ul class="custom-bullet-list">
                                <li>Specialist blood donors and clinical supervision.</li>
                                <li>Increasing communication with our members.</li>
                                <li>High quality assessment, diagnosis and treatment.</li>
                                <li>Examine critically to ensure alignment.</li>
                                <li>The extra care of a multi-disciplinary team.</li>
                            </ul>

                        </div> <!--  end .about-details -->

                    </div>

                </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->


                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                    <figure class="about-img theme-custom-box-shadow">
                        <img src="{{ asset('frontend/images/about_feat_bg.jpg') }}" alt="about" />
                    </figure> <!-- end .cause-img  -->

                </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12  -->

            </div> <!--  end .row  -->
        </div>

    </section> <!--  end .section-about-us -->

    <!-- SECTION TEAM   -->

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
                                <img src="{{ asset('frontend/images/volunteer/team_9.jpg') }}" alt="ALEXANDER GARY"/>
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
                                <img src="{{ asset('frontend/images/volunteer/team_6.jpg') }}" alt="MELISSA MUNOZ" />
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
                                <img src="{{ asset('frontend/images/volunteer/team_7.jpg') }}" alt="JOHN ABRAHAM" />
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

    <!--  COUNTER SECTION 02  -->

    <section class="section-content-block section-secondary-bg" >

        <div class="container wow fadeInUp">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2>OUR ACHIEVEMENTS</h2>
                    <h4>We have been working since 1973 with a prestigious vision to helping patient to provide blood.</h4>
                </div> <!-- end .col-sm-12  -->

            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-left">

                        <i class="fa fa-heartbeat icon"></i>
                        <span class="counter">2578</span>
                        <h4 class="text-capitalize">Success Smile</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-left">

                        <i class="fa fa-stethoscope icon"></i>
                        <span class="counter">3235</span>
                        <h4 class="text-capitalize">Happy Donors</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-left">

                        <i class="fa fa-users icon"></i>
                        <span class="counter">3568</span>
                        <h4 class="text-capitalize">Happy Recipient</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-left">

                        <i class="fa fa-building icon"></i>
                        <span class="counter">1364</span>
                        <h4 class="text-capitalize">Total Awards</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->


            </div> <!-- end row  -->

        </div> <!--  end .container  -->

    </section>


@endsection




@push('library-css')

@endpush



@push('custom-css')

@endpush



@push('library-js')

@endpush



@push('custom-js')

@endpush