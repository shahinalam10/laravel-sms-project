<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.einfosoft.com/templates/admin/otika/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jan 2023 08:46:10 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('admin.include.header')
        @include('admin.include.left-sidebar')
        <!-- Main Content -->
        @yield('content')
        @include('admin.include.footer')
    </div>
</div>
<!-- General JS Scripts -->
<script src="{{asset('adminAsset')}}/assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="{{asset('adminAsset')}}/assets/bundles/apexcharts/apexcharts.min.js"></script>
<!-- Page Specific JS File -->
<script src="{{asset('adminAsset')}}/assets/js/page/index.js"></script>
<!-- Template JS File -->
<script src="{{asset('adminAsset')}}/assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="{{asset('adminAsset')}}/assets/js/custom.js"></script>
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/otika/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jan 2023 08:49:09 GMT -->
</html>
