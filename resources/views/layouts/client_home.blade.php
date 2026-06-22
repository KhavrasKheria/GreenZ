<!doctype html>
<html class="no-js" lang="zxx">




<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('asset/clients/img/favicon.png') }}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{ asset('asset/clients/css/font-icons.css') }}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('asset/clients/css/plugins.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('asset/clients/css/style.css') }}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('asset/clients/css/responsive.css') }}">
    <!-- Import CSS for Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    {{-- Import custom css --}}
    <link rel="stylesheet" href="{{ asset('asset/clients/css/custom.css') }}">

</head>

<body>

    <div class="body-wrapper">
        @include('clients.partials.header_home')
        <main>
            @yield('content')
        </main>
        @include('clients.partials.footer_home')



    </div>


    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery Easing (phải có cái này!) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Toastr (phải trước custom.js) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- All JS Plugins -->
    <script src="{{ asset('asset/clients/js/plugins.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('asset/clients/js/main.js') }}"></script>

    <!-- Custom JS (phải ở cuối cùng) -->
    <script src="{{ asset('asset/clients/js/custom.js') }}"></script>
</body>

</html>
