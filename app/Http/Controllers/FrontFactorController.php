<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
class FrontFactorController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function frontIndex (){
        return view('Front/page/index');
    }
    public function frontAbout (){
        return view('Front/page/about');
    }
    public function frontContact_Sales (){
        return view('Front/page/contact');
    }
    public function discussProject() {
        return view('Front/page/discuss-project');
    }
    public function business() {
        return view('Front/page/business');
    }
    public function insights() {
        return view('Front/page/insights');
    }
    public function blog() {
        return view('Front/page/blog');
    }

//    Services

/*          Mobile Services         */
    public function mobileAppDevelopment(){
        return view('Front.page.services.mobile.mobile-app-development');
    }
    public function ios(){
        return view('Front.page.services.mobile.ios');
    }
    public function androidAppDevelopment(){
        return view('Front.page.services.mobile.android-app-development');
    }
    public function enterpriseSolution(){
        return view('Front.page.services.mobile.enterprise-solutions');
    }
    public function iphoneDevelopment(){
        return view('Front.page.services.mobile.iphone');
    }
    public function ipadDevelopment(){
        return view('Front.page.services.mobile.ipad');
    }
    public function crossPlatform(){
        return view('Front.page.services.mobile.cross-platform');
    }
    public function reactNative(){
        return view('Front.page.services.mobile.react-native');
    }

/*          Web services         */

    public function angularJs(){
        return view('Front.page.services.web.angular-js');
    }
    public function enterpriseWeb(){
        return view('Front.page.services.web.enterprise-web');
    }
    public function fullStack(){
        return view('Front.page.services.web.full-stack');
    }
    public function htmlCss(){
        return view('Front.page.services.web.html-css');
    }
    public function laravelDevelopment(){
        return view('Front.page.services.web.laravel');
    }
    public function nodeJs(){
        return view('Front.page.services.web.node-js');
    }
    public function phpDevelopment(){
        return view('Front.page.services.web.php');
    }
    public function progressiveWeb(){
        return view('Front.page.services.web.progressive-web');
    }
    public function reactJs(){
        return view('Front.page.services.web.react-js');
    }
    public function webDesign(){
        return view('Front.page.services.web.web-design-development');
    }
    public function yiiDevelopment(){
        return view('Front.page.services.web.yii');
    }

    /*          Mobile App & prototyping Strategy           */

    public function mobileAppPrototyping(){
        return view('Front.page.services.prototyping-strategy.mobile-app-prototyping-strategy');
    }
    public function appDesignGuidelines(){
        return view('Front.page.services.prototyping-strategy.app-design-guidelines');
    }
    public function creativeDesign(){
        return view('Front.page.services.prototyping-strategy.creative-design');
    }
    public function uiUxDesign(){
        return view('Front.page.services.prototyping-strategy.ui-ux');
    }
    public function brandingService(){
        return view('Front.page.services.prototyping-strategy.branding');
    }
    public function responsiveDesign(){
        return view('Front.page.services.prototyping-strategy.responsive-design');
    }

    /*          E-commerce & CMS            */

    public function ecommerceDevelopment(){
        return view('Front.page.services.ecommerce-cms.ecommerce');
    }
    public function magentoDevelopment(){
        return view('Front.page.services.ecommerce-cms.magento');
    }
    public function openCartDevelopment(){
        return view('Front.page.services.ecommerce-cms.opencart');
    }
    public function shopifyDevelopment(){
        return view('Front.page.services.ecommerce-cms.shopify');
    }
    public function wordpressDevelopment(){
        return view('Front.page.services.ecommerce-cms.wordpress');
    }


    /*          Trending            */

    public function apiIntregation(){
        return view('Front.page.services.trending.api');
    }
    public function bitcoinAppDevelopment(){
        return view('Front.page.services.trending.bitcoin');
    }
    public function cloudStationService(){
        return view('Front.page.services.trending.cloud-station');
    }
    public function paymentGetway(){
        return view('Front.page.services.trending.payment-getway');
    }
    public function paypalIntegration(){
        return view('Front.page.services.trending.paypal');
    }
    public function sapUi(){
        return view('Front.page.services.trending.sap-ui');
    }

//    Solutions

/*          Solutions           */

    public function healthCare(){
        return view('Front.page.solutions.solutions.health-care');
    }

/*          Technology          */
    public function aiMl(){
        return view('Front.page.solutions.technology.ai-ml');
    }

/*          Digital Solutions           */
    public function digitalSolutionsStrategy(){
        return view('Front.page.solutions.digital-solutions.digital-research-strategy');
    }

//Products

/*          Social Networking            */

    public function socialNetworking(){
        return view('Front.page.products.social-networks.social-networking');
    }

    /*          Shopping & Lifestyle            */

    public function ecommerceProducts(){
        return view('Front.page.products.shopping-lifestyle.ecommerce-product');
    }

    /*          Food & Grocery          */

    public function foodOrderingApp(){
        return view('Front.page.products.food-grocery.food-ordering-app');
    }

    /*          Healthcare & Fitness            */

    public function hospitalManagement(){
        return view('Front.page.products.healthcare-fitness.hospital-management');
    }

    /*          Transport           */

    public function onDemandTrucking(){
        return view('Front.page.products.transport.on-demand-trucking-app');
    }

    /*          Mobile Wallet App           */

    public function mobileWallet(){
        return view('Front.page.products.exclusive.mobile-wallet-app');
    }

    /*          Market-Ready Products           */

    public function ourProducts(){
        return view('Front.page.products.market-ready-products.our-products');
    }

//Industries

    /*          Healthcare life science         */

    public function healthcareLifeScience(){
        return view('Front.page.industries.healthcare-life-sciences');
    }


//Portfolio

    public function webPortfolio(){
        return view('Front.page.portfolio.web-portfolio');
    }
    public function mobilePortfolio(){
        return view('Front.page.portfolio.mobile-portfolio');
    }
    public function brandPortfolio(){
        return view('Front.page.portfolio.brand-protfolio');
    }

    public function Contact_send(Request $request){

        // $this->validate($request,[
        //     'subject'=>'required',
        //     'email'=>'required|email',
        //     'message'=>'required'
        // ]);
        // $sendMail= new SendMail(
        //  $subject = $request->input('subject'),
        //  $message= $request->input('message')
        // );
 
            // dd($request->all());
            
        Mail::to('rana@nexkraft.com')->
        send(new SendMail($request->messageQuery,
            $request->email,$request->phone,$request->name,$request->subject));
        return view('page/index');
        
    }


       
}
