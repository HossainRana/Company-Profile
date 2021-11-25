@section('title', 'On Demand Trucking App | OrFactor')

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

    <div class="common-banner common-banner-transport">
        <div class="bg-shade">
            <div class="common-banner-content center-text-align">
                <h1>Taxi Booking App Development</h1>
                <p>Get An Uber Like Taxi App Solution and Start Scaling Your Operations and Automating Bookings Quickly</p>
                <div class="inc-sc-btn">
                    <a class="common-banner-btn" href="">
                        Start a project
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bb-f-container">
        <div class="solution-heading-container center-text-align">
            <span>Always Expect More</span>
            <h2 class="solution-heading">An <b>Intelligent Taxi App Solution</b><br/>
                Forged by User Insights and Necessities</h2>
        </div>
        <p>
            It’s the rule of the world, in order to outdo your competitors you’ve to find an epicenter of disruption, a unique selling proposition,
            and a fresh design language that is bold, confident and dynamic. Codiant’s taxi app development solution comes as a rescue in the race
            of modern transportation systems. Fostered by growing complexity of taxi transport dynamics, our optimized taxi app solution drives an
            extensive set of superlative features developed in accordance to rising passenger’s demand and driver’s needs.
        </p>
    </div>

    <div class="us-cd-s-d">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="each-us-cd-s-d">
                        <div class="in-s-d d-flex justify-content-center align-items-center flex-column">
                            <img src="{{asset('Front/site_images/weServe')}}/on-demand.svg">
                            <p>Passenger App</p>
                        </div>
                        <div class="hover-s-d d-flex justify-content-center align-items-center flex-column">
                            <img src="{{asset('Front/site_images/weServe')}}/on-demand.svg">
                            <h3>Passenger App</h3>
                            <p>
                                Leverage our feature-rich passenger app and let your riders book their taxi from anywhere and at any time seamlessly.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="each-us-cd-s-d">
                        <div class="in-s-d d-flex justify-content-center align-items-center flex-column">
                            <img src="{{asset('Front/site_images/weServe')}}/logistics.svg">
                            <p>Driver App</p>
                        </div>
                        <div class="hover-s-d d-flex justify-content-center align-items-center flex-column">
                            <img src="{{asset('Front/site_images/weServe')}}/logistics.svg">
                            <h3>Driver App</h3>
                            <p>
                                A fully customizable app that gives your drivers ability to earn through various mediums like referrals, surge prices, hourly wages, etc.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="each-us-cd-s-d">
                        <div class="in-s-d d-flex justify-content-center align-items-center flex-column">
                            <img src="{{asset('Front/site_images/weServe')}}/real-state.svg">
                            <p>Admin / Dispatcher Panel</p>
                        </div>
                        <div class="hover-s-d d-flex justify-content-center align-items-center flex-column">
                            <img src="{{asset('Front/site_images/weServe')}}/real-state.svg">
                            <h3>Admin / Dispatcher Panel</h3>
                            <p>
                                Control your entire taxi dispatch system through our easy-to-access and robust admin panel and take informed decisions.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="each-us-cd-s-d">
                        <div class="in-s-d d-flex justify-content-center align-items-center flex-column">
                            <img src="{{asset('Front/site_images/weServe')}}/travel.svg">
                            <p>Advanced Features</p>
                        </div>
                        <div class="hover-s-d d-flex justify-content-center align-items-center flex-column">
                            <img src="{{asset('Front/site_images/weServe')}}/travel.svg">
                            <h3>Advanced Features</h3>
                            <p>
                                For your taxi app novelties, we have developed a set of advanced taxi app features that makes your app outstanding.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="a-app-d-step">
        <div class="solution-heading-container center-text-align">
            <span>Exclusive Taxi App Solution For Every Niche</span>
            <h2 class="solution-heading">Developing and Deploying a <br/><b>Taxi App
                    Development Solution for All</b></h2>
        </div>
        <p class="common-p  mb-5">
            Connect, optimize, and automate your fleet with our robust taxi app solution designed for transport businesses of all types and sizes.
            No matter if you are a global startup, a small or large taxi fleet owner or a taxi aggregator looking to move taxi operations online!
            We are your single contact point to develop custom on-demand taxi app development solutions for multiple use cases like:
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

    <div class="recent-work-container" style="background-color: #000048">
        <div class="container">
            <div class="recent-heading">
                <span style="color: #ffffff">Projects</span>
                <div style="display: flex; flex-direction: row; justify-content: space-between">
                    <h2 style="color: #ffffff">Creating <b>Thoughtful Brands</b> Not Just Products</h2>
                    <ul class="ul__list--inline slider__arrow" style="padding-top: 15px">
                        <li class="arrow__left pointer mr-3 position-relative"><i class="material-icons-outlined" aria-hidden="true">chevron_left</i></li>
                        <li class="arrow__right pointer position-relative"><i class="material-icons-outlined" aria-hidden="true">chevron_right</i></li>
                    </ul>
                </div>
            </div>
            <div class="overflow-hidden position-relative">
                <div class="bg__grub--slider">
                    <div class="row pb-5 pl-4">
                        <div class="col-md-12 col-lg-12 my-auto p-0">
                            <ul class="ul__list--inline slider__offset">
                                <li class="pl-3 pr-3 images__slider no__outline">
                                    <div class="recent-each-d">
                                        <a href="#">
                                            <img src="{{asset('Front/site_images/exploreRecent')}}/click-drs.jpg"/>
                                            <div class="recent-each-d-details">
                                                <h3>Click Drs</h3>

                                                <div class="recent-each-d-details-inner">
                                                    <h4>Health & Telemedicine</h4>
                                                    <p>App Development</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="pl-3 pr-3 images__slider no__outline">
                                    <div class="recent-each-d">
                                        <a href="#">
                                            <img src="{{asset('Front/site_images/exploreRecent')}}/azooz.jpg"/>
                                            <div class="recent-each-d-details">
                                                <h3>Azooz</h3>

                                                <div class="recent-each-d-details-inner">
                                                    <h4>Food & Restuarent</h4>
                                                    <p>App Development</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="pl-3 pr-3 images__slider no__outline">
                                    <div class="recent-each-d">
                                        <a href="#">
                                            <img src="{{asset('Front/site_images/exploreRecent')}}/kurd-taxi.jpg"/>
                                            <div class="recent-each-d-details">
                                                <h3>Click Drs</h3>

                                                <div class="recent-each-d-details-inner">
                                                    <h4>Kurad Taxi</h4>
                                                    <p>App Development</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li class="pl-3 pr-3 images__slider no__outline">
                                    <div class="recent-each-d">
                                        <a href="#">
                                            <img src="{{asset('Front/site_images/exploreRecent')}}/baitok.jpg"/>
                                            <div class="recent-each-d-details">
                                                <h3>Baitok</h3>

                                                <div class="recent-each-d-details-inner">
                                                    <h4>Real Estate</h4>
                                                    <p>App Development</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-btn-d">
            <a href="#">View All Project</a>
        </div>
    </div>

    @include('Front.get-quote')

    <script>
        $('.slider__offset').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: $(".arrow__left"),
            nextArrow: $(".arrow__right"),
            fade: false,
            infinite: true,
            autoplay: false,
            pauseOnHover:true,
            focusOnSelect: true,
            centerPadding: 0,
            slideMargin: 10,
            centerPadding: 0,
            responsive: [
                {
                    breakpoint: 1140,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 577,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    </script>

@endsection