@section('title', 'Lalavel Development | OrFactor')

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
        <h1 class="common-header-h">Website <b>Design And Development</b> Services</h1>
        <p>
            We are Codiant, an ISO 9001:2015 & ISO/IEC 27001: 2013 certified IT service Provider Company that deals in
            Mobile App Design and Development , Website Design and Development, Startup and Enterprise Application and
            Custom Software Development. Our highly refined work sharpened by latest tools and technologies, proven
            methodologies and reinforced frameworks has sparked a psyche of perfection that has consistently led us to the
            position of one of the best web and app development companies across the globe. Our expert developers and
            designers dig deep to enhance all the touch points that call for a meaningful user experience and ensures
            high performance, scalability, and smooth integration.
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