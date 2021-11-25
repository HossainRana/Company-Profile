@section('title', 'Cross Platform | OrFactor')

@extends('Front.layout')

@section('content')
    @include('Front.fix-button')

    <div class="common-banner common-banner-cross">
        <div class="bg-shade">
            <div class="common-banner-content center-text-align">
                <h1>Products</h1>
                <p>To The Standard Of The World</p>
                <div class="inc-sc-btn">
                    <a class="common-banner-btn" href="">
                        Contact US
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bb-f-container">
        <h1 class="common-header-h">Your Digital Partner From <b>Conception<br/>
                To Disruption</b></h1>
        <p>
            Orfactor has a strong track record of creating cross-platform mobile apps using Appcelerator’s Titanium, Corona, Xamarin, Ionic,
            PhoneGap cordova and other frameworks. Our apps are snappiest and completely fit the needs and goals of your app based business.
            Do not look further; we are here to fit in your every ambition.
        </p>
    </div>

    <div class="we-serve">
        <div class="solution-heading-container center-text-align">
            <h2 class="solution-heading">Our Product <b>Offerings</b></h2>
            <p class="common-p mb-5">
                Stay competitive and innovative with our cutting-edge products. Our extensive product portfolio covers all
                type of industries and helps customers to develop next-gen solutions using top technologies.
            </p>
        </div>
        <div class="container">
            <div class="client-hover-d">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-client-l-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/weServe')}}/ecommerce.svg">
                            <h3>Ecommerce, Retail & <br/>B2B</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-client-l-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/weServe')}}/healthcare.svg">
                            <h3>Healthcare & <br/>Fitness</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-client-l-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/weServe')}}/on-demand.svg">
                            <h3>On-Demand<br/>Solutions</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-client-l-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/weServe')}}/logistics.svg">
                            <h3>Logistics <br/>& Distribution</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-client-l-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/weServe')}}/banking.svg">
                            <h3>Banking, Finance<br/>& Insurance</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-client-l-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/weServe')}}/education.svg">
                            <h3>Education &<br/>Elearning</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-client-l-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/weServe')}}/transport.svg">
                            <h3>Transport<br/>& Automotive</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-client-l-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/weServe')}}/social-network.svg">
                            <h3>Social<br/>Networking</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-client-l-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/weServe')}}/food.svg">
                            <h3>Food &<br/>Restaurant</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-client-l-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/weServe')}}/real-state.svg">
                            <h3>Real Estate &<br/>Property</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-client-l-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/weServe')}}/travel.svg">
                            <h3>Travel<br/>& Hospitality</h3>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-client-l-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/weServe')}}/ticket.svg">
                            <h3>Events &<br/>Tickets</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Front.get-quote')

@endsection