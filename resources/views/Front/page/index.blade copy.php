
@section('title', 'Home | OrFactor')

@extends('Front.layout')

@section('content')
<style>
.icon_btn{
    font-size: 30px;
}
</style>
{{-- Full Section  --}}
<section>
    <section style="height: 70px">
    </section>
    <div style="position: absolute; z-index: 9999; top: 90%; right: 2%;">
                <button class="icon_btn" id="myBtn" onclick="myFunction()"><i class="fa fa-pause-circle icon_size" aria-hidden="true"></i></button>
            </div>
    <video autoplay muted loop id="myVideo" style="width: 100%; min-height: 100%; margin-top: -5rem;">
                <source src="{{asset('vidoes/')}}/201005_FiSci_Desktop_Preview_2X_H264-LowRes.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
		    </video>
    {{-- section 1  --}}
    <section class="col-md-12" style="padding: 0">
        <section style="padding: 6rem 2rem;background-image: url({{asset('Front/site_images/')}}/OrFacts/pngwing.png); background-repeat: no-repeat; background-size: cover; height: 100vh ">
            <div style="width: 100%;display:flex;">
                <div style="width: 50%">
                    <div class="slack_brings_team">OrFacor bring things into reality whatever your thoughts and needs.</div>
                    <div class="with_all_communication">
                        A versatile experienced and professional team committed to provide a great solution for You. We Help You Invent the Future.
                    </div>
                    <div style="margin: 30px"></div>
                    <div style="margin: 30px"></div>
                </div>
                <div style="width: 1%"></div>
                <div style="width: 62.5%">
                </div>
            </div>
        </section>
    </section>
    {{-- section 1  --}}

    {{-- section 2  --}}

    <section class="col-md-12" style="background: #f5f5f5">
        <div style="margin-top:30px"></div>
        <div>
            <div>
                <h2 class="app_need" style="text-align:center; padding-top: 1rem">
                    An <b>app</b> for every need
                </h2>

                <div style="margin-bottom:40px"></div>

                <div class="row">
                    <div class="col-md-4 col_lg">
                        <div style="width:100%;display:flex">
                            <div style="width:30%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon.png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">iFleet</div>
                                </a>
                            </div>

                            <div style="width:30%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (1).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">nexParc</div>
                                </a>
                            </div>

                            <div style="width:30%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (2).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">Pick & Drop</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col_lg">
                        <div style="width:100%;display:flex">
                            <div style="width:30%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (3).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">Windows PID</div>
                                </a>
                            </div>

                            <div style="width:30%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (4).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">Sales Combat</div>
                                </a>
                            </div>

                            <div style="width:30%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (5).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">Defect Record</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col_lg">
                        <div style="width:100%;display:flex">
                            <div style="width:30%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (6).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">NexCase Book</div>
                                </a>
                            </div>

                            <div style="width:30%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (7).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">BizView</div>
                                </a>
                            </div>

                            <div style="width:30%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (8).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">Micro Finance</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom:20px"></div>

                <div class="row" style="padding-bottom: 1rem">
                    <div class="col-md-3">
                        <div style="width:100%;display:flex">
                            <div style="width:45%; text-align: center">
                                <a href="https://blackboard.com.bd/" class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (9).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">BlackBoard</div>
                                </a>
                            </div>

                            <div style="width:45%; text-align: center">
                                <a href="https://mindshaper.xyz/" class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (10).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">MindShaper</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div style="width:100%;display:flex">
                            <div style="width:45%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (11).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">nexFleet</div>
                                </a>
                            </div>

                            <div style="width:45%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (12).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">Data Tools</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div style="width:100%;display:flex">
                            <div style="width:45%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (13).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">NexComm Chatbot</div>
                                </a>
                            </div>

                            <div style="width:45%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (14).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">Workshop Manager</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div style="width:100%;display:flex">
                            <div style="width:45%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (15).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">iFleet User</div>
                                </a>
                            </div>

                            <div style="width:45%; text-align: center">
                                <a class="a_app">
                                    <img src="{{asset('Front/site_images/')}}/icon/icon (16).png" style="margin-bottom:5px"/>
                                    <div class="i_name" style="text-align:center;margin-left:10px">iFleet Driver</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- section 2  --}}

    {{-- section 3  --}}
    <section style="margin-top:30px">
        <div class="sample_background" style="width:100%;display:flex">
            <img src="{{asset('Front/site_images/')}}/index_page/screen_fly.gif"
                 style="display:inline-block;max-width:100%;
                                    height: 470px"/>

            <div style="display:inline-block;transform:none; width:33%; margin-left:112px;margin-top:50px;
                                position:relative">
                <div>
                    <p class="r_head">
                        We create impactful software solutions.
                    </p>
                    <p class="r_body">
                        Orfactor is a Software craft solution company
                        providing customized Product and Application
                        Development Services and Solutions to the
                        businesses. <br/><br/>As an IT services provider, we have
                        been leveraging our software engineering expertise
                        in delivering cost effective innovative solutions
                        With extensive years of
                        experience in Software Solutions.
                    </p>
                    <div style="width:100%; display:flex">
                        <div style="width:18%">
                            <img src="{{asset('Front/site_images/')}}/index_page/Shahriar.jpg" style="border-radius:50%; height: 100px; width: 100px; object-fit: cover; "/>
                        </div>
                        <div style="width:76%; padding-left: 2rem">
                            <p style="margin-bottom:2px;color:#212529;font-size:0.8em;line-height:1.3;
                                    font-weight:500">
                                “Absolutely the best selection in the area of software development.
                                I will always recommend Orfactor to my friends”
                            </p>

                            <p style="font-style:italic">
                                <small>-Mohammad Shahriar Khan, CEO, Nexkraft Limited</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- section 3  --}}

    
    <div class="contact1" style="background: #f5f5f5">
        <div class="text-center" style="padding: 2rem 0">
            <p class="slack_brings_team">Get in touch</p>
        </div>
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="{{asset('site_images/')}}/img-01.png" alt="IMG">
            </div>

            <form class="contact1-form validate-form">
				<span class="contact1-form-title">

				</span>

                <div class="wrap-input1 validate-input" data-validate = "Name is required">
                    <input class="input1" type="text" name="name" placeholder="Name">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input1" type="text" name="email" placeholder="Email">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate = "Subject is required">
                    <input class="input1" type="text" name="subject" placeholder="Subject">
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate = "Message is required">
                    <textarea class="input1" name="message" placeholder="Message"></textarea>
                    <span class="shadow-input1"></span>
                </div>

                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn">
						<span>
							Send Email
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
<script src="js/main.js"></script>
{{-- Full Section  --}}

@endsection

@section('script_section')


@endsection

