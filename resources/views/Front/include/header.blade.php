<style>
    .nav-active{
        color: #e5c702 !important;
    }
    a:not([href]):not([tabindex]){
        color: #ffffff;
    }
    .navoption{
        color: #ffffff;
    }

    .container{
        width: 90%;
    }
</style>

<header class="topnav" id="myTopnav">
    <div class="logo-container">
        <a href="/orfactor">
            <img class="logo" src="{{asset('Front/site_images/logo/')}}/logo1.png" width="100%"/>
        </a>
    </div>
    <div class="navlist" id="navlist">
        <a class="cursor0" href="#home">&nbsp</a>
        <a class="navoption" id="company" onclick="megaMenu(this.id)">COMPANY</a>
            <div class="fullNav" id="subMenuOne">
                <div class="fullNav-inner">
                    <div class="container p-0 justify-content-center align-items-center" style="display: flex; flex-direction: column">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="megaList" style="border: none">
                                    <li><a href="#">Overview</a></li>
                                    <li><a href="{{URL::to('/about')}}">About Us</a></li>
                                    <li><a href="#">CEO's Desk</a></li>
                                    <li><a href="#">Board Of Directors</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Infrastructure</a></li>
                                    <li><a href="#">Process Methodology</a></li>
                                    <li><a href="#">IP Protection</a></li>
                                    <li><a href="#">Become a Partner</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 bd-l">
                                <ul class="megaList border-0">
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Whitepapers</a></li>
                                    <li><a href="#">Press Release</a></li>
                                    <li><a href="#">Industry We Serve</a></li>
                                    <li><a href="#">Hire Developers</a></li>
                                    <li><a href="#">IT Consulting</a></li>
                                    <li><a href="#">IT Business Partnering</a></li>
                                    <li><a href="#">Staff Aumentation</a></li>
                                    <li><a href="#">Agency Solution</a></li>
                                    <li><a href="#">Affiliate Program</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 bd-l">
                                <div class="header-menu-contact">
                                    <span>Unleash creativity, collaboration and disruptive innovation</span>

                                    <div class="project-btn-d" style="text-align: left;">
                                        <a href="{{URL::to('/discuss-project')}}">Discuss your project</a>
                                    </div>

                                    <div class="open-call-us">
                                        <p>or call us at</p>
                                        <span>01799 544 290</span>
                                        <span>01839 631 451</span>
                                        <p>or email us at</p>
                                        <span>orfactor.xyz@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="c-hr"/>
                    <h1 class="menu-bottom-heading">Creating The Tomorrow Of Technology Since 10 + Long Years</h1>
                </div>
            </div>
        <a class="navoption" id="services" onclick="megaMenu(this.id)">SERVICES</a>
            <div class="fullNav" id="subMenuTwo">
                <div class="fullNav-inner">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-3 p-0">
                                <p class="menu-text">Mobile</p>
                                <ul class="megaList" style="border: none; display: flex; flex-wrap: wrap">
                                    <li><a href="{{URL::to('/services/mobile-app-development')}}">Mobile App Development</a></li>
                                    <li><a href="{{URL::to('/services/ios')}}">iOS</a></li>
                                    <li><a href="{{URL::to('/services/android-app-development')}}">Android</a></li>
                                    <li><a href="{{URL::to('/services/enterprise-solutions')}}">Enterprise Mobility</a></li>
                                    <li><a href="{{URL::to('/services/iphone-app-development')}}">iphone</a></li>
                                    <li><a href="{{URL::to('/services/ipad-app-development')}}">ipad</a></li>
                                    <li><a href="{{URL::to('/services/cross-platform')}}">Cross Platform</a></li>
                                    <li><a href="#">Wearable App</a></li>
                                    <li><a href="{{URL::to('/services/react-native-app-development')}}">React Native</a></li>
                                    <li><a href="#">Flutter</a></li>
                                    <li><a href="#">MVP</a></li>
                                </ul>
                                <p class="menu-text">Prototyping & Strategy</p>
                                <ul class="megaList" style="border: none; display: flex; flex-wrap: wrap">
                                    <li><a href="{{URL::to('/services/mobile-app-prototyping')}}">Mobile App prototyping & Strategy</a></li>
                                    <li><a href="{{URL::to('/services/app-design-guidelines')}}">App Design Guidelines</a></li>
                                    <li><a href="{{URL::to('/services/ui-ux-design')}}">UI & UX</a></li>
                                    <li><a href="{{URL::to('/services/creative-design')}}">Creative Design</a></li>
                                    <li><a href="{{URL::to('/services/branding-service')}}">Branding</a></li>
                                    <li><a href="{{URL::to('/services/responsive-design')}}">Responsive Design</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 bd-l">
                                <p class="menu-text">Web</p>
                                <ul class="megaList" style="border: none; display: flex; flex-wrap: wrap">
                                    <li><a href="{{URL::to('/services/web-design-development')}}">Web Design & Development</a></li>
                                    <li><a href="{{URL::to('/services/full-stack-development')}}">Full Stack</a></li>
                                    <li><a href="{{URL::to('/services/enterprise-web-development')}}">Enterprise Web</a></li>
                                    <li><a href="{{URL::to('/services/progressive-web-development')}}">Progressive Web</a></li>
                                    <li><a href="{{URL::to('/services/php-development')}}">PHP</a></li>
                                    <li><a href="#">Full Stack Five Tire</a></li>
                                    <li><a href="{{URL::to('/services/angular-js-development')}}">Angular JS</a></li>
                                    <li><a href="{{URL::to('/services/node-js-development')}}">Node JS</a></li>
                                    <li><a href="{{URL::to('/services/react-js-development')}}">React JS</a></li>
                                    <li><a href="{{URL::to('/services/yii-development')}}">Yii</a></li>
                                    <li><a href="{{URL::to('/services/laravel-development')}}">Laravel</a></li>
                                    <li><a href="{{URL::to('/services/html-css-development')}}">HTML/CSS</a></li>
                                </ul>
                                <p class="menu-text">Ecommerce & CMS</p>
                                <ul class="megaList" style="border: none; display: flex; flex-wrap: wrap">
                                    <li><a href="{{URL::to('/services/e-commerce-development')}}">Ecommerce</a></li>
                                    <li><a href="{{URL::to('/services/wordpress-development')}}">Wordpress</a></li>
                                    <li><a href="{{URL::to('/services/magento-development')}}">Magneto</a></li>
                                    <li><a href="{{URL::to('/services/opencart-development')}}">Opencart</a></li>
                                    <li><a href="{{URL::to('/services/shopify-development')}}">Shopify</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 bd-l">
                                <p class="menu-text">Trending</p>
                                <ul class="megaList" style="border: none; display: flex; flex-wrap: wrap">
                                    <li><a href="{{URL::to('/services/bitcoin-app-development')}}">Bitcoin</a></li>
                                    <li><a href="{{URL::to('/services/cloud-station-service')}}">Cloud Station</a></li>
                                    <li><a href="{{URL::to('/services/payment-getway-integration')}}">Payment Getway</a></li>
                                    <li><a href="{{URL::to('/services/sap-ui')}}">SAP UI</a></li>
                                    <li><a href="#">Yodlee</a></li>
                                    <li><a href="#">Plaid</a></li>
                                    <li><a href="{{URL::to('/services/api-integration')}}">API</a></li>
                                    <li><a href="{{URL::to('/services/paypal-integration')}}">Paypal</a></li>
                                    <li><a href="#">Stripe</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 bd-l">
                                <div class="header-menu-contact">
                                    <span>Unleash creativity, collaboration and disruptive innovation</span>

                                    <div class="project-btn-d" style="text-align: left;">
                                        <a href="{{URL::to('/discuss-project')}}">Discuss your project</a>
                                    </div>

                                    <div class="open-call-us">
                                        <p>or call us at</p>
                                        <span>01799 544 290</span>
                                        <span>01839 631 451</span>
                                        <p>or email us at</p>
                                        <span>orfactor.xyz@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="c-hr"/>
                    <h1 class="menu-bottom-heading">Do You Have The Next Big App Idea? <br/> We can Convert Into A Successful Startup Venture</h1>
                </div>
            </div>
        <a class="navoption" id="solution" onclick="megaMenu(this.id)">SOLUTIONS</a>
            <div class="fullNav" id="subMenuThree">
            <div class="fullNav-inner">
                <div class="container p-0">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="menu-text">Solutions</p>
                            <ul class="megaList unstyle-list" style="border: none; display: flex; flex-wrap: wrap">
                                <li><a href="{{URL::to('/solutions/health-care')}}">Healthcare Solutions</a></li>
                                <li><a href="{{URL::to('/solutions/health-care')}}">Digital Transformation</a></li>
                                <li><a href="{{URL::to('/solutions/health-care')}}">Industry & Platform</a></li>
                                <li><a href="{{URL::to('/solutions/health-care')}}">Endpoint Management</a></li>
                                <li><a href="{{URL::to('/solutions/health-care')}}">CyberSecurity Consulting</a></li>
                                <li><a href="{{URL::to('/solutions/health-care')}}">Testimonials</a></li>
                                <li><a href="{{URL::to('/solutions/health-care')}}">Infrastructure</a></li>
                                <li><a href="{{URL::to('/solutions/health-care')}}">Process Methodology</a></li>
                                <li><a href="{{URL::to('/solutions/health-care')}}">IP Protection</a></li>
                                <li><a href="{{URL::to('/solutions/health-care')}}">Become a Partner</a></li>
                            </ul>
                            <p class="menu-text">Technology</p>
                            <ul class="megaList unstyle-list" style="border: none; display: flex; flex-wrap: wrap">
                                <li><a href="{{URL::to('/solutions/ai-ml')}}">AI & ML</a></li>
                                <li><a href="{{URL::to('/solutions/ai-ml')}}">AR</a></li>
                                <li><a href="{{URL::to('/solutions/ai-ml')}}">IoT</a></li>
                                <li><a href="{{URL::to('/solutions/ai-ml')}}">Microsoft</a></li>
                                <li><a href="{{URL::to('/solutions/ai-ml')}}">SAP</a></li>
                                <li><a href="{{URL::to('/solutions/ai-ml')}}">Blockchain</a></li>
                                <li><a href="{{URL::to('/solutions/ai-ml')}}">Big Data</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 bd-l">
                            <p class="menu-text">Digital Solutions</p>
                            <ul class="megaList" style="border: none;">
                                <li><a href="{{URL::to('/solutions/digital-solutions-strategy')}}">Digital Research & Strategy</a></li>
                                <li><a href="{{URL::to('/solutions/digital-solutions-strategy')}}">Marketing Roadmap</a></li>
                                <li><a href="{{URL::to('/solutions/digital-solutions-strategy')}}">Performance Reporting</a></li>
                                <li><a href="{{URL::to('/solutions/digital-solutions-strategy')}}">Search Engine Optimization</a></li>
                                <li><a href="{{URL::to('/solutions/digital-solutions-strategy')}}">App Store Optimization</a></li>
                                <li><a href="{{URL::to('/solutions/digital-solutions-strategy')}}">Social Media Strategy</a></li>
                                <li><a href="{{URL::to('/solutions/digital-solutions-strategy')}}">Digital Advertising</a></li>
                                <li><a href="{{URL::to('/solutions/digital-solutions-strategy')}}">Influencer Marketing</a></li>
                                <li><a href="{{URL::to('/solutions/digital-solutions-strategy')}}">Content Marketing</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 bd-l">
                            <div class="header-menu-contact">
                                <span>Unleash creativity, collaboration and disruptive innovation</span>

                                <div class="project-btn-d" style="text-align: left;">
                                    <a href="{{URL::to('/discuss-project')}}">Discuss your project</a>
                                </div>

                                <div class="open-call-us">
                                    <p>or call us at</p>
                                    <span>01799 544 290</span>
                                    <span>01839 631 451</span>
                                    <p>or email us at</p>
                                    <span>orfactor.xyz@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="c-hr"/>
                <h1 class="menu-bottom-heading">We Will Shape Your Brand With Our Digital Solutions</h1>
            </div>
        </div>
        <a class="navoption" id="product" onclick="megaMenu(this.id)">PRODUCTS</a>
            <div class="fullNav" id="subMenuFour">
            <div class="fullNav-inner">
                <div class="container p-0">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="menu-text">Social Networking</p>
                            <ul class="megaList" style="border: none;">
                                <li><a href="{{URL::to('/products/social-networking')}}">Social Networking</a></li>
                                <li><a href="{{URL::to('/products/social-networking')}}">Instant Message App</a></li>
                                <li><a href="{{URL::to('/products/social-networking')}}">Chatbot App Solution</a></li>
                                <li><a href="{{URL::to('/products/social-networking')}}">Online Dating App</a></li>
                                <li><a href="{{URL::to('/products/social-networking')}}">WebRTC APP</a></li>
                            </ul>
                            <p class="menu-text">Shopping & Lifestyle</p>
                            <ul class="megaList" style="border: none;">
                                <li><a href="{{URL::to('/products/e-commerce-products')}}">Ecommerce Product</a></li>
                                <li><a href="{{URL::to('/products/e-commerce-products')}}">Mcommerce Product</a></li>
                            </ul>
                            <p class="menu-text">Food & Grocery</p>
                            <ul class="megaList" style="border: none;">
                                <li><a href="{{URL::to('/products/food-ordering-app')}}">Food Odering App</a></li>
                                <li><a href="{{URL::to('/products/food-ordering-app')}}">Gorcery Delivery App</a></li>
                                <li><a href="{{URL::to('/products/food-ordering-app')}}">On Demand Delivery App</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 bd-l">
                            <p class="menu-text">Healthcare & Fitness</p>
                            <ul class="megaList" style="border: none;">
                                <li><a href="{{URL::to('/products/hospital-management-software-development')}}">Telemedicine App</a></li>
                                <li><a href="{{URL::to('/products/hospital-management-software-development')}}">Hospital Management Software</a></li>
                                <li><a href="{{URL::to('/products/hospital-management-software-development')}}">Online Medicine Delivery App</a></li>
                                <li><a href="{{URL::to('/products/hospital-management-software-development')}}">Fitness App</a></li>
                                <li><a href="{{URL::to('/products/hospital-management-software-development')}}">Medical Cannabis Delivery App</a></li>
                            </ul>
                            <p class="menu-text">Transport</p>
                            <ul class="megaList" style="border: none;">
                                <li><a href="{{URL::to('/products/on-demand-trucking-app')}}">Taxi Booking</a></li>
                                <li><a href="{{URL::to('/products/on-demand-trucking-app')}}">On Demand Trucking App</a></li>
                                <li><a href="{{URL::to('/products/on-demand-trucking-app')}}">On Demand Courier App</a></li>
                            </ul>
                            <p class="menu-text">Exclusive</p>
                            <ul class="megaList" style="border: none;">
                                <li><a href="{{URL::to('/products/mobile-wallet-app')}}">Mobile Wallet App</a></li>
                                <li><a href="{{URL::to('/products/mobile-wallet-app')}}">Real Estate Mobile App</a></li>
                                <li><a href="{{URL::to('/products/mobile-wallet-app')}}">Home Service App</a></li>
                                <li><a href="{{URL::to('/products/mobile-wallet-app')}}">Education $ eLearning Apps</a></li>
                                <li><a href="{{URL::to('/products/mobile-wallet-app')}}">Fantasy Sport App</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 bd-l">
                            <p class="menu-text">Marketing-Ready Products</p>
                            <ul class="megaList" style="border: none;">
                                <li><a href="{{URL::to('/products/our-products')}}">Our Product</a></li>
                                <li><a href="{{URL::to('/products/our-products')}}">TeleDocto</a></li>
                                <li><a href="{{URL::to('/products/our-products')}}">TaxiWheel</a></li>
                                <li><a href="{{URL::to('/products/our-products')}}">TaxiOnGo</a></li>
                                <li><a href="{{URL::to('/products/our-products')}}">Grofee</a></li>
                                <li><a href="{{URL::to('/products/our-products')}}">Mobipayz</a></li>
                                <li><a href="{{URL::to('/products/our-products')}}">GymFitApp</a></li>
                                <li><a href="{{URL::to('/products/our-products')}}">ProRTC</a></li>
                                <li><a href="{{URL::to('/products/our-products')}}">XpertCahts</a></li>
                                <li><a href="{{URL::to('/products/our-products')}}">Chuzee</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 bd-l">
                            <div class="header-menu-contact">
                                <span>Unleash creativity, collaboration and disruptive innovation</span>

                                <div class="project-btn-d" style="text-align: left;">
                                    <a href="{{URL::to('/discuss-project')}}">Discuss your project</a>
                                </div>

                                <div class="open-call-us">
                                    <p>or call us at</p>
                                    <span>01799 544 290</span>
                                    <span>01839 631 451</span>
                                    <p>or email us at</p>
                                    <span>orfactor.xyz@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="c-hr"/>
                <h1 class="menu-bottom-heading">building product to the standerd of the world <br/> let the customer do talking</h1>
            </div>
        </div>
        <a class="navoption" id="industries" onclick="megaMenu(this.id)">INDUSTRIES</a>
            <div class="fullNav" id="subMenuFive">
            <div class="fullNav-inner">
                <div class="container p-0 justify-content-center align-items-center" style="display: flex; flex-direction: column">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="megaList" style="border: none">
                                <li><a href="{{URL::to('/industries/healthcare-life-science')}}">Health & Life Sciences</a></li>
                                <li><a href="{{URL::to('/industries/healthcare-life-science')}}">Fitness & Wellness</a></li>
                                <li><a href="{{URL::to('/industries/healthcare-life-science')}}">Transportation</a></li>
                                <li><a href="{{URL::to('/industries/healthcare-life-science')}}">Real Estate & Property</a></li>
                                <li><a href="{{URL::to('/industries/healthcare-life-science')}}">Travel & Hospitality</a></li>
                                <li><a href="{{URL::to('/industries/healthcare-life-science')}}">Media & Entertainment</a></li>
                                <li><a href="{{URL::to('/industries/healthcare-life-science')}}">Banking & Finance</a></li>
                                <li><a href="{{URL::to('/industries/healthcare-life-science')}}">Consumer Goods</a></li>
                                <li><a href="{{URL::to('/industries/healthcare-life-science')}}">Information Service</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 bd-l">
                            <ul class="megaList" style="border: none">
                                <li><a href="{{URL::to('/products/food-ordering-app')}}">Food & Grocery</a></li>
                                <li><a href="#{{URL::to('/products/e-commerce-products')}}">Ecommerce & Retail</a></li>
                                <li><a href="{{URL::to('/products/e-commerce-products')}}">Fantasy Sports</a></li>
                                <li><a href="{{URL::to('/products/e-commerce-products')}}">Logistics</a></li>
                                <li><a href="{{URL::to('/products/e-commerce-products')}}">Education & eLearning</a></li>
                                <li><a href="{{URL::to('/products/e-commerce-products')}}">Events & Ticketing</a></li>
                                <li><a href="{{URL::to('/products/e-commerce-products')}}">Capital Market</a></li>
                                <li><a href="{{URL::to('/products/e-commerce-products')}}">Manufacturing</a></li>
                                <li><a href="{{URL::to('/products/e-commerce-products')}}">Oil & Gas</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 bd-l">
                            <div class="header-menu-contact">
                                <span>Unleash creativity, collaboration and disruptive innovation</span>

                                <div class="project-btn-d" style="text-align: left;">
                                    <a href="{{URL::to('/discuss-project')}}">Discuss your project</a>
                                </div>

                                <div class="open-call-us">
                                    <p>or call us at</p>
                                    <span>01799 544 290</span>
                                    <span>01839 631 451</span>
                                    <p>or email us at</p>
                                    <span>orfactor.xyz@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="c-hr"/>
                <h1 class="menu-bottom-heading">We Will Shape Your Brand With Our Digital Solutions</h1>
            </div>
        </div>
        <a class="navoption" id="portfolio" onclick="megaMenu(this.id)">PORTFOLIO</a>
            <div class="fullNav" id="subMenuSix">
            <div class="fullNav-inner">
                <div class="container p-0">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="megaList">
                                <li><a href="{{URL::to('/portfolio-web')}}">Web Portfolio</a>
                                <li><a href="{{URL::to('/portfolio-mobile')}}">Mobile App Portfolio</a></li>
                                <li><a href="{{URL::to('/portfolio-brand')}}">Branding Portfolio</a></li>
                                <li><a href="#">Case Study</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 bd-l">
                            <p class="menu-text">Health & Fitness</p>
                            <ul class="megaList" style="display: flex; flex-wrap: wrap">
                                <li><a href="#">Teledocto</a></li>
                                <li><a href="#">Fitcheck</a></li>
                                <li><a href="#">Bodyboss</a></li>
                            </ul>
                            <p class="menu-text">Social Networking</p>
                            <ul class="megaList" style="display: flex; flex-wrap: wrap">
                                <li><a href="#">Groopylife</a></li>
                                <li><a href="#">Fantopias</a></li>
                                <li><a href="#">Connect</a></li>
                            </ul>
                            <p class="menu-text">Transportation</p>
                            <ul class="megaList" style="display: flex; flex-wrap: wrap">
                                <li><a href="#">TaxiApp UK</a></li>
                                <li><a href="#">Six Taxi</a></li>
                                <li><a href="#">Brilliant Move</a></li>
                                <li><a href="#">Camio</a></li>
                            </ul>
                            <p class="menu-text">Food & Restaurant</p>
                            <ul class="megaList" style="display: flex; flex-wrap: wrap">
                                <li><a href="#">Instafresh</a></li>
                                <li><a href="#">Groffe</a></li>
                                <li><a href="#">Qwikdrop</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 bd-l">
                            <p class="menu-text">Ecommerce, Retail & B2B</p>
                            <ul class="megaList" style="display: flex; flex-wrap: wrap">
                                <li><a href="#">Tredstyle</a></li>
                                <li><a href="#">Bolt</a></li>
                                <li><a href="#">Trackter</a></li>
                            </ul>
                            <p class="menu-text">Beauty & Wellness</p>
                            <ul class="megaList" style="display: flex; flex-wrap: wrap">
                                <li><a href="#">Nailpolished</a></li>
                                <li><a href="#">Spatogo</a></li>
                                <li><a href="#">Styloos</a></li>
                            </ul>
                            <p class="menu-text">Real Estate</p>
                            <ul class="megaList" style="display: flex; flex-wrap: wrap">
                                <li><a href="#">Virtual tour</a></li>
                                <li><a href="#">Padtime</a></li>
                                <li><a href="#">Assetlyst</a></li>
                                <li><a href="#">Real Estate</a></li>
                            </ul>
                            <p class="menu-text">Marketplce App</p>
                            <ul class="megaList" style="display: flex; flex-wrap: wrap">
                                <li><a href="#">Labayh</a></li>
                                <li><a href="#">Mendzy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <div class="header-menu-contact">
                                <span>Unleash creativity, collaboration and disruptive innovation</span>

                                <div class="project-btn-d" style="text-align: left;">
                                    <a href="{{URL::to('/discuss-project')}}">Discuss your project</a>
                                </div>

                                <div class="open-call-us">
                                    <p>or call us at</p>
                                    <span>01799 544 290</span>
                                    <span>01839 631 451</span>
                                    <p>or email us at</p>
                                    <span>orfactor.xyz@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="c-hr"/>
                <h1 class="menu-bottom-heading">Stunning Mobile Apps, Impeccable Expertise, Rebellious Impact</h1>
            </div>
        </div>
        <a class="navoption" id="career" onclick="megaMenu(this.id)">CAREER</a>
            <div class="fullNav" id="subMenuSeven">
            <div class="fullNav-inner">
                <div class="container p-0 justify-content-center align-items-center" style="display: flex; flex-direction: column">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="megaList">
                                <li><a href="#">Current Openings</a></li>
                                <li><a href="#">Diversity @ Orfactor</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 bd-l">
                            <ul class="megaList">
                                <li><a href="#">Trading & Development</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <div class="header-menu-contact">
                                <span>Unleash creativity, collaboration and disruptive innovation</span>

                                <div class="project-btn-d" style="text-align: left;">
                                    <a href="{{URL::to('/discuss-project')}}">Discuss your project</a>
                                </div>

                                <div class="open-call-us">
                                    <p>or call us at</p>
                                    <span>01799 544 290</span>
                                    <span>01839 631 451</span>
                                    <p>or email us at</p>
                                    <span>orfactor.xyz@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="c-hr"/>
                <h1 class="menu-bottom-heading">We Are Hiring! Start Your Journey Today</h1>
            </div>
        </div>
        <a class="navoption" href="{{URL::to('/contact')}}">CONTACT US</a>
        <a href="javascript:void(0);" class="icon" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="header-contact_">
        <ul class="header-contact-ul">
            <li class="mail-li">
                <a href="mailto:info@orfactor.com">
                    <img src="{{asset('Front/site_images/contact')}}/email.svg"/>
                </a>
            </li>
            <li class="call-li">
                <img src="{{asset('Front/site_images/contact')}}/phone.svg"/>
                <a href="tel:01799544290">+08 017 99 544 290</a>
                <a href="tel:01799544290">+08 018 39 631 451</a>
            </li>
        </ul>
{{--        <a href="#">
            <i class="material-icons-outlined">email</i>
        </a>
        <a href="#" style="display: flex; align-items: center; padding: 5px; text-decoration: none !important;">
            <i class="material-icons-outlined">phone_in_talk</i>
            <span style="padding-right: 5px; margin-top: -4px; color: #ffffff">+88 01799 54 42 90 +88 01799 54 42 90</span>
        </a>--}}
    </div>
