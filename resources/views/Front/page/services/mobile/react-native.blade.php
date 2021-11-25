@section('title', 'React Native App Development | OrFactor')

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
                <span>Service</span>
                <h1>React Native App Development Company</h1>
                <p>Develop High-Performance Native and Cross-Platform Mobile Apps</p>
                <div class="inc-sc-btn">
                    <a class="common-banner-btn" href="">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bb-f-container">
        <h1 class="common-header-h">Move your <b>ideas</b> faster with <b>React Native</b></h1>
        <p>
            Leverage the excellence of Codiant’s standout expertise in custom React Native App Development services. We have an adroit
            team of React Native app developers that help businesses build visually stunning apps with remarkable performance.

            Rely on us for developing native Android and iOS apps, cross platform app development, UI/UX design and development, and
            modernizing your existing app experiences. Our services and solutions are designed to cater to a vast industry including
            healthcare, eCommerce, on-demand economy, transport and automation, and real estate app and web development services.

            So, why wait? Empower your business with the outstanding brilliance of the React Native development framework and our
            proficiency in it. This dual-power can help you keep pace with the latest innovations with minimum code maintenance efforts
            and game-changing experiences. Hire our React Native developers and get started now!
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

    <div class="c-b-s-d">
        <h1 class="common-header-h text-center"><b>Benefits Of Choosing React Native</b> App Development</h1>
        <p class="common-p mb-5" style="color: #000000">
            React Native is an excellent choice for businesses working on enterprise level. It’s simply because it is a
            powerful, cross-platform mobile app development tool that lets you build truly native apps. There are several
            reasons which makes React Native a most sought after mobile app development framework, let’s take a quick glance.
        </p>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="custom-card">
                        <div class="inner-card-c">
                            <img src="{{asset('Front/site_images/card-icon')}}/greater-security.svg"/>
                            <div class="inner-card-c-t">
                                <h2>Greater Security</h2>
                                <p>
                                    iOS apps provides security against data duplication, data encryption,
                                    and data theft. Thus, providing users a secure environment for online
                                    transactions and protecting the OS from threats.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="inner-card-c">
                            <img src="{{asset('Front/site_images/card-icon')}}/reach-rights.svg"/>
                            <div class="inner-card-c-t">
                                <h2>Reach the Right Audience</h2>
                                <p>
                                    With the preferences and simplicity demands of iPhone users clear,
                                    it is likely to find the right target audience for your iOS app.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="inner-card-c">
                            <img src="{{asset('Front/site_images/card-icon')}}/better-customer.svg"/>
                            <div class="inner-card-c-t">
                                <h2>Better Customer Experience</h2>
                                <p>
                                    iPhone’s robust and impeccable hardware standards, smoother
                                    software functions, and customer support assures glitch-free app functioning.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 d-none d-xl-block">
                    <div class="text-center">
                        <img src="{{asset('Front/site_images/card-icon')}}/react-native-mobile.webp">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="custom-card">
                        <div class="inner-card-c">
                            <img src="{{asset('Front/site_images/card-icon')}}/higher-roi.svg"/>
                            <div class="inner-card-c-t">
                                <h2>Higher ROI</h2>
                                <p>
                                    As iPhone apps helps in targeting the right customers, it enables brands and organizations to earn better ROI.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="inner-card-c">
                            <img src="{{asset('Front/site_images/card-icon')}}/better-scalability.svg"/>
                            <div class="inner-card-c-t">
                                <h2>Better Scalability</h2>
                                <p>
                                    iPhone app development gives you an extended possibility to scale apps,
                                    expand your presence into new channels, and grow business exponentially
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="custom-card">
                        <div class="inner-card-c">
                            <img src="{{asset('Front/site_images/card-icon')}}/brand-value.svg"/>
                            <div class="inner-card-c-t">
                                <h2>Brand Value</h2>
                                <p>
                                    No mention every iPhone app has to go through strict guidelines and standards of the Apple
                                    community before getting published on the App store. Thus, building more loyalty and trust in your app.
                                </p>
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
                <h1 class="common-header-h text-center mb-5" style="color: #ffffff">Our <b>Technology Stack</b></h1>
                <ul class="indus-nav nav nav-pills" id="indusTab" role="tablist">
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link active" id="frameworks-tab" data-toggle="pill" href="#framewok" role="tab" aria-controls="framewok" aria-selected="true">Front-End</a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link" id="database-tab" data-toggle="pill" href="#database" role="tab" aria-controls="database" aria-selected="false">Backend</a>
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