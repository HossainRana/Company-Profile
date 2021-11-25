@section('title', 'Cross Platform | OrFactor')

@extends('Front.layout')

@section('content')
    @include('Front.fix-button')

    <div class="common-banner common-banner-cross">
        <div class="bg-shade">
            <div class="common-banner-content center-text-align">
                <span>Services</span>
                <h1>Cross Platform App Development</h1>
                <p>Want to build robust, scalable and interactive mobile apps that give wonderful experience across all platforms?</p>
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
        <h1 class="common-header-h">Creating <b>Apps That Will Deliver ROI</b> Everytime</h1>
        <p>
            Orfactor has a strong track record of creating cross-platform mobile apps using Appcelerator’s Titanium, Corona, Xamarin, Ionic,
            PhoneGap cordova and other frameworks. Our apps are snappiest and completely fit the needs and goals of your app based business.
            Do not look further; we are here to fit in your every ambition.
        </p>
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

    <div class="core-tech">
        <div class="core-tech-inner">
            <div class="container">
                <h1 class="common-header-h text-center" style="color: #ffffff">Built on <b>Top of Tools</b></h1>
                <p class="common-p mb-5">
                    We’re continually striving to create new value, give new form and uplift quality in every app we develop and deliver.
                    Here we open up a close-up look to one of the best works we have delivered so far.
                </p>
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
                                    <img src="{{asset('Front/site_images/coretech')}}/html5.svg"/>
                                    <p>Html 5</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/phonegap.svg"/>
                                    <p>Phonegap</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/apache-cordova.svg"/>
                                    <p>Apache Cordova</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/xamarin.svg"/>
                                    <p>Xamarin</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="each-tech-d d-flex justify-content-center align-items-center">
                                    <img src="{{asset('Front/site_images/coretech')}}/appcelerator.svg"/>
                                    <p>Appcelerator’s Titanium</p>
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

    @include('Front.get-quote')

@endsection