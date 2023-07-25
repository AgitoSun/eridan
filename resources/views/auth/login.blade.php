@extends('layouts.admin.app-auth')

@section('content')
    <!-- Content -->
    <div class="card">
        <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
                @include('layouts.guest.logo.header-logo')
            </div>

            <form method="POST" action="{{ route('login') }}" class="mb-3">
                @csrf
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autofocus value="{{old('email')}}" placeholder="Введите ваш email"/>
                    <x-validation-error error="email"/>
                </div>
                <!-- Password -->
                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Пароль</label>
{{--                        @if (Route::has('password.request'))--}}
{{--                            <a href="{{ route('password.request') }}">--}}
{{--                                <small>Забыли пароль?</small>--}}
{{--                            </a>--}}
{{--                        @endif--}}
                    </div>
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Введите ваш пароль"/>
                        <x-validation-error error="password"/>
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                </div>
                <!-- Remember Me -->
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember_me" name="remember"/>
                        <label class="form-check-label" for="remember_me"> Запомнить меня </label>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Войти</button>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
@endsection
