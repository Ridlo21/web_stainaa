<!doctype html>
<html lang="en">


<head>
    <link rel="stylesheet" href="assets/libs/flatpickr/dist/flatpickr.min.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />

    <!-- darkmode js -->
    <script src="assets/js/vendors/darkMode.js"></script>

    <!-- Libs CSS -->
    <link href="assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <script src="assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="assets/sweetalert2/sweetalert2.all.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>
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
                        <a class="nav-link " href="{{ url('/') }}">
                            <i class="nav-icon fe fe-home me-2"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                            data-bs-target="#navecommerce" aria-expanded="false" aria-controls="navecommerce">
                            <i class="nav-icon fe fe-shopping-bag me-2"></i>
                            Ecommerce
                        </a>
                        <div id="navecommerce" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                        data-bs-target="#navproduct" aria-expanded="false" aria-controls="navproduct">
                                        Product
                                    </a>
                                    <div id="navproduct" class="collapse " data-bs-parent="#navProduct">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce/product-grid.html">Grid</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link "
                                                    href="ecommerce/product-grid-with-sidebar.html">Grid Sidebar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce/products.html">Products</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce/product-single.html">Product
                                                    Single</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce/product-single-v2.html">Product
                                                    Single v2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="ecommerce/add-product.html">Add Product</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="ecommerce/shopping-cart.html">Shopping Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="ecommerce/checkout.html">Checkout</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="ecommerce/order.html">Order</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="ecommerce/order-single.html">Order Single</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="ecommerce/order-history.html">Order History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="ecommerce/order-summary.html">Order Summary</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="ecommerce/customers.html">Customers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="ecommerce/customer-single.html">Customer Single</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="ecommerce/add-customer.html">Add Customer</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('/personalBrand') }}">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                                    </rect>
                                    <line x1="16" y1="2" x2="16" y2="6">
                                    </line>
                                    <line x1="8" y1="2" x2="8" y2="6">
                                    </line>
                                    <line x1="3" y1="10" x2="21" y2="10">
                                    </line>
                                </svg>
                            </span>
                            <span class="ms-2">Personal Branding</span>
                        </a>
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
                        <a class="nav-link " href="chat-app.html">
                            <i class="nav-icon fe fe-message-square me-2"></i>
                            Chat
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="task-kanban.html">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                                    </rect>
                                    <rect x="7" y="7" width="3" height="9"></rect>
                                    <rect x="14" y="7" width="3" height="5"></rect>
                                </svg>
                            </span>
                            <span class="ms-2">Task</span>
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="mail.html">
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
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="calendar.html">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                                    </rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </span>
                            <span class="ms-2">Calendar</span>
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
                                                                <img src="assets/images/avatar/avatar-1.jpg"
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
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">
                                                        <a class="text-body" href="#">
                                                            <div class="d-flex">
                                                                <img src="assets/images/avatar/avatar-2.jpg"
                                                                    alt="" class="avatar-md rounded-circle" />
                                                                <div class="ms-3">
                                                                    <h5 class="fw-bold mb-1">Brooklyn Simmons</h5>
                                                                    <p class="mb-3">Just launched a new Courses React
                                                                        for Beginner.</p>
                                                                    <span class="fs-6">
                                                                        <span>
                                                                            <span
                                                                                class="fe fe-thumbs-up text-success me-1"></span>
                                                                            Oct 9,
                                                                        </span>
                                                                        <span class="ms-1">1:20 PM</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-auto text-center me-2">
                                                        <a href="#" class="badge-dot bg-secondary"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Mark as unread"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">
                                                        <a class="text-body" href="#">
                                                            <div class="d-flex">
                                                                <img src="assets/images/avatar/avatar-3.jpg"
                                                                    alt="" class="avatar-md rounded-circle" />
                                                                <div class="ms-3">
                                                                    <h5 class="fw-bold mb-1">Jenny Wilson</h5>
                                                                    <p class="mb-3">Krisitn Watsan like your comment
                                                                        on course Javascript Introduction!</p>
                                                                    <span class="fs-6">
                                                                        <span>
                                                                            <span
                                                                                class="fe fe-thumbs-up text-info me-1"></span>
                                                                            Oct 9,
                                                                        </span>
                                                                        <span class="ms-1">1:56 PM</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-auto text-center me-2">
                                                        <a href="#" class="badge-dot bg-secondary"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Mark as unread"></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">
                                                        <a class="text-body" href="#">
                                                            <div class="d-flex">
                                                                <img src="assets/images/avatar/avatar-4.jpg"
                                                                    alt="" class="avatar-md rounded-circle" />
                                                                <div class="ms-3">
                                                                    <h5 class="fw-bold mb-1">Sina Ray</h5>
                                                                    <p class="mb-3">You earn new certificate for
                                                                        complete the Javascript Beginner course.</p>
                                                                    <span class="fs-6">
                                                                        <span>
                                                                            <span
                                                                                class="fe fe-award text-warning me-1"></span>
                                                                            Oct 9,
                                                                        </span>
                                                                        <span class="ms-1">1:56 PM</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-auto text-center me-2">
                                                        <a href="#" class="badge-dot bg-secondary"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Mark as unread"></a>
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
                                        <img alt="avatar" src="assets/images/avatar/avatar-1.jpg"
                                            class="rounded-circle" />
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                    <div class="dropdown-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                                <img alt="avatar" src="assets/images/avatar/avatar-1.jpg"
                                                    class="rounded-circle" />
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="mb-1">Annette Black</h5>
                                                <p class="mb-0">annette@geeksui.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <ul class="list-unstyled">
                                        <li class="dropdown-submenu dropstart-lg">
                                            <a class="dropdown-item dropdown-list-group-item dropdown-toggle"
                                                href="#">
                                                <i class="fe fe-circle me-2"></i>
                                                Status
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <span class="badge-dot bg-success me-2"></span>
                                                        Online
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <span class="badge-dot bg-secondary me-2"></span>
                                                        Offline
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <span class="badge-dot bg-warning me-2"></span>
                                                        Away
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <span class="badge-dot bg-danger me-2"></span>
                                                        Busy
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                                href="https://geeksui.codescandy.com/geeks/pages/profile-edit.html">
                                                <i class="fe fe-user me-2"></i>
                                                Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item"
                                                href="https://geeksui.codescandy.com/geeks/pages/student-subscriptions.html">
                                                <i class="fe fe-star me-2"></i>
                                                Subscription
                                            </a>
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
                                            <a class="dropdown-item"
                                                href="https://geeksui.codescandy.com/geeks/index.html">
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
    <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>

    <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/js/vendors/chart.js"></script>
    <script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="assets/js/vendors/flatpickr.js"></script>
    <!-- Libs JS -->
</body>


</html>
