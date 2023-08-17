@extends('layouts.admin.app')

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('content')
    <x-title-page>Новый товар</x-title-page>
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="needs-validation">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="position-relative mb-3 @error('title') mb-5 @enderror">
                            <label class="form-label" for="title">Название</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}"/>
                            <x-validation-error error="title"/>
                        </div>
                        <div class="position-relative mb-3 @error('sku') mb-5 @enderror">
                            <label class="form-label" for="sku">Артикул</label>
                            <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" name="sku" value="{{old('sku')}}"/>
                            <x-validation-error error="sku"/>
                        </div>
                        <div class="position-relative mb-3 @error('metal') mb-5 @enderror">
                            <label for="metal" class="form-label">Металл</label>
                            <select class="form-select @error('metal') is-invalid @enderror" id="metal" name="metal">
                                <option disabled selected>Выберите металл товара</option>
                                <option value="Белое золото 585 пробы" @selected(old('metal') == 'Белое золото 585 пробы')>Белое золото 585 пробы</option>
                                <option value="Белое золото 750 пробы" @selected(old('metal') == 'Белое золото 750 пробы')>Белое золото 750 пробы</option>
                                <option value="Желтое золото 585 пробы" @selected(old('metal') == 'Желтое золото 585 пробы')>Желтое золото 585 пробы</option>
                                <option value="Желтое золото 585 пробы" @selected(old('metal') == 'Желтое золото 585 пробы')>Желтое золото 750 пробы</option>
                                <option value="Розовое золото 750 пробы" @selected(old('metal') == 'Розовое золото 750 пробы')>Розовое золото 750 пробы</option>
                                <option value="Черное золото 585 пробы" @selected(old('metal') == 'Черное золото 585 пробы')>Черное золото 585 пробы</option>
                                <option value="Платина 950 пробы" @selected(old('metal') == 'Платина 950 пробы')>Платина 950 пробы</option>
                            </select>
                            <x-validation-error error="metal"/>
                        </div>
                        <div class="position-relative mb-3 @error('weight') mb-5 @enderror">
                            <label class="form-label" for="weight">Вес</label>
                            <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{old('weight')}}"/>
                            <x-validation-error error="weight"/>
                        </div>
                        <div class="position-relative mb-3 @error('category_id') mb-5 @enderror">
                            <label for="category_id" class="form-label">Категория</label>
                            <select class="form-select @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                <option disabled selected>Выберите категорию товара</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @selected(old('category_id'))>{{ $category->title }}</option>
                                @endforeach
                            </select>
                            <x-validation-error error="category_id"/>
                        </div>
                        <div class="position-relative mb-3 @error('size') mb-5 @enderror">
                            <label class="form-label" for="size">Размер</label>
                            <input type="text" class="form-control @error('size') is-invalid @enderror" id="size" name="size" value="{{old('size')}}"/>
                            <x-validation-error error="size"/>
                        </div>
                        <div class="position-relative mb-3 @error('availability') mb-5 @enderror">
                            <label for="availability" class="form-label">Наличие</label>
                            <select class="form-select @error('availability') is-invalid @enderror" id="availability" name="availability">
                                <option disabled selected>Выберите наличие товара</option>
                                <option value="В наличии" @selected(old('availability') == 'В наличии')>В наличии</option>
                                <option value="Под заказ" @selected(old('availability') == 'Под заказ')>Под заказ</option>
                            </select>
                            <x-validation-error error="availability"/>
                        </div>
                        <div class="position-relative mb-3 @error('price') mb-5 @enderror">
                            <label class="form-label" for="price">Цена</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}"/>
                            <x-validation-error error="price"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="position-relative mb-3 @error('insert_1') mb-5 @enderror">
                            <label class="form-label" for="insert_1">Вставка 1</label>
                            <input type="text" class="form-control @error('insert_1') is-invalid @enderror" id="insert_1" name="insert_1" value="{{old('insert_1')}}"/>
                            <x-validation-error error="insert_1"/>
                        </div>
                        <div class="position-relative mb-3">
                            <label class="form-label" for="insert_2">Вставка 2</label>
                            <input type="text" class="form-control" id="insert_2" name="insert_2" value="{{old('insert_2')}}"/>
                        </div>
                        <div class="position-relative mb-3">
                            <label class="form-label" for="insert_3">Вставка 3</label>
                            <input type="text" class="form-control" id="insert_3" name="insert_3" value="{{old('insert_3')}}"/>
                        </div>
                        <div class="position-relative mb-3">
                            <label class="form-label" for="insert_4">Вставка 4</label>
                            <input type="text" class="form-control" id="insert_4" name="insert_4" value="{{old('insert_4')}}"/>
                        </div>
                        <div class="position-relative mb-3">
                            <label class="form-label" for="insert_5">Вставка 5</label>
                            <input type="text" class="form-control" id="insert_5" name="insert_5" value="{{old('insert_5')}}"/>
                        </div>
                        <div class="position-relative mb-3">
                            <label class="form-label" for="insert_6">Вставка 6</label>
                            <input type="text" class="form-control" id="insert_6" name="insert_6" value="{{old('insert_6')}}"/>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="form-check form-check">
                            <input class="form-check-input" type="checkbox" name="favorites" id="favorites" @checked(old('favorites'))/>
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
                                <div class="dz-message needsclick">
                                    <label class="form-label" for="video">Основная фотография</label>
                                </div>
                                <div class="fallback position-relative @error('main_image') mb-5 @enderror">
                                    <input name="main_image" type="file" class="@error('main_image') is-invalid @enderror"/>
                                    <x-validation-error error="main_image"/>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
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
                                <div class="fallback position-relative">
                                    <input name="image[]" multiple type="file" class="@error('image') is-invalid @enderror"/>
                                    <x-validation-error error="image"/>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Создать</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
@endpush
