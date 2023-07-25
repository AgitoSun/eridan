@extends('layouts.admin.app')

@section('content')
    <x-alerts/>
    <x-title-page>Категории</x-title-page>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="row mx-2">
                        <div class="text-end d-flex justify-content-end">
                            <button type="button" class="btn btn-primary mt-lg-2" data-bs-toggle="modal" data-bs-target="#addServer">
                                Добавить
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="addServer" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Новая категория</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('categories.store') }}" method="post" class="needs-validation">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label" for="title">Название</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}"/>
                                            <x-validation-error error="title"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Отмена
                                    </button>
                                    <button type="submit" class="btn btn-primary">Создать</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @if(count($categories) < 1)
                    <div class="card-body">
                        <x-alert-list-empty>
                            Для добавления новой категории нажмите кнопку "Добавить"
                        </x-alert-list-empty>
                    </div>
                @else
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Название категории</th>
                                <th>Товаров</th>
                                <th></th>
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
                                    <td class="text-end">
                                        <div class="dropstart">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('categories.edit', $category->id) }}">
                                                    <i class="bx bx-edit-alt me-1"></i> Изменить
                                                </a>
                                                <form action="{{ route('categories.destroy', $category->id) }}" method="post">
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
                @endif
            </div>
        </div>
    </div>
@endsection
