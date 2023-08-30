@extends('layouts.guest.app')

@section('content')
    <div class="d-none d-lg-block owl-carousel-wrapper position-relative" style="height: 670px">
        <div class="owl-carousel-loader">
            <div class="bounce-loader">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-75px', 'nav': true, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 1 -->
            <div class="position-relative" data-dynamic-height="['670px','670px','670px','550px','500px']" style="background-image: url({{ Vite::asset('resources/img/guest/home/home-banner.jpg') }}); background-size: cover; background-position: center; height: 670px;">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column justify-content-center h-100">
                                <p class="custom-font-slider-2 text-dark" data-plugin-animated-letters data-plugin-options="{'startDelay': 750, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                    ЮВЕЛИРНАЯ СТУДИЯ / ОГРАНОЧНОЕ ПРОИЗВОДСТВО
                                </p>
                                <h2 class="custom-font-slider-1 mb-0 font-weight-bold appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">
                                    Грудаков Сергей
                                </h2>
                                <div class="divider divider-primary divider-small text-start mt-2 mb-4 mx-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                                    <hr class="my-0">
                                </div>
                                <p class="text-3-5 line-height-9 appear-animation text-dark" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                    На нашем производстве мы граним драгоценные и полудрагоценные камни со всего мира.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-lg-none owl-carousel-wrapper position-relative" style="height: 670px">
        <div class="owl-carousel-loader">
            <div class="bounce-loader">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-75px', 'nav': true, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 1 -->
            <div class="position-relative" data-dynamic-height="['670px','670px','670px','550px','500px']" style="background-image: url({{ Vite::asset('resources/img/guest/home/home-banner-mobile.jpg') }}); background-size: cover; background-position: center; height: 670px;">
                <div class="container h-100">
                    <div class="row h-100" style="background-color: #00000075;">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column justify-content-end h-100">
                                <p class="custom-font-slider-2 text-white text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 750, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                    ЮВЕЛИРНАЯ СТУДИЯ / ОГРАНОЧНОЕ ПРОИЗВОДСТВО
                                </p>
                                <h2 class="custom-font-slider-1 mb-0 font-weight-bold appear-animation text-white text-center" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">
                                    Грудаков Сергей
                                </h2>
                                <div class="divider divider-primary divider-small divider-small-center text-start mt-2 mb-4 mx-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                                    <hr class="my-0">
                                </div>
                                <p class="text-3-5 line-height-9 appear-animation text-white text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                    На нашем производстве мы граним драгоценные и полудрагоценные камни со всего мира.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-default section-no-border my-0">
        <div class="container pt-3 pb-4">
            <div class="row">
                <div class="col-lg-12 mb-4 mb-lg-0">
                    <h2 class="mb-0 font-weight-bold appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="100">
                        О компании
                    </h2>
                    <div class="divider divider-primary divider-small mt-2 mb-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                        <hr class="my-0 me-auto">
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                        <p class="font-weight-medium text-4">
                            Основатель и руководитель ювелирной компании <a href="https://instagram.com/eridan__jc?igshid=MzRlODBiNWFlZA==">«ERIDAN»</a> и собственного ограночного производства.
                        </p>
                        <p class="text-3-5 line-height-9">
                            Опыт работы на производстве и оценке драгоценных камней – <span class="highlight highlight-primary highlight-bg-opacity highlight-animated px-0" data-appear-animation="highlight-animated-start" data-appear-animation-delay="200" data-plugin-options="{'flagClassOnly': true}">
                                30 лет
                            </span>.
                        </p>
                        <p class="text-3-5 line-height-9">
                            Украшения премиум класса и огранка камней с месторождений всего мира.
                        </p>
                        <p class="text-3-5 line-height-9">
                            Большой ассортимент ювелирных украшений В НАЛИЧИИ.
                        </p>
                        <p class="text-3-5 line-height-9">
                            Изготовление под заказ из собственных материалов или материалов клиента.
                        </p>
                        <p class="text-3-5 line-height-9">
                            Подбор камней под ваш бюджет, сертификация в России и ведущих геммологических лабораториях мира.
                        </p>

                        <a class="mt-3 font-weight-semi-bold" href="{{ route('about-company') }}">
                            Подробнее
                            <img width="27" height="27" src="{{ Vite::asset('resources/img/guest/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary d-inline-block ms-2 p-relative bottom-1'}" />
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @if(count($products)>0)
    <section class="section bg-transparent section-no-border my-0">
        <div class="container pt-3 pb-4">
            <div class="row">
                <div class="col text-center">
                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                        <h2 class="mb-0 font-weight-bold">
                            Каталог
                        </h2>
                        <div class="divider divider-primary divider-small mt-2 mb-4 text-center">
                            <hr class="my-0 mx-auto">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="masonry-loader masonry-loader-showing">
                        <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                            @foreach($products as $product)
                                <div class="col-sm-6 col-lg-4">
                                <div class="product mb-0 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                                    <div class="product-thumb-info border-0 mb-3">
                                        <a href="{{ route('catalog.category', $product->category_id) }}">
                                            <div class="product-thumb-info-image">
                                                @foreach($product->images->where('main', 1) as $image)
                                                    <img alt="" class="rounded shop-img" src="{{ Storage::url($image->path) }}">
                                                @endforeach
                                            </div>
                                        </a>
                                    </div>
                                    <h3 class="text-4 font-weight-bold font-alternative text-transform-none line-height-3 mb-3">
                                        <a href="{{ route('catalog.category', $product->category_id) }}" class="text-color-dark text-color-hover-primary">
                                            {{ $product->category['title'] }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center mt-5">
                    <a href="{{ route('catalog.index') }}" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 appear-animation animated fadeInUpShorterPlus appear-animation-visible" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="850" style="animation-delay: 850ms;">
                        СМОТРЕТЬ ВСЕ
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif
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
                                    <a class="mt-3 link-dark font-weight-semi-bold" href="{{ route('how-we-working') }}">
                                        Подробнее
                                        <img width="27" height="27" src="{{ Vite::asset('resources/img/guest/icons/arrow-right.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark d-inline-block ms-2 p-relative bottom-1'}" />
                                    </a>
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
                <div class="col-12 text-center mb-5">
                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                        <h2 class="mb-0 font-weight-bold">Ответы на популярные вопросы</h2>
                        <div class="divider divider-primary divider-small mt-2 mb-4 text-center">
                            <hr class="my-0 mx-auto">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cascading-images-wrapper">
                        <div class="cascading-images position-relative">
                            <img src="{{ Vite::asset('resources/img/guest/home/IMG_6544.jpg') }}" class="appear-animation rounded" width="230" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" />
                            <div class="position-absolute w-100" style="top: 41%; left: -50%;">
                                <img src="{{ Vite::asset('resources/img/guest/home/IMG_3346.jpg') }}" class="appear-animation rounded" width="200" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" />
                            </div>
                            <div class="position-absolute w-100" style="top: 60%; left: 30%;">
                                <img src="{{ Vite::asset('resources/img/guest/home/IMG_3323.jpg') }}" class="appear-animation rounded" width="230" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms" />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col mb-4 mb-lg-0">
                    <div class="accordion accordion-modern-status accordion-modern-status-primary" id="accordion100">
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingOne">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100One" aria-expanded="false" aria-controls="collapse100One">
                                        1 - Где приобрести готовое украшение?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100One" class="collapse" aria-labelledby="collapse100HeadingOne" data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <p class="mb-1">
                                        - в нашем офисе на производстве, где представлен наш полный ассортимент.
                                        Адрес:  Московская область, г. Подольск, ул. Б. Серпуховская, д. 43 ( 15 мин от Москвы)
                                    </p>
                                    <p class="mb-1">
                                        - на сайте <a href="https://eridanjewellery.com">eridanjewellery.com</a>, здесь представлен ассортимент наших тиражных изделий.
                                    </p>
                                    <p class="mb-1">
                                        - на сайте <a href="http://grudakovjewelry.com">grudakovjevelry.com</a>, здесь представлены наши украшения премиум класса.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingTwo">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Two" aria-expanded="false" aria-controls="collapse100Two">
                                        2 - Где посмотреть наличие и цены?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Two" class="collapse" aria-labelledby="collapse100HeadingTwo" data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-1">
                                        Наличие и цены тиражных украшений вы можете посмотреть на сайте <a href="https://eridanjewellery.com">eridanjewellery.com</a>
                                    </p>
                                    <p class="mb-1">
                                        Наличие и цены на украшения премиум класса на сайте <a href="http://grudakovjewelry.com">grudakovjevelry.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingThree">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Three" aria-expanded="false" aria-controls="collapse100Three">
                                        3 - Сколько времени занимает изготовление украшения?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Three" class="collapse" aria-labelledby="collapse100HeadingThree" data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-0">
                                        Срок изготовления от 2-х до 4-х недель с момента утверждения вами 3D модели украшения. Все зависит от сложности изделия и загруженности нашего производства.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingFour">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Four" aria-expanded="false" aria-controls="collapse100Four">
                                        4 - Как производится оплата?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Four" class="collapse" aria-labelledby="collapse100HeadingFour" data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-1">
                                        Оплата производится на расчетный счет предприятия, после заключения договора.
                                    </p>
                                    <p class="mb-1">
                                        Украшения из наличия мы высылаем по 100 % предоплате.
                                    </p>
                                    <p class="mb-1">
                                        Украшения под заказ -предоплата 30%, остальное по факту изготовления.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingFive">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Five" aria-expanded="false" aria-controls="collapse100Five">
                                        5 - Что такое гарантия и сервисное обслуживание?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Five" class="collapse" aria-labelledby="collapse100HeadingFive" data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-1">
                                        Гарантия на все наши украшения – 10 лет.
                                    </p>
                                    <p class="mb-1">
                                        Сервисное обслуживание в течении всего срока эксплуатации-бесплатно.
                                    </p>
                                    <p class="mb-1">
                                        Сервисное обслуживание включает в себя: корректировку размера, профилактику закрепки камней, чистку и полировку, обновление покрытия.
                                    </p>
                                    <p class="mb-1">
                                        Следы механического воздействия, деформация изделия, потеря и сколы камней, возникшие по причине небрежного отношения, хранения или транспортировки украшения- не являются гарантийным случаем!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingSix">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Six" aria-expanded="false" aria-controls="collapse100Six">
                                        6 - Как происходит доставка по России и странам СНГ?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Six" class="collapse" aria-labelledby="collapse100HeadingSix" data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-1">
                                        Доставка по России и странам СНГ производится бесплатно, компанией СПЕЦСВЯЗЬ или СДЭК. В пункт выдачи или адрес, указанный вами.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse100HeadingSeven">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Seven" aria-expanded="false" aria-controls="collapse100Seven">
                                        7 - Как происходит доставка по миру?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Seven" class="collapse" aria-labelledby="collapse100HeadingSeven" data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <p class="mb-1">
                                        Доставка по всему миру осуществляется компаниями FERRARI и FEDEX.
                                    </p>
                                    <p class="mb-1">
                                        Оплата доставки производится за ваш счет.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
