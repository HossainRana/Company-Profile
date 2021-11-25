@section('title', 'Mobile Portfolio | OrFactor')

@extends('Front.layout')

@section('content')
    @include('Front.fix-button')

    <style>

        section {
            /*width: 100vw;*/
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .insights {
            height: 36vw;
            padding: 2vw 0;
            width: 100%;
            overflow: hidden;
        }

        .insights__list {
            position: relative;
            list-style-type: none;
            margin: 0;
            padding: 0;
            height: 32vw;
            width: calc(7 * 40vw + 56vw + 16 * 6vw);
            display: flex;
            align-items: center;
        }

        .insights__list__item {
            background-color: rgba(255, 255, 255, 0.26);
            box-shadow: 0 2px 16px rgba(0,0,0,0.4);
            width: 40vw;
            height: 60%;
            margin: 0 6vw;
            float: left;
            border-radius: 2em;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0.4;
            transition: opacity 0.3s ease-out;
        }

        .insights__list__item.active {
            width: 56vw;
            height: 100%;
            opacity: 1;
        }

        .insights__list__item.hovered {
            opacity: 1;
        }

        #arrowLeft, #arrowRight {
            width: 10vw;
            height: 40vh;
            position: fixed;
            cursor: pointer;
        }

        #arrowLeft {
            left: 0;
            top: 30vh;
        }

        #arrowRight {
            right: 0;
            top: 30vh;
        }
    </style>

    <div class="portfolio-banner">
        <div class="common-banner-content center-text-align" style="justify-content: start; padding-top: 100px">
            <span>Portfolio</span>
            <h1>We Will Shape Your Brand With<br/>
                Our Solutions</h1>
        </div>
        <section>
            <div class="insights">
                <ul id="insightsSlider" class="insights__list">
                    <li id="insight1" class="insights__list__item">
                        <div class="image">
                            <div class="solution-heading-container center-text-align">
                                <span style="color: #ffffff">Recent Project</span>
                                <h2 class="solution-heading" style="color: #ffffff">Rezieo  <b>A Video Interview Platform &</b> Job Portal</h2>
                                <p class="common-p mb-5" style="color: #ffffff">
                                    Rezieo is a Job Portal website that allows its users to perform interviews in video &
                                    writtenformat thereby helping the talent acquisition department to save their valuable time
                                    and resources by screening the candidates during its initial stages.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li id="insight2" class="insights__list__item">
                        <div class="image">
                            <div class="solution-heading-container center-text-align">
                                <span style="color: #ffffff">Recent Project</span>
                                <h2 class="solution-heading" style="color: #ffffff">Rezieo  <b>A Video Interview Platform &</b> Job Portal</h2>
                                <p class="common-p mb-5" style="color: #ffffff">
                                    Rezieo is a Job Portal website that allows its users to perform interviews in video &
                                    writtenformat thereby helping the talent acquisition department to save their valuable time
                                    and resources by screening the candidates during its initial stages.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li id="insight3" class="insights__list__item">
                        <div class="image">
                            <div class="solution-heading-container center-text-align">
                                <span style="color: #ffffff">Recent Project</span>
                                <h2 class="solution-heading" style="color: #ffffff">Rezieo  <b>A Video Interview Platform &</b> Job Portal</h2>
                                <p class="common-p mb-5" style="color: #ffffff">
                                    Rezieo is a Job Portal website that allows its users to perform interviews in video &
                                    writtenformat thereby helping the talent acquisition department to save their valuable time
                                    and resources by screening the candidates during its initial stages.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li id="insight4" class="insights__list__item">
                        <div class="image">
                            <div class="solution-heading-container center-text-align">
                                <span style="color: #ffffff">Recent Project</span>
                                <h2 class="solution-heading" style="color: #ffffff">Rezieo  <b>A Video Interview Platform &</b> Job Portal</h2>
                                <p class="common-p mb-5" style="color: #ffffff">
                                    Rezieo is a Job Portal website that allows its users to perform interviews in video &
                                    writtenformat thereby helping the talent acquisition department to save their valuable time
                                    and resources by screening the candidates during its initial stages.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li id="insight5" class="insights__list__item">
                        <div class="image">
                            <div class="solution-heading-container center-text-align">
                                <span style="color: #ffffff">Recent Project</span>
                                <h2 class="solution-heading" style="color: #ffffff">Rezieo  <b>A Video Interview Platform &</b> Job Portal</h2>
                                <p class="common-p mb-5" style="color: #ffffff">
                                    Rezieo is a Job Portal website that allows its users to perform interviews in video &
                                    writtenformat thereby helping the talent acquisition department to save their valuable time
                                    and resources by screening the candidates during its initial stages.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li id="insight6" class="insights__list__item">
                        <div class="image">
                            <div class="solution-heading-container center-text-align">
                                <span style="color: #ffffff">Recent Project</span>
                                <h2 class="solution-heading" style="color: #ffffff">Rezieo  <b>A Video Interview Platform &</b> Job Portal</h2>
                                <p class="common-p mb-5" style="color: #ffffff">
                                    Rezieo is a Job Portal website that allows its users to perform interviews in video &
                                    writtenformat thereby helping the talent acquisition department to save their valuable time
                                    and resources by screening the candidates during its initial stages.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li id="insight7" class="insights__list__item">
                        <div class="image">
                            <h2>Headline 7</h2>
                        </div>
                    </li>
                    <li id="insight8" class="insights__list__item">
                        <div class="image">
                            <h2>Headline 8</h2>
                        </div>
                    </li>
                </ul>
            </div>

            <div id="arrowLeft">
            </div>
            <div id="arrowRight">
            </div>
        </section>
    </div>


    <div class="portfolio-lik-tab">
        <ul class="portfolio-nav">
            <li class="portfolio-nav-item">
                <a class="portfolio-nav-link" href="{{URL::to('/portfolio-web')}}" >Web</a>
            </li>
            <li class="portfolio-nav-item ">
                <a class="portfolio-nav-link active" href="{{URL::to('/portfolio-mobile')}}" >Mobile</a>
            </li>
            <li class="portfolio-nav-item">
                <a class="portfolio-nav-link"href="{{URL::to('/portfolio-brand')}}" >Brand</a>
            </li>
        </ul>
    </div>

    <div class="each-box mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-7">
                    <img src="{{asset('Front/site_images/portfolio')}}/taxiapp-uk.jpg" width="100%"/>
                </div>
                <div class="col-sm-6 col-md-5">
                    <div class="portfolio-details">
                        <h3>Taxi App UK</h3>
                        <p>
                            TAXI APP UK, a world-class taxi app solution running in London, UK is hailed for its own beauty.
                            Apart from garnering the credits that a normal taxi app beholds this project is a cynosure in
                            the lineup of taxi apps we have built.
                        </p>
                        <a class="know-more-b" href="#">
                            <span>view porject</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="each-box mt-5">
        <div class="container">
            <div class="row"  style="background: #64ce69">
                <div class="col-sm-6 col-md-5">
                    <div class="portfolio-details" style="color: #ffffff">
                        <h3>Taxi App UK</h3>
                        <p>
                            TAXI APP UK, a world-class taxi app solution running in London, UK is hailed for its own beauty.
                            Apart from garnering the credits that a normal taxi app beholds this project is a cynosure in
                            the lineup of taxi apps we have built.
                        </p>
                        <a class="know-more-b" href="#">
                            <span>view porject</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-7">
                    <img src="{{asset('Front/site_images/portfolio')}}/rezieo.jpg" width="100%"/>
                </div>
            </div>
        </div>
    </div>

    <div class="each-box mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-7">
                    <img src="{{asset('Front/site_images/portfolio')}}/faf.jpg" width="100%"/>
                </div>
                <div class="col-sm-6 col-md-5">
                    <div class="portfolio-details">
                        <h3>Taxi App UK</h3>
                        <p>
                            TAXI APP UK, a world-class taxi app solution running in London, UK is hailed for its own beauty.
                            Apart from garnering the credits that a normal taxi app beholds this project is a cynosure in
                            the lineup of taxi apps we have built.
                        </p>
                        <a class="know-more-b" href="#">
                            <span>view porject</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="each-box mt-5">
        <div class="container">
            <div class="row" style="background: #d42a29">
                <div class="col-sm-6 col-md-5">
                    <div class="portfolio-details" style="color: #ffffff">
                        <h3>Taxi App UK</h3>
                        <p>
                            TAXI APP UK, a world-class taxi app solution running in London, UK is hailed for its own beauty.
                            Apart from garnering the credits that a normal taxi app beholds this project is a cynosure in
                            the lineup of taxi apps we have built.
                        </p>
                        <a class="know-more-b" href="#">
                            <span>view porject</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-7">
                    <img src="{{asset('Front/site_images/portfolio')}}/fitcheck.jpg" width="100%"/>
                </div>
            </div>
        </div>
    </div>


    @include('Front.get-quote')


    <script>
        $(window).on("load", function () {
            // add class .active to center slide
            $(".insights__list__item:first-child").addClass("active");

            // puts last insights before first at start
            $("#insight8, #insight7").prependTo(".insights__list");

            const slideCount = $(".insights__list__item").length;
            var slideWidth;
            var sliderUlWidth;

            /* ––––––––––––––––––––––––––––––– */
            /* ––––––––slider functions––––––– */
            /* ––––––––––––––––––––––––––––––– */

            function startSlider() {
                $("#insightsSlider").css({ width: "432vw" });

                var windowWidth = $(".insights").width();
                var sliderOffset = (windowWidth / 100) * 88;

                slideWidth = $(".insights__list__item").width();
                slideWidth += (windowWidth / 100) * 12;
                sliderUlWidth = (windowWidth / 100) * 432;

                /*
                console.log("Insight Width " + slideWidth + "px");
                console.log("Slider Width " + sliderUlWidth + "px");
                console.log("Window Width " + windowWidth + "px");
                */

                // sets width of container
                $("#insightsSlider").css({
                    width: sliderUlWidth,
                    marginLeft: -sliderOffset
                });
            }

            function moveRight() {
                $(".active").animate(
                    {
                        width: "40vw",
                        height: "60%"
                    },
                    { duration: 600, queue: false }
                );
                $(".active").next().animate(
                    {
                        width: "56vw",
                        height: "100%"
                    },
                    { duration: 600, queue: false }
                );
                $(".insights__list").animate(
                    { left: -slideWidth },
                    { duration: 600, queue: false }
                );

                $(".insights__list")
                    .promise()
                    .then(function () {
                        // all finished
                        $(".insights__list__item:first-child").appendTo(".insights__list");
                        $(".insights__list").css("left", "");

                        $(".active").next().addClass("active").removeClass("hovered");
                        $(".insights__list__item:nth-child(2)").removeClass("active");
                        $(".active").next().addClass("hovered");
                    });
            }

            function moveLeft() {
                $(".active").animate(
                    {
                        width: "40vw",
                        height: "60%"
                    },
                    { duration: 600, queue: false }
                );
                $(".active").prev().animate(
                    {
                        width: "56vw",
                        height: "100%"
                    },
                    { duration: 600, queue: false }
                );
                $(".insights__list").animate(
                    { right: - slideWidth },
                    { duration: 600, queue: false }
                );

                $(".insights__list")
                    .promise()
                    .then(function () {
                        // all finished
                        $(".insights__list__item:last-child").prependTo(".insights__list");
                        $(".insights__list").css("right", "");

                        $(".active").prev().addClass("active").removeClass("hovered");
                        $(".insights__list__item:nth-child(4)").removeClass("active");
                        $(".active").prev().addClass("hovered");
                    });
            }

            /* ––––––––––––––––––––––––––––––– */
            /* ––––––––––––––––––––––––––––––– */

            startSlider();

            // Buttons & hovers for slider
            $("#arrowRight")
                .mouseover(function () {
                    $(".active").next().addClass("hovered");
                })
                .mouseout(function () {
                    $(".active").next().removeClass("hovered");
                })
                .click(function () {
                    moveRight();
                });

            $("#arrowLeft")
                .mouseover(function () {
                    $(".active").prev().addClass("hovered");
                })
                .mouseout(function () {
                    $(".active").prev().removeClass("hovered");
                })
                .click(function () {
                    moveLeft();
                });


            // update slider when resizing window
            $(window).resize(function () {
                waitForFinalEvent(
                    function () {
                        startSlider();
                    },
                    200,
                    "resizeInsightSliderId"
                );
            });
        });

        // funtion that waits until thing is over
        // used to not trigger window resize too many times
        var waitForFinalEvent = (function () {
            var timers = {};
            return function (callback, ms, uniqueId) {
                if (!uniqueId) {
                    uniqueId = "Don't call this twice without a uniqueId";
                }
                if (timers[uniqueId]) {
                    clearTimeout(timers[uniqueId]);
                }
                timers[uniqueId] = setTimeout(callback, ms);
            };
        })();


    </script>
@endsection