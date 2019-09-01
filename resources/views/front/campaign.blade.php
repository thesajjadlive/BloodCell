@extends('layouts.frontend.master')
@section('content')

    <section class="page-header" style="height:200px; padding-top: 50px;" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">

                    <h3>
                        Campaign List
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="{{ route('home') }}">Home</a> / Campaigns
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  MAIN CONTENT  -->

    <!--  SECTION CAMPAIGNS   -->

    <section class="section-content-block section-secondary-bg" >

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-left no-img-separator">
                    <h2>CAMPAIGNS</h2>
                    <span class="heading-separator heading-separator-horizontal"></span>
                    <h4>Encourage new donors to join and continue to give blood. We have total sixty thousands donor centers and visit thousands of other venues on various occasions. </h4>
                </div> <!-- end .col-sm-12  -->

            </div> <!-- end .row  -->

            <div class="row margin-top-48">

                @foreach($campaigns as $index=>$campaign)
                    @if($index <= 5)

                <div class="col-md-6 col-sm-12" >
                    <div class="event-layout-1 theme-custom-box-shadow clearfix" >
                        <figure class="event-img">
                            <a href="{{ route('campaign.details',$campaign->id) }}">
                                <img src="{{ asset($campaign->file) }}" alt="">
                            </a>
                        </figure>
                        <div class="event-info">

                            <h4>
                                <a href="{{ route('campaign.details',$campaign->id) }}">{{ $campaign->name }}</a>
                            </h4>

                            <div class="event-exceprt">
                                <p>{{ str_limit($campaign->details,100) }} </p>
                                <a href="{{ route('campaign.details',$campaign->id) }}" class="">Read More</a>

                            </div>

                            <div class="event-time">
                                <a class="event-date" href="#"><i class="fa fa-calendar-o"></i>{{ $campaign->date }}</a>
                                <a href="#"> <i class="fa fa-map-marker"></i>{{ $campaign->venue }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
                    @endforeach

            </div>

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