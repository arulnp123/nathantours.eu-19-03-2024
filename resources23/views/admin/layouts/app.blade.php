<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assetss/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetss/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assetss/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assetss/images/favicon.ico') }}" />
  </head>
@yield('third_party_stylesheets')

@stack('page_css')
  <body>
    <div class="container-scroller">
@include('admin/layouts.header')
      <div class="container-fluid page-body-wrapper">
@include('admin/layouts.sidebar')

@yield('admin/content')

@include('admin/layouts.footer')

@yield('third_party_scripts') 

   <script src="{{ asset('assetss/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assetss/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assetss/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assetss/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assetss/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assetss/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assetss/js/file-upload.js"></script>
    <script src="{{ asset('assetss/js/dashboard.js') }}"></script>
    <script src="{{ asset('assetss/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->
    @stack('page_scripts')
  </body>
</html>