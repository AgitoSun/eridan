@extends('layouts.admin.app')

@section('content')
    <x-alerts/>
    <x-title-page>Товары</x-title-page>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="row mx-2">
                        <div class="text-end d-flex justify-content-end">
                            <div class="dt-buttons btn-group flex-wrap d-flex mb-6 mb-sm-0">
                                <a class="btn btn-secondary" href="{{ route('file-export') }}">
                                    <span><i class="bx bx-export me-2 bx-xs"></i>Экспорт</span>
                                </a>
                                <x-button-add>
                                    {{ route('products.create') }}
                                </x-button-add>
                            </div>
                        </div>
                    </div>
                </div>
                @if(count($products) < 1)
                    <div class="card-body">
                        <x-alert-list-empty>
                            Для добавления нового товара нажмите кнопку "Добавить"
                        </x-alert-list-empty>
                    </div>
                @else
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Медиа</th>
                                <th>Название</th>
                                <th>Артикул</th>
                                <th>Наличие</th>
                                <th>Цена</th>
                                <th>Категория</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach($products as $key => $product)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="@if($product->images->isNotEmpty()) link-success @endif">
                                                <i class="bx bx-image"></i>
                                            </div>
                                            <div class="@if($product->video) link-success @endif">
                                                <i class="bx bx-video"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('products.edit', $product->id) }}">
                                            {{ $product->title }}
                                        </a>
                                    </td>
                                    <td>{{ $product->sku }}</td>
                                    <td>
                                        <span class="badge @if($product->availability == 'В наличии') bg-label-success @else bg-label-danger @endif">{{ $product->availability }}</span>
                                    </td>
                                                                        <td>{{ \App\Helpers\Helpers::fmtCurrency($product->price) }}</td>
{{--                                    <td>{{ $product->price }}</td>--}}
                                    <td>{{ $product->category['title'] }}</td>
                                    <td class="text-end">
                                        <div class="dropstart">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('products.edit', $product->id) }}">
                                                    <i class="bx bx-edit-alt me-1"></i> Изменить
                                                </a>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item" onclick="return confirm('Вы уверены?')">
                                                        <i class="bx bx-trash me-1"></i> Удалить
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row mx-2 mt-3">
                        <div class="text-end d-flex justify-content-end">
                            {{ $products->links('vendor.pagination.admin') }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
