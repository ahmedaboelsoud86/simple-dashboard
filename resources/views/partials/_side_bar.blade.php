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


        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bell') }}"></use>
                </svg><span>Forms</span></a>
            <ul class="nav-group-items compact">

                <li class="nav-item"><a class="nav-link" href="forms/time-picker.html"><span
                            class="nav-icon"><span class="nav-icon-bullet"></span></span> Time Picker<span
                            class="badge bg-danger-gradient ms-auto">PRO</span></a></li>

            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bell') }}"></use>
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
                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bell') }}"></use>
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
                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bell') }}"></use>
                </svg><span>Widgets</span><span
                    class="badge bg-info-gradient text-uppercase ms-auto">New</span></a>
        </li>
    </ul>
</div>
<div class="sidebar sidebar-light sidebar-lg sidebar-end sidebar-overlaid border-start" id="aside">
    <div class="sidebar-header p-0 position-relative">
        <ul class="nav nav-underline-border w-100" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#timeline"
                    role="tab">
                    <svg class="icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bell') }}"></use>
                    </svg></a></li>
            <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#messages" role="tab">
                    <svg class="icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bell') }}"></use>
                    </svg></a></li>
            <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#settings" role="tab">
                    <svg class="icon">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bell') }}"></use>
                    </svg></a></li>
        </ul>
        <button class="btn-close position-absolute top-50 end-0 translate-middle my-0" type="button"
            aria-label="Close"
            onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#aside&quot;)).toggle()"></button>
    </div>
    <!-- Tab panes-->

</div>
