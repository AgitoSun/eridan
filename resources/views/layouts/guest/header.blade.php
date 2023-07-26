<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 107, 'stickySetTop': '-107px', 'stickyChangeLogo': true}">
    <div class="header-body border-color-primary border-top-0 box-shadow-none">
        <div class="header-container container z-index-2">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row justify-content-center">
                        <div class="header-logo">
                            @include('layouts.guest.logo.header-logo')
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end d-none d-lg-block">
                    <div class="header-row h-100">
                        <ul class="header-extra-info d-flex h-100 align-items-center">
                            <li class="align-items-center d-none d-lg-block h-100 py-4">
                                <div class="header-extra-info-text h-100 py-2">
                                    <div class="feature-box feature-box-style-2 align-items-center">
                                        <div class="feature-box-icon">
                                            <img width="30" height="30" src="{{ Vite::asset('resources/img/guest/icons/phone.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary p-relative left-3'}" style="width: 30px; height: 30px;" />
                                        </div>
                                        <div class="feature-box-info ps-1">
                                            <label>ТЕЛЕФОН</label>
                                            <strong><a href="tel:+79160767575">+7 (916) 076-75-75</a></strong>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="align-items-center d-none d-lg-block h-100 py-4">
                                <div class="header-extra-info-text h-100 py-2">
                                    <div class="feature-box feature-box-style-2 align-items-center">
                                        <div class="feature-box-icon">
                                            <img width="34" height="28" src="{{ Vite::asset('resources/img/guest/icons/whatsapp.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 34px; height: 28px;" />
                                        </div>
                                        <div class="feature-box-info ps-1">
                                            <label>WHATSAPP</label>
                                            <strong><a href="https://api.whatsapp.com/send?phone=79160767575">+7 (916) 076-75-75</a></strong>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="align-items-center d-none d-sm-block h-100 py-4">
                                <div class="header-extra-info-text h-100 py-2">
                                    <div class="feature-box feature-box-style-2 align-items-center">
                                        <div class="feature-box-icon">
                                            <img width="33" height="31" src="{{ Vite::asset('resources/img/guest/icons/instagram.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" style="width: 33px; height: 31px;" />
                                        </div>
                                        <div class="feature-box-info ps-1">
                                            <label class="p-relative top-4">INSTAGRAM</label>
                                            <strong><a href="https://www.instagram.com/grudakovsergei">GRUDAKOVSERGEI</a></strong>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav-bar">
            <div class="container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-nav justify-content-start header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                @include('layouts.guest.navbar')
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
