<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            @include('layouts.guest.logo.header-logo')
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1">
                            <div class="header-nav-main header-nav-main-text-inherit header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        @include('layouts.guest.navbar')
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <ul class="header-social-icons social-icons social-icons-clean social-icons-medium ms-0 ms-xl-3 d-none d-md-inline-flex">
                            <li class="social-icons-facebook"><a href="https://www.instagram.com/grudakovsergei" target="_blank" title="Facebook"><i class="fab fa-instagram"></i></a></li>
                            <li class="social-icons-twitter"><a href="https://api.whatsapp.com/send?phone=79160767575" target="_blank" title="Twitter"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                        <a href="tel:+79160767575" class="font-weight-semibold text-color-dark text-color-hover-primary text-decoration-none custom-font-size-2 ps-1 ms-lg-3 ms-xl-4">+7 (916) 076-75-75</a>
                        <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

