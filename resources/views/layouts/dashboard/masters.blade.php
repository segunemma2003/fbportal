<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Trainers</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.addons.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
  <link rel="shortcut icon" href="" />
</head>

<body>
  <div class="container-scroller">
    @include('layouts.dashboard.navbar')
    <div class="container-fluid page-body-wrapper">
      @include('layouts.dashboard.sidebar')
       <div class="main-panel">
      @yield('content')
      @include('layouts.dashboard.footer')
    </div>
    </div>
  </div>
 <script src="{{asset('dashboard/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('dashboard/vendors/js/vendor.bundle.addons.js') }}"></script>
  <script src="{{ asset('dashboard/js/off-canvas.js') }}"></script>
  <script src="{{ asset('dashboard/js/misc.js') }}"></script>
    </body>
</html>
