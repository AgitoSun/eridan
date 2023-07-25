<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Grudakov Sergei Jewelry</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{-- Vite::asset('resources/img/favicon/favicon.ico') --}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{-- Vite::asset('resources/img/favicon/favicon.ico') --}}">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    @vite([
        'resources/css/guest/theme.css',
        'resources/css/guest/theme-elements.css',
        'resources/css/guest/theme-blog.css',
        'resources/css/guest/theme-shop.css',
    ])

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">

    @stack('css')

    <!-- Skin CSS -->
    @vite([
        'resources/css/guest/skins/default.css',
    ])

    <!-- Theme Custom CSS -->
    @vite([
        'resources/css/guest/custom.css',
    ])

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>
</head>