</header>

<script>
    $(document).on('click', function(evt) {
        if(!$(evt.target).is('.navoption')) {
            $(".fullNav").removeClass('open');
        }
    });


    $(document).on('click', function(evt) {
        if(!$(evt.target).is('.navoption')){
            $(".navoption").removeClass('nav-active');
        }
    });

    $(".navoption").click(function(){
        $('.navoption .nav-active').not(this).removeClass('nav-active');
        $(this).addClass('nav-active');
    })
</script>

<script>
    $(function() {
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 50) {
                $(".topnav").addClass("scroll-down");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $(".topnav").removeClass("scroll-down");
            }
        });
    });
</script>
<script>
    $( document ).ready(function() {

        var opcionesnav = $('.navoption').length;
        var clickhamb=0;

        $("#hamburger").click(function(){
            clickhamb = 1;
            var header = $("#myTopnav");
            if (header[0].classList.length == 1) {
                header.addClass ("responsive");
                $("header").height((opcionesnav+1)*48);
                $(".navlist a:not(.icon)").css("display", "block");
                setTimeout(
                    function()
                    {
                        $(".navlist a:not(.icon)").css("transform", "translateX(0px)");
                    }, 50);

            } else {
                $(".navlist a:not(.icon)").css("transform", "translateX(600px)");
                header.height(48);
                setTimeout(
                    function()
                    {
                        header.removeClass("responsive");
                        header.height(48);
                        $(".navlist a:not(.icon)").css("display", "none");
                    }, 1600);
            }
        });


        $(window).on('resize', function(){
            console.log(clickhamb);
            if (($(window).width() > 600) && (clickhamb==1)){
                console.log(clickhamb + "     " + $(window).width());
                $("#myTopnav").height(48);
                $(".navlist a:not(.icon)").css("display", "block");
                setTimeout(
                    function()
                    {
                        $(".navlist a:not(.icon)").css("transform", "translateX(0px)");
                    }, 500);
            }
        });

    });
