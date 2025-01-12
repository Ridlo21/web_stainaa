<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('assets') }}/libs/flatpickr/dist/flatpickr.min.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/images/stainaa.png" />

    <!-- darkmode js -->
    <script src="{{ asset('assets') }}/js/vendors/darkMode.js"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('assets') }}/fonts/feather/feather.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/summernote/summernote-bs5.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/crooper/cropper.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/theme.min.css">
    <script src="{{ asset('assets') }}/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
    <script src="{{ asset('assets') }}/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/jquery/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets') }}/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="{{ asset('assets') }}/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('assets') }}/parsleyjs/i18n/id.js"></script>
    <script src="{{ asset('assets') }}/summernote/summernote-bs5.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>
    <div class="spinner-wrapper" id="spinnerWrapper">
        <div class="spinner-border text-light" role="status" style="width: 100px; height: 100px;">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="vh-100" data-simplebar>
                <!-- Brand logo -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://geeksui.codescandy.com/geeks/assets/images/brand/logo/logo-inverse.svg"
                        alt="Geeks" />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'home' ? 'active' : '' }}"
                            href="{{ url('/') }}">
                            <i class="nav-icon fe fe-home me-2"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'cover' ? 'active' : '' }} "
                            href="{{ route('cover.index') }}">
                            <i class="nav-icon bi bi-border-outer me-2"></i>
                            <span>Cover</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'profilIndex' ? 'active' : '' }}"
                            href="{{ route('profil.index') }}">
                            <i class="nav-icon bi bi-box me-2"></i>
                            <span>Profil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'personalBrand' ? 'active' : '' }}"
                            href="{{ url('/personalBrand') }}">
                            <i class="nav-icon bi bi-dice-2 me-2"></i>
                            <span class="ms-2">Personal Branding</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'pengumumanMod' || request()->segment(1) == 'pengumumanList' ? '' : 'collapsed' }}"
                            href="#" data-bs-toggle="collapse" data-bs-target="#navecommerce"
                            aria-expanded="{{ request()->segment(1) == 'pengumumanMod' || request()->segment(1) == 'pengumumanList' ? 'true' : 'false' }}"
                            aria-controls="navecommerce">
                            <i class="nav-icon bi bi-file me-2"></i>
                            Pengumuman
                        </a>
                        <div id="navecommerce"
                            class="collapse {{ request()->segment(1) == 'pengumumanMod' || request()->segment(1) == 'pengumumanList' ? 'show' : '' }}"
                            data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column active">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'pengumumanMod' ? 'active' : '' }}"
                                        href="{{ route('pengumuman.mod') }}">Mod Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'pengumumanList' ? 'active' : '' }}"
                                        href="{{ route('pengumuman.list') }}">Pengumuman</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'tentangModIndex' || request()->segment(1) == 'tentangProfilIndex' || request()->segment(1) == 'tentangSejarahIndex' || request()->segment(1) == 'tentangVisiIndex' || request()->segment(1) == 'tentangMisiIndex' || request()->segment(1) == 'tentangMottoIndex' ? '' : 'collapsed' }}  "
                            href="#" data-bs-toggle="collapse" data-bs-target="#navetentang"
                            aria-expanded="{{ request()->segment(1) == 'tentangModIndex' || request()->segment(1) == 'tentangProfilIndex' || request()->segment(1) == 'tentangSejarahIndex' || request()->segment(1) == 'tentangVisiIndex' || request()->segment(1) == 'tentangMisiIndex' || request()->segment(1) == 'tentangMottoIndex' ? 'true' : 'false' }} "
                            aria-controls="navetentang">
                            <i class="nav-icon bi bi-floppy2-fill me-2"></i>
                            Tentang
                        </a>
                        <div id="navetentang"
                            class="collapse {{ request()->segment(1) == 'tentangModIndex' || request()->segment(1) == 'tentangProfilIndex' || request()->segment(1) == 'tentangSejarahIndex' || request()->segment(1) == 'tentangVisiIndex' || request()->segment(1) == 'tentangMisiIndex' || request()->segment(1) == 'tentangMottoIndex' ? 'show' : '' }} "
                            data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'tentangModIndex' ? 'active' : '' }} "
                                        href="{{ route('tentang.modIndex') }}">Mod Tentang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'tentangProfilIndex' ? 'active' : '' }} "
                                        href="{{ route('tentang.profilIndex') }}">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'tentangSejarahIndex' ? 'active' : '' }} "
                                        href="{{ route('tentang.sejarahIndex') }}">Sejarah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'tentangVisiIndex' ? 'active' : '' }} "
                                        href="{{ route('tentang.visiIndex') }}">Visi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'tentangMisiIndex' ? 'active' : '' }} "
                                        href="{{ route('tentang.misiIndex') }}">Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'tentangMottoIndex' ? 'active' : '' }} "
                                        href="{{ route('tentang.mottoIndex') }}">Motto</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ request()->segment(1) == 'pendidikanModIndex' || request()->segment(1) == 'pendidikanEducationIndex' ? '' : 'collapsed' }}"
                            href="#" data-bs-toggle="collapse" data-bs-target="#navependidikan"
                            aria-expanded="{{ request()->segment(1) == 'pendidikanModIndex' || request()->segment(1) == 'pendidikanEducationIndex' ? 'true' : 'false' }}"
                            aria-controls="navependidikan">
                            <i class="nav-icon bi bi-journal-medical me-2"></i>
                            Pendidikan
                        </a>
                        <div id="navependidikan"
                            class="collapse {{ request()->segment(1) == 'pendidikanModIndex' || request()->segment(1) == 'pendidikanEducationIndex' ? 'show' : '' }}"
                            data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'pendidikanModIndex' ? 'active' : '' }}"
                                        href="{{ route('pendidikan.modIndex') }}">Mod Pendidikan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'pendidikanEducationIndex' ? 'active' : '' }}"
                                        href="{{ route('pendidikan.educationIndex') }}">Education</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'beritaMod' || request()->segment(1) == 'beritaList' ? '' : 'collapsed' }}"
                            href="#" data-bs-toggle="collapse" data-bs-target="#navberita"
                            aria-expanded="{{ request()->segment(1) == 'beritaMod' || request()->segment(1) == 'beritaList' ? 'true' : 'false' }}"
                            aria-controls="navberita">
                            <i class="nav-icon bi bi-newspaper me-2"></i>
                            Berita
                        </a>
                        <div id="navberita"
                            class="collapse {{ request()->segment(1) == 'beritaMod' || request()->segment(1) == 'beritaList' ? 'show' : '' }}"
                            data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'beritaMod' ? 'active' : '' }}"
                                        href="{{ route('berita.mod') }}">Mod Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'beritaList' ? 'active' : '' }}"
                                        href="{{ route('berita.list') }}">Berita</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ request()->segment(1) == 'katartikel' || request()->segment(1) == 'artikelList' || request()->segment(1) == 'artikelMod' ? '' : 'collapsed' }}"
                            href="#" data-bs-toggle="collapse" data-bs-target="#navartikel"
                            aria-expanded="{{ request()->segment(1) == 'katartikel' || request()->segment(1) == 'artikelList' || request()->segment(1) == 'artikelMod' ? 'true' : 'false' }}"
                            aria-controls="navartikel">
                            <i class="nav-icon bi bi-newspaper me-2"></i>
                            Artikel
                        </a>
                        <div id="navartikel"
                            class="collapse {{ request()->segment(1) == 'katartikel' || request()->segment(1) == 'artikelList' || request()->segment(1) == 'artikelMod' ? 'show' : '' }}"
                            data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'katartikel' ? 'active' : '' }}"
                                        href="{{ route('artikel.Kat') }}">Kategori Artikel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'artikelList' ? 'active' : '' }}"
                                        href="{{ route('artikel.List') }}">Artikel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'artikelMod' ? 'active' : '' }}"
                                        href="{{ route('artikel.mod') }}">Mod Artikel</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ request()->segment(1) == 'kemahasiswaanModIndex' || request()->segment(1) == 'kemahasiswaanBemIndex' || request()->segment(1) == 'kemahasiswaanUkmIndex' ? '' : 'collapsed' }}"
                            href="#" data-bs-toggle="collapse" data-bs-target="#navKemahasiswaan"
                            aria-expanded="{{ request()->segment(1) == 'kemahasiswaanModIndex' || request()->segment(1) == 'kemahasiswaanBemIndex' || request()->segment(1) == 'kemahasiswaanUkmIndex' ? 'true' : 'false' }}"
                            aria-controls="navKemahasiswaan">
                            <i class="nav-icon bi bi-pip me-2"></i>
                            Kemahasiswaan
                        </a>
                        <div id="navKemahasiswaan"
                            class="collapse {{ request()->segment(1) == 'kemahasiswaanModIndex' || request()->segment(1) == 'kemahasiswaanBemIndex' || request()->segment(1) == 'kemahasiswaanUkmIndex' ? 'show' : '' }}"
                            data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'kemahasiswaanModIndex' ? 'active' : '' }}"
                                        href="{{ route('kemahasiswaan.modIndex') }}">Mod
                                        Kemahasiswaan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'kemahasiswaanBemIndex' ? 'active' : '' }}"
                                        href="{{ route('kemahasiswaan.bemIndex') }}">Bem</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'kemahasiswaanUkmIndex' ? 'active' : '' }}"
                                        href="{{ route('kemahasiswaan.ukmIndex') }}">Ukm</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'akreditasiModIndex' || request()->segment(1) == 'akreditasiAccreditationIndex' ? '' : 'collapsed' }}"
                            href="#" data-bs-toggle="collapse" data-bs-target="#navAkreditasi"
                            aria-expanded="{{ request()->segment(1) == 'akreditasiModIndex' || request()->segment(1) == 'akreditasiAccreditationIndex' ? 'true' : 'false' }}"
                            aria-controls="navAkreditasi">
                            <i class="nav-icon bi bi-slash-square me-2"></i>
                            Akreditasi
                        </a>
                        <div id="navAkreditasi"
                            class="collapse {{ request()->segment(1) == 'akreditasiModIndex' || request()->segment(1) == 'akreditasiAccreditationIndex' ? 'show' : '' }}"
                            data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'akreditasiModIndex' ? 'active' : '' }}"
                                        href="{{ route('akreditasi.modIndex') }}">Mod Akreditasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'akreditasiAccreditationIndex' ? 'active' : '' }}"
                                        href="{{ route('akreditasi.accreditationIndex') }}">Accreditation</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->segment(1) == 'contactModIndex' ? '' : 'collapsed' }}"
                            href="#" data-bs-toggle="collapse" data-bs-target="#navContact"
                            aria-expanded="{{ request()->segment(1) == 'contactModIndex' ? 'true' : 'false' }}"
                            aria-controls="navContact">
                            <i class="nav-icon fe fe-shopping-bag me-2"></i>
                            Contact
                        </a>
                        <div id="navContact"
                            class="collapse {{ request()->segment(1) == 'contactModIndex' ? 'show' : '' }}"
                            data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(1) == 'contactModIndex' ? 'active' : '' }}"
                                        href="{{ route('contact.modIndex') }}">Mod Contact</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="nav-divider"></div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Apps</div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('contact.mailIndex') }}">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </span>
                            <span class="ms-2">Mail</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="chat-app.html">
                            <i class="nav-icon fe fe-message-square me-2"></i>
                            Chat
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content -->
        <main id="page-content">
            <div class="header">
                <!-- navbar -->
                <nav class="navbar-default navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#">
                        <i class="fe fe-menu"></i>
                    </a>

                    <!--Navbar nav -->
                    <div class="ms-auto d-flex">
                        <div class="dropdown">
                            <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center"
                                type="button" aria-expanded="false" data-bs-toggle="dropdown"
                                aria-label="Toggle theme (auto)">
                                <i class="bi theme-icon-active"></i>
                                <span class="visually-hidden bs-theme-text">Toggle theme</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="light" aria-pressed="false">
                                        <i class="bi theme-icon bi-sun-fill"></i>
                                        <span class="ms-2">Light</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="dark" aria-pressed="false">
                                        <i class="bi theme-icon bi-moon-stars-fill"></i>
                                        <span class="ms-2">Dark</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center active"
                                        data-bs-theme-value="auto" aria-pressed="true">
                                        <i class="bi theme-icon bi-circle-half"></i>
                                        <span class="ms-2">Auto</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
                            <li class="dropdown stopevent">
                                <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary"
                                    href="#" role="button" id="dropdownNotification"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg"
                                    aria-labelledby="dropdownNotification">
                                    <div>
                                        <div
                                            class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                            <span class="h4 mb-0">Notifications</span>
                                            <a href="# ">
                                                <span class="align-middle">
                                                    <i class="fe fe-settings me-1"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <!-- List group -->
                                        <ul class="list-group list-group-flush" data-simplebar
                                            style="max-height: 300px">
                                            <li class="list-group-item bg-light">
                                                <div class="row">
                                                    <div class="col">
                                                        <a class="text-body" href="#">
                                                            <div class="d-flex">
                                                                <img src="{{ asset('assets') }}/images/avatar/avatar-1.jpg"
                                                                    alt="" class="avatar-md rounded-circle" />
                                                                <div class="ms-3">
                                                                    <h5 class="fw-bold mb-1">Kristin Watson:</h5>
                                                                    <p class="mb-3">Krisitn Watsan like your comment
                                                                        on course Javascript Introduction!</p>
                                                                    <span class="fs-6">
                                                                        <span>
                                                                            <span
                                                                                class="fe fe-thumbs-up text-success me-1"></span>
                                                                            2 hours ago,
                                                                        </span>
                                                                        <span class="ms-1">2:19 PM</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-auto text-center me-2">
                                                        <a href="#" class="badge-dot bg-info"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Mark as read"></a>
                                                        <div>
                                                            <a href="#" class="bg-transparent"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Remove">
                                                                <i class="fe fe-x"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="border-top px-3 pt-3 pb-0">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/notification-history.html"
                                                class="text-link fw-semibold">See all Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- List -->
                            <li class="dropdown ms-2">
                                <a class="rounded-circle" href="#" role="button" id="dropdownUser"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="{{ asset('assets') }}/images/user.png"
                                            class="rounded-circle" />
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                    <div class="dropdown-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                                <img alt="avatar" src="{{ asset('assets') }}/images/user.png"
                                                    class="rounded-circle" />
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="mb-1">Annette Black</h5>
                                                <p class="mb-0">stainaa</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <ul class="list-unstyled">
                                        <li class="dropdown-submenu dropstart-lg">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-settings me-2"></i>
                                                Settings
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}">
                                                <i class="fe fe-power me-2"></i>
                                                Sign Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <!-- Page Header -->
            <!-- Container fluid -->
            @yield('konten')
        </main>
    </div>

    <!-- Script -->
    <script src="{{ asset('assets') }}/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets') }}/js/theme.min.js"></script>

    <script src="{{ asset('assets') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendors/chart.js"></script>
    <script src="{{ asset('assets') }}/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendors/flatpickr.js"></script>
    <!-- Libs JS -->
    <script src="{{ asset('assets') }}/crooper/cropper.js"></script>
</body>


</html>
