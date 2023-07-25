<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style customizer-hide">
    @push('css')
        <link href="{{ Vite::asset('resources/css/admin/page-auth.css') }}" rel="stylesheet"/>
    @endpush
    @include('layouts.admin.head')
    <body>
        <!-- Content -->
        <div class="container-xxl">
            <div class="authentication-wrapper authentication-basic container-p-y">
                <div class="authentication-inner">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- / Content -->

        @vite([
            'resources/js/admin/jquery.js',
            'resources/js/admin/popper.js',
            'resources/js/admin/bootstrap.js',
            'resources/js/admin/perfect-scrollbar.js',
            'resources/js/admin/menu.js',
        ])

        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
