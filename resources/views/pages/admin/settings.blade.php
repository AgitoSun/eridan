@extends('layouts.admin.app')

@section('content')
    <x-title-page>Настройки</x-title-page>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-6">
                <div class="card-body">
                    <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="file" class="form-label">Импорт товаров</label>
                            <input class="form-control" name="file" type="file" id="file">
                        </div>
                        <button class="btn btn-primary">Импорт</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
