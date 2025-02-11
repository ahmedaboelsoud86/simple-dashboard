<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,SCSS,HTML,RWD,Dashboard">
    <title>CoreUI Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('assets/vendors/simplebar/css/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="{{ asset('assets/css/examples.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/js/color-modes.js') }}"></script>
    <!-- Google Tag Manager-->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KX4JH47');
    </script>
    <!-- End Google Tag Manager-->
    <link href="{{ asset('assets/vendors/chart/css/coreui-chartjs.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KX4JH47" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript)-->
    <div class="sidebar sidebar-fixed sidebar-dark bg-dark-gradient border-end" id="sidebar">
        <div class="sidebar-header border-bottom">
            <div class="sidebar-brand">
                <svg class="sidebar-brand-full" width="110" height="32" alt="CoreUI Logo">
                    <use xlink:href="assets/brand/coreui.svg#full"></use>
                </svg>
                <svg class="sidebar-brand-narrow" width="32" height="32" alt="CoreUI Logo">
                    <use xlink:href="assets/brand/coreui.svg#signet"></use>
                </svg>
            </div>
            <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
            <button class="btn-close d-lg-none" type="button" data-coreui-theme="dark" aria-label="Close"
                onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item"><a class="nav-link" href="index.html">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#speedometer') }}"></use>
                    </svg><span>Dashboard</span></a></li>
            <li class="nav-title">Theme</li>
            <li class="nav-item"><a class="nav-link" href="colors.html">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#cil-drop') }}"></use>
                    </svg><span>Colors</span></a></li>
            <li class="nav-item"><a class="nav-link" href="typography.html">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#cil-pencil') }}"></use>
                    </svg><span>Typography</span></a></li>
            <li class="nav-title">Components</li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#list-richss') }}"></use>
                    </svg><span>Base</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span><span>Accordion</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Breadcrumb</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/calendar.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span><span>Calendar</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Cards</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Carousel</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Collapse</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/list-group.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> List group</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/navs-tabs.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Navs &amp; Tabs</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Pagination</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/placeholders.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Placeholders</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Popovers</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Progress</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Spinners</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Tables</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Tooltips</a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bnbnvbn') }}"></use>
                    </svg><span>Buttons</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Buttons</a></li>
                    <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Buttons Group</a></li>
                    <li class="nav-item"><a class="nav-link" href="buttons/loading-buttons.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Loading Buttons<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Dropdowns</a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bvcbcvb') }}"></use>
                    </svg><span>Forms</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-item"><a class="nav-link" href="forms/form-control.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Form Control</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/select.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Select</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/multi-select.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Multi Select<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/checks-radios.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Checks &amp; radios</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/range.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Range</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/range-slider.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Range Slider<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/rating.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Rating<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/input-group.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Input group</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/floating-labels.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Floating labels</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/date-picker.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Date Picker<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/date-range-picker.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Date Range Picker<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/time-picker.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Time Picker<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/layout.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span><span>Layout</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/validation.html"><span
                                class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span><span>Validation</span></a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bcbcvb') }}"></use>
                    </svg><span>Icons</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-free.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> CoreUI Icons<span
                                class="badge bg-success ms-auto">Free</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> CoreUI Icons - Brand</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> CoreUI Icons - Flag</a>
                    </li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#mbnm') }}"></use>
                    </svg><span>Notifications</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Alerts</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Badge</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Modals</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Toasts</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="widgets.html">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#mbnbn') }}"></use>
                    </svg><span>Widgets</span><span
                        class="badge bg-info-gradient text-uppercase ms-auto">New</span></a>
            </li>
            <li class="nav-divider"></li>
            <li class="nav-title">
                Plugins</li>
            <li class="nav-item"><a class="nav-link" href="calendar.html">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#dfsdf') }}"></use>
                    </svg><span>Calendar</span><span class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
            <li class="nav-item"><a class="nav-link" href="charts.html">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#cvxc') }}"></use>
                    </svg><span>Charts</span></a></li>
            <li class="nav-item"><a class="nav-link" href="datatables.html">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#nvbnv') }}"></use>
                    </svg> DataTables<span class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
            <li class="nav-item"><a class="nav-link" href="google-maps.html">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bvnvbn') }}"></use>
                    </svg> Google Maps<span class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
            <li class="nav-title">
                Extras</li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#reter') }}"></use>
                    </svg><span>Pages</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#cxvxcv') }}"></use>
                            </svg><span>Login</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#qvvv') }}"></use>
                            </svg><span>Register</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bbb') }}"></use>
                            </svg><span>Error 404</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bbee') }}"></use>
                            </svg><span>Error 500</span></a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#cccccc') }}"></use>
                    </svg><span>Apps</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#22') }}"></use>
                            </svg> Invoicing</a>
                        <ul class="nav-group-items compact">
                            <li class="nav-item"><a class="nav-link" href="apps/invoicing/invoice.html"><span
                                        class="nav-icon"><span class="nav-icon-bullet"></span></span> Invoice<span
                                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                            <svg class="nav-icon">
                                <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#wee') }}"></use>
                            </svg> Email</a>
                        <ul class="nav-group-items compact">
                            <li class="nav-item"><a class="nav-link" href="apps/email/inbox.html"><span
                                        class="nav-icon"><span class="nav-icon-bullet"></span></span> Inbox<span
                                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="apps/email/message.html"><span
                                        class="nav-icon"><span class="nav-icon-bullet"></span></span> Message<span
                                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="apps/email/compose.html"><span
                                        class="nav-icon"><span class="nav-icon-bullet"></span></span> Compose<span
                                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/"
                    target="_blank">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#4444') }}"></use>
                    </svg><span>Docs</span></a></li>
            <li class="nav-title"><span>System Utilization</span></li>
            <li class="nav-item px-3 pb-2 d-narrow-none">
                <div class="text-uppercase small fw-bold mb-1">CPU Usage</div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 25%"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="small text-body-secondary"
                    data-coreui-i18n="cpuUsageDescription, { 'number_of_processes': 358, 'number_of_cores': '1/4' }">
                    348 Processes. 1/4 Cores.</div>
            </li>
            <li class="nav-item px-3 pb-2 d-narrow-none">
                <div class="text-uppercase small fw-bold mb-1">Memory Usage</div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-warning-gradient" role="progressbar" style="width: 70%"
                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="small text-body-secondary">11444MB/16384MB</div>
            </li>
            <li class="nav-item px-3 pb-2 mb-3 d-narrow-none">
                <div class="text-uppercase small fw-bold mb-1">SSD Usage</div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 95%"
                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-body-secondary-inverse">243GB/256GB</small>
            </li>
        </ul>
    </div>

    <!-- Tab panes-->

    </div>
    <div class="wrapper d-flex flex-column min-vh-100">
        <header class="header header-sticky p-0 mb-4">
            <div class="container-fluid px-4">
                <button class="header-toggler d-lg-none" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"
                    style="margin-inline-start: -14px;">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#circle') }}"></use>
                    </svg>
                </button>
                <form class="d-none d-sm-flex" role="search">
                    <div class="input-group"><span class="input-group-text bg-body-secondary border-0 px-1"
                            id="search-addon">
                            <svg class="icon icon-lg my-1 mx-2 text-body-secondary">
                                <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#list-rsssich') }}"></use>
                            </svg></span>
                        <input class="form-control bg-body-secondary border-0" type="text" placeholder="Search..."
                            aria-label="Search" aria-describedby="search-addon">
                    </div>
                </form>
                <ul class="header-nav d-none d-md-flex ms-auto">
                    <li class="nav-item dropdown"><a class="nav-link" data-coreui-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false"><span
                                class="d-inline-block my-1 mx-2 position-relative">
                                <svg class="icon icon-lg">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bell') }}"></use>
                                </svg><span
                                    class="position-absolute top-0 start-100 translate-middle p-1 bg-danger rounded-circle"><span
                                        class="visually-hidden">New alerts</span></span></span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
                            <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2"
                                data-coreui-i18n="notificationsCounter, { 'counter': 5 }">You have 5 notifications
                            </div><a class="dropdown-item" href="#">
                                <svg class="icon me-2 text-success">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#ss-rich') }}">
                                    </use>
                                </svg><span>New user registered</span></a><a class="dropdown-item" href="#">
                                <svg class="icon me-2 text-danger">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#list-sss') }}">
                                    </use>
                                </svg><span>User deleted</span></a><a class="dropdown-item" href="#">
                                <svg class="icon me-2 text-info">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#list-sss') }}">
                                    </use>
                                </svg><span>Sales report is ready</span></a><a class="dropdown-item" href="#">
                                <svg class="icon me-2 text-success">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#list-sss') }}">
                                    </use>
                                </svg><span>New client</span></a><a class="dropdown-item" href="#">
                                <svg class="icon me-2 text-warning">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#list-sss') }}">
                                    </use>
                                </svg><span>Server overloaded</span></a>
                            <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2">Server
                            </div><a class="dropdown-item d-block py-2" href="#">
                                <div class="text-uppercase small fw-semibold mb-1">CPU
                                    Usage</div>
                                <div class="progress progress-thin">
                                    <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="small text-body-secondary"
                                    data-coreui-i18n="cpuUsageDescription, { 'number_of_processes': 358, 'number_of_cores': '1/4' }">
                                    348 Processes. 1/4 Cores.</div>
                            </a><a class="dropdown-item d-block py-2" href="#">
                                <div class="text-uppercase small fw-semibold mb-1">
                                    Memory Usage</div>
                                <div class="progress progress-thin">
                                    <div class="progress-bar bg-warning-gradient" role="progressbar"
                                        style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="small text-body-secondary">11444MB/16384MB</div>
                            </a><a class="dropdown-item d-block py-2" href="#">
                                <div class="text-uppercase small fw-semibold mb-1">SSD
                                    Usage</div>
                                <div class="progress progress-thin">
                                    <div class="progress-bar bg-danger-gradient" role="progressbar"
                                        style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="small text-body-secondary">243GB/256GB</div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link" data-coreui-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false"><span
                                class="d-inline-block my-1 mx-2 position-relative">
                                <svg class="icon icon-lg">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#list-rich') }}">
                                    </use>
                                </svg><span
                                    class="position-absolute top-0 start-100 translate-middle p-1 bg-danger rounded-circle"><span
                                        class="visually-hidden">New alerts</span></span></span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg py-0">
                            <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2"
                                data-coreui-i18n="taskCounter, { 'counter': 5 }">You have 5 pending tasks</div><a
                                class="dropdown-item d-block" href="#">
                                <div class="small mb-1">Upgrade NPM
                                    <div class="fw-semibold">0%</div>
                                </div><span class="progress progress-thin">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a><a class="dropdown-item d-block py-2" href="#">
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="small">ReactJS Version</div>
                                    <div class="fw-semibold">25%</div>
                                </div><span class="progress progress-thin">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a><a class="dropdown-item d-block py-2" href="#">
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="small">VueJS Version</div>
                                    <div class="fw-semibold">50%</div>
                                </div><span class="progress progress-thin">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a><a class="dropdown-item d-block py-2" href="#">
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="small">Add new layouts</div>
                                    <div class="fw-semibold">75%</div>
                                </div><span class="progress progress-thin">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a><a class="dropdown-item d-block py-2" href="#">
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="small">Angular Version</div>
                                    <div class="fw-semibold">100%</div>
                                </div><span class="progress progress-thin">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a>
                            <div class="p-2"><a class="btn btn-outline-primary w-100" href="#">View all
                                    tasks</a></div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link" data-coreui-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false"><span
                                class="d-inline-block my-1 mx-2 position-relative">
                                <svg class="icon icon-lg">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#envelope-open') }}">
                                    </use>
                                </svg><span
                                    class="position-absolute top-0 start-100 translate-middle p-1 bg-danger rounded-circle"><span
                                        class="visually-hidden">New alerts</span></span></span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg py-0" style="min-width: 24rem">
                            <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2"
                                data-coreui-i18n="messagesCounter, { 'counter': 7 }">You have 4 messages</div><a
                                class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 my-3 me-3"><img class="avatar-img"
                                            src="assets/img/avatars/1.jpg" alt="user@email.com"><span
                                            class="avatar-status bg-success"></span></div>
                                    <div class="message text-wrap">
                                        <div class="d-flex justify-content-between mt-1">
                                            <div class="small text-body-secondary">Jessica Williams</div>
                                            <div class="small text-body-secondary">Just now</div>
                                        </div>
                                        <div class="fw-semibold"><span class="text-danger">! </span>Urgent: System
                                            Maintenance Tonight</div>
                                        <div class="small text-body-secondary">Attention team, we'll be conducting
                                            critical system maintenance tonight from 10 PM to 2 AM. Plan accordingly...
                                        </div>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 my-3 me-3"><img class="avatar-img"
                                            src="assets/img/avatars/2.jpg" alt="user@email.com"><span
                                            class="avatar-status bg-warning"></span></div>
                                    <div class="message text-wrap">
                                        <div class="d-flex justify-content-between mt-1">
                                            <div class="small text-body-secondary">Richard Johnson</div>
                                            <div class="small text-body-secondary">5 minutes ago</div>
                                        </div>
                                        <div class="fw-semibold"><span class="text-danger">! </span>Project Update:
                                            Milestone Achieved</div>
                                        <div class="small text-body-secondary">Kudos on hitting sales targets last
                                            quarter! Let's keep the momentum. New goals, new victories ahead...</div>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 my-3 me-3"><img class="avatar-img"
                                            src="assets/img/avatars/4.jpg" alt="user@email.com"><span
                                            class="avatar-status bg-secondary"></span></div>
                                    <div class="message text-wrap">
                                        <div class="d-flex justify-content-between mt-1">
                                            <div class="small text-body-secondary">Angela Rodriguez</div>
                                            <div class="small text-body-secondary">1:52 PM</div>
                                        </div>
                                        <div class="fw-semibold">Social Media Campaign Launch</div>
                                        <div class="small text-body-secondary">Exciting news! Our new social media
                                            campaign goes live tomorrow. Brace yourselves for engagement...</div>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 my-3 me-3"><img class="avatar-img"
                                            src="assets/img/avatars/5.jpg" alt="user@email.com"><span
                                            class="avatar-status bg-success"></span></div>
                                    <div class="message text-wrap">
                                        <div class="d-flex justify-content-between mt-1">
                                            <div class="small text-body-secondary">Jane Lewis</div>
                                            <div class="small text-body-secondary">4:03 PM</div>
                                        </div>
                                        <div class="fw-semibold">Inventory Checkpoint</div>
                                        <div class="small text-body-secondary">Team, it's time for our monthly
                                            inventory check. Accurate counts ensure smooth operations. Let's nail it...
                                        </div>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 my-3 me-3"><img class="avatar-img"
                                            src="assets/img/avatars/3.jpg" alt="user@email.com"><span
                                            class="avatar-status bg-secondary"></span></div>
                                    <div class="message text-wrap">
                                        <div class="d-flex justify-content-between mt-1">
                                            <div class="small text-body-secondary">Ryan Miller</div>
                                            <div class="small text-body-secondary">3 days ago</div>
                                        </div>
                                        <div class="fw-semibold">Customer Feedback Results</div>
                                        <div class="small text-body-secondary">Our latest customer feedback is in.
                                            Let's analyze and discuss improvements for an even better service...</div>
                                    </div>
                                </div>
                            </a>
                            <div class="p-2"> <a class="btn btn-outline-primary w-100" href="#">View all
                                    messages</a></div>
                        </div>
                    </li>
                </ul>
                <ul class="header-nav ms-auto ms-md-0">
                    <li class="nav-item py-1">
                        <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-link nav-link" type="button" aria-expanded="false"
                            data-coreui-toggle="dropdown">
                            <svg class="icon icon-lg">
                                <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#language') }}"></use>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
                            <li>
                                <button class="dropdown-item d-flex align-items-center" type="button"
                                    data-coreui-language-value="en" onclick="i18next.changeLanguage(&quot;en&quot;)">
                                    <svg class="icon icon-lg me-3">
                                        <use xlink:href="{{ asset('assets/vendors/icons/svg/flag.svg#egy') }}"></use>
                                    </svg>English
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item d-flex align-items-center" type="button"
                                    data-coreui-language-value="es" onclick="i18next.changeLanguage(&quot;es&quot;)">
                                    <svg class="icon icon-lg me-3">
                                        <use xlink:href="{{ asset('assets/vendors/icons/svg/flag.svg#egy') }}"></use>
                                    </svg>Español
                                </button>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-link nav-link" type="button" aria-expanded="false"
                            data-coreui-toggle="dropdown">
                            <svg class="icon icon-lg theme-icon-active">
                                <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#sun') }}"></use>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
                            <li>
                                <button class="dropdown-item d-flex align-items-center" type="button"
                                    data-coreui-theme-value="light">
                                    <svg class="icon icon-lg me-3">
                                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#cil-sun') }}">
                                        </use>
                                    </svg><span>Light</span>
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item d-flex align-items-center" type="button"
                                    data-coreui-theme-value="dark">
                                    <svg class="icon icon-lg me-3">
                                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#nbmnbm') }}">
                                        </use>
                                    </svg><span> Dark</span>
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item d-flex align-items-center active" type="button"
                                    data-coreui-theme-value="auto">
                                    <svg class="icon icon-lg me-3">
                                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#tyutyu') }}">
                                        </use>
                                    </svg>Auto
                                </button>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item py-1">
                        <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg"
                                    alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div
                                class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">
                                Account</div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                                    </use>
                                </svg><span>Updates</span><span
                                    class="badge badge-sm bg-info-gradient ms-2">42</span></a><a class="dropdown-item"
                                href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                                    </use>
                                </svg><span>Messages</span><span
                                    class="badge badge-sm badge-sm bg-success ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                                    </use>
                                </svg><span>Tasks</span><span
                                    class="badge badge-sm bg-danger-gradient ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                                    </use>
                                </svg><span>Comments</span><span
                                    class="badge badge-sm bg-warning-gradient ms-2">42</span></a>
                            <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2">Settings
                            </div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                                    </use>
                                </svg><span>Profile</span></a><a class="dropdown-item" href="#">

                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                                    </use>
                                </svg><span>Payments</span><span
                                    class="badge badge-sm bg-secondary-gradient text-dark ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                                    </use>
                                </svg><span>Projects</span><span
                                    class="badge badge-sm bg-primary-gradient ms-2">42</span></a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                                    </use>
                                </svg><span>Lock Account</span></a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                                    </use>
                                </svg><span>Logout</span></a>
                        </div>
                    </li>
                </ul>

            </div>
        </header>
        <div class="body flex-grow-1">
            <div class="container-lg px-4">
                <div class="fs-2 fw-semibold">Dashboard</div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active"><span>Dashboard</span>
                        </li>
                    </ol>
                </nav>
                
                        <div class="row">
                            <div class="col-md-4 col-xl-4">
                                <div class="card mb-4 text-white bg-primary-gradient">
                                    <div class="card-body p-4 pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
                                                    <svg class="icon">
                                                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#vbvb') }}">
                                                        </use>
                                                    </svg>)</span></div>
                                            <div data-coreui-i18n="users">Users</div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <svg class="icon">
                                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#vvbvbv') }}">
                                                    </use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"
                                                    data-coreui-i18n="action">Action</a><a class="dropdown-item" href="#"
                                                    data-coreui-i18n="anotherAction">Another action</a><a class="dropdown-item" href="#"
                                                    data-coreui-i18n="somethingElseHere">Something else here</a></div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper mt-3 mx-3" style="height:80px;">
                                        <canvas class="chart" id="card-chart1" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="card mb-4 text-white bg-warning-gradient">
                                    <div class="card-body p-4 pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fs-4 fw-semibold">2.49% <span class="fs-6 fw-normal">(84.7%
                                                    <svg class="icon">
                                                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#eeee') }}">
                                                        </use>
                                                    </svg>)</span></div>
                                            <div>Conversion Rate</div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <svg class="icon">
                                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bbbb') }}">
                                                    </use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                                                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                                    href="#">Something else here</a></div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper mt-3" style="height:80px;">
                                        <canvas class="chart" id="card-chart3" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="card mb-4 text-white bg-danger-gradient">
                                    <div class="card-body p-4 pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fs-4 fw-semibold">44K <span class="fs-6 fw-normal">(-23.6%
                                                    <svg class="icon">
                                                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#cccccc') }}">
                                                        </use>
                                                    </svg>)</span></div>
                                            <div>Sessions</div>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <svg class="icon">
                                                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxxx') }}">
                                                    </use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a
                                                    class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                                    href="#">Something else here</a></div>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper mt-3 mx-3" style="height:80px;">
                                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                <div class="row">
                    <div class="col-xl-12">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card mb-4">
                            <div class="card-body p-4">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="fw-semibold text-body-secondary">
                                            <tr class="align-middle">
                                                <th class="text-center">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                                                        </use>
                                                    </svg>
                                                </th>
                                                <th>User</th>
                                                <th class="text-center">Country</th>
                                                <th>Usage</th>
                                                <th>Activity</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="assets/img/avatars/1.jpg" alt="user@email.com"><span
                                                            class="avatar-status bg-success"></span></div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap">Yiorgos Avraamu</div>
                                                    <div class="small text-body-secondary text-nowrap"><span>New</span>
                                                        | <span>Registered: </span><span
                                                            data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 1, 10'}">Jan
                                                            1, 2020</span></div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            xlink:href="{{ asset('assets/vendors/icons/svg/flag.svg#egy') }}">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-baseline">
                                                        <div class="fw-semibold">50%</div>
                                                        <div class="text-nowrap small text-body-secondary ms-3"><span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 6, 11'}"></span>
                                                            - <span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 7, 10'}">
                                                            </span></div>
                                                    </div>
                                                    <div class="progress progress-thin mt-1">
                                                        <div class="progress-bar bg-success-gradient"
                                                            role="progressbar" style="width: 50%" aria-valuenow="50"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="small text-body-secondary">Last login</div>
                                                    <div class="fw-semibold text-nowrap"
                                                        data-coreui-i18n="relativeTime, { 'val': -10, 'range': 'seconds' }">
                                                        10 sec ago</div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                            type="button" data-coreui-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#vvvvvv') }}">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="#">Info</a><a
                                                                class="dropdown-item" href="#">Edit</a><a
                                                                class="dropdown-item text-danger"
                                                                href="#">Delete</a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="assets/img/avatars/2.jpg"
                                                            alt="user@email.com"><span
                                                            class="avatar-status bg-danger-gradient"></span></div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap">Avram Tarasios</div>
                                                    <div class="small text-body-secondary text-nowrap"><span
                                                            >Recurring</span> | <span
                                                            >Registered: </span><span
                                                            data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 1, 10'}">Jan
                                                            1, 2020</span></div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            xlink:href="{{ asset('assets/vendors/icons/svg/flag.svg#egy') }}">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-baseline">
                                                        <div class="fw-semibold">50%</div>
                                                        <div class="text-nowrap small text-body-secondary ms-3"><span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 6, 11'}"></span>
                                                            - <span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 7, 10'}">
                                                            </span></div>
                                                    </div>
                                                    <div class="progress progress-thin mt-1">
                                                        <div class="progress-bar bg-info-gradient"
                                                            role="progressbar" style="width: 10%"
                                                            aria-valuenow="10" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="small text-body-secondary"
                                                        >Last login</div>
                                                    <div class="fw-semibold text-nowrap"
                                                        data-coreui-i18n="relativeTime, { 'val': -5, 'range': 'minutes' }">
                                                        5 minutes ago</div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                            type="button" data-coreui-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#vvvvv') }}">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="#"
                                                                >Info</a><a
                                                                class="dropdown-item" href="#"
                                                                >Edit</a><a
                                                                class="dropdown-item text-danger" href="#"
                                                                >Delete</a></div>
                                                    </div>
                                                </td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- /.row-->
            </div>
        </div>
        <footer class="footer px-4">
            <div><a href="https://coreui.io">CoreUI </a><a
                    href="https://coreui.io/product/bootstrap-dashboard-template/">Bootstrap Admin Template</a> © 2024
                creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI PRO UI Components</a>
            </div>
        </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('assets/vendors/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/i18next/js/i18next.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/i18next-http-backend/js/i18nextHttpBackend.js') }}"></script>
    <script src="{{ asset('assets/vendors/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.js') }}">
    </script>
    <script src="{{ asset('assets/js/i18next.js') }}"></script>
    <script>
        const header = document.querySelector('header.header');

        document.addEventListener('scroll', () => {
            if (header) {
                header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
            }
        });
    </script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('assets/vendors/chart/js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('assets/vendors/utils/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script></script>

</body>

</html>
