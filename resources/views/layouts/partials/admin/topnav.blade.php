	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			
			<div class="sidebar-header">
				<!-- <div>
					<img src="{{ asset('admin/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div> -->
				<div>
					<h6 class="logo-text" style="font-size:14px;">Ministry of Health</h6>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>

			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ url('/cms/home')}}">
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
						<li> <a href="{{url('cms/items/create')}}"><i class="bx bx-right-arrow-alt"></i> {{__('cms.add_item')}}</a></li>
						<li> <a href="{{url('cms/items')}}"><i class="bx bx-right-arrow-alt"></i> {{__('cms.view_items')}}</a></li>
						<li> <a href="{{url('cms/types')}}"><i class="bx bx-right-arrow-alt"></i> {{__('cms.item_types')}}</a></li>
						<li> <a href="{{url('cms/thematicareas')}}"><i class="bx bx-right-arrow-alt"></i> {{trans_choice('cms.thematic_area',2)}}</a></li>
					</ul>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-archive"></i>
						</div>
						<div class="menu-title">{{__('cms.organizatons')}}</div>
					</a>
					<ul>
						<li> <a href="{{url('cms/organizations/create')}}"><i class="bx bx-right-arrow-alt"></i> {{__('cms.add_organization')}}</a></li>
						<li> <a href="{{url('cms/organizations')}}"><i class="bx bx-right-arrow-alt"></i> {{__('cms.view_organizations')}}</a></li>
					</ul>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-cog"></i>
						</div>
						<div class="menu-title">{{__('cms.management')}}</div>
					</a>
					<ul>
						<li> <a href="{{url('permissions/users')}}"><i class="bx bx-right-arrow-alt"></i> {{__('auth.users')}}</a></li>
						<li> <a href="{{route('permissions.permissions')}}"><i class="bx bx-right-arrow-alt"></i> {{__('auth.permissions')}}</a></li>
						<li> <a href="{{url('permissions/roles')}}"><i class="bx bx-right-arrow-alt"></i> {{__('auth.roles')}}</a></li>
					</ul>
					
				</li>
				
				
			</ul>
			<!--end navigation-->

		</div>
		<!--end sidebar wrapper -->