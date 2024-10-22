@extends('layouts.admin.app')

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    @vite('resources/css/admin/bootstrap-select.css')
@endpush

@section('content')
    <x-title-page>{{ $product->title }}</x-title-page>
    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data" class="needs-validation">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="position-relative mb-3 @error('title') mb-5 @enderror">
                            <label class="form-label" for="title">Название</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $product->title }}"/>
                            <x-validation-error error="title"/>
                        </div>
                        <div class="position-relative mb-3 @error('sku') mb-5 @enderror">
                            <label class="form-label" for="sku">Артикул</label>
                            <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" name="sku" value="{{ $product->sku }}"/>
                            <x-validation-error error="sku"/>
                        </div>
                        <div class="position-relative mb-3 @error('metal') mb-5 @enderror">
                            <label for="metal" class="form-label">Металл</label>
                            <select class="form-select @error('metal') is-invalid @enderror" id="metal" name="metal">
                                <option disabled selected>Выберите металл товара</option>
                                <option value="Белое золото 585 пробы" @selected($product->metal == 'Белое золото 585 пробы')>Белое золото 585 пробы</option>
                                <option value="Белое золото 750 пробы" @selected($product->metal == 'Белое золото 750 пробы')>Белое золото 750 пробы</option>
                                <option value="Желтое золото 585 пробы" @selected($product->metal == 'Желтое золото 585 пробы')>Желтое золото 585 пробы</option>
                                <option value="Желтое золото 585 пробы" @selected($product->metal == 'Желтое золото 585 пробы')>Желтое золото 750 пробы</option>
                                <option value="Розовое золото 750 пробы" @selected($product->metal == 'Розовое золото 750 пробы')>Розовое золото 750 пробы</option>
                                <option value="Черное золото 585 пробы" @selected($product->metal == 'Черное золото 585 пробы')>Черное золото 585 пробы</option>
                                <option value="Платина 950 пробы" @selected($product->metal == 'Платина 950 пробы')>Платина 950 пробы</option>
                            </select>
                            <x-validation-error error="metal"/>
                        </div>
                        <div class="position-relative mb-3 @error('weight') mb-5 @enderror">
                            <label class="form-label" for="weight">Вес</label>
                            <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{ $product->weight }}"/>
                            <x-validation-error error="weight"/>
                        </div>
                        <div class="position-relative mb-3 @error('category_id') mb-5 @enderror">
                            <label for="category_id" class="form-label">Категория</label>
                            <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                <option disabled selected>Выберите категорию товара</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @selected($category->id == $product->category_id)>{{ $category->title }}</option>
                                @endforeach
                            </select>
                            <x-validation-error error="category_id"/>
                        </div>
                        <div class="position-relative mb-3 @error('size') mb-5 @enderror">
                            <label class="form-label" for="size">Размер</label>
                            <input type="text" class="form-control @error('size') is-invalid @enderror" id="size" name="size" value="{{ $product->size }}"/>
                            <x-validation-error error="size"/>
                        </div>
                        <div class="position-relative mb-3 @error('availability') mb-5 @enderror">
                            <label for="availability" class="form-label">Наличие</label>
                            <select class="form-select @error('availability') is-invalid @enderror" id="availability" name="availability">
                                <option disabled selected>Выберите наличие товара</option>
                                <option value="В наличии" @selected($product->availability == 'В наличии')>В наличии</option>
                                <option value="Под заказ" @selected($product->availability == 'Под заказ')>Под заказ</option>
                            </select>
                            <x-validation-error error="availability"/>
                        </div>
                        <div class="position-relative mb-3 @error('price') mb-5 @enderror">
                            <label class="form-label" for="price">Цена</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $product->price }}"/>
                            <x-validation-error error="price"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
{{--                <div class="card mb-4">--}}
{{--                    <h5 class="card-header">Теги</h5>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="mb-3 @error('tags') mb-5 @enderror">--}}
{{--                            <select class="selectpicker w-100 @error('tags') is-invalid @enderror" id="tags" name="tags[]" data-style="btn-default" multiple data-icon-base="bx" data-tick-icon="bx-check text-primary" none-selected-text="asd">--}}
{{--                                @foreach($tags as $tag)--}}
{{--                                    <option value="{{ $tag->id }}" @foreach($product->tags as $productTag) @selected($tag->id == $productTag->id) @endforeach>{{ $tag->name }}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                            <x-validation-error error="tags"/>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="card mb-4">
                    <h5 class="card-header">Вставки</h5>
                    <div class="card-body">
                        <div id="dynamicTable">
                            @foreach($product->inserts as $insert)
                                <div class="row repeater-wrapper">
                                    <div class="mb-3 col-10">
                                        <label class="form-label" for="inserts[{{ $insert->id }}][name]">Вставка</label>
                                        <input name="inserts[{{ $insert->id }}][name]" type="text" id="inserts[{{ $insert->id }}][name]" class="form-control" value="{{ $insert->name }}">
                                    </div>
                                    <div class="mb-3 col-2 d-flex align-items-center">
                                        <button type="button" class="remove-tr btn btn-label-danger mt-4">
                                            <i class="bx bx-x me-1"></i>
                                        </button>
                                    </div>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                        <div class="mb-0">
                            <button id="add" type="button" class="btn btn-primary">
                                <i class="bx bx-plus me-1"></i>
                                <span class="align-middle">Добавить</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="form-check form-check">
                            <input class="form-check-input" type="checkbox" name="favorites" id="favorites" @checked($product->favorites)/>
                            <label class="form-check-label" for="favorites">На главную</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                @if($images->isNotEmpty())
                                    @foreach($images as $image)
                                        <img width="200px" class="img-fluid rounded-3 mb-3" src="{{ Storage::url($image->path) }}" alt="{{ $product->title }}">
                                    @endforeach
                                @endif
                                <div class="dz-message needsclick">
                                    <label class="form-label" for="video">Основная фотография</label>
                                </div>
                                <div class="fallback position-relative @error('main_image') mb-5 @enderror">
                                    <input name="main_image" type="file" class="@error('main_image') is-invalid @enderror"/>
                                    <x-validation-error error="main_image"/>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                @if(!empty($product->video))
                                    <img width="200px" class="img-fluid rounded-3 mb-3" src="{{ Storage::url($product->video->frame) }}" alt="{{ $product->title }}">
                                @endif
                                <div class="dz-message needsclick">
                                    <label class="form-label" for="video">Видео</label>
                                </div>
                                <div class="fallback position-relative @error('video') mb-5 @enderror">
                                    <input name="video" type="file" class="@error('video') is-invalid @enderror"/>
                                    <x-validation-error error="video"/>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="dz-message needsclick">
                                    <label class="form-label" for="video">Дополнительные фотографии</label>
                                </div>
                                <div class="fallback">
                                    <input name="image[]" multiple type="file" class="@error('image') is-invalid @enderror"/>
                                    <x-validation-error error="image"/>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">

        var i = 0;
        var add = document.getElementById('add');

        add.addEventListener('click', function() {

            ++i;

            $("#dynamicTable").append(
                '<div class="row repeater-wrapper">' +
                '<div class="mb-3 col-10">' +
                '<label class="form-label" for="inserts_new['+i+'][name]">Вставка</label>' +
                '<input name="inserts_new['+i+'][name]" type="text" id="inserts_new['+i+'][name]" class="form-control">' +
                '</div>' +
                '<div class="mb-3 col-2 d-flex align-items-center">' +
                '<button type="button" class="remove-tr btn btn-label-danger mt-4">' +
                '<i class="bx bx-x me-1"></i>' +
                '</button>' +
                '</div>' +
                '<hr>' +
                '</div>'
            );
        });

        $(document).on('click', '.remove-tr', function(){
            $(this).parents('.repeater-wrapper').remove();
        });

    </script>
    @vite('resources/js/admin/bootstrap-select.js')
    <script>$(".selectpicker").selectpicker();</script>
@endpush
