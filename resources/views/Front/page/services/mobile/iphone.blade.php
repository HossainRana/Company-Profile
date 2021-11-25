@section('title', 'iPhone App Development | OrFactor')

@extends('Front.layout')

@section('content')
    @include('Front.fix-button')

    <style>
        .a-app-d-step .row{
            min-height: 530px !important;
        }
        .each-card-trn{
            min-height: 390px !important;
        }
        .inner-show-c{
            translate3d(0, 160px, 0)
        }
        .inner-hidden-c{
            padding: 25px 12px;
        }
    </style>

    <div class="common-banner common-banner-iphone">
        <div class="bg-shade">
            <div class="common-banner-content center-text-align">
                <span>The Next-Gen</span>
                <h1>iPhone App Development Company</h1>
                <p>Embrace our core expertise in iPhone App Development to achieve unprecedented business success.</p>
                <div class="inc-sc-btn">
                    <a class="common-banner-btn" href="">
                        Consult our expert
                    </a>
                    <a class="common-banner-secondary-btn" href="">
                        hire our developers
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bb-f-container">
        <h1 class="common-header-h">Orfactor- A <b>Perfect Choice For Business</b> of Any Type And Size</h1>
        <p>
            Orfactor is a leading iOS App Development Company that designs and develops robust and innovative
            iPhone apps that remains unsurpassed across the globe in its appeal. Being uniquely positioned in
            the market with our integrated mobile app development offering we have astute experience in a plethora
            of tools and frameworks like Xcode, Cocoa Pods, Carthage, Jazzy, Power JSON Editor, PAW, SourceTree,
            FBTweaks, AudioKit, Alamofire, Realm, Jelly and more. With a highly proficient team of 120+ iPhone App
            developers, we are continuously driving new age thinking to add momentum to your brand’s digital touch points.
        </p>
    </div>

    <div class="benefits-and-details-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="left-img-contain">
                        <img src="{{asset('Front/site_images/pageImages')}}/benefits.png" width="">
                    </div>
                </div>
                <div class="col-md-9 _z-i-bg">
                    <div class="details-r-s-c">
                        <h1 class="common-header-h"><b>iPhone App Development</b> Services</h1>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="each-r-d-c">
                                    <div class="inner-l-i-c">
                                        <img src="{{asset('Front/site_images/common/detailsIcon')}}/health.svg">
                                        <span>52%</span>
                                    </div>
                                    <div class="inner-r-d-c">
                                        <h3><a href="#">Health And Fitness</a></h3>
                                        <p>of products are purchased using smartphones.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="each-r-d-c">
                                    <div class="inner-l-i-c">
                                        <img src="{{asset('Front/site_images/common/detailsIcon')}}/travel.svg">
                                        <span>46%</span>
                                    </div>
                                    <div class="inner-r-d-c">
                                        <h3><a href="#">Travel & Hospitality</a></h3>
                                        <p>of tours are ordered from mobile devices.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="each-r-d-c">
                                    <div class="inner-l-i-c">
                                        <img src="{{asset('Front/site_images/common/detailsIcon')}}/food-grocery.svg">
                                        <span>69%</span>
                                    </div>
                                    <div class="inner-r-d-c">
                                        <h3><a href="#">Food/Grocery</a></h3>
                                        <p>of food are purchased using smartphone or tablets.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="each-r-d-c">
                                    <div class="inner-l-i-c">
                                        <img src="{{asset('Front/site_images/common/detailsIcon')}}/education.svg">
                                        <span>51%</span>
                                    </div>
                                    <div class="inner-r-d-c">
                                        <h3><a href="#">Education</a></h3>
                                        <p>of high school students use smartphones to educate themselves, compared to 28% in 2012.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="each-r-d-c">
                                    <div class="inner-l-i-c">
                                        <img src="{{asset('Front/site_images/common/detailsIcon')}}/communication.svg">
                                        <span>75%</span>
                                    </div>
                                    <div class="inner-r-d-c">
                                        <h3><a href="#">Realtime Communication</a></h3>
                                        <p>of people worldwide are using audio-video chatting on their mobile phones.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="each-r-d-c">
                                    <div class="inner-l-i-c">
                                        <img src="{{asset('Front/site_images/common/detailsIcon')}}/internet.svg">
                                        <span>64%</span>
                                    </div>
                                    <div class="inner-r-d-c">
                                        <h3><a href="#">Internet Of Things</a></h3>
                                        <p>of organizations have planned to eventually implement IoT, whereas 50% have already ad opted.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="each-r-d-c">
                                    <div class="inner-l-i-c">
                                        <img src="{{asset('Front/site_images/common/detailsIcon')}}/real-estate.svg">
                                        <span>44%</span>
                                    </div>
                                    <div class="inner-r-d-c">
                                        <h3><a href="#">Real Estate</a></h3>
                                        <p>of property are searched online using real estate apps.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="each-r-d-c">
                                    <div class="inner-l-i-c">
                                        <img src="{{asset('Front/site_images/common/detailsIcon')}}/networking.svg">
                                        <span>78%</span>
                                    </div>
                                    <div class="inner-r-d-c">
                                        <h3><a href="#">Social Networking</a></h3>
                                        <p>of the population have a social networking profile, where around 60% of the population have at least one social account.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="core-tech">
        <div class="core-tech-inner">
            <div class="container">
                <h1 class="common-header-h text-center mb-5" style="color: #ffffff">Our Core <b>Technologies</b></h1>
                <ul class="indus-nav nav nav-pills" id="indusTab" role="tablist">
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link active" id="frameworks-tab" data-toggle="pill" href="#framewok" role="tab" aria-controls="framewok" aria-selected="true">Frameworks</a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link" id="database-tab" data-toggle="pill" href="#database" role="tab" aria-controls="database" aria-selected="false">Database</a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link" id="languages-tab" data-toggle="pill" href="#language" role="tab" aria-controls="language" aria-selected="false">Languages</a>
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
                    <div class="tab-pane fade" id="language" role="tabpanel" aria-labelledby="languages-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/swift.png"/>
                                    <p>Swift</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/objective-c.png"/>
                                    <p>Objective C</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="core-tech-footer">
                    <h3>Take A Glimpse Of Our Work On</h3>
                    <div class="core-tech-f-btn">
                        <a href="#" class="common-banner-btn">
                            <img src="{{asset('Front/site_images')}}/dribbble.svg">
                        </a>
                        <a href="#" class="common-banner-secondary-btn">
                            <img src="{{asset('Front/site_images')}}/behance.svg" style="padding: 7px 20px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="a-app-d-step">
        <h1 class="common-header-h text-center">Our iPhone App<b> Development Approach</b></h1>
        <p class="common-p  mb-5">
            When you come to us following your dream, loaded with an idea, we’ll help you evaluate it and go through the 5-step procedure
            of Strategy, Design, Development, Deployment and Maintenance for your app to flourish like a dense tree.
        </p>
        <div class="container">
            <div class="row">
                <div class="col-xl col-sm-6 col-md-4 mt-3">
                    <div class="each-card-trn text-center position-relative">
                        <div class="inner-show-c">
                            <img src="{{asset('Front/site_images/card-icon')}}/require-gathering.svg"/>
                            <h3>Strategy</h3>
                        </div>
                        <div class="inner-hidden-c position-absolute">
                            <h3>Strategy</h3>
                            <p>
                                Our experts will brainstorm to understand the 3 driving forces of the app:
                                Why your idea makes sense? Why will it go successful? Why will the end-user
                                care about it? After figuring out your concept, they merge it with their
                                expertise and knowledge. And turn the idea into an actual product.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-sm-6 col-md-4 mt-3 align-self-end">
                    <div class="each-card-trn text-center position-relative">
                        <div class="inner-show-c">
                            <img src="{{asset('Front/site_images/card-icon')}}/prototype.svg"/>
                            <h3>Design</h3>
                        </div>
                        <div class="inner-hidden-c position-absolute">
                            <h3>Design</h3>
                            <p>
                                With Design, it’s always about first impressions. Our design team unified by their
                                dedication to high-end aesthetic and impeccability ensure the design’s illustrative
                                creativity always comes out to be balanced with the app layout.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-sm-6 col-md-4 mt-3">
                    <div class="each-card-trn text-center position-relative">
                        <div class="inner-show-c">
                            <img src="{{asset('Front/site_images/card-icon')}}/app-design.svg"/>
                            <h3>Development</h3>
                        </div>
                        <div class="inner-hidden-c position-absolute">
                            <h3>Development</h3>
                            <p>
                                With the minimalist of codes, we strive to create the biggest impact.
                                The not as much approach to coding ensures the app is packed with useful
                                features that fulfill your business objectives and help you take giant
                                strides technologically.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-sm-6 col-md-4 mt-3 align-self-end">
                    <div class="each-card-trn text-center position-relative">
                        <div class="inner-show-c">
                            <img src="{{asset('Front/site_images/card-icon')}}/app-develope.svg"/>
                            <h3>App Store Development</h3>
                        </div>
                        <div class="inner-hidden-c position-absolute">
                            <h3>App Store Development</h3>
                            <p>
                                Finally, the onus is on us to handle the entire App Store submission process including
                                the app listing, Metadata, a well-crafted full description, assets and more.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-sm-6 col-md-4 mt-3">
                    <div class="each-card-trn text-center position-relative">
                        <div class="inner-show-c">
                            <img src="{{asset('Front/site_images/card-icon')}}/beta.svg"/>
                            <h3>Maintenance and Support</h3>
                        </div>
                        <div class="inner-hidden-c position-absolute">
                            <h3>Maintenance and Support</h3>
                            <p>
                                We offer and pledge our continued support for constant improvements, enhancements and
                                innovation for your app maintenance to ensure scalability, performance, and maintainability
                                according to Service Level Agreement (SLA) guidelines.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('Front.get-quote')

@endsection