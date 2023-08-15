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
                    Ювелир с 30 летним стажем. Создатель и руководитель ювелирной студии и ограночного производства.
                </p>
                <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    На нашем производстве мы граним драгоценные и полудрагоценные камни со всего мира. Выполняем огранку любых форм и размеров под заказ.
                </p>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                    В нашей ювелирной студии мы изготавливаем украшения по вашим приоритетам, а также имеем достаточно большой ассортимент готовых украшений с драгоценными и полудрагоценными камнями.
                </p>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    Нашим клиентам мы предоставляем бесплатный сервис на наши украшения на весь срок эксплуатации. Это чистка, профилактика закрепки камней, обновление покрытия, корректировка размера, профилактика замков и т.д.
                </p>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">
                    На все наши украшения мы предоставляем пожизненную гарантию!
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
