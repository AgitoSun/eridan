@extends('layouts.admin.app')

@section('content')
    <x-title-page>Категория {{ $category->title }}</x-title-page>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="post" class="needs-validation">
                        @csrf
                        @method('PUT')
                        <div class="position-relative mb-3 @error('title') mb-5 @enderror">
                            <label class="form-label" for="title">Название</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $category->title }}"/>
                            <x-validation-error error="title"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
