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
                                    <h2 class="mb-0 font-weight-bold text-dark">Как купить понравившееся украшение или камень</h2>
                                    <div class="divider divider-dark divider-small mt-2 mb-4">
                                        <hr class="my-0 me-auto">
                                    </div>
                                    <p class="text-color-light lead pe-5 mb-4 pb-2">
                                        Вы присылаете нам скрин или артикул в директ или вотсап. Мы связываемся с вами для
                                        обсуждения доставки и способа оплаты. После получения оплаты, мы отправляем вам
                                        украшение компанией СДЭК за свой счет, либо вы самостоятельно можете приехать к нам и
                                        забрать его в нашем офисе.
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
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450">
                    <div class="feature-box">
                        <div class="feature-box-icon custom-feature-box-icon-size-1 bg-color-secondary top-0">
                            <i class="fas fa-puzzle-piece position-relative left-1"></i>
                        </div>
                        <div class="feature-box-info mb-4 pb-3">
                            <h4 class="font-weight-bold line-height-3 custom-font-size-1 mb-1">Выбор дизайна</h4>
                            <p class="mb-0">Пришлите нам фото понравившегося украшения в директ или вотсап и мы расчитаем его
                                ориентировочную стоимость. Или просто расскажите свою идею, мы вместе продумаем
                                дизайн</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-box-icon custom-feature-box-icon-size-1 bg-color-tertiary top-0">
                            <i class="fas fa-map-signs position-relative top-2 right-1"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold line-height-3 custom-font-size-1 mb-1">Оформление заказа</h4>
                            <p class="mb-0">После утверждения всех параметров будущего украшения, мы создаем 3d модель и
                                отправляем ее вам. На этом этапе вы видите, как будет выглядеть ваше украшение. Здесь мы
                                можем внести коррективы, чтобы выбрать наилучший вариант.
                                После утверждения 3D модели мы оформляем договор. Предоплата за изготовление
                                составляет 30%, остальное вы оплачиваете после изготовления украшения.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450">
                    <div class="feature-box">
                        <div class="feature-box-icon custom-feature-box-icon-size-1 bg-color-secondary top-0">
                            <i class="fa-solid fa-wand-magic-sparkles position-relative left-1"></i>
                        </div>
                        <div class="feature-box-info mb-4 pb-3">
                            <h4 class="font-weight-bold line-height-3 custom-font-size-1 mb-1">Изготовление</h4>
                            <p class="mb-0">После подписания договора и внесения предоплаты, мы приступаем к изготовлению. Все
                                украшения перед закрепкой камней мы отправляем в Государственную Пробирную
                                Инспекцию, где их проверяют и ставят пробу. Получив украшение обратно, мы крепим камни,
                                полируем, покрываем родием.</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-box-icon custom-feature-box-icon-size-1 bg-color-tertiary top-0">
                            <i class="fa-solid fa-check position-relative top-2 right-1"></i>
                        </div>
                        <div class="feature-box-info">
                            <h4 class="font-weight-bold line-height-3 custom-font-size-1 mb-1">Украшение готово</h4>
                            <p class="mb-0">Вы забираете и оплачиваете свой заказ в удобное для вас время в нашем офисе. Если вы
                                находитесь в другом городе, мы отправим его вам компанией СДЭК за свой счет. Свое
                                украшение вы получаете в фирменной подарочной упаковке.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
