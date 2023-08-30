@extends('layouts.guest.app')

@section('content')
    <x-page-header title="Как мы работаем"/>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 bg-primary order-2 order-lg-1 p-0">
                <div class="h-100 m-0">
                    <div class="row m-0">
                        <div class="col-half-section col-half-section-right text-color-light py-5 ms-auto">
                            <div class="p-3">
                                <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                    <h2 class="mb-0 font-weight-bold text-dark">Где и как купить готовое украшение</h2>
                                    <div class="divider divider-dark divider-small mt-2 mb-4">
                                        <hr class="my-0 me-auto">
                                    </div>
                                    <p class="text-color-light lead pe-5 mb-4 pb-2">
                                        - В нашем офисе на производстве, где представлен наш полный ассортимент.
                                        Адрес:  Московская область, г. Подольск, ул. Б. Серпуховская, д. 43 ( 15 мин от Москвы)
                                    </p>
                                    <p class="text-color-light lead pe-5 mb-4 pb-2">
                                        - на сайте <a class="link-dark" href="https://eridanjewellery.com">eridanjewellery.com</a>, здесь представлен ассортимент наших тиражных изделий.
                                        Оформить и оплатить заказ вы сможете там же.
                                    </p>
                                    <p class="text-color-light lead pe-5 mb-4 pb-2">
                                        - на сайте <a class="link-dark" href="http://grudakovjewelry.com">grudakovjevelry.com</a>, здесь представлены наши украшения премиум класса.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-6 order-1 order-lg-2 p-0 bg-color-quaternary">
                <section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{ Vite::asset('resources/img/guest/home/how-we-work.jpg') }}" style="min-height: 450px; object-fit:cover;">
                    <div class="h-100 m-0">
                        <div class="row m-0">
                            <div class="col-half-section col-half-section-left">
                                <div class="p-3 p-relative zindex-1">
                                    <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="d-lg-none col-lg-6 order-1 order-lg-2 p-0 bg-color-quaternary">
                <section class="parallax section section-parallax custom-parallax-bg-pos-left custom-sec-left h-100 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{ Vite::asset('resources/img/guest/home/how-we-work-mobile.jpg') }}" style="min-height: 450px; object-fit:cover;">
                    <div class="h-100 m-0">
                        <div class="row m-0">
                            <div class="col-half-section col-half-section-left">
                                <div class="p-3 p-relative zindex-1">
                                    <div class="appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <section class="section bg-transparent section-no-border my-0">
        <div class="container pt-3 pb-4">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                        <h2 class="mb-0 font-weight-bold">Как сделать заказ</h2>
                        <div class="divider divider-primary divider-small mt-2 mb-4 text-center">
                            <hr class="my-0 mx-auto">
                        </div>
                    </div>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
                    <p class="lead">
                        Для покупки украшения вам необходимо прислать артикул или фото в Директ или WhatsApp <a href="https://api.whatsapp.com/send?phone=79160767575">+7 (916) 076-75-75</a>.
                        Мы свяжемся с вами для заключения договора купли-продажи.
                        Оплата по договору происходит на расчетный счет предприятия по ссылке, которую мы вам отправим
                    </p>
                    <p class="lead">
                        Украшения из наличия мы высылаем по 100 % предоплате.
                    </p>
                    <p class="lead">
                        После получения оплаты, мы отправляем изделие компанией СПЕЦСВЯЗЬ или СДЭК в пункт выдачи или адрес, указанный вами.
                        Доставка по России и странам СНГ осуществляется бесплатно.
                    </p>
                    <p class="lead">
                        Украшение вы получаете в фирменной подарочной упаковке.
                    </p>
                </div>
                <h4 class="mb-2 mt-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">Для заказа необходимо:</h4>
                <div class="process process-vertical py-4">
                    <div class="process-step appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">01</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-1 text-4 font-weight-bold">Выбор украшения</h4>
                            <p class="mb-0">Прислать фото или видео понравившегося украшения или собственные пожелания, возможно наброски изделия от руки.</p>
                        </div>
                    </div>
                    <div class="process-step appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">02</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-1 text-4 font-weight-bold">Выбор материалов</h4>
                            <p class="mb-0">Написать предпочтения по материалам и камням: проба, цвет, линейные размеры, пожелания по камням, их форме огранки и размерам. Если вы сомневаетесь и не можете сформулировать задание по материалам, присылайте бюджет, а мы предложим вам камни и наполнение вашего будущего украшения.</p>
                        </div>
                    </div>
                    <div class="process-step appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">03</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-1 text-4 font-weight-bold">Заключение договора</h4>
                            <p class="mb-0">Следующим этапом будет составление и подписание договора на изготовление. После подписания договора мы отправим вам ссылку на расчетный счет предприятия для внесения предоплаты. Предоплата за изготовление составляет 30%, остальное вы оплачиваете после изготовления украшения.</p>
                        </div>
                    </div>
                    <div class="process-step appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">04</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-1 text-4 font-weight-bold">Разработка дизайна</h4>
                            <p class="mb-0">После получения предоплаты мы приступаем к разработке дизайна вашего украшения. Согласование модели с вами дает четкое понимание линейных размеров, массы изделия, посадке на мочку, палец или шею. На этапе согласования, мы можем подкорректировать количество и размер вставок, а соответственно и бюджет будущего украшения.</p>
                        </div>
                    </div>
                    <div class="process-step appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">05</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-1 text-4 font-weight-bold">Изготовление</h4>
                            <p class="mb-0">Срок изготовления от 2-х до 4-х недель с момента утверждения вами 3D модели украшения. Все зависит от сложности изделия и загруженности нашего производства.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                    <div class="feature-box">
                        <div class="feature-box-icon custom-feature-box-icon-size-1 bg-color-secondary top-0">
                            <i class="fa-solid fa-truck-fast position-relative left-1"></i>
                        </div>
                        <div class="feature-box-info mb-4 pb-3">
                            <h4 class="font-weight-bold line-height-3 custom-font-size-1 mb-1">Доставка</h4>
                            <p class="mb-0">
                                Доставка изделий по России и странам СНГ производится бесплатно, компанией СПЕЦСВЯЗЬ или СДЭК. В пункт выдачи или адрес, указанный вами.
                                Доставка по миру осуществляется компаниями FERRARI или FEDEX.
                                Свое украшение вы получаете в фирменной подарочной упаковке.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                    <div class="feature-box">
                        <div class="feature-box-icon custom-feature-box-icon-size-1 bg-color-secondary top-0">
                            <i class="fa-solid fa-shield position-relative left-1"></i>
                        </div>
                        <div class="feature-box-info mb-4 pb-3">
                            <h4 class="font-weight-bold line-height-3 custom-font-size-1 mb-1">Гарантия и сервис</h4>
                            <p class="mb-0">
                                Гарантия на украшение - 10 лет.
                                Сервисное обслуживание в течении всего срока эксплуатации – бесплатно.
                                Сервисное обслуживание включает в себя: корректировку размера, профилактику закрепки камней, чистку и полировку, обновление покрытия.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                    <div class="feature-box">
                        <div class="feature-box-icon custom-feature-box-icon-size-1 bg-color-secondary top-0">
                            <i class="fa-solid fa-hammer position-relative left-1"></i>
                        </div>
                        <div class="feature-box-info mb-4 pb-3">
                            <h4 class="font-weight-bold line-height-3 custom-font-size-1 mb-1">Изготовление из материалов заказчика</h4>
                            <p class="mb-0">
                                Если модель будущего украшения позволяет использовать ваши материалы – мы с удовольствием это сделаем. Вы оплачиваете только работу по изготовлению.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
