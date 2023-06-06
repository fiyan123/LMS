<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>LMS - System Sekolah</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/vendors/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/vendors/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/vendors/images/favicon-16x16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css"
		href="{{asset('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{ asset('js/sweetAlert/sweetalert2.min.css') }}" />
	<link rel="stylesheet" type="text/css"
		href="{{asset('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/style.css')}}">
	<!-- CSS SweetAlert -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

	<!-- JavaScript SweetAlert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body>

	{{-- navbar --}}
	@include('layouts.guru.navbar');

	{{-- Sidebar-Right --}}
	@include('layouts.guru.sidebar-right')

	{{-- Sidebar-Left --}}
	@include('layouts.guru.sidebar-left')

	<div class="mobile-menu-overlay"></div>

	{{-- GURU --}}
	@yield('content')

	<!-- js -->
	<script src="{{asset('assets/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('assets/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('assets/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('assets/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('assets/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('assets/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('assets/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('assets/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('vendors/scripts/dashboard.js') }}"></script>
	<!-- buttons for Export datatable -->
	<script src="{{asset('assets/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('assets/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{asset('assets/src/plugins/datatables/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('assets/src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('assets/src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
	<script src="{{asset('assets/src/plugins/datatables/js/pdfmake.min.js')}}"></script>
	<script src="{{asset('assets/src/plugins/datatables/js/vfs_fonts.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/sweetAlert/sweetalert2.all.min.js')}}"></script>
	<!-- Datatable Setting js -->
	<script src="{{asset('assets/vendors/scripts/datatable-setting.js')}}"></script>
</body>

</html>