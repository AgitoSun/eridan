@extends('layouts.guest.app')

@section('content')
    <x-page-header title="О компании"/>

    <div class="container pt-5">

        <div class="row py-4 mb-2">
            <div class="col-md-6 order-2">
                <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-bold text-12 mb-2 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Грудаков Сергей</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500">Создатель и руководитель</p>
                </div>
                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                    Основатель и руководитель ювелирной компании <a href="https://instagram.com/eridan__jc?igshid=MzRlODBiNWFlZA==">«ERIDAN»</a> и собственного ограночного производства.
                </p>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    Опыт работы на производстве и оценке драгоценных камней – 30 лет.
                </p>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    Украшения премиум класса и огранка камней с месторождений всего мира.
                </p>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    Большой ассортимент ювелирных украшений В НАЛИЧИИ.
                </p>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
                    Изготовление под заказ из собственных материалов или материалов клиента.
                </p>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
                    Подбор камней под ваш бюджет, сертификация в России и ведущих геммологических лабораториях мира.
                </p>
            </div>
            <div class="col-md-6 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
                <img src="{{ Vite::asset('resources/img/guest/about/grudakov-sergei.jpg') }}" class="img-fluid mb-2 rounded" alt="">
            </div>
        </div>
    </div>

    <section class="section bg-transparent section-no-border my-0">
        <div class="container pt-3 pb-4">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="0">
                        <h2 class="mb-0 font-weight-bold">Реквизиты компании</h2>
                        <div class="divider divider-primary divider-small mt-2 mb-4 text-center">
                            <hr class="my-0 mx-auto">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="450">
                    <div class="feature-box">
                        <div class="feature-box-info mb-4 pb-3">
                            <p class="mb-0">
                                ООО «Торговый Дом «Эридан»
                            </p>
                            <p class="mb-0">
                                <b>ИНН:</b> 5036172010
                            </p>
                            <p class="mb-0">
                                <b>КПП:</b> 503601001
                            </p>
                            <p class="mb-0">
                                <b>ОГРН:</b> 1185074007832
                            </p>
                            <p class="mb-0">
                                <b>ОКПО:</b> 29782532
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="650">
                    <div class="feature-box">
                        <div class="feature-box-info mb-4 pb-3">
                            <p class="mb-0">
                                <b>Номер счёта:</b> 40702810340000107372
                            </p>
                            <p class="mb-0">
                                <b>Банк:</b> ПАО "Сбербанк России", г. Москва
                            </p>
                            <p class="mb-0">
                                <b>БИК:</b> 044525225
                            </p>
                            <p class="mb-0">
                                <b>Кор. счёт:</b> 30101810400000000225
                            </p>
                            <p class="mb-0">
                                <b>Адрес:</b>
                                142105, МО, г. Подольск,  ул. Б. Серпуховская,</br>
                                д. 43, корп. 102, офис 1В-3Т1, эт. 3
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
