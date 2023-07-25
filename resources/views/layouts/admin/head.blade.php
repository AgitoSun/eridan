<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'FlorAdmin') }}</title>

    <!-- Favicon -->
{{--    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/img/favicon/favicon.ico') }}"/>--}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite([
    'resources/css/admin/select2.css',
    'resources/css/admin/boxicons.css',
    'resources/css/admin/core.css',
    'resources/css/admin/theme-default.css',
    'resources/css/admin/perfect-scrollbar.css',
    'resources/css/admin/demo.css',
    'resources/js/admin/helpers.js',
    'resources/js/admin/config.js',
    ])

    @stack('css')
</head>
