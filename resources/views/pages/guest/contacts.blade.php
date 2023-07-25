@extends('layouts.guest.app')

@section('content')
    <x-page-header title="Контакты"/>

    <div class="container py-5 my-3">
        <div class="row">
            <div class="col">

                <h2 class="mb-0 font-weight-bold">Мы на связи</h2>
                <div class="divider divider-primary divider-small mt-2 mb-4">
                    <hr class="my-0 me-auto">
                </div>

                <div class="row py-2">
                    <div class="col-md-4">
                        <p class="mb-0"><strong class="text-dark text-4">Социальные сети:</strong></p>
                        <div class="feature-box feature-box-style-2 align-items-center">
                            <div class="feature-box-icon">
                                <img width="34" height="28" src="{{ Vite::asset('resources/img/guest/icons/whatsapp.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 34px; height: 28px;" />
                            </div>
                            <div class="feature-box-info ps-1">
                                <strong><a class="text-dark" href="https://api.whatsapp.com/send?phone=79160767575">WHATSAPP</a></strong>
                            </div>
                        </div>
                        <div class="feature-box feature-box-style-2 align-items-center">
                            <div class="feature-box-icon">
                                <img width="33" height="31" src="{{ Vite::asset('resources/img/guest/icons/instagram.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 33px; height: 31px;" />
                            </div>
                            <div class="feature-box-info ps-1">
                                <strong><a class="text-dark" href="https://www.instagram.com/grudakovsergei">INSTAGRAM</a></strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-0"><strong class="text-dark text-4">Телефон:</strong></p>
                        <div class="feature-box feature-box-style-2 align-items-center">
                            <div class="feature-box-icon">
                                <img width="30" height="30" src="{{ Vite::asset('resources/img/guest/icons/phone.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary p-relative left-3'}" style="width: 30px; height: 30px;" />
                            </div>
                            <div class="feature-box-info ps-1">
                                <strong><a class="text-dark" href="tel:+79160767575">+7 (916) 076-75-75</a></strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="mb-0"><strong class="text-dark text-4">Email:</strong></p>
                        <div class="feature-box feature-box-style-2 align-items-center">
                            <div class="feature-box-icon">
                                <img width="30" height="30" src="{{ Vite::asset('resources/img/guest/icons/envelope-regular.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 30px; height: 30px;" />
                            </div>
                            <div class="feature-box-info ps-1">
                                <strong><a class="text-dark" href="sgrudakov@rusdhouse.ru">sgrudakov@rusdhouse.ru</a></strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

{{--    <section class="section border-0 lazyload my-0" data-bg-src="img/demos/law-firm/backgrounds/background-4.jpg" style="background-position: 50% 100%;">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-md-end py-3">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">--}}
{{--                        <h2 class="mb-0 font-weight-bold">Request a Free Consultation</h2>--}}
{{--                        <div class="divider divider-primary divider-small mt-2 mb-4">--}}
{{--                            <hr class="my-0 me-auto">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">--}}
{{--                        <p class="font-weight-medium text-4">Consult right now with our experienced team for complete solutions to your legal issues.</p>--}}
{{--                    </div>--}}
{{--                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">--}}
{{--                        <form class="contact-form form-style-2" action="php/contact-form.php" method="POST">--}}
{{--                            <div class="contact-form-success alert alert-success d-none mt-4">--}}
{{--                                <strong>Success!</strong> Your message has been sent to us.--}}
{{--                            </div>--}}

{{--                            <div class="contact-form-error alert alert-danger d-none mt-4">--}}
{{--                                <strong>Error!</strong> There was an error sending your message.--}}
{{--                                <span class="mail-error-message text-1 d-block"></span>--}}
{{--                            </div>--}}

{{--                            <div class="row pb-2 mb-1">--}}
{{--                                <div class="form-group col-lg-6">--}}
{{--                                    <input type="text" value="" placeholder="Full Name" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>--}}
{{--                                </div>--}}
{{--                                <div class="form-group col-lg-6">--}}
{{--                                    <input type="email" value="" placeholder="Email Address" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row pb-2 mb-1">--}}
{{--                                <div class="form-group col">--}}
{{--                                    <input type="text" value="" placeholder="Subject" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row pb-2 mb-1">--}}
{{--                                <div class="form-group col">--}}
{{--                                    <textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="form-group col">--}}
{{--                                    <input type="submit" value="Submit Form" class="btn btn-primary btn-modern text-uppercase font-weight-bold text-2 py-3 btn-px-4" data-loading-text="Loading...">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
