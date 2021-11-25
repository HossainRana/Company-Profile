@section('title', 'Discuss Project | OrFactor')

@extends('Front.layout')

@section('content')

    <style>
        @media  (min-width: 1200px){
            .container{
                max-width: 1390px !important;
            }
        }
    </style>

    @include('Front.fix-button')

    <div class="discuss-project-container">
        <div class="s-p-heading-container" style="padding-bottom: 0 !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-p-h-details">
                            <h1>Let's Work Together</h1>
                            <p>
                                We are delighted you are considering us. Please complete our project builder form below. From reviewing your brief,
                                we can best discuss the most effective digital solution together. Alternatively, if you would like to speak to one
                                of our team directly, our details are available here.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-r-c-img">
                            <img src="{{asset('Front/site_images/discussProject')}}/together.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 p-0 list-c-bg-f">
                        <div class="list-c-inner">
                            <img src="{{asset('/Front/site_images/discussProject')}}/contact01.svg"/>
                            <a href="#">+08 0179 95 44 290</a>
                            <a href="#">+08 0183 96 31 451</a>
                        </div>
                    </div>
                    <div class="col-md-4 p-0 list-c-bg-s">
                        <div class="list-c-inner">
                            <img src="{{asset('/Front/site_images/discussProject')}}/contact04.svg"/>
                            <a href="mailto:info@orfactor.com">info@orfactor.com</a>
                        </div>
                    </div>
                    <div class="col-md-4 p-0 list-c-bg-t">
                        <div class="list-c-inner">
                            <img src="{{asset('/Front/site_images/discussProject')}}/skype.svg"/>
                            <a href="skype:OrfactorConnect">OrfactorConnect</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="discuss-steps">
            <div class="solution-heading-container center-text-align">
                <h2 class="solution-heading">At Orfactor</h2>
                <p>We follow specific steps to make business proposals for sales inquiries.</p>
            </div>

            <div class="container">
                <div class="project-steps-bg">
                    <div class="each-inner-d-c shadow-b-p">
                        <div class="p-inner-left-c">
                            <img src="{{asset('Front/site_images/discussProject')}}/step01.png"/>
                        </div>
                        <div class="p-inner-right-c">
                            <span>01</span>
                            <h3>Requirement Analysis</h3>
                            <p>We review your enquiry and get in touch with you within 1 business day to discuss your requirements.</p>
                        </div>
                    </div>
                    <div class="each-inner-d-c shadow-b-p">
                        <div class="p-inner-right-c">
                            <span>02</span>
                            <h3>Sign NDA</h3>
                            <p>As a first step we sign an NDA (Non Disclosure Agreement) with you to ensure the privacy of your project.</p>
                        </div>
                        <div class="p-inner-left-c">
                            <img src="{{asset('Front/site_images/discussProject')}}/step02.png"/>
                        </div>
                    </div>
                    <div class="each-inner-d-c shadow-b-p">
                        <div class="p-inner-left-c">
                            <img src="{{asset('Front/site_images/discussProject')}}/step03.png"/>
                        </div>
                        <div class="p-inner-right-c">
                            <span>03</span>
                            <h3>Requirement Analysis</h3>
                            <p>We assign you a business analyst who will go through your requirements.</p>
                        </div>
                    </div>
                    <div class="each-inner-d-c shadow-b-p">
                        <div class="p-inner-right-c">
                            <span>04</span>
                            <h3>Success Metrics</h3>
                            <p>The BA discusses all the available options with you, ensuring your projects benefits from our expertise & experience.</p>
                        </div>
                        <div class="p-inner-left-c">
                            <img src="{{asset('Front/site_images/discussProject')}}/step04.png"/>
                        </div>
                    </div>
                    <div class="each-inner-d-c shadow-b-p">
                        <div class="p-inner-left-c">
                            <img src="{{asset('Front/site_images/discussProject')}}/step05.png"/>
                        </div>
                        <div class="p-inner-right-c">
                            <span>05</span>
                            <h3>Proposal & Execution</h3>
                            <p>After discussions, we prepare proposal & development schedules for your approval.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("Front.get-quote")
@endsection