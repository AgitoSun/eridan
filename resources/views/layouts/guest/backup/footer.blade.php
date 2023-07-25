<footer id="footer">
    <div class="container">
        <div class="row py-5 justify-content-center">
            <div class="col-md-9 offset-md-1 offset-lg-0 mb-4 mb-lg-0 d-flex align-items-center">
                <div class="footer-nav footer-nav-links footer-nav-bottom-line">
                    <nav>
                        <ul class="nav" id="footerNav">
                            @include('layouts.guest.navbar')
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4 mb-lg-0 text-center text-lg-end">
                <p class="text-7 text-color-light font-weight-bold pb-1 mb-0">
                    <a href="tel:0123456789" class="text-decoration-none text-color-light">+7 (800) 123-45-67</a>
                </p>
                <p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                    @include('layouts.guest.logo.footer-logo')
                </div>
                <div class="col-lg-11 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0">
                    <p>© Copyright ERIDAN <script>document.write(new Date().getFullYear());</script>. Все права защищены.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
