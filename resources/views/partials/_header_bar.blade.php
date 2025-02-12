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
            <div class="input-group"><span class="input-group-text bg-body-secondary border-0 px-1" id="search-addon">
                    <svg class="icon icon-lg my-1 mx-2 text-body-secondary">
                        <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#search') }}"></use>
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
                            <div class="progress-bar bg-warning-gradient" role="progressbar" style="width: 70%"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <div class="small text-body-secondary">11444MB/16384MB</div>
                    </a><a class="dropdown-item d-block py-2" href="#">
                        <div class="text-uppercase small fw-semibold mb-1">SSD
                            Usage</div>
                        <div class="progress progress-thin">
                            <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 95%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
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
                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
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




                    </a>
                    <a class="dropdown-item" href="#">
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
                                <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#moon') }}">
                                </use>
                            </svg><span> Dark</span>
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item d-flex align-items-center active" type="button"
                            data-coreui-theme-value="auto">
                            <svg class="icon icon-lg me-3">
                                <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#contrast') }}">
                                </use>
                            </svg>Auto
                        </button>
                    </li>
                </ul>
            </li>
            <li class="nav-item py-1">
                <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg"
                            alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">
                        Account</div><a class="dropdown-item" href="#">
                        <svg class="icon me-2">
                            <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                            </use>
                        </svg><span>Updates</span><span class="badge badge-sm bg-info-gradient ms-2">42</span></a><a
                        class="dropdown-item" href="#">
                        <svg class="icon me-2">
                            <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                            </use>
                        </svg><span>Messages</span><span
                            class="badge badge-sm badge-sm bg-success ms-2">42</span></a><a class="dropdown-item"
                        href="#">
                        <svg class="icon me-2">
                            <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                            </use>
                        </svg><span>Tasks</span><span class="badge badge-sm bg-danger-gradient ms-2">42</span></a><a
                        class="dropdown-item" href="#">
                        <svg class="icon me-2">
                            <use xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#xxxxxwwee') }}">
                            </use>
                        </svg><span>Comments</span><span class="badge badge-sm bg-warning-gradient ms-2">42</span></a>
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
                        </svg><span>Projects</span><span class="badge badge-sm bg-primary-gradient ms-2">42</span></a>
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
