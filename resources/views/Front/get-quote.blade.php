<style>


    /*          Contact Page            */

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


    .contact-page-container{
        position: relative;
        min-height: 950px;
    }

    .contact-heading{
        padding-top: 160px;
    }

    .contact-heading h1{
        font-size: 4rem;
        line-height: 1.2;
        font-weight: 900;
        margin-bottom: 40px;
    }

    .contact-heading span{
        margin-bottom: 60px;
        line-height: 1.875rem;
        font-weight: 500;
    }

    .contact-banner{
        /*background-image: url("https://www.codiant.com/assets/images/company/about/about-us-banner.webp");*/
        background-color: #000048;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 400px;
        padding: 50px 0 50px;
    }

    @media screen and (max-width: 1599px) {
        .contact-banner{
            height: 450px;
        }
    }

    .contact-banner-content{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .contact-banner-content span{
        color: #ffffff;
        margin-bottom: 30px;
        font-size: 16px;
        text-align: center;
        position: relative;
        display: inline-block;
    }

    .contact-banner-content span::after{
        position: absolute;
        height: 1px;
        background-color: #ffffff;
        width: 30px;
        left: 0;
        right: 0;
        margin: auto;
        content: "";
        bottom: -10px;
    }

    .contact-banner-content h1{
        font-size: calc(18px + (34 - 18) * ((100vw - 320px) / (1920 - 320)));
        margin-bottom: 15px;
        line-height: 48px;
        color: #ffffff;
        font-weight: 700;
    }

    @media screen and (max-width: 1399px){
        .contact-banner-content h1{
            line-height: 40px;
        }
    }

    .contact-form-position{
        /*position: absolute;*/
        top: 20rem;
        left: 0;
        right: 0;
        background-image: url("../images/contact/Animated Shape.svg");
        border-radius: 5px;
    }

    .contact-bottom-section{
        padding: 70px 0;
    }

    .c-b-bg{
        background-color: #00004826;
        padding: 38px;
    }

    .c-b-bg img{
        max-height: 50px;
        /*text-align: left;*/
        margin-bottom: 20px;
    }

    .c-b-bg h1{
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 8px;
    }

    /*          Get Quote Form              */


    .get-quote-container{
        height: 100%;
        width: 100%;
        background-image: url("./public/Front/site/images/Blob Group.svg");
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        padding: 70px 0;
    }


</style>


{{--            Get Quote Form          --}}

<div class="get-quote-container" id="getQuoteForm">
    <div class="solution-heading-container center-text-align">
        <span>Lets Get Started!</span>
        <h2 class="solution-heading">Do You Have A Project In Mind?</h2>
    </div>
    <div class="container">
        <div class="contactForm" style="margin-top: 30px">
            <form action="">
                <div class="inputGroup inputGroup1">
                    <input class="inputGroup__textfield" type="text" name="" value="" placeholder="Firstname*" required data-value-missing="Please fill out this field.">
                </div>

                <div class="inputGroup inputGroup2">
                    <input class="inputGroup__textfield" type="text" name="" value="" placeholder="Lastname*" required data-value-missing="Please fill out this field.">
                </div>

                <div class="inputGroup inputGroup3">
                    <input class="inputGroup__textfield" type="text" name="" value="" placeholder="Email*" required data-value-missing="Please fill out this field.">
                </div>

                <div class="inputGroup inputGroup4">
                    <input class="inputGroup__textfield" type="text" name="" value="" placeholder="Phone*" required data-value-missing="Please fill out this field.">
                </div>

                <div class="inputGroup inputGroup5">
                    <input class="inputGroup__textfield" type="text" name="" value="" placeholder="Company">
                </div>

                <div class="inputGroup inputGroup6">
                    <textarea class="inputGroup__textfield" name="name" rows="8" placeholder="How can we help?*" required data-value-missing="Please fill out this field."></textarea>
                </div>

                <div class="inputGroup inputGroup7">
                    <button type="submit" name="button">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>