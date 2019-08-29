@extends('layouts.frontend.master')
@section('content')

    <section class="section-banner" data-bg_img="{{ asset('frontend/images/home_1_slider_2.jpg') }}" data-bg_color="#111111" data-bg_opacity="0.1" >

        <div class="container wow fadeInUp">

            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="banner-content">
                        <h3>Donate blood,save life !</h3>
                        <h2>
                            YOUR BLOOD CAN BRING SMILE
                            <br />
                            IN OTHER PERSON FACE
                        </h2>

                        <h3>Want to become a donor ?</h3>

                        <a href="#" class="btn btn-theme margin-top-32">Register Here</a>
                    </div>
                </div> <!-- end .col-md-12  -->
            </div>

        </div>

    </section>

    <!--  SECTION Who We Are? -->

    <section class="section-content-block">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                    <div class="about-us-container theme-custom-box-shadow">

                        <div class="row section-heading-wrapper margin-bottom-11">

                            <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator">
                                <h4>Good To Know</h4>
                                <span class="heading-separator heading-separator-horizontal"></span>
                                <h2>Helpful Information</h2>
                            </div> <!-- end .col-sm-10  -->

                        </div>

                        <div class="about-details">

                            <ul class="custom-bullet-list">
                                <li>Maintain a healthy iron level by eating iron rich foods.</li>
                                <li>Drink an extra 16 oz. of water prior to your donation.</li>
                                <li>Avoid alcohol consumption before your blood donation.</li>
                                <li>Remember to bring the national ID or Passport.</li>
                                <li>Finally, Try to get a good night sound sleep after donation.</li>
                            </ul>

                        </div> <!--  end .about-details -->

                    </div>

                </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->


                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                    <figure class="about-img theme-custom-box-shadow">

                        <img src="{{ asset('frontend/images/gallery_2.jpg') }}" alt="about">
                    </figure> <!-- end .cause-img  -->

                </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12  -->

            </div> <!--  end .row  -->
        </div>

    </section>

    <!-- SECTION TESTIMONIAL   -->

    <section class="section-content-block section-custom-bg" data-bg_img="{{asset('frontend/images/testimony_feat_bg.jpg')}}" data-bg_size='cover' data-bg_position='top center' data-bg_opacity="0">

        <div class="container margin-top-80">
            <div class="row section-heading-wrapper-alt">

                <div class="col-md-12 col-sm-12 text-center no-img-separator">
                    <h4>Awesome Words From Members</h4>
                    <span class="heading-separator heading-separator-horizontal"></span>
                    <h2 class="extra-large">JOIN WITH US AND SAVE LIFE</h2>

                </div> <!-- end .col-sm-10  -->

            </div>
        </div>

        <div class="container theme-custom-box-shadow  section-pure-white-bg margin-top-48 margin-bottom-48 wow fadeInUp">

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <div class="testimonial-container owl-carousel text-left" data-items  ="1">

                        <div class="col-md-12 col-sm-12">

                            <div class="testimony-layout-1">
                                <h3 class="people-quote">Donor Opinion</h3>
                                <p class="testimony-text">
                                    I proudly donate blood on a regular basis because it gives others something they desperately need to survive. Just knowing I can make a difference in someone else's life makes me feel great!
                                </p>

                                <img src="{{ asset('frontend/images/user_1.jpg') }}" alt="" />
                                <h6>Brandon Munson</h6>
                                <span>CTO, Fulcrum Design, USA</span>

                            </div> <!-- end .testimony-layout-1  -->

                        </div> <!--  end col-md-10  -->

                        <div class="col-md-12 col-sm-12">

                            <div class="testimony-layout-1">
                                <h3 class="people-quote">Donor Opinion</h3>
                                <p class="testimony-text">
                                    I have been a donor since high school. Although I have not been a donor every year, I always want to give to the human race. I love to help others! Moreover it gives a real peace in my mind.
                                </p>

                                <img src="{{ asset('frontend/images/user_2.jpg') }}" alt="" />
                                <h6>Munson Brandon</h6>
                                <span>CTO, Fulcrum Design, USA</span>

                            </div> <!-- end .testimony-layout-1  -->

                        </div> <!--  end col-md-10  -->

                        <div class="col-md-12 col-sm-12">

                            <div class="testimony-layout-1">
                                <h3 class="people-quote">Recipient Opinion</h3>
                                <p class="testimony-text">
                                    I wish I could tell you my donor how grateful I am for your selfless act.You gave me new life. We may be coworkers or schoolmates or just two in the same community.I'm very grateful to you.
                                </p>

                                <img src="{{ asset('frontend/images/user_3.jpg') }}" alt="" />
                                <h6>Logan Munson</h6>
                                <span>CTO, Fulcrum Design, USA</span>

                            </div> <!-- end .testimony-layout-1  -->

                        </div> <!--  end col-md-10  -->

                    </div>  <!--  end .row  -->
                </div>

                <div class="col-lg-6 hidden-md hidden-xs hidden-sm no-padding">
                    <figure>
                        <img src="{{ asset('frontend/images/testimony_feat_img.jpg') }}" alt="" class="db"/>
                    </figure>
                </div>

            </div>



        </div> <!-- end .container  -->

    </section>



    <!--  SECTION DONATION PROCESS -->

    <section class="section-content-block section-process">

        <div class="container">



            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center no-img-separator">
                    <h2>DONATE AT CAMPAIGN</h2>
                    <span class="heading-separator heading-separator-horizontal"></span>
                    <h4>The donation process from the time you arrive center until the time you leave</h4>
                </div> <!-- end .col-sm-10  -->


            </div> <!-- end .row  -->

            <div class="row wow fadeInUp">

                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                    <div class="process-layout">

                        <figure class="process-img">

                            <img src="{{ asset('frontend/images/process_1.jpg') }}" alt="service" />
                            <div class="step">
                                <h3>1</h3>
                            </div>
                        </figure> <!-- end .cause-img  -->

                        <article class="process-info">
                            <h2>Registration</h2>
                            <p>You need to complete a very simple registration form. Which contains all required contact information to enter in the donation process.</p>
                        </article>

                    </div> <!--  end .process-layout -->

                </div> <!--  end .col-lg-3 -->



                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                    <div class="process-layout">

                        <figure class="process-img">
                            <img src="{{ asset('frontend/images/process_2.jpg') }}" alt="process" />
                            <div class="step">
                                <h3>2</h3>
                            </div>
                        </figure> <!-- end .cau<h5 class="step">1</h5>se-img  -->

                        <article class="process-info">
                            <h2>Screening</h2>
                            <p>A drop of blood from your finger will take for simple test to ensure that your blood iron levels are proper enough for donation process.</p>
                        </article>

                    </div> <!--  end .process-layout -->

                </div> <!--  end .col-lg-3 -->


                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                    <div class="process-layout">

                        <figure class="process-img">
                            <img src="{{ asset('frontend/images/process_3.jpg') }}" alt="process" />
                            <div class="step">
                                <h3>3</h3>
                            </div>
                        </figure> <!-- end .cause-img  -->

                        <article class="process-info">
                            <h2>Donation</h2>
                            <p>After ensuring and passed screening test successfully you will be directed to a donor bed for donation. It will take only 6-10 minutes.</p>
                        </article>

                    </div> <!--  end .process-layout -->

                </div> <!--  end .col-lg-3 -->

            </div> <!--  end .row -->

        </div> <!--  end .container  -->

    </section> <!--  end .section-process -->



@endsection




@push('library-css')

@endpush




@push('library-js')

@endpush



@push('custom-js')

@endpush