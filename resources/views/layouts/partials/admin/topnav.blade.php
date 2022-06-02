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
						<div class="menu-title">{{__('cms.dashboards_systems')}}</div>
					</a>
					<ul>
						<li> <a href="{{url('cms/items')}}"><i class="bx bx-right-arrow-alt"></i> {{__('cms.dashboards')}}</a></li>
						<li> <a href="{{url('cms/category')}}"><i class="bx bx-right-arrow-alt"></i> {{__('cms.systems')}}</a></li>
					</ul>
				</li>
				
				
			</ul>
			<!--end navigation-->

		</div>
		<!--end sidebar wrapper -->