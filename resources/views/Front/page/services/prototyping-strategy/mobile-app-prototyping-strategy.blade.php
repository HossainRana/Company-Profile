@section('title', 'Mobile App & Prototyping | OrFactor')

@extends('Front.layout')

@section('content')
    @include('Front.fix-button')


    <div class="common-banner common-banner-iphone">
        <div class="bg-shade">
            <div class="common-banner-content center-text-align">
                <span>Services</span>
                <h1>Mobile App Prototyping And Strategy</h1>
                <p>Fully interactive high fidelity prototypes for rapid app development services</p>
                <div class="inc-sc-btn">
                    <a class="common-banner-btn" href="#">
                        Discus your project
                    </a>
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

    <div class="how-work-c-d">
        <div class="container">
            <h1 class="common-header-h text-center"><b>How</b> Does It Works?</h1>
            <p class="common-p mb-5" style="color: #000000">The Infusion of design Thinking To Create Interactive Clickable Prototype</p>

            <div class="how-work-details">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-5  col-sm-10 order-lg-1 order-2 justify-content-center text-lg-right text-sm-left text-center">
                        <h3>Empathize X Recognizing the Client’s Requirements</h3>
                        <p>
                            We gain an empathetic understanding of our client’s
                            requirements and gain insights to the needs and
                            the problems they are trying to solve.
                        </p>
                    </div>
                    <div class="col-sm-2 text-center order-lg-2 order-1">
                        <div class="center-work-number">01</div>
                    </div>
                    <div class="col-lg-5 d-md-none order-lg-3 d-sm-none d-none d-lg-block text-center text-lg-left overflow-hidden">
                        <img src="{{asset('Front/site_images/howWork')}}/prototype.webp"/>
                    </div>
                </div>

                <div class="row align-items-center mb-5">
                    <div class="col-lg-5 d-md-none order-lg-1 d-sm-none d-none d-lg-block text-center text-lg-right overflow-hidden">
                        <img src="{{asset('Front/site_images/howWork')}}/mock-up.webp"/>
                    </div>
                    <div class="col-sm-2 text-center order-lg-2 order-1 ">
                        <div class="center-work-number">02</div>
                    </div>
                    <div class="col-lg-5  col-sm-10 order-lg-3 order-2 justify-content-center text-sm-left text-center">
                        <h3>Empathize X Recognizing the Client’s Requirements</h3>
                        <p>
                            Our team brainstorms, prioritize needs, and gather
                            great ideas to define functions, establish features,
                            and other elements and then develop mockups.
                        </p>
                    </div>
                </div>

                <div class="row align-items-center mb-5">
                    <div class="col-lg-5  col-sm-10 order-lg-1 order-2 justify-content-center text-lg-right text-sm-left text-center">
                        <h3>Prototype Sharing With Clients</h3>
                        <p>
                            Based on the two previous stages, we scale down
                            versions of the app and deliver you an interactive
                            prototype to identify the best possible solution by
                            further verification and tests.
                        </p>
                    </div>
                    <div class="col-sm-2 text-center order-lg-2 order-1">
                        <div class="center-work-number">03</div>
                    </div>
                    <div class="col-lg-5 d-md-none order-lg-3 d-sm-none d-none d-lg-block text-center text-lg-left overflow-hidden">
                        <img src="{{asset('Front/site_images/howWork')}}/prototype-sharing.webp"/>
                    </div>
                </div>

                <div class="row align-items-center mb-5">
                    <div class="col-lg-5 d-md-none order-lg-1 d-sm-none d-none d-lg-block text-center text-lg-right overflow-hidden">
                        <img src="{{asset('Front/site_images/howWork')}}/testing.webp"/>
                    </div>
                    <div class="col-sm-2 text-center order-lg-2 order-1 ">
                        <div class="center-work-number">04</div>
                    </div>
                    <div class="col-lg-5  col-sm-10 order-lg-3 order-2 justify-content-center text-sm-left text-center">
                        <h3>Test X Feedback Collection</h3>
                        <p>
                            After our designers rigorously test the complete
                            product we forward the clickable prototype to you
                            and stakeholders for testing.
                        </p>
                    </div>
                </div>

                <div class="row align-items-center mb-5">
                    <div class="col-lg-5  col-sm-10 order-lg-1 order-2 justify-content-center text-lg-right text-sm-left text-center">
                        <h3>Start Project Development</h3>
                        <p>
                            After your approval, if you want we can take your app
                            prototype to another level i.e. app designing
                            development phase.
                        </p>
                    </div>
                    <div class="col-sm-2 text-center order-lg-2 order-1">
                        <div class="center-work-number">05</div>
                    </div>
                    <div class="col-lg-5 d-md-none order-lg-3 d-sm-none d-none d-lg-block text-center text-lg-left overflow-hidden">
                        <img src="{{asset('Front/site_images/howWork')}}/development.webp"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="core-tech" style="background: #000048">
        <div class="core-tech-inner" style="backdrop-filter: none">
            <div class="container">
                <h1 class="common-header-h text-center" style="color: #ffffff"><b>Top Tools</b> To Turn Your <b>Vision</b> Into <br/> <b>Tangible Prototypes</b></h1>
                <p class="common-p mb-5">“If a picture is worth a thousand words, a prototype is worth 1000 meetings”.<br/> We ensure that we use top prototyping tools while we develop your low, medium or high fidelity prototypes.</p>
                <p></p>

                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-tech-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/coretech')}}/xd.jpg"/>
                            <p>Adobe XD</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-tech-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/coretech')}}/ps.jpg"/>
                            <p>Adobe Photoshop</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-tech-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/coretech')}}/sketch.jpg"/>
                            <p>Sketch</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-tech-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/coretech')}}/figma.jpg"/>
                            <p>Figma</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-tech-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/coretech')}}/invision.jpg"/>
                            <p>Invision</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="each-tech-d d-flex justify-content-center align-items-center">
                            <img src="{{asset('Front/site_images/coretech')}}/marvel.jpg"/>
                            <p>Marvel</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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