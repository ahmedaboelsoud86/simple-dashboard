@include('partials._header')

<body>
    @include('partials._side_bar')
    <!-- Tab panes-->

    </div>
    <div class="wrapper d-flex flex-column min-vh-100">

        @include('partials._header_bar')

        <div class="body flex-grow-1">
            <div class="px-4">
                <div class="fs-2 fw-semibold">Dashboard</div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active"><span>Dashboard</span>
                        </li>
                    </ol>
                </nav>


                @include('partials._test_content')


                <!-- /.row-->
            </div>
        </div>
        @include('partials._footer')
