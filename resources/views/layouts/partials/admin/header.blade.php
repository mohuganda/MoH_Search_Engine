<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('admin/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('admin/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('admin/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('admin/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('admin/css/header-colors.css') }}" />
	<title>Dashboards Portal</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('admin/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h5 class="logo-text">DPortal</h5>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>

			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="widgets.html">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Home</div>
					</a>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Dashboards</div>
					</a>
					<ul>
						<li> <a href="{{url('items')}}"><i class="bx bx-right-arrow-alt"></i>View Dashboards</a>
					</ul>
				</li>
				
				
			</ul>
			<!--end navigation-->

		</div>
		<!--end sidebar wrapper -->