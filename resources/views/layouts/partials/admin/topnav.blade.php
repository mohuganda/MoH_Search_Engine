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
                 <a href="{{ url('/cms/home') }}">
                     <div class="parent-icon"><i class='bx bx-home-circle'></i>
                     </div>
                     <div class="menu-title">Home</div>
                 </a>
             </li>
             <li>
                 <a href="javascript:;" class="has-arrow">
                     <div class="parent-icon"><i class="bx bx-category"></i>
                     </div>
                     <div class="menu-title">{{ __('cms.dashboards_systems') }}</div>
                 </a>
                 <ul>
                     @can('add items')
                         <li> <a href="{{ url('cms/items') }}"><i class="bx bx-right-arrow-alt"></i>
                                 {{ __('cms.view_items') }}</a></li>
                     @endcan
                     @can('item types')
                         <li> <a href="{{ url('cms/types') }}"><i class="bx bx-right-arrow-alt"></i>
                                 {{ __('cms.item_types') }}</a></li>
                     @endcan
                     @can('thematic areas')
                         <li> <a href="{{ url('cms/thematicareas') }}"><i class="bx bx-right-arrow-alt"></i>
                                 {{ trans_choice('cms.thematic_area', 2) }}</a></li>
                     @endcan
                     @can('approval authority')
                         <li> <a href="{{ url('cms/authorities') }}"><i class="bx bx-right-arrow-alt"></i>
                                 {{ __('general.approval') }} {{ __('general.authority') }}</a></li>
                     @endcan
                     @can('ui tools')
                         <li> <a href="{{ url('cms/tools') }}"><i class="bx bx-right-arrow-alt"></i>
                                 {{ __('general.ui') }} {{ __('general.tools') }}</a></li>
                     @endcan
                     @can('dev entities')
                         <li> <a href="{{ url('cms/entities') }}"><i class="bx bx-right-arrow-alt"></i>
                                 {{ trans_choice('general.dev_entity', 2) }}</a></li>
                     @endcan
                 </ul>
             </li>
             @can('manage organizations')
                 <li>
                     <a href="javascript:;" class="has-arrow">
                         <div class="parent-icon"><i class="bx bx-archive"></i>
                         </div>
                         <div class="menu-title">{{ __('cms.organizatons') }}</div>
                     </a>
                     <ul>
                         <li> <a href="{{ url('cms/organizations/create') }}"><i class="bx bx-right-arrow-alt"></i>
                                 {{ __('cms.add_organization') }}</a></li>
                         <li> <a href="{{ url('cms/organizations') }}"><i class="bx bx-right-arrow-alt"></i>
                                 {{ __('cms.view_organizations') }}</a></li>
                     </ul>
                 </li>
             @endcan
             @can('contact persons')
                 <li>
                     <a href="{{ url('/cms/persons') }}" class="">

                         <div class="parent-icon"><i class="fa fa-address-book"></i>
                         </div>
                         <div class="menu-title">{{ __('general.contact') }} {{ trans_choice('general.person', 2) }}</div>
                     </a>
                 </li>
             @endcan

             <li>
                 <a href="javascript:;" class="has-arrow">
                     <div class="parent-icon"><i class="bx bx-cog"></i>
                     </div>
                     <div class="menu-title">{{ __('cms.management') }}</div>
                 </a>
                 <ul>
                     @can('create users')
                         <li> <a href="{{ url('permissions/users') }}"><i class="bx bx-right-arrow-alt"></i>
                                 {{ __('auth.users') }}</a></li>
                     @endcan

                     {{-- System Alerts --}}

                     <li> <a href="{{ url('permissions/alerts') }}"><i class="bx bx-right-arrow-alt"></i>
                             {{ __('cms.system_alerts') }}</a></li>

                     {{-- Tabular Report --}}
                     <li> <a href="{{ url('reports/tabular') }}"><i class="bx bx-right-arrow-alt"></i>System Report</a>
                     </li>


                     @can('create permissions')
                         <li> <a href="{{ route('permissions.permissions') }}"><i class="bx bx-right-arrow-alt"></i>
                                 {{ __('auth.permissions') }}</a></li>
                     @endcan
                     @can('create roles')
                         <li> <a href="{{ url('permissions/roles') }}"><i class="bx bx-right-arrow-alt"></i>
                                 {{ __('auth.roles') }}</a></li>
                     @endcan
                     <li> <a href="{{ url('cms/settings') }}"><i class="bx bx-right-arrow-alt"></i>
                             {{ __('cms.settings') }}</a></li>


                 </ul>

             </li>


         </ul>
         <!--end navigation-->

     </div>
     <!--end sidebar wrapper -->
