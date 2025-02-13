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
    <div class="col-xl-12">
        <div class="card mb-4">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col">
                        <div class="card-title fs-4 fw-semibold">Users
                        </div>
                        <div class="card-subtitle text-body-secondary mb-4">
                            1.232.150 registered users</div>
                    </div>
                    <div class="col-auto ms-auto">
                        <button class="btn btn-secondary">
                            <svg class="icon me-2">
                                <use
                                    xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#contrast') }}">
                                </use>
                            </svg><span>Add new user</span>
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="fw-semibold text-body-secondary">
                            <tr class="align-middle">
                                <th class="text-center">
                                    <svg class="icon">
                                        <use
                                            xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#contrast') }}">
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
                                        | <span>Registered: </span><span>Jan
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
                                        <div class="text-nowrap small text-body-secondary ms-3">
                                            <span>2023, 6, 11</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-thin mt-1">
                                        <div class="progress-bar bg-success-gradient"
                                            role="progressbar" style="width: 50%" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small text-body-secondary">Last login</div>
                                    <div class="fw-semibold text-nowrap">
                                        10 sec ago</div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-transparent p-0 dark:text-high-emphasis"
                                            type="button" data-coreui-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#contrast') }}">
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
                                            src="assets/img/avatars/2.jpg" alt="user@email.com"><span
                                            class="avatar-status bg-danger-gradient"></span></div>
                                </td>
                                <td>
                                    <div class="text-nowrap">Avram Tarasios</div>
                                    <div class="small text-body-secondary text-nowrap">
                                        <span>Recurring</span> | <span>Registered: </span><span>Jan
                                            1, 2020</span>
                                    </div>
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
                                        <div class="text-nowrap small text-body-secondary ms-3">
                                            <span>2023, 6, 11</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-thin mt-1">
                                        <div class="progress-bar bg-info-gradient" role="progressbar"
                                            style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small text-body-secondary">Last login</div>
                                    <div class="fw-semibold text-nowrap">
                                        5 minutes ago</div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-transparent p-0 dark:text-high-emphasis"
                                            type="button" data-coreui-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#contrast') }}">
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
                                            src="assets/img/avatars/6.jpg" alt="user@email.com"><span
                                            class="avatar-status bg-danger-gradient"></span></div>
                                </td>
                                <td>
                                    <div class="text-nowrap">Friderik Dávid</div>
                                    <div class="small text-body-secondary text-nowrap"><span>New</span>
                                        | <span>Registered: </span><span>2023, 7, 10</span></div>
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
                                        <div class="text-nowrap small text-body-secondary ms-3">
                                            <span>2023, 7, 10</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-thin mt-1">
                                        <div class="progress-bar bg-success-gradient"
                                            role="progressbar" style="width: 43%" aria-valuenow="43"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small text-body-secondary">Last login</div>
                                    <div class="fw-semibold text-nowrap"> 5 minutes ago
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown dropup">
                                        <button class="btn btn-transparent p-0 dark:text-high-emphasis"
                                            type="button" data-coreui-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="{{ asset('assets/vendors/icons/svg/free.svg#contrast') }}">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
