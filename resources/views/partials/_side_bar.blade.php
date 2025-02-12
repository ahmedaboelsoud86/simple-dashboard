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

        <li class="nav-title">Components</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#list-richss') }}"></use>
                </svg><span>Base</span></a>
            <ul class="nav-group-items compact">
                <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"><span
                                class="nav-icon-bullet"></span></span><span>Accordion</span></a></li>
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#bnbnvbn') }}"></use>
                </svg><span>Buttons</span></a>
            <ul class="nav-group-items compact">
                <li class="nav-item"><a class="nav-link" href="buttons/loading-buttons.html"><span
                            class="nav-icon"><span class="nav-icon-bullet"></span></span> Loading Buttons<span
                            class="badge bg-danger-gradient ms-auto">PRO</span></a></li>

            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#calculator') }}"></use>
                </svg><span>Forms</span></a>
            <ul class="nav-group-items compact">
                <li class="nav-item"><a class="nav-link" href="forms/form-control.html"><span class="nav-icon"><span
                                class="nav-icon-bullet"></span></span> Form Control</a></li>
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
            </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#calendar') }}"></use>
                </svg><span>Notifications</span></a>
            <ul class="nav-group-items compact">
                <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span
                            class="nav-icon"><span class="nav-icon-bullet"></span></span> Alerts</a></li>
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
