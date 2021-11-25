@section('title', 'Progressive Web Development | OrFactor')

@extends('Front.layout')

@section('content')
    @include('Front.fix-button')

    <div class="common-banner common-banner-cross">
        <div class="bg-shade">
            <div class="common-banner-content center-text-align">
                <h1>Progressive Web App Development Company</h1>
                <p>Boost your revenues and double your conversion rates faster than ever with this modern technology</p>
                <div class="inc-sc-btn">
                    <a class="common-banner-btn" href="">
                        Request a quote
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bb-f-container">
        <h1 class="common-header-h">Fuel Your <b>Digital Transformation</b> To Meet <b>Business Agility</b></h1>
        <p>
            Enterprises looking to improve productivity and operational efficiency; companies finding their way
            to work quickly and smartly; organizations seeking some greater advancements in salesforce effectiveness,
            workforce productivity, and employee collaboration- Codiant’s Enterprise Mobility Solutions is the answer!
            Reinvent your customer experience, meet the demands of the modern workforce ensuring a speedy and enhanced
            business mobilization with our new-gen end-to-end enterprise app development solutions. Through our in-depth
            expertise and cross-industry mobility experience in B2B and B2C mobile app development, organizations can enhance
            competitive advantage, extend their customer reach, and unlock different business benefits.
        </p>
    </div>

    <div class="brief-ds-d">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="common-header-h"><b>MVP </b>Development</h1>
                    <p>
                        Building a perfect and polished app can take hundreds of hours of development time, which undeniably
                        comes with sweep of expenses- where there’s no guarantee that people will even use it. But by building
                        a Minimum Viable Product (MVP), startups can minimize the development time and maximize the chances of
                        building something people actually need and this way calculate the risk associated with the success of app in the market.
                    </p>

                    <ul class="common-ul-d">
                        <h3>By building and launching the MVP first you can:</h3>
                        <li>Test your business project by quickly moving to market.</li>
                        <li>Minimize initial development costs.</li>
                        <li>Save your time and efforts.</li>
                        <li>Get early adaptors and first paying customers.</li>
                        <li>Get user opinion about your product.</li>
                    </ul>

                    <a class="know-more-b" href="#">
                        <span>know more</span>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="brief-ds-d-r-i">
                        <img src="{{asset('Front/site_images/pageImages')}}/mvp.png" width="100%"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="core-tech" style="background-image: url('https://cdn.pixabay.com/photo/2016/12/19/08/39/mobile-phone-1917737_960_720.jpg')">
        <div class="core-tech-inner">
            <div class="container">
                <h1 class="common-header-h text-center mb-5" style="color: #ffffff">Our Core <b>Technologies</b></h1>
                <ul class="indus-nav nav nav-pills" id="indusTab" role="tablist">
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link active" id="frameworks-tab" data-toggle="pill" href="#framewok" role="tab" aria-controls="framewok" aria-selected="true">Frameworks</a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link" id="database-tab" data-toggle="pill" href="#database" role="tab" aria-controls="database" aria-selected="false">Tools</a>
                    </li>
                </ul>

                <div class="tab-content indus-details" id="coretech">
                    <div class="tab-pane fade show active" id="framewok" role="tabpanel" aria-labelledby="frameworks-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/cocoapods.png"/>
                                    <p>Cocoapods</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/healthkit.png"/>
                                    <p>HealthKit</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/watchkit.png"/>
                                    <p>WatchKit</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/arkit.png"/>
                                    <p>ArKit</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/sirikit.png"/>
                                    <p>SiriKit</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/ios-cocoa.png"/>
                                    <p>iOS Cocoa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="database" role="tabpanel" aria-labelledby="database-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/sq-lite.png"/>
                                    <p>SQLite</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/core-data.png"/>
                                    <p>Core data</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/realm.png"/>
                                    <p>Realm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Front.get-quote')

@endsection