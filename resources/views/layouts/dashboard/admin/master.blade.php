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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="shortcut icon" href="" />
  <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
</head>

<body>
  <div class="container-scroller">
    @include('layouts.dashboard.admin.navbar')
    <div class="container-fluid page-body-wrapper">
      @include('layouts.dashboard.admin.sidebar')
       <div class="main-panel">
      @yield('content')
      @include('layouts.dashboard.admin.footer')
        </div>
    </div>
  </div>
 
 <script src="{{asset('dashboard/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('dashboard/vendors/js/vendor.bundle.addons.js') }}"></script>
  <script src="{{ asset('dashboard/js/off-canvas.js') }}"></script>
  <script src="{{ asset('dashboard/js/misc.js') }}"></script>
  <script src="{{ asset('js/toastr.js') }}"></script>
  <script>
@if(Session::has('success'))
	toastr.success("{{Session::get('success')}}");
@elseif(Session::has('info'))
	toastr.info("{{Session::get('info')}}");
@elseif(Session::has('msg'))
	toastr.info("{{Session::get('msg')}}");
@elseif(Session::has('errors'))
    @foreach($errors->all() as $error)
        toastr.error('{{$error}}');
    @endforeach
@endif
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
          $("#btnExcel").click(function(){
               var divContents = $("#dvContainer").html();
            
          });
    });
</script>
    </body>
</html>
