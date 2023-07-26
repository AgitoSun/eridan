<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="layout-menu-fixed">
    <!-- Head -->
    @include('layouts.guest.head')

    <body>
        <div class="body">
            <!-- Header -->
            @include('layouts.guest.header')
{{--            @include('layouts.guest.header-mobile')--}}

            <!-- Content -->
            <div role="main" class="main">
                @yield('content')
            </div>

            <!-- Footer -->
            @include('layouts.guest.footer')
        </div>


        <!-- Vendor -->
        <script src="/../vendor/jquery/jquery.min.js"></script>
        <script src="/../vendor/jquery.appear/jquery.appear.min.js"></script>
        <script src="/../vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="/../vendor/jquery.cookie/jquery.cookie.min.js"></script>
        <script src="/../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/../vendor/jquery.validation/jquery.validate.min.js"></script>
        <script src="/../vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="/../vendor/jquery.gmap/jquery.gmap.min.js"></script>
        <script src="/../vendor/lazysizes/lazysizes.min.js"></script>
        <script src="/../vendor/isotope/jquery.isotope.min.js"></script>
        <script src="/../vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="/../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="/../vendor/vide/jquery.vide.min.js"></script>
        <script src="/../vendor/vivus/vivus.min.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="/../js/theme.js"></script>

        <!-- Circle Flip Slideshow Script -->
        <script src="/../vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
        <!-- Current Page Views -->
        <script src="/../js/views/view.home.js"></script>

        <!-- Theme Custom -->
        <script src="/../js/custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="/../js/theme.init.js"></script>


        <!-- Theme Base, Components and Settings -->
        <script src="/../js/theme.js"></script>

        @stack('scripts')
    </body>
</html>
