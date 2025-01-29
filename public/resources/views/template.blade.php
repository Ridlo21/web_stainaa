<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('dist') }}/images/stainaa.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300;8..144,500&display=swap">

    <link rel="stylesheet" href="{{ asset('dist') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/css/fonts.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/css/style.css">
    <script src="{{ asset('dist') }}/jquery/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="preloader">
        <div class="preloader-text">
            <span class="preloader-char">l</span>
            <span class="preloader-char">o</span>
            <span class="preloader-char">a</span>
            <span class="preloader-char">d</span>
            <span class="preloader-char">i</span>
            <span class="preloader-char">n</span>
            <span class="preloader-char">g</span>
        </div>
    </div>
    <div class="page">
        <!-- Page Header-->
        <header class="page-head">
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                    data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up="true"
                    data-xl-stick-up="true" data-xxl-stick-up="true" data-lg-stick-up-offset="60px"
                    data-xl-stick-up-offset="60px" data-xxl-stick-up-offset="60px">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-panel">
                            <button class="rd-navbar-toggle" data-custom-toggle=".rd-navbar-nav-wrap"
                                data-custom-toggle-disable-on-blur="true"><span></span></button><a
                                class="rd-navbar-brand brand" href="{{ url('/') }}"><img
                                    src="{{ asset('dist') }}/images/stainaa.png" alt="" width="50" /></a>
                        </div>
                        <div class="rd-navbar-group rd-navbar-search-wrap">
                            <div class="rd-navbar-nav-wrap">
                                <div class="rd-navbar-nav-inner">
                                    <div class="rd-navbar-btn-wrap"><a
                                            class="btn btn-180 btn-icon btn-icon-right btn-nero-outline-1"
                                            href="{{ url('/contactIndex') }}"><span
                                                class="icon icon-xs-smaller icomoon-chat"></span>Contact me</a></div>
                                    <ul class="rd-navbar-nav">
                                        <li
                                            class="rd-nav-item {{ request()->segment(1) == 'tentang' ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="{{ route('tentang.index') }}">Tentang</a>
                                        </li>
                                        <li
                                            class="rd-nav-item {{ request()->segment(1) == 'pendidikan' ? 'active' : '' }}">
                                            <a class="rd-nav-link"
                                                href="{{ route('pendidikan.index') }}">Pendidikan</a>
                                        </li>
                                        <li
                                            class="rd-nav-item {{ request()->segment(1) == 'kemahasiswaan' ? 'active' : '' }}">
                                            <a class="rd-nav-link"
                                                href="{{ route('kemahasiswaan.index') }}">Kemahasiswaan</a>
                                        </li>
                                        <li
                                            class="rd-nav-item {{ request()->segment(1) == 'artikel' ? 'active' : '' }}">
                                            <a class="rd-nav-link" href="{{ url('/artikel') }}">Artikel</a>
                                        </li>
                                        <li
                                            class="rd-nav-item {{ request()->segment(1) == 'akreditasi' ? 'active' : '' }}">
                                            <a class="rd-nav-link"
                                                href="{{ route('akreditasi.index') }}">Akreditasi</a>
                                        </li>
                                        {{-- <li class="rd-nav-item"><a class="rd-nav-link" href="blog.html">Blog</a>
                                            <ul class="rd-menu rd-navbar-dropdown">
                                                <li class="rd-dropdown-item"><a class="rd-dropdown-link"
                                                        href="blog-post.html">Blog post</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                                            <ul class="rd-menu rd-navbar-megamenu">
                                                <li class="rd-megamenu-item">
                                                    <h5 class="rd-megamenu-title">Components</h5>
                                                    <ul class="rd-megamenu-list">
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="accordion.html">Accordion</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="buttons.html">Buttons</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link" href="grid.html">Grid</a>
                                                        </li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="forms.html">Forms</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="icons.html">Icons</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="icon-lists.html">Icon lists</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="progress-bars.html">Progress bars</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link" href="tabs.html">Tabs</a>
                                                        </li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="typography.html">Typography</a></li>
                                                    </ul>
                                                </li>
                                                <li class="rd-megamenu-item">
                                                    <h5 class="rd-megamenu-title">Pages</h5>
                                                    <ul class="rd-megamenu-list">
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="contact-me.html">Contact me</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link" href="404-page.html">404
                                                                Page</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link" href="503-page.html">503
                                                                Page</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="maintenance.html">Maintenance</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="coming-soon.html">Coming soon</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="login.html">Login</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="registration.html">Registration</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="search-results.html">Search results</a></li>
                                                        <li class="rd-megamenu-list-item"><a
                                                                class="rd-megamenu-list-link"
                                                                href="privacy-policy.html">Privacy policy</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        @yield('konten')
        <footer class="section section-lg bg-nero">
            <div class="container d-flex justify-content-center align-items-center">
                <div class="row row-40 text-center">
                    <div class="col-sm-12">
                        <ul class="list-inline list-social list-inline-sm">
                            <li><a class="icon link-secondary icomoon-youtube" href="#"></a></li>
                            <li><a class="icon link-secondary icomoon-insta" href="#"></a></li>
                            <li><a class="icon link-secondary icomoon-facebook" href="#"></a></li>
                            <li><a class="icon link-secondary icomoon-twitter" href="#"></a></li>
                            <li><a class="icon link-secondary icomoon-linkedin" href="#"></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12">
                        <h3>STAINAA</h3>
                    </div>
                    <div class="col-sm-12">
                        <h4>Alasbuluh Kec. Wongsorejo, Kab. Banyuwangi, Jawa Timur</h4>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('dist') }}/js/core.min.js"></script>
    <script src="{{ asset('dist') }}/js/script.js"></script>
</body>

</html>
