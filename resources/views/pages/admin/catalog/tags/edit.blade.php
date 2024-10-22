@extends('layouts.admin.app')

@section('content')
    <x-title-page>Тег {{ $tag->name }}</x-title-page>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('tags.update', $tag->id) }}" method="post" class="needs-validation">
                        @csrf
                        @method('PUT')
                        <div class="position-relative mb-3 @error('name') mb-5 @enderror">
                            <label class="form-label" for="name">Название</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $tag->name }}"/>
                            <x-validation-error error="name"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
