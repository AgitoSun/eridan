@extends('layouts.guest.app')

@section('content')
    <x-page-header title="Каталог"/>

    <div class="container py-5 my-3 shop">
        <div class="row">
            <div class="col-md-5 mb-5 mb-md-0">
                <div class="thumb-gallery-wrapper">
                    <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                        @foreach($product->images as $image)
                            @if(substr(strrchr($image->path, '.'), 1) == 'mp4')
                                <div class="position-relative">
                                    <div class="ratio ratio-1x1">
                                        <video id="presentation2" class="float-start" width="100%" height="100%" muted="" loop="" preload="metadata">
                                            <source src="{{ Storage::url($image->path) }}" type="video/mp4">
                                        </video>
                                        <a href="#" class="position-absolute top-50pct left-50pct transform3dxy-n50 bg-light rounded-circle d-flex align-items-center justify-content-center text-decoration-none bg-color-hover-primary text-color-hover-light play-button-lg pulseAnim pulseAnimAnimated" data-trigger-play-video="#presentation2" data-trigger-play-video-remove="yes">
                                            <i class="fas fa-play text-5"></i>
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div>
                                    <img alt="" class="img-fluid rounded" src="{{ Storage::url($image->path) }}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
                        @foreach($product->images as $image)
                            @if(substr(strrchr($image->path, '.'), 1) == 'mp4')
                                <video id="presentation2" class="float-start" width="100%" height="100%" preload="metadata">
                                    <source src="{{ Storage::url($image->path) }}" type="video/mp4">
                                </video>
                            @else
                                <div class="cur-pointer">
                                    <img alt="" class="img-fluid rounded" src="{{ Storage::url($image->path) }}">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-7">

                <div class="summary entry-summary position-relative">

                    <h1 class="mb-0 font-weight-bold text-7">{{ $product->title }}</h1>

                    <div class="divider divider-primary divider-small mt-2 mb-4">
                        <hr class="my-0 me-auto">
                    </div>

                    @if($product->price)
                        <p class="price mb-3">
                            <span class="sale text-color-dark">{{ $product->price }} &#8381;</span>
                        </p>
                    @else
                        <p class="price mb-3">
                            <span class="sale text-color-dark">По запросу</span>
                        </p>
                    @endif

                    <span class="badge @if($product->availability == 'Под заказ') badge-danger @else badge-success @endif badge-md">{{ $product->availability }}</span>

                    <div class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
                        <ul class="nav nav-tabs justify-content-start">
                            <li class="nav-item active"><span class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3 active">Описание</span></li>
                        </ul>
                        <div class="tab-content p-0">
                            <div class="tab-pane px-0 py-3 active show">
                                <table class="table table-striped m-0">
                                    <tbody>
                                    <tr>
                                        <th>
                                            Артикул:
                                        </th>
                                        <td>
                                            {{ $product->sku }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Металл:
                                        </th>
                                        <td>
                                            {{ $product->metal }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Вставка:
                                        </th>
                                        <td>
                                            {{ $product->insert_1 }}<br>
                                            @if($product->insert_2){{ $product->insert_2 }}<br>@endif
                                            @if($product->insert_3){{ $product->insert_3 }}<br>@endif
                                            @if($product->insert_4){{ $product->insert_4 }}<br>@endif
                                            @if($product->insert_5){{ $product->insert_5 }}<br>@endif
                                            @if($product->insert_6){{ $product->insert_6 }}@endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Вес:
                                        </th>
                                        <td>
                                            {{ $product->weight }} гр.
                                        </td>
                                    </tr>
                                    @if($product->size)
                                        <tr>
                                            <th>
                                                Размер:
                                            </th>
                                            <td>
                                                {{ $product->size }}
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    @endsection
    @push('scripts')
        <script src="{{ Vite::asset('resources/js/guest/examples.gallery.js') }}"></script>
        <script src="/../vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
        <script src="/../js/views/view.shop.js"></script>
    @endpush
