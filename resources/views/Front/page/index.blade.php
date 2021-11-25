@section('title', 'Home | OrFactor')

@extends('Front.layout')

@section('content')

    <style>

        .contactForm {
            width: calc(100% - 20px);
            max-width: 700px;
            margin: 0 auto;
        }

        /* STYLES FOR FORM */
        form {
            width: 100%;
            display: grid;
            grid-gap: 30px;
            padding-top: 20px;
        }

        .inputGroup {
            width: 100%;
            position: relative;
        }

        .inputGroup1 {
            grid-column: 1;
            grid-row: 1;
        }
        .inputGroup2 {
            grid-column: 2;
            grid-row: 1;
        }
        .inputGroup3 {
            grid-column: 1;
            grid-row: 2;
        }
        .inputGroup4 {
            grid-column: 2;
            grid-row: 2;
        }
        .inputGroup5 {
            grid-column: 1 / span 2;
            grid-row: 3;
        }
        .inputGroup6 {
            grid-column: 1 / span 2;
            grid-row: 4;
        }
        .inputGroup7 {
            grid-column: 2;
            grid-row: 5;
            text-align: right;
        }


        .inputGroup__textfield {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100%;
            font-size: 13px;
            padding: 15px;
            border: 1px solid #000048;
            outline: 0;
            border-radius: 5px;
            transition: border 0.3s ease-in-out;
        }
        .inputGroup__textfield:focus, .inputGroup__textfield:active {
            border: 1px solid #D9D9D9;
        }


        .contactForm button {
            padding: 15px;
            width: 50%;
            border: 0;
            background: #00d700;
            cursor: pointer;
            color: #FFF;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 5px 10px 0 rgb(0 0 0 / 10%);
            border-radius: 5px;
        }

        .contactForm button:hover {
            box-shadow: 0px 10px 30px 0 rgba(0, 0, 0, 0.2);
        }


        /* STYLES FOR VALIDATION WARNING */
        .hf-warning {
            position: absolute !important;
            top: 0 !important;
            right: 0 !important;
            transform: translate(-15%, -50%) !important;
            background: orangered !important;
            display: inline-block !important;
            padding: 7px 14px !important;
            color: #FFFFFF !important;
            font-size: 11px !important;
            font-family: sans-serif;
            box-shadow: 0px 5px 10px 0 rgba(0, 0, 0, 0.1) !important;
            border: 0 !important;
            border-radius: 2px !important;
        }

        .hf-warning:after {
            content: "";
            width: 10px;
            height: 10px;
            background: orangered;
            position: absolute;
            z-index: 1;
            bottom: -5px;
            right: 15px;
            transform: rotate(45deg);
        }


        @media screen and (max-width: 480px) {
            form {
                display: flex !important;
                flex-wrap: wrap;
            }

            form > div {
                margin-bottom: 30px;
            }
        }

    </style>

    @include('Front.fix-button')

    <div class="index-container">
        {{--            Banner Section          --}}

        <div class="home-banner-container">
{{--            <div class="banner" id="firstBanner">
                <div class="banner-img">
                    <img src="{{asset('Front/site_images/banner/1.jpg')}}"/>
--}}{{--                    <img src="https://cdn.pixabay.com/photo/2013/07/18/10/56/domino-163522_960_720.jpg"/>--}}{{--
                </div>
                <div class="banner-content">
                    <div class="details-info">
                        <span>Experience A New Degree Of Innovation</span>
                        <h1>The Ultimate Mobile App <br/>& Web Solutions for Every Trade</h1>
                        <p>Accelerate your business growth with our customer-led, insights driven and <br/> innovative solutions</p>
                        <a href="#" class="first-banner-btn"><span>Start a Project</span></a>
                        <img src="https://www.codiant.com/assets/images/home/client_logo.webp" class="client-logo"/>
                    </div>
                </div>
            </div>--}}

            <div class="wrapper" id="secondBanner">
                <video autoplay loop muted class="wrapper__video">
                    <source src="{{asset('Front/site_images/banner/Cat - 85465.mp4')}}">
                </video>

                <div class="second-banner-content">
                    <div class="second-details-info">
                        <h1>Custom Software<br/> Design + Development</h1>
                        <h2>You know where your company needs to go.<br/> Atomic Object can help you get there.</h2>
                        <a href="#" class="second-banner-btn"><span>Tell us about your Project</span></a>
                    </div>
                </div>
            </div>
        </div>


        {{--            Services Section            --}}

        <div class="service-section">
            <div class="section-grid">
                <h2 class="section-title">Our Services</h2>
                <div class="service-menu-container">
                    <ul class="section-ul" id="service-nav">
                        <li class="service-li active-li" id="serviceOne">Application services</li>
                        <li class="service-li" id="serviceTwo">Technology advisory</li>
                        <li class="service-li" id="serviceThree">Digital enterprise</li>
                        <li class="service-li" id="serviceFour">Data analysis</li>
                        <li class="service-li" id="serviceFive">Intelligent automation</li>
                        <li class="service-li" id="serviceSix">Managed IT services</li>
                    </ul>
                </div>
            </div>
            <div class="section-grid">
                <div class="services-detail-container">
                    <div id="serviceOneDetails">
                        <h1 class="service-details-heading">Application Services</h1>
                        <p>
                            Our software development company delivers corporate and consumer applications based on our profound understanding of technologies and the markets they operate in.
                            With our professional mindset, we look beyond technology to offer viable solutions for your particular business context.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Application development</h5>
                                    </a>
                                    <p>We engineer digital solutions of any complexity, combining our multidisciplinary tech expertise with industry experience.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Application security</h5>
                                    </a>
                                    <p>We ensure enterprise-grade application security through audit, testing, secure development practices, and training.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 28px">
                            <div class="col-md-12">
                                <div class="service-card with-img">
                                    <div class="row">
                                        <div class="col-md-5 p-0">
                                            <img src="https://cdn.pixabay.com/photo/2015/03/10/15/22/macbook-667280_960_720.jpg" width="100%"/>
                                        </div>
                                        <div class="col-md-7 p-0">
                                            <div class="services-img-inner">
                                                <a href="#">
                                                    <h5>Enterprise app integration</h5>
                                                </a>
                                                <p>We integrate enterprise systems to create interconnected ecosystems for seamless enterprise management.</p>
                                                <a class="arrow-link" href="#" style="right: 30px !important;">
                                                    <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 28px">
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Enterprise app integration</h5>
                                    </a>
                                    <p>We integrate enterprise systems to create interconnected ecosystems for seamless enterprise management.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>QA & testing</h5>
                                    </a>
                                    <p>We make application testing a part of the software delivery cycle as well as offering it as a standalone service.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="serviceTwoDetails">
                        <h1 class="service-details-heading">Technology advisory</h1>
                        <p>
                            Our software development company delivers corporate and consumer applications based on our profound understanding of technologies and the markets they operate in.
                            With our professional mindset, we look beyond technology to offer viable solutions for your particular business context.
                        </p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Microsoft</h5>
                                    </a>
                                    <p>A Microsoft Gold Partner, we master the full range of Microsoft products to create digital workplaces, BI systems, cloud solutions, and more.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Salesforce</h5>
                                    </a>
                                    <p>We’re certified Salesforce consultants bringing the platform to enterprises and SMBs while also customizing and upgrading live solutions.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>SAP Commerce</h5>
                                    </a>
                                    <p>As a SAP Silver Partner, we help businesses adopt SAP’s flagship CXM platform to power customer operations.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 28px">
                            <div class="col-md-12">
                                <div class="service-card with-img">
                                    <div class="row">
                                        <div class="col-md-5 p-0">
                                            <img src="https://cdn.pixabay.com/photo/2015/03/10/15/22/macbook-667280_960_720.jpg" width="100%"/>
                                        </div>
                                        <div class="col-md-7 p-0">
                                            <div class="services-img-inner">
                                                <a href="#">
                                                    <h5>Enterprise app integration</h5>
                                                </a>
                                                <p>We integrate enterprise systems to create interconnected ecosystems for seamless enterprise management.</p>
                                                <a class="arrow-link" href="#" style="right: 30px !important;">
                                                    <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 28px">
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Enterprise app integration</h5>
                                    </a>
                                    <p>We integrate enterprise systems to create interconnected ecosystems for seamless enterprise management.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>QA & testing</h5>
                                    </a>
                                    <p>We make application testing a part of the software delivery cycle as well as offering it as a standalone service.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="serviceThreeDetails">
                        <h1 class="service-details-heading">Digital enterprise</h1>
                        <p>
                            Our software development company delivers corporate and consumer applications based on our profound understanding of technologies and the markets they operate in.
                            With our professional mindset, we look beyond technology to offer viable solutions for your particular business context.
                        </p>
                        <div class="row" style="margin-top: 28px">
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>ERP</h5>
                                    </a>
                                    <p>We integrate enterprise systems to create interconnected ecosystems for seamless enterprise management.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>RPA</h5>
                                    </a>
                                    <p>We make application testing a part of the software delivery cycle as well as offering it as a standalone service.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 28px">
                            <div class="col-md-12">
                                <div class="service-card with-img">
                                    <div class="row">
                                        <div class="col-md-5 p-0">
                                            <img src="https://cdn.pixabay.com/photo/2015/03/10/15/22/macbook-667280_960_720.jpg" width="100%"/>
                                        </div>
                                        <div class="col-md-7 p-0">
                                            <div class="services-img-inner">
                                                <a href="#">
                                                    <h5>Enterprise app integration</h5>
                                                </a>
                                                <p>We integrate enterprise systems to create interconnected ecosystems for seamless enterprise management.</p>
                                                <a class="arrow-link" href="#" style="right: 30px !important;">
                                                    <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Microsoft</h5>
                                    </a>
                                    <p>A Microsoft Gold Partner, we master the full range of Microsoft products to create digital workplaces, BI systems, cloud solutions, and more.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Salesforce</h5>
                                    </a>
                                    <p>We’re certified Salesforce consultants bringing the platform to enterprises and SMBs while also customizing and upgrading live solutions.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>SAP Commerce</h5>
                                    </a>
                                    <p>As a SAP Silver Partner, we help businesses adopt SAP’s flagship CXM platform to power customer operations.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="serviceFourDetails">
                        <h1 class="service-details-heading">Data analytics</h1>
                        <p>
                            Our software development company delivers corporate and consumer applications based on our profound understanding of technologies and the markets they operate in.
                            With our professional mindset, we look beyond technology to offer viable solutions for your particular business context.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Data science</h5>
                                    </a>
                                    <p>We engineer digital solutions of any complexity, combining our multidisciplinary tech expertise with industry experience.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Predictive analytics</h5>
                                    </a>
                                    <p>We ensure enterprise-grade application security through audit, testing, secure development practices, and training.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 28px">
                            <div class="col-md-12">
                                <div class="service-card with-img">
                                    <div class="row">
                                        <div class="col-md-5 p-0">
                                            <img src="https://cdn.pixabay.com/photo/2015/03/10/15/22/macbook-667280_960_720.jpg" width="100%"/>
                                        </div>
                                        <div class="col-md-7 p-0">
                                            <div class="services-img-inner">
                                                <a href="#">
                                                    <h5>Businsess intelligence</h5>
                                                </a>
                                                <p>We integrate enterprise systems to create interconnected ecosystems for seamless enterprise management.</p>
                                                <a class="arrow-link" href="#" style="right: 30px !important;">
                                                    <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 28px">
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Tableau</h5>
                                    </a>
                                    <p>We integrate enterprise systems to create interconnected ecosystems for seamless enterprise management.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Power BI</h5>
                                    </a>
                                    <p>We make application testing a part of the software delivery cycle as well as offering it as a standalone service.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="serviceFiveDetails">
                        <h1 class="service-details-heading">Intelligent automation</h1>
                        <p>
                            Our software development company delivers corporate and consumer applications based on our profound understanding of technologies and the markets they operate in.
                            With our professional mindset, we look beyond technology to offer viable solutions for your particular business context.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Block chain</h5>
                                    </a>
                                    <p>We engineer digital solutions of any complexity, combining our multidisciplinary tech expertise with industry experience.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Computer vision</h5>
                                    </a>
                                    <p>We ensure enterprise-grade application security through audit, testing, secure development practices, and training.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 28px">
                            <div class="col-md-12">
                                <div class="service-card with-img">
                                    <div class="row">
                                        <div class="col-md-5 p-0">
                                            <img src="https://cdn.pixabay.com/photo/2015/03/10/15/22/macbook-667280_960_720.jpg" width="100%"/>
                                        </div>
                                        <div class="col-md-7 p-0">
                                            <div class="services-img-inner">
                                                <a href="#">
                                                    <h5>Artificial intelligence</h5>
                                                </a>
                                                <p>We integrate enterprise systems to create interconnected ecosystems for seamless enterprise management.</p>
                                                <a class="arrow-link" href="#" style="right: 30px !important;">
                                                    <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 28px">
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Enterprise app integration</h5>
                                    </a>
                                    <p>We integrate enterprise systems to create interconnected ecosystems for seamless enterprise management.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>QA & testing</h5>
                                    </a>
                                    <p>We make application testing a part of the software delivery cycle as well as offering it as a standalone service.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="serviceSixDetails">
                        <h1 class="service-details-heading">Manage IT services</h1>
                        <p>
                            Our software development company delivers corporate and consumer applications based on our profound understanding of technologies and the markets they operate in.
                            With our professional mindset, we look beyond technology to offer viable solutions for your particular business context.
                        </p>
                        <div class="row" style="margin-top: 28px">
                            <div class="col-md-12">
                                <div class="service-card with-img">
                                    <div class="row">
                                        <div class="col-md-5 p-0">
                                            <img src="https://cdn.pixabay.com/photo/2015/03/10/15/22/macbook-667280_960_720.jpg" width="100%"/>
                                        </div>
                                        <div class="col-md-7 p-0">
                                            <div class="services-img-inner">
                                                <a href="#">
                                                    <h5>Enterprise app integration</h5>
                                                </a>
                                                <p>We integrate enterprise systems to create interconnected ecosystems for seamless enterprise management.</p>
                                                <a class="arrow-link" href="#" style="right: 30px !important;">
                                                    <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 28px">
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>ERP</h5>
                                    </a>
                                    <p>We integrate enterprise systems to create interconnected ecosystems for seamless enterprise management.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>RPA</h5>
                                    </a>
                                    <p>We make application testing a part of the software delivery cycle as well as offering it as a standalone service.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Microsoft</h5>
                                    </a>
                                    <p>A Microsoft Gold Partner, we master the full range of Microsoft products to create digital workplaces, BI systems, cloud solutions, and more.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>Salesforce</h5>
                                    </a>
                                    <p>We’re certified Salesforce consultants bringing the platform to enterprises and SMBs while also customizing and upgrading live solutions.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-card">
                                    <a href="#">
                                        <h5>SAP Commerce</h5>
                                    </a>
                                    <p>As a SAP Silver Partner, we help businesses adopt SAP’s flagship CXM platform to power customer operations.</p>
                                    <a class="arrow-link" href="#">
                                        <svg class="arrow-svg" width="28" height="26" viewBox="0 0 28 26" fill="none"><path d="M15 2L26 13M26 13L15 24M26 13L2 13" stroke="#e5c702" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--            Industries We Serve Section         --}}

        <div class="industry-container">
            <div class="container" style="height: 100%">
                <div class="inds-heading-container center-text-align">
                    <span>Driving Enterprise-Wide Digital Transformation</span>
                    <h2 class="inds-heading">Industries We Serve</h2>
                    <p>Empowering businesses across verticals by leveraging the power of mobility that help accelerate innovation, <br/> reduce costs and improve performance. </p>
                </div>

                <ul class="indus-nav nav nav-pills" id="indusTab" role="tablist">
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link active" id="health-tab" data-toggle="pill" href="#healthCare" role="tab" aria-controls="healthCare" aria-selected="true">Healthcare & <br/> Fitness</a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link" id="ondemand-tab" data-toggle="pill" href="#onDemand" role="tab" aria-controls="onDemand" aria-selected="false">On-Demand & <br/>Solution</a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link" id="transport-tab" data-toggle="pill" href="#transport" role="tab" aria-controls="transport" aria-selected="false">Transport & Automation</a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link" id="enterprise-tab" data-toggle="pill" href="#enterprise" role="tab" aria-controls="enterprise" aria-selected="false">Enterprise Mobility</a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link" id="food-tab" data-toggle="pill" href="#food" role="tab" aria-controls="food" aria-selected="false">Food & Restaurant<br/></a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link" id="ecommerce-tab" data-toggle="pill" href="#ecommerce" role="tab" aria-controls="ecommerce" aria-selected="false">eCommerce, Retail <br/> & B2B</a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link" id="property-tab" data-toggle="pill" href="#property" role="tab" aria-controls="property" aria-selected="false">Real Estate & Property</a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link" id="social-tab" data-toggle="pill" href="#social" role="tab" aria-controls="social" aria-selected="false">Social <br/> Networking</a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link" id="app-tab" data-toggle="pill" href="#app" role="tab" aria-controls="app" aria-selected="false">Marketplace App</a>
                    </li>
                    <li class="indus-nav-item nav-item">
                        <a class="indus-nav-link nav-link"id="beauty-tab" data-toggle="pill" href="#beauty" role="tab" aria-controls="beauty" aria-selected="false">Beauty & Wellness</a>
                    </li>
                </ul>

                <div class="tab-content indus-details" id="indusContent">
                    <div class="tab-pane fade show active" id="healthCare" role="tabpanel" aria-labelledby="health-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-d-img">
                                    <img src="{{asset('Front/site_images/industries')}}/healthcare-and-fitness.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-content">
                                    <div class="right-top">
                                        <h1>Healthcare & Fitness</h1>
                                        <p>
                                            Optimize clinical workﬂows, Reduce operating costs, and advance the quality of care
                                            through our full-service capabilities and focused expertise in patient-centered
                                            solutions for Care providers, Doctors, Pharmacists and Healthcare organizations.
                                        </p>
                                    </div>
                                    <div class="right-bottom">
                                        <h1>Our Expertise</h1>
                                        <div class="row bottom-list">
                                            <div class="col-sm-5 col-md-6">
                                                <p>
                                                    <a href="#">
                                                        Mobile Hospital Management Solutions
                                                    </a>
                                                </p>
                                                <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                                <p>EHR and EMR software solutions</p>
                                            </div>
                                            <div class="col-sm-7 col-md-6">
                                                <p>Clinical management system software</p>
                                                <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                                <p><a href="#">Fitness apps</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="onDemand" role="tabpanel" aria-labelledby="ondemand-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-d-img">
                                    <img src="{{asset('Front/site_images/industries')}}/on-demand-solutions.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-content">
                                    <div class="right-top">
                                        <h1>On-Demand Solutions</h1>
                                        <p>
                                            Start capitalizing on the wide-range of possibilities that on demand delivery economy offers.
                                            Having developed a wealth of on-demand projects, we proffer our clients with all the popular
                                            categories of on-demand services varying from online marketplace, transportation, housing and food delivery.
                                        </p>
                                    </div>
                                    <div class="right-bottom">
                                        <h1>Our Expertise</h1>
                                        <div class="row bottom-list">
                                            <div class="col-sm-5 col-md-6">
                                                <p>
                                                    <a href="#">
                                                        Mobile Hospital Management Solutions
                                                    </a>
                                                </p>
                                                <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                                <p>EHR and EMR software solutions</p>
                                            </div>
                                            <div class="col-sm-7 col-md-6">
                                                <p>Clinical management system software</p>
                                                <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                                <p><a href="#">Fitness apps</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="transport" role="tabpanel" aria-labelledby="transport-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-d-img">
                                    <img src="{{asset('Front/site_images/industries')}}/transport-and-automation.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-content">
                                    <div class="right-top">
                                        <h1>Transport and Automation</h1>
                                        <p>
                                            Seize the power of mobility with Codiant’s highly configurable and smartly engineered taxi management solution that
                                            automates bookings and simpliﬁes dispatch process. We create custom front end mobile apps, dashboards and analytic panels.
                                        </p>
                                    </div>
                                    <div class="right-bottom">
                                        <h1>Our Expertise</h1>
                                        <div class="row bottom-list">
                                            <div class="col-sm-5 col-md-6">
                                                <p>
                                                    <a href="#">
                                                        Mobile Hospital Management Solutions
                                                    </a>
                                                </p>
                                                <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                                <p>EHR and EMR software solutions</p>
                                            </div>
                                            <div class="col-sm-7 col-md-6">
                                                <p>Clinical management system software</p>
                                                <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                                <p><a href="#">Fitness apps</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="transport" role="tabpanel" aria-labelledby="transport-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-d-img">
                                    <img src="{{asset('Front/site_images/industries')}}/transport-and-automation.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-content">
                                    <div class="right-top">
                                        <h1>Transport and Automation</h1>
                                        <p>
                                            Seize the power of mobility with Codiant’s highly configurable and smartly engineered taxi management solution that
                                            automates bookings and simpliﬁes dispatch process. We create custom front end mobile apps, dashboards and analytic panels.
                                        </p>
                                    </div>
                                    <div class="right-bottom">
                                        <h1>Our Expertise</h1>
                                        <div class="row bottom-list">
                                            <div class="col-sm-5 col-md-6">
                                                <p>
                                                    <a href="#">
                                                        Mobile Hospital Management Solutions
                                                    </a>
                                                </p>
                                                <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                                <p>EHR and EMR software solutions</p>
                                            </div>
                                            <div class="col-sm-7 col-md-6">
                                                <p>Clinical management system software</p>
                                                <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                                <p><a href="#">Fitness apps</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="enterprise" role="tabpanel" aria-labelledby="enterprise-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-d-img">
                                    <img src="{{asset('Front/site_images/industries')}}/enterprise-mobility.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-content">
                                    <div class="right-top">
                                        <h1>Enterprise Mobility</h1>
                                        <p>
                                            Achieve new levels of efficiency, performance, and customer satisfaction- faster and easier than ever before.
                                            Codiant’s Enterprise Solutions and services are designed for large-scale businesses and enterprises with deep
                                            functional fit built-in that accurately aligns with your unique business processes.
                                        </p>
                                    </div>
                                    <div class="right-bottom">
                                        <h1>Our Expertise</h1>
                                        <div class="row bottom-list">
                                            <div class="col-sm-5 col-md-6">
                                                <p>
                                                    <a href="#">
                                                        Mobile Hospital Management Solutions
                                                    </a>
                                                </p>
                                                <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                                <p>EHR and EMR software solutions</p>
                                            </div>
                                            <div class="col-sm-7 col-md-6">
                                                <p>Clinical management system software</p>
                                                <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                                <p><a href="#">Fitness apps</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="food" role="tabpanel" aria-labelledby="food-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-d-img">
                                    <img src="{{asset('Front/site_images/industries')}}/food-and-restaurant.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-content">
                                    <div class="right-top">
                                        <h1>Food & Restaurant</h1>
                                        <p>
                                            Streamline food deliveries, improvise operational efficiency and enhance customer experience with our robust,
                                            dynamic and customizable online food delivery solution developed for quick-serve & fast casual restaurants, enterprises and aggregators.
                                        </p>
                                    </div>
                                    <div class="right-bottom">
                                        <h1>Our Expertise</h1>
                                        <div class="row bottom-list">
                                            <div class="col-sm-5 col-md-6">
                                                <p>
                                                    <a href="#">
                                                        Mobile Hospital Management Solutions
                                                    </a>
                                                </p>
                                                <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                                <p>EHR and EMR software solutions</p>
                                            </div>
                                            <div class="col-sm-7 col-md-6">
                                                <p>Clinical management system software</p>
                                                <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                                <p><a href="#">Fitness apps</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-d-img">
                                    <img src="{{asset('Front/site_images/industries')}}/mcommerce.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-content">
                                    <div class="right-top">
                                        <h1>eCommerce, Retail & B2B</h1>
                                        <p>
                                            Launch a flexible, scalable, and high performance eCommerce store or marketplace app that converts, make your store secured and build customer
                                            trust for higher repeat sales. Our eCommerce development services are designed specifically to drive quality traffic, increase customer satisfaction and revolutionize brands lucratively.
                                        </p>
                                    </div>
                                    <div class="right-bottom">
                                        <h1>Our Expertise</h1>
                                        <div class="row bottom-list">
                                            <div class="col-sm-5 col-md-6">
                                                <p>
                                                    <a href="#">
                                                        Mobile Hospital Management Solutions
                                                    </a>
                                                </p>
                                                <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                                <p>EHR and EMR software solutions</p>
                                            </div>
                                            <div class="col-sm-7 col-md-6">
                                                <p>Clinical management system software</p>
                                                <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                                <p><a href="#">Fitness apps</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="property" role="tabpanel" aria-labelledby="property-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-d-img">
                                    <img src="{{asset('Front/site_images/industries')}}/real-estate-property.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-content">
                                    <div class="right-top">
                                        <h1>Real Estate & Property</h1>
                                        <p>
                                            Codiant provides unsurpassable Real estate mobile app, website, portal and CRM solutions that delivers information-rich and integrated experience for Realtors, Brokers and Estate companies.
                                        </p>
                                    </div>
                                    <div class="right-bottom">
                                        <h1>Our Expertise</h1>
                                        <div class="row bottom-list">
                                            <div class="col-sm-5 col-md-6">
                                                <p>
                                                    <a href="#">
                                                        Mobile Hospital Management Solutions
                                                    </a>
                                                </p>
                                                <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                                <p>EHR and EMR software solutions</p>
                                            </div>
                                            <div class="col-sm-7 col-md-6">
                                                <p>Clinical management system software</p>
                                                <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                                <p><a href="#">Fitness apps</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-d-img">
                                    <img src="{{asset('Front/site_images/industries')}}/social-networking.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-content">
                                    <div class="right-top">
                                        <h1>Social Networking</h1>
                                        <p>
                                            Tap into one of the most promising markets of app industry and give users an avenue to create, share, and promote
                                            meaningful content that help them connect, discover, and engage with others. Our social networking solutions holds an incredible power to drive change.
                                        </p>
                                    </div>
                                    <div class="right-bottom">
                                        <h1>Our Expertise</h1>
                                        <div class="row bottom-list">
                                            <div class="col-sm-5 col-md-6">
                                                <p>
                                                    <a href="#">
                                                        Mobile Hospital Management Solutions
                                                    </a>
                                                </p>
                                                <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                                <p>EHR and EMR software solutions</p>
                                            </div>
                                            <div class="col-sm-7 col-md-6">
                                                <p>Clinical management system software</p>
                                                <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                                <p><a href="#">Fitness apps</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="app" role="tabpanel" aria-labelledby="app-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-d-img">
                                    <img src="{{asset('Front/site_images/industries')}}/marketplace.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-content">
                                    <div class="right-top">
                                        <h1>TMarketplace App</h1>
                                        <p>
                                            Reinforce your brand, connect with your customers and boost profits with Codiant’s custom marketplace app development services.
                                        </p>
                                    </div>
                                    <div class="right-bottom">
                                        <h1>Our Expertise</h1>
                                        <div class="row bottom-list">
                                            <div class="col-sm-5 col-md-6">
                                                <p>
                                                    <a href="#">
                                                        Mobile Hospital Management Solutions
                                                    </a>
                                                </p>
                                                <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                                <p>EHR and EMR software solutions</p>
                                            </div>
                                            <div class="col-sm-7 col-md-6">
                                                <p>Clinical management system software</p>
                                                <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                                <p><a href="#">Fitness apps</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="beauty" role="tabpanel" aria-labelledby="beatuy-tab">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left-d-img">
                                    <img src="{{asset('Front/site_images/industries')}}/beauty-and-wellness.jpg"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="right-content">
                                    <div class="right-top">
                                        <h1>Beauty & Wellness</h1>
                                        <p>
                                            Get developed the best-in-class on-demand beauty service mobile app for your beauty salon.
                                            With an Uber-like beauty app, brands, beautician, and makeup artists can reduce wait times,
                                            entice new customers through offers, loyalty programs and book more customers swiftly.
                                        </p>
                                    </div>
                                    <div class="right-bottom">
                                        <h1>Our Expertise</h1>
                                        <div class="row bottom-list">
                                            <div class="col-sm-5 col-md-6">
                                                <p>
                                                    <a href="#">
                                                        Mobile Hospital Management Solutions
                                                    </a>
                                                </p>
                                                <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                                <p>EHR and EMR software solutions</p>
                                            </div>
                                            <div class="col-sm-7 col-md-6">
                                                <p>Clinical management system software</p>
                                                <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                                <p><a href="#">Fitness apps</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients-container">
            <div class="container" style="height: 100%">
                <div class="client-heading-container center-text-align">
                    <span>Empowering Businesses beyond the Digital Frontier</span>
                    <h2 class="client-heading">Clients We Cater</h2>
                    <p>From ideation and conceptualization to application development, ready-to-deploy assets, marketing and support, Codiant delights clients
                        of all sizes through agile deliveries and simplified solutions. Join hands with us and get ready to take off your business to intelligent digital transformation- with zero turbulence.
                    </p>
                </div>
            </div>
            <div class="client-details-container">
                <div class="client-details">
                    <ul class="nav nav-pills" role="tablist" style="margin-bottom: 35px" id="clientNav">
                        <li class="nav-item"><a class="client-nav-link nav-link active" id="enterprise-tab" href="#enterprise-client" data-toggle="tab" aria-controls="enterprise-client" aria-selected="true">Large Enterprises</a></li>
                        <li class="nav-item"><a class="client-nav-link nav-link" id="small-tab" href="#small" data-toggle="tab" aria-controls="small" aria-selected="false">Small to Medium Enterprise (SME)</a></li>
                        <li class="nav-item"><a class="client-nav-link nav-link" id="medium-tab" href="#medium" data-toggle="tab" aria-controls="medium" aria-selected="false">Small to Medium Business(SMB)</a></li>
                        <li class="nav-item"><a class="client-nav-link nav-link" id="startup-tab" href="#startup" data-toggle="tab" aria-controls="startup" aria-selected="false">Startups</a></li>
                    </ul>

                    <div class="tab-content" id="clientTab">
                        <div class="tab-pane fade show active" id="enterprise-client" role="tabpanel" aria-labelledby="enterprise-tab">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="client-left-content">
                                        <h1>Make Difference with Codiant </h1>
                                        <ul class="client-left-ul">
                                            <li>Innovate flexibly and operate effectively with our well-rounded digital capabilities</li>
                                            <li>Build enterprise-grade apps and web platforms designed to reduce complexity and costs</li>
                                            <li>Hire a dedicated and scalable team of software professionals, designers and marketing strategists</li>
                                            <li>Improve your time-to-market with our read-to-deploy software assets</li>
                                            <li>Drive value with our technology capabilities in Machine Learning, AI, IoT, Blockchain and Big Data Analytics.</li>
                                        </ul>

                                        <h1>Committed To Drive Value</h1>

                                        <ul class="client-left-ul">
                                            <li>Trusted By 500+ enterprise clients Including Fortune 500 companies</li>
                                            <li>Obtain a focused and passionate team of top programmers working on your terms and time</li>
                                            <li>Agile software development process for high degree of collaboration and transparency</li>
                                            <li>Customized solutions to meet your specific business or technology needs</li>
                                            <li>Keep on top of regulatory changes and meet compliance requirements</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="client-right-img">
                                        <img src="https://cdn.pixabay.com/photo/2018/02/27/06/30/skyscrapers-3184798_960_720.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="small" role="tabpanel" aria-labelledby="small-tab">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="client-left-content">
                                        <h1>Make Difference with Codiant </h1>
                                        <ul class="client-left-ul">
                                            <li>Strengthen your operations with our end-to-end solution offerings and digital expertise</li>
                                            <li>Be agile and innovate with our ready-to-deploy solutions across industries</li>
                                            <li>Scale operations with full flexibility as we provide you full-time highly skilled and flexible team structure</li>
                                            <li>Reduce operational costs, minimize risks and complexities with our custom integration services</li>
                                            <li>Increase your customer base with our proven strategies, methodologies and engagement tools</li>
                                            <li>Enhance profitability with our fully automated digital solutions for your entire supply chain</li>
                                        </ul>

                                        <h1>Move with Speed and Confidence</h1>

                                        <ul class="client-left-ul">
                                            <li>Customized solutions to meet your specific business requirements and challenges</li>
                                            <li>Agile software development process with your complete involvement and full transparency</li>
                                            <li>Gain clarity to your future product vision and obtain recommendations from our market experts.</li>
                                            <li>Flexible working models; from hiring a single developer to a dedicated project team (all available at minimal notice)</li>
                                            <li>Leverage our shrewd technical expertise in new technologies, processes and tools</li>
                                            <li>Frictionless client onboarding with clear timelines and project estimations</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="client-right-img">
                                        <img src="https://cdn.pixabay.com/photo/2015/01/08/18/27/startup-593341_960_720.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="medium" role="tabpanel" aria-labelledby="medium-tab">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="client-left-content">
                                        <h1>Make Difference with Codiant </h1>
                                        <ul class="client-left-ul">
                                            <li>Innovate flexibly and operate effectively with our well-rounded digital capabilities</li>
                                            <li>Build enterprise-grade apps and web platforms designed to reduce complexity and costs</li>
                                            <li>Hire a dedicated and scalable team of software professionals, designers and marketing strategists</li>
                                            <li>Improve your time-to-market with our read-to-deploy software assets</li>
                                            <li>Drive value with our technology capabilities in Machine Learning, AI, IoT, Blockchain and Big Data Analytics.</li>
                                        </ul>

                                        <h1>Spend Right and Elevate Big</h1>

                                        <ul class="client-left-ul">
                                            <li>Trusted By 500+ enterprise clients Including Fortune 500 companies</li>
                                            <li>Obtain a focused and passionate team of top programmers working on your terms and time</li>
                                            <li>Agile software development process for high degree of collaboration and transparency</li>
                                            <li>Customized solutions to meet your specific business or technology needs</li>
                                            <li>Keep on top of regulatory changes and meet compliance requirements</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="client-right-img">
                                        <img src="https://cdn.pixabay.com/photo/2016/03/09/09/22/meeting-1245776_960_720.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="startup" role="tabpanel" aria-labelledby="startup-tab">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="client-left-content">
                                        <h1>Make Difference with Codiant </h1>
                                        <ul class="client-left-ul">
                                            <li>Innovate flexibly and operate effectively with our well-rounded digital capabilities</li>
                                            <li>Build enterprise-grade apps and web platforms designed to reduce complexity and costs</li>
                                            <li>Hire a dedicated and scalable team of software professionals, designers and marketing strategists</li>
                                            <li>Improve your time-to-market with our read-to-deploy software assets</li>
                                            <li>Drive value with our technology capabilities in Machine Learning, AI, IoT, Blockchain and Big Data Analytics.</li>
                                        </ul>

                                        <h1>Your Catalyst for Growth</h1>

                                        <ul class="client-left-ul">
                                            <li>Trusted By 500+ enterprise clients Including Fortune 500 companies</li>
                                            <li>Obtain a focused and passionate team of top programmers working on your terms and time</li>
                                            <li>Agile software development process for high degree of collaboration and transparency</li>
                                            <li>Customized solutions to meet your specific business or technology needs</li>
                                            <li>Keep on top of regulatory changes and meet compliance requirements</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="client-right-img">
                                        <img src="https://cdn.pixabay.com/photo/2016/02/19/11/23/women-1209678_960_720.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--            Recent Work         --}}

        <div class="recent-work-container">
            <div class="container">
                <div class="recent-heading">
                    <span>Handcrafted For Excellence</span>
                    <div style="display: flex; flex-direction: row; justify-content: space-between">
                        <h2>Explore Our <b>Recent Work</b></h2>
                        <ul class="ul__list--inline slider__arrow" style="padding-top: 15px">
                            <li class="arrow__left pointer mr-3 position-relative"><i class="material-icons-outlined" aria-hidden="true">chevron_left</i></li>
                            <li class="arrow__right pointer position-relative"><i class="material-icons-outlined" aria-hidden="true">chevron_right</i></li>
                        </ul>
                    </div>`
                </div>
            </div>
            <div class="overflow-hidden position-relative" style="margin: 30px 0 70px">
                <div class="bg__grub--slider p-3">
                    <div class="row pt-5 pb-5 pl-4">
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
            <div class="project-btn-d">
                <a href="#">View All Project</a>
            </div>
        </div>

        {{--            Relationships           --}}
        <div class="relation-container">
            <div class="container" style="height: 100%">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="relation-heading">
                            <span>Our Customer on-boarding Process</span>
                            <h2>Let’s Step Towards<br/> <b>Purposeful Relationships</b></h2>
                            <p>
                                Codiant is your empathetic partner in defining your achievements & success. Our streamlined process of customer on-boarding is frictionless,
                                diligent, and breeds loyalty. We follow a four-pronged process to collaborate with our clients across geographical locations.
                                Here’s how we map clients’ on boarding journey and key milestones.
                            </p>
                            <div class="project-btn-d" style="text-align: left; margin-top: 70px">
                                <a href="#">Let's Work Together</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="relation-right-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="right-content-inner-d">
                                        <img src="{{asset('Front/site_images/relation')}}/service-icon1.png"/>
                                        <h3>Client Interaction</h3>
                                        <p>Call or Meeting</p>
                                        <p>Requirement gathering & Analysis</p>
                                        <p>Problem Definition</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="right-content-inner-d">
                                        <img src="{{asset('Front/site_images/relation')}}/service-icon2.png"/>
                                        <h3>Consolidation</h3>
                                        <p>Call or Meeting</p>
                                        <p>Requirement gathering & Analysis</p>
                                        <p>Problem Definition</p>
                                    </div>
                                </div>

                                <div class="col-md-6" style="margin-top: 30px">
                                    <div class="right-content-inner-d">
                                        <img src="{{asset('Front/site_images/relation')}}/service-icon3.png"/>
                                        <h3>Development</h3>
                                        <p>Call or Meeting</p>
                                        <p>Requirement gathering & Analysis</p>
                                        <p>Problem Definition</p>
                                    </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 30px">
                                    <div class="right-content-inner-d">
                                        <img src="{{asset('Front/site_images/relation')}}/service-icon4.png"/>
                                        <h3>Deliverables</h3>
                                        <p>Call or Meeting</p>
                                        <p>Requirement gathering & Analysis</p>
                                        <p>Problem Definition</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--            Our Solution Offerings          --}}

        <div class="solution-container">
            <div class="container" style="height: 100%">
                <div class="solution-heading-container center-text-align">
                    <span>Exploring New Possibilities, Innovating New Products</span>
                    <h2 class="solution-heading">Our Solution Offerings</h2>
                    <p>Developing smarter, more productive and efficient solutions that augments business values, <br/> fuels exponential growth while reducing time to market.</p>
                </div>

                <ul class="solution-nav nav nav-pills" id="solutionTab" role="tablist">
                    <li class="solution-nav-item nav-item">
                        <a class="solution-nav-link nav-link active" id="solution-health-tab" data-toggle="pill" href="#solution-healthCare" role="tab" aria-controls="solution-healthCare" aria-selected="true">Healthcare & <br/> Fitness</a>
                    </li>
                    <li class="solution-nav-item nav-item">
                        <a class="solution-nav-link nav-link" id="solution-ondemand-tab" data-toggle="pill" href="#solution-onDemand" role="tab" aria-controls="solution-onDemand" aria-selected="false">On-Demand & <br/>Solution</a>
                    </li>
                    <li class="solution-nav-item nav-item">
                        <a class="solution-nav-link nav-link" id="solution-transport-tab" data-toggle="pill" href="#solution-transport" role="tab" aria-controls="solution-transport" aria-selected="false">Transport & Automation</a>
                    </li>
                    <li class="solution-nav-item nav-item">
                        <a class="solution-nav-link" id="solution-enterprise-tab" data-toggle="pill" href="#solution-enterprise" role="tab" aria-controls="solution-enterprise" aria-selected="false">Enterprise Mobility</a>
                    </li>
                    <li class="solution-nav-item nav-item">
                        <a class="solution-nav-link nav-link" id="solution-food-tab" data-toggle="pill" href="#solution-food" role="tab" aria-controls="solution-food" aria-selected="false">Food & Restaurant<br/></a>
                    </li>
                    <li class="solution-nav-item nav-item">
                        <a class="solution-nav-link nav-link" id="solution-ecommerce-tab" data-toggle="pill" href="#solution-ecommerce" role="tab" aria-controls="solution-ecommerce" aria-selected="false">eCommerce, Retail <br/> & B2B</a>
                    </li>
                    <li class="solution-nav-item nav-item">
                        <a class="solution-nav-link nav-link" id="solution-property-tab" data-toggle="pill" href="#solution-property" role="tab" aria-controls="solution-property" aria-selected="false">Real Estate & Property</a>
                    </li>
                    <li class="solution-nav-item nav-item">
                        <a class="solution-nav-link nav-link" id="solution-social-tab" data-toggle="pill" href="#solution-social" role="tab" aria-controls="solution-social" aria-selected="false">Social <br/> Networking</a>
                    </li>
                    <li class="solution-nav-item nav-item">
                        <a class="solution-nav-link nav-link" id="solution-app-tab" data-toggle="pill" href="#solution-app" role="tab" aria-controls="solution-app" aria-selected="false">Marketplace App</a>
                    </li>
                    <li class="solution-nav-item nav-item">
                        <a class="solution-nav-link nav-link"id="solution-beauty-tab" data-toggle="pill" href="#solution-beauty" role="tab" aria-controls="solution-beauty" aria-selected="false">Beauty & Wellness</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content solution-details" id="solutionContent">
                <div class="tab-pane fade show active" id="solution-healthCare" role="tabpanel" aria-labelledby="solution-health-tab">
                    <div class="container">
                        <div class="recent-heading">
                            <h3>Healthcare</h3>
                            <div style="display: flex; flex-direction: row; justify-content: space-between">
                                <p>Empowering care providers and patients by harnessing the power of technology.</p>
                                <ul class="ul__list--inline slider__arrow" style="padding-top: 15px">
                                    <li class="arrow__left pointer mr-3 position-relative"><i class="material-icons-outlined" aria-hidden="true">chevron_left</i></li>
                                    <li class="arrow__right pointer position-relative"><i class="material-icons-outlined" aria-hidden="true">chevron_right</i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden position-relative">
                        <div class="bg__grub--slider p-3">
                            <div class="row pt-5 pb-5 pl-4">
                                <div class="col-md-12 col-lg-12 my-auto p-0">
                                    <ul class="ul__list--inline slider__offset__solution__one">
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
                <div class="tab-pane fade" id="solution-onDemand" role="tabpanel" aria-labelledby="solution-ondemand-tab">
                    <div class="container">
                        <div class="recent-heading">
                            <h3>Healthcare</h3>
                            <div style="display: flex; flex-direction: row; justify-content: space-between">
                                <p>Empowering care providers and patients by harnessing the power of technology.</p>
                                <ul class="ul__list--inline slider__arrow" style="padding-top: 15px">
                                    <li class="arrow__left pointer mr-3 position-relative"><i class="material-icons-outlined" aria-hidden="true">chevron_left</i></li>
                                    <li class="arrow__right pointer position-relative"><i class="material-icons-outlined" aria-hidden="true">chevron_right</i></li>
                                </ul>
                            </div>
                        </div>

                        <div class="overflow-hidden position-relative">
                            <div class="bg__grub--slider p-3">
                                <div class="row pt-5 pb-5 pl-4">
                                    <div class="col-md-12 col-lg-12 my-auto p-0">
                                        <ul class="ul__list--inline slider__offset__solution__two">
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
                </div>
                <div class="tab-pane fade" id="solution-transport" role="tabpanel" aria-labelledby="solution-transport-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="left-d-img">
                                <img src="{{asset('Front/site_images/industries')}}/transport-and-automation.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="right-content">
                                <div class="right-top">
                                    <h1>Transport and Automation</h1>
                                    <p>
                                        Seize the power of mobility with Codiant’s highly configurable and smartly engineered taxi management solution that
                                        automates bookings and simpliﬁes dispatch process. We create custom front end mobile apps, dashboards and analytic panels.
                                    </p>
                                </div>
                                <div class="right-bottom">
                                    <h1>Our Expertise</h1>
                                    <div class="row bottom-list">
                                        <div class="col-sm-5 col-md-6">
                                            <p>
                                                <a href="#">
                                                    Mobile Hospital Management Solutions
                                                </a>
                                            </p>
                                            <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                            <p>EHR and EMR software solutions</p>
                                        </div>
                                        <div class="col-sm-7 col-md-6">
                                            <p>Clinical management system software</p>
                                            <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                            <p><a href="#">Fitness apps</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solution-transport" role="tabpanel" aria-labelledby="solution-transport-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="left-d-img">
                                <img src="{{asset('Front/site_images/industries')}}/transport-and-automation.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="right-content">
                                <div class="right-top">
                                    <h1>Transport and Automation</h1>
                                    <p>
                                        Seize the power of mobility with Codiant’s highly configurable and smartly engineered taxi management solution that
                                        automates bookings and simpliﬁes dispatch process. We create custom front end mobile apps, dashboards and analytic panels.
                                    </p>
                                </div>
                                <div class="right-bottom">
                                    <h1>Our Expertise</h1>
                                    <div class="row bottom-list">
                                        <div class="col-sm-5 col-md-6">
                                            <p>
                                                <a href="#">
                                                    Mobile Hospital Management Solutions
                                                </a>
                                            </p>
                                            <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                            <p>EHR and EMR software solutions</p>
                                        </div>
                                        <div class="col-sm-7 col-md-6">
                                            <p>Clinical management system software</p>
                                            <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                            <p><a href="#">Fitness apps</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solution-enterprise" role="tabpanel" aria-labelledby="solution-enterprise-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="left-d-img">
                                <img src="{{asset('Front/site_images/industries')}}/enterprise-mobility.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="right-content">
                                <div class="right-top">
                                    <h1>Enterprise Mobility</h1>
                                    <p>
                                        Achieve new levels of efficiency, performance, and customer satisfaction- faster and easier than ever before.
                                        Codiant’s Enterprise Solutions and services are designed for large-scale businesses and enterprises with deep
                                        functional fit built-in that accurately aligns with your unique business processes.
                                    </p>
                                </div>
                                <div class="right-bottom">
                                    <h1>Our Expertise</h1>
                                    <div class="row bottom-list">
                                        <div class="col-sm-5 col-md-6">
                                            <p>
                                                <a href="#">
                                                    Mobile Hospital Management Solutions
                                                </a>
                                            </p>
                                            <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                            <p>EHR and EMR software solutions</p>
                                        </div>
                                        <div class="col-sm-7 col-md-6">
                                            <p>Clinical management system software</p>
                                            <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                            <p><a href="#">Fitness apps</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solution-food" role="tabpanel" aria-labelledby="solution-food-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="left-d-img">
                                <img src="{{asset('Front/site_images/industries')}}/food-and-restaurant.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="right-content">
                                <div class="right-top">
                                    <h1>Food & Restaurant</h1>
                                    <p>
                                        Streamline food deliveries, improvise operational efficiency and enhance customer experience with our robust,
                                        dynamic and customizable online food delivery solution developed for quick-serve & fast casual restaurants, enterprises and aggregators.
                                    </p>
                                </div>
                                <div class="right-bottom">
                                    <h1>Our Expertise</h1>
                                    <div class="row bottom-list">
                                        <div class="col-sm-5 col-md-6">
                                            <p>
                                                <a href="#">
                                                    Mobile Hospital Management Solutions
                                                </a>
                                            </p>
                                            <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                            <p>EHR and EMR software solutions</p>
                                        </div>
                                        <div class="col-sm-7 col-md-6">
                                            <p>Clinical management system software</p>
                                            <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                            <p><a href="#">Fitness apps</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solution-ecommerce" role="tabpanel" aria-labelledby="solution-ecommerce-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="left-d-img">
                                <img src="{{asset('Front/site_images/industries')}}/mcommerce.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="right-content">
                                <div class="right-top">
                                    <h1>eCommerce, Retail & B2B</h1>
                                    <p>
                                        Launch a flexible, scalable, and high performance eCommerce store or marketplace app that converts, make your store secured and build customer
                                        trust for higher repeat sales. Our eCommerce development services are designed specifically to drive quality traffic, increase customer satisfaction and revolutionize brands lucratively.
                                    </p>
                                </div>
                                <div class="right-bottom">
                                    <h1>Our Expertise</h1>
                                    <div class="row bottom-list">
                                        <div class="col-sm-5 col-md-6">
                                            <p>
                                                <a href="#">
                                                    Mobile Hospital Management Solutions
                                                </a>
                                            </p>
                                            <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                            <p>EHR and EMR software solutions</p>
                                        </div>
                                        <div class="col-sm-7 col-md-6">
                                            <p>Clinical management system software</p>
                                            <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                            <p><a href="#">Fitness apps</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solution-property" role="tabpanel" aria-labelledby="solution-property-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="left-d-img">
                                <img src="{{asset('Front/site_images/industries')}}/real-estate-property.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="right-content">
                                <div class="right-top">
                                    <h1>Real Estate & Property</h1>
                                    <p>
                                        Codiant provides unsurpassable Real estate mobile app, website, portal and CRM solutions that delivers information-rich and integrated experience for Realtors, Brokers and Estate companies.
                                    </p>
                                </div>
                                <div class="right-bottom">
                                    <h1>Our Expertise</h1>
                                    <div class="row bottom-list">
                                        <div class="col-sm-5 col-md-6">
                                            <p>
                                                <a href="#">
                                                    Mobile Hospital Management Solutions
                                                </a>
                                            </p>
                                            <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                            <p>EHR and EMR software solutions</p>
                                        </div>
                                        <div class="col-sm-7 col-md-6">
                                            <p>Clinical management system software</p>
                                            <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                            <p><a href="#">Fitness apps</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solution-social" role="tabpanel" aria-labelledby="solution-social-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="left-d-img">
                                <img src="{{asset('Front/site_images/industries')}}/social-networking.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="right-content">
                                <div class="right-top">
                                    <h1>Social Networking</h1>
                                    <p>
                                        Tap into one of the most promising markets of app industry and give users an avenue to create, share, and promote
                                        meaningful content that help them connect, discover, and engage with others. Our social networking solutions holds an incredible power to drive change.
                                    </p>
                                </div>
                                <div class="right-bottom">
                                    <h1>Our Expertise</h1>
                                    <div class="row bottom-list">
                                        <div class="col-sm-5 col-md-6">
                                            <p>
                                                <a href="#">
                                                    Mobile Hospital Management Solutions
                                                </a>
                                            </p>
                                            <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                            <p>EHR and EMR software solutions</p>
                                        </div>
                                        <div class="col-sm-7 col-md-6">
                                            <p>Clinical management system software</p>
                                            <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                            <p><a href="#">Fitness apps</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solution-app" role="tabpanel" aria-labelledby="solution-app-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="left-d-img">
                                <img src="{{asset('Front/site_images/industries')}}/marketplace.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="right-content">
                                <div class="right-top">
                                    <h1>TMarketplace App</h1>
                                    <p>
                                        Reinforce your brand, connect with your customers and boost profits with Codiant’s custom marketplace app development services.
                                    </p>
                                </div>
                                <div class="right-bottom">
                                    <h1>Our Expertise</h1>
                                    <div class="row bottom-list">
                                        <div class="col-sm-5 col-md-6">
                                            <p>
                                                <a href="#">
                                                    Mobile Hospital Management Solutions
                                                </a>
                                            </p>
                                            <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                            <p>EHR and EMR software solutions</p>
                                        </div>
                                        <div class="col-sm-7 col-md-6">
                                            <p>Clinical management system software</p>
                                            <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                            <p><a href="#">Fitness apps</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solution-beauty" role="tabpanel" aria-labelledby="solution-beatuy-tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="left-d-img">
                                <img src="{{asset('Front/site_images/industries')}}/beauty-and-wellness.jpg"/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="right-content">
                                <div class="right-top">
                                    <h1>Beauty & Wellness</h1>
                                    <p>
                                        Get developed the best-in-class on-demand beauty service mobile app for your beauty salon.
                                        With an Uber-like beauty app, brands, beautician, and makeup artists can reduce wait times,
                                        entice new customers through offers, loyalty programs and book more customers swiftly.
                                    </p>
                                </div>
                                <div class="right-bottom">
                                    <h1>Our Expertise</h1>
                                    <div class="row bottom-list">
                                        <div class="col-sm-5 col-md-6">
                                            <p>
                                                <a href="#">
                                                    Mobile Hospital Management Solutions
                                                </a>
                                            </p>
                                            <p><a href="">Telemedicine and Doctor on-demand Apps</a></p>
                                            <p>EHR and EMR software solutions</p>
                                        </div>
                                        <div class="col-sm-7 col-md-6">
                                            <p>Clinical management system software</p>
                                            <p>HIPAA & FDA compliant Mhealth Web and App Solutions</p>
                                            <p><a href="#">Fitness apps</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--            Customer Testimonial            --}}

        <div class="client-testimonial-container">
            <div class="solution-heading-container center-text-align">
                <h2 class="solution-heading">Client Feedbacks</h2>
                <p>Developing smarter, more productive and efficient solutions that augments business values, <br/> fuels exponential growth while reducing time to market.</p>
            </div>

            <div class="row m-0 testimonial-carousel" style="padding-bottom: 50px">
                <div class="col-md-2 padding-carousel-7">
                    <div class="Carousel_div">
                        <div class="row m-0">
                            <div class="col-md-4 p-0">
                                <img class="Carousel-img" src="{{asset('Front/site_images')}}/testimonials/img4.jpeg" />
                            </div>
                            <div class="col-md-8 p-0">
                                <p class="Carousel_text__name"><b>Mirsad Hossain</b></p>
                                <p class="Carousel_text__position"><i>Head of Software Business, Smart Technologies</i></p>
                            </div>
                        </div>
                        <p class="Carousel_text">“Building Emotional Resilience” was a great workshop held by Mindshaper. We are really thankful to them for the amazing workshop.</p>
                    </div>
                </div>
                <div class="col-md-2 padding-carousel-7">
                    <div class="Carousel_div">
                        <div class="row m-0">
                            <div class="col-md-4 p-0">
                                <img class="Carousel-img" src="{{asset('Front/site_images')}}/testimonials/img2.jpeg" />
                            </div>
                            <div class="col-md-8 p-0">
                                <p class="Carousel_text__name"><b>Farhana Sultana Mimma</b></p>
                                <p class="Carousel_text__position"><i>CEO, Waves Beauty Saloon</i></p>
                            </div>
                        </div>
                        <p class="Carousel_text">A Training on “Mindfulness” organized by Mindshaper. It was really helpful for our employees and they felt so relieved after the training.</p>
                    </div>
                </div>
                <div class="col-md-2 padding-carousel-7">
                    <div class="Carousel_div">
                        <div class="row m-0">
                            <div class="col-md-4 p-0">
                                <img class="Carousel-img" src="{{asset('Front/site_images')}}/testimonials/maruf.jpeg" />
                            </div>
                            <div class="col-md-8 p-0">
                                <p class="Carousel_text__name"><b>Maruf Leakot</b></p>
                                <p class="Carousel_text__position"><i>CEO, Interior Studio</i></p>
                            </div>
                        </div>
                        <p class="Carousel_text">A Session on “Work Life Balance” held by MindShaper. It was a wonderful session indeed. MindShaper is a very good platform who are doing great.</p>
                    </div>
                </div>
                <div class="col-md-2 padding-carousel-7">
                    <div class="Carousel_div">
                        <div class="row m-0">
                            <div class="col-md-4 p-0">
                                <img class="Carousel-img" src="{{asset('Front/site_images')}}/testimonials/dipu.jpeg" />
                            </div>
                            <div class="col-md-8 p-0">
                                <p class="Carousel_text__name"><b>-	Arefin Dipu </b></p>
                                <p class="Carousel_text__position"><i>General Secretary , Youth Career Institute</i></p>
                            </div>
                        </div>
                        <p class="Carousel_text">“A great session conducted by MindShaper on “Career Path” really helped our young members to learn new things like how to proceed on with their career
                            choice, how they can improve their potentiality.</p>
                    </div>
                </div>
                <div class="col-md-2 padding-carousel-7">
                    <div class="Carousel_div">
                        <div class="row m-0">
                            <div class="col-md-4 p-0">
                                <img class="Carousel-img" src="{{asset('Front/site_images')}}/testimonials/sahara.jpeg" />
                            </div>
                            <div class="col-md-8 p-0">
                                <p class="Carousel_text__name"><b>Sahara Sultana</b></p>
                                <p class="Carousel_text__position"><i>CEO of Dressmeet, Owner and Partner of Shahi Kalai</i></p>
                            </div>
                        </div>
                        <p class="Carousel_text">I often need to go through difficulties in dealing with clients. MindShaper proposed a workshop on “Emotional Intelligence” for me and my organization.
                            I thank MindShaper for such useful program.</p>
                    </div>
                </div>
                <div class="col-md-2 padding-carousel-7">
                    <div class="Carousel_div">
                        <div class="row m-0">
                            <div class="col-md-4 p-0">
                                <img class="Carousel-img" src="{{asset('Front/site_images')}}/testimonials/zahid.jpeg" />
                            </div>
                            <div class="col-md-8 p-0">
                                <p class="Carousel_text__name"><b>Zahidul Kabir</b></p>
                                <p class="Carousel_text__position"><i>Deputy Manager, BRAC Fleet Management</i></p>
                            </div>
                        </div>
                        <p class="Carousel_text">Stress that we carried silently has direct impact to our work efficiency and also affects where we work with other people.
                            "MindShaper" guided us how to manage it more professionally by their “Stress Management Training”.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="achieve-container">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" preserveAspectRatio="none" viewBox="0 0 1440 780">
                <g mask="url(&quot;#SvgjsMask1130&quot;)" fill="none">
                    <rect width="1440" height="780" x="0" y="0" fill="rgba(0, 0, 72, 1)"></rect>
                    <path d="M0,594.339C108.953,604.398,200.787,509.826,277.517,431.824C343.788,364.455,352.843,264.063,403.419,184.235C465.125,86.841,622.388,26.996,606.339,-87.178C590.308,-201.225,426.809,-220.097,336.531,-291.606C266.462,-347.108,219.1,-429.598,135.181,-460.384C48.363,-492.234,-44.859,-476.915,-136.586,-465.17C-244.202,-451.39,-363.008,-456.499,-445.503,-386.031C-531.395,-312.662,-589.022,-196.628,-583.021,-83.826C-577.222,25.19,-478.696,100.892,-414.888,189.473C-363.799,260.397,-308.986,322.403,-246.428,383.45C-167.45,460.52,-109.884,584.194,0,594.339" fill="#000034"></path>
                    <path d="M1440 1326.103C1542.575 1317.8110000000001 1637.048 1276.9569999999999 1723.924 1221.7939999999999 1811.189 1166.384 1902.274 1104.598 1940.2559999999999 1008.4590000000001 1977.595 913.9490000000001 1929.848 811.6610000000001 1926.078 710.112 1921.747 593.4639999999999 1994.624 453.838 1916.446 367.157 1837.895 280.062 1690.518 340.185 1574.863 320.697 1476.465 304.117 1382.989 231.692 1287.669 261.20799999999997 1192.542 290.664 1154.229 400.809 1084.995 472.387 1010.674 549.2239999999999 898.561 595.6990000000001 865.727 697.432 831.397 803.801 861.095 921.501 907.181 1023.33 953.363 1125.371 1027.579 1214.877 1124.96 1270.213 1219.605 1323.9940000000001 1331.496 1334.874 1440 1326.103" fill="#00005c"></path>
                </g>
                <defs>
                    <mask id="SvgjsMask1130">
                        <rect width="1440" height="780" fill="#ffffff"></rect>
                    </mask>
                </defs>
            </svg>

            <div class="achieve-details-section">
                <div class="inds-heading-container center-text-align">
                    <span>Driving Enterprise-Wide Digital Transformation</span>
                    <h2 class="inds-heading">Industries We Serve</h2>
                    <p>Empowering businesses across verticals by leveraging the power of mobility that help accelerate innovation, <br/> reduce costs and improve performance. </p>
                </div>

                <ul class="achieve-count-ul">
                    <li class="achieve-count-li">
                        <h2>10+</h2>
                        <span>Years</span>
                    </li>
                    <li class="achieve-count-li">
                        <h2>250+</h2>
                        <span>TEAM</span>
                    </li>
                    <li class="achieve-count-li">
                        <h2>350+</h2>
                        <span>Solutions</span>
                    </li>
                    <li class="achieve-count-li">
                        <h2>150+</h2>
                        <span>Clients</span>
                    </li>
                </ul>

                <div class="container achieve-details-img-d">
                    <div class="row align-items-center">
                        <div class="col-xl-4">
                            <div class="left-d-img">
                                <img src="https://cdn.pixabay.com/photo/2015/01/09/11/09/meeting-594091_960_720.jpg"/>
{{--                                <img src="{{asset('Front/site_images/industries')}}/healthcare-and-fitness.jpg"/>--}}
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="row pl-5">
                                <div class="col-md-4 col-sm-6">
                                    <div class="right-content-inner-d">
                                        <img src="{{asset('Front/site_images/')}}/tick-icon.png"/>
                                        <p>ISO 9001-2015 & ISO/IEC 27001: 2013 Certified Company.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="right-content-inner-d">
                                        <img src="{{asset('Front/site_images/')}}/tick-icon.png"/>
                                        <p>Top Mobile App Development Company in USA, UK, Australia (Good Firms)</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="right-content-inner-d">
                                        <img src="{{asset('Front/site_images/')}}/tick-icon.png"/>
                                        <p>Certified Mobile App Developers (AppFutura)</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="right-content-inner-d">
                                        <img src="{{asset('Front/site_images/')}}/tick-icon.png"/>
                                        <p>ISO 9001-2015 & ISO/IEC 27001: 2013 Certified Company.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="right-content-inner-d">
                                        <img src="{{asset('Front/site_images/')}}/tick-icon.png"/>
                                        <p>100% success rate on Upwork: As counted by client’s satisfaction and on-time delivery of
                                            projects.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="right-content-inner-d">
                                        <img src="{{asset('Front/site_images/')}}/tick-icon.png"/>
                                        <p>Won two Gold Digital Impact Awards with our partners Autism West Midlands</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="right-content-inner-d">
                                        <img src="{{asset('Front/site_images/')}}/tick-icon.png"/>
                                        <p>Won the first Enterprise Customer Award- GE (General Electric)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--            Certification and Recongnition          --}}

        <div class="award-container">
            <div class="container">
                <div class="recent-heading">
                    <span>Awards</span>
                    <div style="display: flex; flex-direction: row; justify-content: space-between">
                        <h2>Certification & <b>Recognition</b></h2>
                        <ul class="ul__list--inline slider__arrow" style="padding-top: 15px">
                            <li class="arrow__left pointer mr-3 position-relative"><i class="material-icons-outlined" aria-hidden="true">chevron_left</i></li>
                            <li class="arrow__right pointer position-relative"><i class="material-icons-outlined" aria-hidden="true">chevron_right</i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden position-relative">
                <div class="bg__grub--slider p-3">
                    <div class="row pt-5 pb-5 pl-4">
                        <div class="col-md-12 col-lg-12 my-auto p-0">
                            <ul class="ul__list--inline slider__offset certification_award">
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
        @include('Front.get-quote')
    </div>




    <script>
        $('.testimonial-carousel').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1366,
                    settings: {
                        slidesToShow: 4,
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
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 540,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },

                {
                    breakpoint: 320,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }                        // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ],
            draggable: false,
            infinite: true,
            autoplay: true,
            swipe: false,
            arrows: false,
            autoplaySpeed: 1,
            speed: 4 * 1000,
            cssEase: 'linear',
            arrows: false,
        });
    </script>

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

    <script>
        $('.certification_award').slick({
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
            // dots: true,
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

    <script>
        $('.slider__offset__solution__one, .slider__offset__solution__two').slick({
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

    <script>
        // Add active class to the current button (highlight it)
        var services = document.getElementById("service-nav");
        var lis = services.getElementsByClassName("service-li");
        for (var i = 0; i < lis.length; i++) {
            lis[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active-li");
                current[0].className = current[0].className.replace(" active-li", "");
                this.className += " active-li";
            });
        }
    </script>


    <script>
        // Add active class to the current button (highlight it)
        var indus = document.getElementById("indusTab");
        var indus_nav_item = indus.getElementsByClassName("indus-nav-item");
        for (var i = 0; i < lis.length; i++) {
            lis[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active-li");
                current[0].className = current[0].className.replace(" active-li", "");
                this.className += " active-li";
            });
        }
    </script>

    <script>
        $("#serviceTwoDetails").hide()
        $("#serviceThreeDetails").hide()
        $("#serviceFourDetails").hide()
        $("#serviceFiveDetails").hide()
        $("#serviceSixDetails").hide()



        $("#serviceOne").click(function () {
            $("#serviceOneDetails").show()
            $("#serviceTwoDetails").hide()
            $("#serviceThreeDetails").hide()
            $("#serviceFourDetails").hide()
            $("#serviceFiveDetails").hide()
            $("#serviceSixDetails").hide()
        })

        $("#serviceTwo").click(function () {
            $("#serviceOneDetails").hide()
            $("#serviceTwoDetails").show()
            $("#serviceThreeDetails").hide()
            $("#serviceFourDetails").hide()
            $("#serviceFiveDetails").hide()
            $("#serviceSixDetails").hide()
        })

        $("#serviceThree").click(function () {
            $("#serviceOneDetails").hide()
            $("#serviceTwoDetails").hide()
            $("#serviceThreeDetails").show()
            $("#serviceFourDetails").hide()
            $("#serviceFiveDetails").hide()
            $("#serviceSixDetails").hide()
        })

        $("#serviceFour").click(function () {
            $("#serviceOneDetails").hide()
            $("#serviceTwoDetails").hide()
            $("#serviceThreeDetails").hide()
            $("#serviceFourDetails").show()
            $("#serviceFiveDetails").hide()
            $("#serviceSixDetails").hide()
        })

        $("#serviceFive").click(function () {
            $("#serviceOneDetails").hide()
            $("#serviceTwoDetails").hide()
            $("#serviceThreeDetails").hide()
            $("#serviceFourDetails").hide()
            $("#serviceFiveDetails").show()
            $("#serviceSixDetails").hide()
        })

        $("#serviceSix").click(function () {
            $("#serviceOneDetails").hide()
            $("#serviceTwoDetails").hide()
            $("#serviceThreeDetails").hide()
            $("#serviceFourDetails").hide()
            $("#serviceFiveDetails").hide()
            $("#serviceSixDetails").show()
        })

    </script>


{{--    <script>
        $("#secondBanner").hide()
        setTimeout(function () {
            $("#firstBanner").hide()
        },8000)
        setTimeout(function () {
            $("#secondBanner").show()
        },8000)
    </script>--}}


@endsection