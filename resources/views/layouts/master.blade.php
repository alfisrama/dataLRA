<!doctype html>
<html lang="en">

<head>
	<title>{{$halaman}}</title>
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
	<link rel="stylesheet" href="{{ asset('bootstrap/assets/vendor/bootstrap/less/datepicker.less') }}">

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

<style>
	input[readonly].read{
		background-color: transparent;
	}
</style>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layouts.navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('layouts.sidebar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					@if(session('tambah'))
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
						<i class="fa fa-check-circle"></i> {{session('tambah')}}
					</div>
                    @elseif(session('hapus'))
                    <div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
						<i class="fa fa-check-circle"></i> {{session('hapus')}}
					</div>
                    @elseif(session('edit'))
                    <div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
						<i class="fa fa-check-circle"></i> {{session('edit')}}
					</div>
					@elseif($errors->any())
					<ul class="list-unstyled components alert alert-danger alert-dismissible" role="alert">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
					@endif
                    <div class="row">
                        @yield('main')
                    </div>
				</div>
            </div>
        </div>
        <!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			{{-- <div class="container-fluid">
				<p class="copyright">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a></p>
			</div> --}}
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
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
		$("#datepicker").datepicker({
            format: "mm-yyyy",
            viewMode: "months", 
            minViewMode: "months"
        });
		
		$(document).ready(function() {
            $('#id_provinsi').select2();
        });

		$(document).ready(function() {
            $('#id_kabkota').select2();
        });
	</script>

	@yield('script')

</body>
</html>
