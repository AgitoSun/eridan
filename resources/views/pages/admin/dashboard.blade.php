@extends('layouts.admin.app')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <span class="badge bg-label-success p-2">
                            <i class="bx bx-grid-horizontal"></i>
                        </span>
                    </div>
                    <span class="d-block">Всего товаров</span>
                    <h4 class="card-title mb-1">{{ $allProductsCount }}</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <span class="badge bg-label-warning p-2">
                            <i class="bx bx-image-add"></i>
                        </span>
                    </div>
                    <span class="d-block">Товары без фото</span>
                    <h4 class="card-title mb-1">{{ $productsWithoutPhoto }}</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <span class="badge bg-label-warning p-2">
                            <i class='bx bx-video-plus' ></i>
                        </span>
                    </div>
                    <span class="d-block">Товары без видео</span>
                    <h4 class="card-title mb-1">{{ $productsWithoutVideo }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-lg-8 mb-4 mb-md-0">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Товары на главной</h5>
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table text-nowrap">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Артикул</th>
                            <th>Наличие</th>
                            <th>Цена</th>
                            <th>Категория</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($productsOnMain as $productOnMain)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @foreach($productOnMain->images as $image)
                                                <img src="{{ Storage::url($image->path) }}" alt="{{ $productOnMain->title }}" height="32" width="32" class="me-2 rounded-3">
                                            @endforeach
                                            <a href="{{ route('products.edit', $productOnMain->id) }}">
                                                {{ $productOnMain->title }}
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $productOnMain->sku }}
                                    </td>
                                    <td>
                                        <span class="badge @if($productOnMain->availability == 'В наличии') bg-label-success @else bg-label-danger @endif">{{ $productOnMain->availability }}</span>
                                    </td>
                                    <td>
                                        {{ \App\Helpers\Helpers::fmtCurrency($productOnMain->price) }}
                                    </td>
                                    <td>
                                        {{ $productOnMain->category['title'] }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 mb-4 mb-md-0">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Категории</h5>
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table table-nowrap">
                        <thead>
                        <tr>
                            <th>Название категории</th>
                            <th>Товаров</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <a class="link-dark" href="{{ route('categories.show', $category->id) }}">
                                        {{ $category->title }}
                                    </a>
                                </td>
                                <td>
                                    <span class="badge bg-label-primary me-1">
                                        {{ DB::table('products')->where('category_id', $category->id)->count() }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
