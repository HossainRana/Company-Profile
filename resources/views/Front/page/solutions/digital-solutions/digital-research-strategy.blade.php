@section('title', 'Digital Solutions Strategy | OrFactor')

@extends('Front.layout')

@section('content')
    @include('Front.fix-button')

    <style>
        .benefits-and-details-section::before{
            width: 25% !important;
        }
    </style>

    <div class="common-banner common-banner-technology">
        <div class="bg-shade">
            <div class="common-banner-content center-text-align">
                <span>Services</span>
                <h1>Digital Research and Strategy</h1>
                <p>Build a Winning Digital Strategy</p>
                <div class="inc-sc-btn">
                    <a class="common-banner-btn" href="">
                        Request a Quote
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bb-f-container">
        <h1 class="common-header-h">Get Future Ready By <b>Adopting New Technologies</b></h1>
        <p>
            Amplify digitally with Codiant’s remarkable knack in mobile app development . The highly experienced and passionate team of Codiant is rewarded
            with the unconventional wisdom of designing breakthrough mobile apps that improvise brand repute, boost the performance indicators and increase
            the sales incredibly. We discern the pulse of your business needs accurately after a sincere one to one conversation with you and then come out
            with an interesting mobile app solution that completely fits your company’s needs. Do you have an Idea? We can deliver you an exceptional mobile
            app that is an absolute olio of creativity and profitability.
        </p>
    </div>

    <div class="digital-s-c-d" id="solutions">
        <h1 class="common-header-h text-center mb-5">Is Your Digital Strategy Well <b>Equipped To<br/>Ensure Your Success?</b></h1>

        <div class="benefits-and-details-section mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5  text-center text-lg-left">
                        <div class="left-img-contain">
                            <img class="border-r-c-15" src="{{asset('Front/site_images/pageImages')}}/hana-services.webp" width="">
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 _z-i-bg">
                        <div class="details-r-s-c">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="common-header-h"><b>Capital Markets</b></h1>
                                    <p>
                                        Enabling capital market segments- investment banking, wealth and asset management, and market information providers with
                                        new digital operating models and solutions that improve efficiency, mitigate risks, and increase profitability.
                                        Our solutions include:
                                    </p>

                                    <ul class="common-ul-d">
                                        <h3>Our Solutions Include</h3>
                                        <li>Test your business project by quickly moving to market.</li>
                                        <li>Minimize initial development costs.</li>
                                        <li>Save your time and efforts.</li>
                                        <li>Get early adaptors and first paying customers.</li>
                                        <li>Get user opinion about your product.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="b-bg-c">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1 text-center order-lg-2">
                        <div class="left-img-contain">
                            <img class="border-r-c-15" src="{{asset('Front/site_images/pageImages')}}/management-services.webp" width="">
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1 _z-i-bg">
                        <div class="details-r-s-c">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="common-header-h"><b>Banking & Finance</b></h1>
                                    <p>
                                        Helping Retail and commercial banks reimagine payment and credit models to innovate and capitalize on market
                                        disruptions with our technology-enabled business process transformation for frictionless and secured lending,
                                        payment, mortgage, and credit operations.
                                    </p>

                                    <ul class="common-ul-d">
                                        <h3>Our Solutions Include</h3>
                                        <li>Test your business project by quickly moving to market.</li>
                                        <li>Minimize initial development costs.</li>
                                        <li>Save your time and efforts.</li>
                                        <li>Get early adaptors and first paying customers.</li>
                                        <li>Get user opinion about your product.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="we-serve">
        <h1 class="common-header-h text-center mb-5"><b>Industries</b> We Serve</h1>
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