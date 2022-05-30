
@include('layouts.partials.admin.header')

<!--start header -->
 @include('layouts.partials.admin.side_nav')
<!--end header -->

<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		@yield('content')
	</div>
</div>
<!--end page wrapper -->

@include('layouts.partials.admin.footer')

