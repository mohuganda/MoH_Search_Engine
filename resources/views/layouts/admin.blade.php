
@include('layouts.partials.admin.header')

 @include('layouts.partials.admin.topnav')
<!--start header -->
 @include('layouts.partials.admin.side_nav')
<!--end header -->

<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
	 @foreach (config('constants.alerts') as $msg)
          @if(Session::has('alert-' . $msg['key']))

          <!-- Success alert -->
        <div class="alert alert-{{ ($msg['key'])?$msg['key']:'success' }} bg-white alert-styled-left alert-arrow-left alert-dismissible">
            <span class="alert_msg">{!! Session::get('alert-' .$msg['key']) !!}</span>
             <!-- <a  class="close" data-bs-dismiss="alert"><span>&times;</span></a> -->
          </div>
          <!-- /Success alert -->
          @endif
        @endforeach
		@yield('content')
	</div>
</div>
<!--end page wrapper -->

@include('layouts.partials.admin.footer')

