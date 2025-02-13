@include('partials._header')
<body>
    @include('partials._side_bar')
    <div class="wrapper d-flex flex-column min-vh-100">
        @include('partials._header_bar')
        <div class="body flex-grow-1">
            <div class="px-4">
                @include('partials._test_content')
            </div>
        </div>
        @include('partials._footer')
    </div>
    @include('partials._script')
</body>
</html>
