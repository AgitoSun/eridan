@extends('layouts.guest.app')

@section('content')
    <x-page-header title="Каталог"/>

    <div class="container py-5 my-3">

        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <aside class="sidebar">
                    <h5 class="font-weight-semi-bold pt-3">Категории</h5>
                    <ul class="nav nav-list flex-column">
                        <li class="nav-item"><a class="nav-link {{ active_link('catalog') }}" href="{{ route('catalog.index') }}">Все</a></li>
                        @foreach($categories as $category)
                            @if(count($category->products)>=1)
                                <li class="nav-item"><a class="nav-link {{ active_link('catalog/category/'.$category->id) }}" href="{{ route('catalog.category', $category->id) }}">{{ $category->title }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </aside>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">

                <div class="masonry-loader masonry-loader-showing">
                    <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                        @foreach($products as $product)
                        <div class="col-sm-6 col-lg-4">
                            <div class="product mb-0">
                                <div class="product-thumb-info border-0 mb-3">
                                    <div class="product-thumb-info-badges-wrapper">
                                        <span class="badge badge-ecommerce @if($product->availability == 'Под заказ') badge-danger @else badge-success @endif">
                                            {{ $product->availability }}
                                        </span>
                                    </div>
                                    <a href="{{ route('catalog.show', $product->id) }}">
                                        <div class="product-thumb-info-image">
                                            @foreach($product->images->where('main', 1) as $image)
                                                <img alt="" class="rounded shop-img" src="{{ Storage::url($image->path) }}">
                                            @endforeach
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="{{ route('catalog.category', $product->category_id) }}" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">
                                            {{ $product->category['title'] }}
                                        </a>
                                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                            <a href="{{ route('catalog.show', $product->id) }}" class="text-color-dark text-color-hover-primary">
                                                {{ $product->title }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                @if($product->price)
                                    <p class="price text-5 mb-3">
                                        <span class="text-color-dark font-weight-semi-bold">{{ \App\Helpers\Helpers::fmtCurrency($product->price) }}</span>
                                    </p>
                                @else
                                    <p class="price text-5 mb-3">
                                        <span class="text-color-dark font-weight-semi-bold">По запросу</span>
                                    </p>
                                @endif
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="row mt-4">

                        <div class="col">

                            <ul class="pagination float-end">
                                {{ $products->links('vendor.pagination.guest') }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