</script>

<script>
    function megaMenu(id) {
        // alert(id)
        if (id == 'company'){
            $("#subMenuOne").toggleClass('open')
            $("#subMenuTwo").removeClass('open')
            $("#subMenuThree").removeClass('open')
            $("#subMenuFour").removeClass('open')
            $("#subMenuFive").removeClass('open')
            $("#subMenuSix").removeClass('open')
            $("#subMenuSeven").removeClass('open')

        }
        else if (id == 'services'){
            $("#subMenuOne").removeClass('open')
            $("#subMenuTwo").toggleClass('open')
            $("#subMenuThree").removeClass('open')
            $("#subMenuFour").removeClass('open')
            $("#subMenuFive").removeClass('open')
            $("#subMenuSix").removeClass('open')
            $("#subMenuSeven").removeClass('open')
        }
        else if (id == 'solution'){
            $("#subMenuOne").removeClass('open')
            $("#subMenuTwo").removeClass('open')
            $("#subMenuThree").toggleClass('open')
            $("#subMenuFour").removeClass('open')
            $("#subMenuFive").removeClass('open')
            $("#subMenuSix").removeClass('open')
            $("#subMenuSeven").removeClass('open')
        }
        else if (id == 'product'){
            $("#subMenuOne").removeClass('open')
            $("#subMenuTwo").removeClass('open')
            $("#subMenuThree").removeClass('open')
            $("#subMenuFour").toggleClass('open')
            $("#subMenuFive").removeClass('open')
            $("#subMenuSix").removeClass('open')
            $("#subMenuSeven").removeClass('open')
        }
        else if (id == 'industries'){
            $("#subMenuOne").removeClass('open')
            $("#subMenuTwo").removeClass('open')
            $("#subMenuThree").removeClass('open')
            $("#subMenuFour").removeClass('open')
            $("#subMenuFive").toggleClass('open')
            $("#subMenuSix").removeClass('open')
            $("#subMenuSeven").removeClass('open')
        }
        else if (id == 'portfolio') {
            $("#subMenuOne").removeClass('open')
            $("#subMenuTwo").removeClass('open')
            $("#subMenuThree").removeClass('open')
            $("#subMenuFour").removeClass('open')
            $("#subMenuFive").removeClass('open')
            $("#subMenuSix").toggleClass('open')
            $("#subMenuSeven").removeClass('open')
        }
        else if (id == 'career'){
            $("#subMenuOne").removeClass('open')
            $("#subMenuTwo").removeClass('open')
            $("#subMenuThree").removeClass('open')
            $("#subMenuFour").removeClass('open')
            $("#subMenuFive").removeClass('open')
            $("#subMenuSix").removeClass('open')
            $("#subMenuSeven").toggleClass('open')
        }

    }
</script>