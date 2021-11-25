@section('title', 'Full Stack Development | OrFactor')

@extends('Front.layout')

@section('content')
    @include('Front.fix-button')

    <div class="common-banner common-banner-cross">
        <div class="bg-shade">
            <div class="common-banner-content center-text-align">
                <span>Your One-stop Software Development Partner</span>
                <h1>Full Stack Development</h1>
                <p>Seize The Power of Technologies With our Digital Expertise</p>
                <div class="inc-sc-btn">
                    <a class="common-banner-btn" href="">
                        Start a project
                    </a>
                </div>
            </div>
        </div>
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
                        <h1 class="common-header-h"><b>Benefits</b>Of Mobile App Development</h1>
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
        <h1 class="common-header-h text-center mb-5"><b>Business Benefits of </b>iOS App Development</h1>

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
                        <img src="{{asset('Front/site_images/card-icon')}}/ios-app-mobile.webp">
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

    <div class="brief-ds-d">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="common-header-h mb-5">Mobile App Rapid <b>Prototyping Services</b></h1>
                    <p>
                        Our team of UX designers and business analysts create highly interactive prototypes that
                        work exactly like you imagine your app should. Making it easier for you to test the flow,
                        interactions, and readily validate your idea even before getting the app developed.
                    </p>

                    <ul class="common-ul-d">
                        <li>Wireframing</li>
                        <li>Clickable Prototypes</li>
                        <li>Graphic Mockups</li>
                        <li>Proof-of-Concept</li>
                        <li>Seamless Design Communication</li>
                        <li>App Workflow Simulation</li>
                        <li>Proof of Concept</li>
                        <li>Improving UX</li>
                    </ul>

                    <a class="know-more-b" href="#">
                        <span>Consult our ux Designers</span>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="brief-ds-d-r-i">
                        <img src="{{asset('Front/site_images/pageImages')}}/prototype.webp" width="100%"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Front.get-quote')

@endsection