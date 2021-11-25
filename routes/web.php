<?php

use Illuminate\Support\Facades\Route;

// FrontEnd Factor
Route::get('/', 'FrontFactorController@frontIndex')->name('frontIndex');
Route::get('/about', 'FrontFactorController@frontAbout')->name('frontAbout');
Route::get('/contact', 'FrontFactorController@frontContact_Sales')->name('frontContact_Sales');
Route::get('/discuss-project', 'FrontFactorController@discussProject')->name('approach');
Route::get('/business', 'FrontFactorController@business')->name('business');
Route::get('/insights', 'FrontFactorController@insights')->name('insights');
Route::get('/blog', 'FrontFactorController@blog')->name('blog');

/*          Services           */

//Mobile

Route::get('/services/mobile-app-development', 'FrontFactorController@mobileAppDevelopment');
Route::get('/services/ios', 'FrontFactorController@ios');
Route::get('/services/android-app-development', 'FrontFactorController@androidAppDevelopment');
Route::get('/services/enterprise-solutions', 'FrontFactorController@enterpriseSolution');
Route::get('/services/iphone-app-development', 'FrontFactorController@iphoneDevelopment');
Route::get('/services/ipad-app-development', 'FrontFactorController@ipadDevelopment');
Route::get('/services/cross-platform', 'FrontFactorController@crossPlatform');
Route::get('/services/react-native-app-development', 'FrontFactorController@reactNative');

//WEB

Route::get('/services/web-design-development', 'FrontFactorController@webDesign');
Route::get('/services/angular-js-development', 'FrontFactorController@angularJs');
Route::get('/services/enterprise-web-development', 'FrontFactorController@enterpriseWeb');
Route::get('/services/full-stack-development', 'FrontFactorController@fullStack');
Route::get('/services/html-css-development', 'FrontFactorController@htmlCss');
Route::get('/services/laravel-development', 'FrontFactorController@laravelDevelopment');
Route::get('/services/node-js-development', 'FrontFactorController@nodeJs');
Route::get('/services/php-development', 'FrontFactorController@phpDevelopment');
Route::get('/services/progressive-web-development', 'FrontFactorController@progressiveWeb');
Route::get('/services/react-js-development', 'FrontFactorController@reactJs');
Route::get('/services/yii-development', 'FrontFactorController@yiiDevelopment');


//Prototyping & Strategy

Route::get('/services/mobile-app-prototyping', 'FrontFactorController@mobileAppPrototyping');
Route::get('/services/app-design-guidelines', 'FrontFactorController@appDesignGuidelines');
Route::get('/services/creative-design', 'FrontFactorController@creativeDesign');
Route::get('/services/ui-ux-design', 'FrontFactorController@uiUxDesign');
Route::get('/services/branding-service', 'FrontFactorController@brandingService');
Route::get('/services/responsive-design', 'FrontFactorController@responsiveDesign');

//E-commerce & CMS

Route::get('/services/e-commerce-development', 'FrontFactorController@ecommerceDevelopment');
Route::get('/services/magento-development', 'FrontFactorController@magentoDevelopment');
Route::get('/services/opencart-development', 'FrontFactorController@openCartDevelopment');
Route::get('/services/shopify-development', 'FrontFactorController@shopifyDevelopment');
Route::get('/services/wordpress-development', 'FrontFactorController@wordpressDevelopment');

//Trending

Route::get('/services/api-integration', 'FrontFactorController@apiIntregation');
Route::get('/services/bitcoin-app-development', 'FrontFactorController@bitcoinAppDevelopment');
Route::get('/services/cloud-station-service', 'FrontFactorController@cloudStationService');
Route::get('/services/payment-getway-integration', 'FrontFactorController@paymentGetway');
Route::get('/services/paypal-integration', 'FrontFactorController@paypalIntegration');
Route::get('/services/sap-ui', 'FrontFactorController@sapUi');

/*          End Services            */

/*******************************************************************************************************/

/*          Solutions           */

//Solutions

Route::get('/solutions/health-care', 'FrontFactorController@healthCare');

//Technology

Route::get('/solutions/ai-ml', 'FrontFactorController@aiMl');


// Digital Solutions

Route::get('/solutions/digital-solutions-strategy', 'FrontFactorController@digitalSolutionsStrategy');


/*          End Solutions           */
/***************************************************************************************************************/

/*          Products            */

//Social Networking

Route::get('/products/social-networking', 'FrontFactorController@socialNetworking');

//Shopping & Lifestyle

Route::get('/products/e-commerce-products', 'FrontFactorController@ecommerceProducts');

//Food & Grocery

Route::get('/products/food-ordering-app', 'FrontFactorController@foodOrderingApp');

//Healthcare & Fitness

Route::get('/products/hospital-management-software-development', 'FrontFactorController@hospitalManagement');

//Transport

Route::get('/products/on-demand-trucking-app', 'FrontFactorController@onDemandTrucking');

//Exclusive

Route::get('/products/mobile-wallet-app', 'FrontFactorController@mobileWallet');

//Market-Ready Products

Route::get('/products/our-products', 'FrontFactorController@ourProducts');


/*          Products End            */
/****************************************************************************************************************/

/*          Industries          */


//Healthcare life Science

Route::get('/industries/healthcare-life-science', 'FrontFactorController@healthcareLifeScience');




/*          Industries End          */
/*********************************************************************************************************************/


/*          Portfolio           */


Route::get('/portfolio-web', 'FrontFactorController@webPortfolio');
Route::get('/portfolio-mobile', 'FrontFactorController@mobilePortfolio');
Route::get('/portfolio-brand', 'FrontFactorController@brandPortfolio');




/*          Portfolio End           */



// BackEnd Factor
Route::get('/backEnd', 'BackFactorController@backIndex')->name('BackIndex');


