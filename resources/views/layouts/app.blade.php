<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('bootstrap/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/assets/vendor/linearicons/style.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/assets/vendor/chartist/css/chartist-custom.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/assets/vendor/bootstrap/css/bootstrap-editable.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/assets/vendor/bootstrap/css/datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/assets/vendor/bootstrap/css/select2.min.css') }}">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('bootstrap/assets/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('bootstrap/assets/css/demo.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('bootstrap/assets/img/logo.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('bootstrap/assets/img/logo.png') }}">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('bootstrap/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('bootstrap/assets/vendor/jquery/jquery.mask.min.js') }}"></script>
	<script src="{{ asset('bootstrap/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('bootstrap/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('bootstrap/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('bootstrap/assets/vendor/chartist/js/chartist.min.js') }}"></script>
	<script src="{{ asset('bootstrap/assets/scripts/klorofil-common.js') }}"></script>
	<script src="{{ asset('bootstrap/assets/vendor/bootstrap/js/bootstrap-editable.min.js') }}"></script>
	<script src="{{ asset('bootstrap/assets/vendor/bootstrap/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('bootstrap/assets/vendor/bootstrap/js/select2.min.js') }}"></script>

	<script>
		$(document).ready(function() {
            $('#id_provinsi').select2();
        });

		$(document).ready(function() {
            $('#id_kabkota').select2();
        });
	</script>

</body>
</html>
