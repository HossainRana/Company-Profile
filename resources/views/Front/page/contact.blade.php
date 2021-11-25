
@section('title', 'Contact | OrFactor')

@extends('Front.layout')

@section('content')

    <div class="contact-page-container">
        <div class="container">
            <div class="contact-heading">
                <h1>Contact Us</h1>
                <div class="row">
                    <div class="col-md-6">
                        <span>Drop us a line about your project at <a href="mailto:info@orfactor.com">info@orfactor.com</a> or via the contact form below, and we will contact you within a business day.</span>
                    </div>
                    <div class="col-md-6">
                        <span>All submitted information will be kept confidential.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-form-position">
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
        <div class="contact-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="c-b-mail c-b-bg">
                            <img src="{{asset('Front/Site_images/contact')}}/mail-icon.svg" />
                            <h1>Email</h1>
                            <p>info@orfactor.com</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="c-b-contact c-b-bg">
                            <img src="{{asset('Front/Site_images/contact')}}/call-icon.svg" />
                            <h1>Contact</h1>
                            <p>+08 017 99 54 42 90</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="c-b-skype c-b-bg">
                            <img src="{{asset('Front/Site_images/contact')}}/skype-icon.svg" />
                            <h1>Skype</h1>
                            <p>OrfactorConnect</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script_section')


@endsection

