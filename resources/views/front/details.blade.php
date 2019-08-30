@extends('layouts.frontend.master')
@section('content')
    <section class="page-header" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        Campaign Details Page
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="{{ route('home') }}">Home</a> / <a href="{{ route('campaign') }}">Campaign</a> / Campaign Details Page
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <section class="section-content-block">

        <div class="container">

            <div class="row">



                <div class="article-event clearfix">

                    <div class="col-sm-12">

                        <article class="post single-post-inner">

                            <div class="post-inner-featured-content" >
                                <div class="campaign">
                                    <img alt="" src="{{ asset($campaign->file) }}">
                                </div>

                            </div>


                            <div class="single-post-inner-title">
                                <h2>{{ $campaign->name }}</h2>
                                <p class="single-post-meta"><i class="fa fa-map-marker"></i>{{ $campaign->venue }} &nbsp; &nbsp; <i class="fa fa-calendar-o"></i>&nbsp; {{ $campaign->date }}</p>
                            </div>

                            <div class="single-post-inner-content">
                               <p>{{ $campaign->details }}</p>
                            </div>


                        </article> <!--  end single-post-container -->


                    </div> <!--  end .single-post-container -->



                </div>



            </div> <!--  end .row  -->


            <div class="row">

                <div class="article-author clearfix">

                    <div class="topic-bold-header clearfix">
                        <h4>Event Organized by <a href="#">{{ $campaign->organizer }}</a></h4>
                    </div> <!-- end .topic-bold-header  -->



                    <div class="about_author">
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam feugiat vitae ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                    </div>


                </div> <!-- end .article-author  -->



            </div>

        </div> <!--  end container -->

    </section> <!-- end .section-content-block  -->

@endsection




@push('library-css')

@endpush



@push('custom-css')
    <style>
        .campaign{
            width: 600px;
            height: 350px;
        }

        .campaign img{
            max-width: 100%;
            max-height: 100%;
            margin: 0 auto;
            display: block;
        }
    </style>
@endpush



@push('library-js')

@endpush



@push('custom-js')

@endpush