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
@endsection
