@section('title', 'iPad App Development | OrFactor')

@extends('Front.layout')

@section('content')
    @include('Front.fix-button')

    <div class="common-banner common-banner-ipad">
        <div class="bg-shade">
            <div class="common-banner-content center-text-align">
                <span>The Most Reliable</span>
                <h1>Ipad App Development Company</h1>
                <p>Propel your business forward with our custom iPad app development solutions that suit your business needs in the <br/>
                    most cost-effective and strategic way possible.</p>
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

    @include('Front.get-quote')

@endsection