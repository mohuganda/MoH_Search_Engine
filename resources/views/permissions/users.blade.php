@extends('layouts.admin')
@section('content')

  <?php 
  
  $session = Auth::user();

  ?>

<!-- Highlighted tabs -->
 @if ($session->can('create users'))
   <div class="col-md-12">

    <div class="card card-collapsed form">
        <div class="card-header header-elements-inline">
        <h6 class="card-title" onclick="$('.add').click()" >
            <i class="icon-user-plus text-lg mr-2"></i>{{ __('general.create') }} {{ __('auth.user') }}
            </h6>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item add" data-action="collapse"></a>
            </div>
        </div>
    </div>

        <div class="card-body">
            <form method="POST" action="{{ route('permissions.saveuser') }}">
                    @csrf
                <div class="row pb-3">
                    
                    <div class="form-group col-md-4  col-sm-12 ">
                        <label><i class="icon-user mr-2"></i>First name</label>
                        <input type="text"  class="form-control text-bold" placeholder="First Name" name="first_name" value="{{old('first_name')}}" required/>
                    </div>
                    <div class="form-group col-md-4  col-sm-12 ">
                        <label><i class="icon-user mr-2"></i> Last Name</label>
                        <input type="text"  class="form-control text-bold" placeholder="Last name" name="last_name" value="{{old('last_name')}}" required/>
                    </div>
                    <div class="form-group col-md-4  col-sm-12 ">
                        <label><i class="icon-envelope mr-2"></i> Email</label>
                        <input type="text"  class="form-control text-bold" placeholder="Email" name="email" value="{{old('email')}}" required/>
                    </div>
                    <div class="form-group col-md-4  col-sm-12 ">
                        <label><i class="icon-phone mr-2"></i> Mobile</label>
                        <input type="text"  class="form-control text-bold" placeholder="Mobile" name="mobile" value="{{old('mobile')}}" required/>
                    </div>
                    <div class="form-group col-md-4  col-sm-12 ">
                        <label><i class="icon-credit-card mr-2"></i> ID No.</label>
                        <input type="text"  class="form-control text-bold" placeholder="National ID" name="nin" value="{{old('nin')}}" required/>
                    </div>

                    <div class="form-group col-md-4  col-sm-12">
                        @csrf
                        <label class="text-bold">
                            <i class="icon-collaboration mr-2"></i>
                            {{ __('auth.user') }} {{ __('auth.role') }}
                        </label>
                        <select class="form-control form-control-select2 select" name="role_id" data-fouc readonly>
                            @if(empty(old('role_id')))
                            <option>Choose Role</option>
                            @endif
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ ($role->id == old('role_id'))?'selected':'' }}>{{ strtoupper($role->name) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-4  col-sm-12 ">
                        <label><i class="icon-lock mr-2"></i>Password</label>
                        <input type="password"  class="form-control text-bold" placeholder="Password (Leave blank to generate)" name="pass" value="{{old('pass')}}"/>
                    </div>
                    <div class="form-group col-md-4 mt-3 col-sm-12">
                        <button type="submit" class="btn btn-dark  col-sm-12"><i class="icon-disk"></i> {{__('general.submit')}}</button>
                    </div>


                </div>
            </form>
        </div>
    </div>
    </div>

   @endif

        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h4 class="card-title"><i class="icon-users4 mr-2"></i> {{ __('auth.users') }}</h4>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body services-body">


                        <form action="{{ route('permissions.filerusers') }}" method="POST">
                            @csrf
                            <div class="row pb-3">

                                <div class="form-group col-md-3">
                                    <label>{{ __('general.name') }}</label>
                                    <input type="text" name="name"  value="{{$search->name}}" class="form-control" placeholder="Search by Name">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>{{ __('agents.phone') }}</label>
                                    <input type="tel" name="mobile"  value="{{$search->phone}}" class="form-control" placeholder="Search by Phone">
                                </div>

                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-dark"><i class="icon-filter4"></i> 
                                    {{ __('general.search') }} {{ __('general.users') }}</button>
                                </div>
                            </div>
                        </form>

                <hr>

                    @if(count($users)>0)
                        <table class="table datatable-basic table-striped">
                            <thead>
                                <tr class="text-bold">
                                    <th>{{ __('auth.user') }}</th>
                                    <th>{{ __('general.email') }}</th>
                                    <th>{{ __('general.phone') }}</th>
                                    <th>{{ __('general.status') }}</th>
                                    <th>{{ __('auth.role') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)

                                @php
                                  //$agent    = Shared::getAgent($user->agent_id);
                                 // $userRole = Shared::userRole($user->id);
                                 $userRole= null;

                                  $statuses = array(
                                  "0"=>"Blocked",
                                  "2"=>"Restricted",
                                  "3"=>"Reset",
                                  "1"=>"Active");
                                @endphp
                                @if($agent)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>{{ $agent->names }}</td>
                                    <td><b class="badge badge-dark">{{  $statuses[$user->status] }}</b></td>
                                    <td>{{ strtoupper((@$userRole->name)?$userRole->name:'NO ROLE') }}</td>
                                    <td class="text-center">

                                        @if ($session->can('create users'))

                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu7"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#user{{$user->id}}0" data-toggle="modal" class="dropdown-item"><i class="icon-touch-pinch"></i> 
                                                    {{ __('general.change') }}  {{ __('auth.role') }} </a>

                                                
                                                <a href="#login_state{{$user->id}}0" data-toggle="modal" class="dropdown-item"><i class="icon-touch-pinch"></i> 
                                                    {{ __('general.change') }}  {{ __('auth.login_status') }} </a>

                                                <a href="{{ route('profile', Shared::secureValue($user->id))}}" class="dropdown-item"><i class="icon-touch-pinch"></i> 
                                                    {{ __('general.details') }}  </a>

                                                 <a href="{{ route('profile', Shared::secureValue($user->id))}}" class="dropdown-item"><i class="icon-touch-pinch"></i> 
                                                    {{ __('general.details') }}  </a>
                                                <a href="#delete{{$user->id}}0" data-toggle="modal" class="dropdown-item text-danger"><i class="icon-trash"></i> 
                                                    Delete </a>

                                                </div>
                                            </div>
                                        </div>

                                        @endif
  
                                    </td>
                                </tr>
                                
                                 @include('permissions.partials.user_edit_form_modal')
                                 @include('permissions.partials.reset_modal')
                                 @include('permissions.partials.delete_user_modal')

                                 @endif
                                      
                                @endforeach
                            </tbody>
                        </table> 
                         {{ $users->links() }}
                        @else
                            <center><div><br><br>No data found</div></center>
                        @endif

                </div>
            </div>
        </div>
  
    <!-- /highlighted tabs -->

@endsection
    <!-- /List