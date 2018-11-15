<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BYB trainer Register | IGHUB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/main.js') }}"></script>
</head>
<body class="main-body">
    <div class="wrapper">
        @yield('content')
        
    </div>
    <script src="{{ asset('js/toastr.js') }}"></script>
    <script>
@if(Session::has('success'))
	toastr.success("{{Session::get('success')}}");
@elseif(Session::has('info'))
	toastr.info("{{Session::get('info')}}");
@elseif(Session::has('message'))
	toastr.info("{{Session::get('message')}}");
@elseif(Session::has('errors'))
    @foreach($errors->all() as $error)
        toastr.error('{{$error}}');
    @endforeach
@endif
</script>
</body>
</html>