@extends('layouts.admin')
@section('content')

<!-- Highlighted tabs -->
    <div class="row">
 
        <div class="col-md-12">
        <div class="card">

            <div class="card-header header-elements-inline">
                    
                    <h4 class="card-title">
                        <i class="icon-shield-check text-lg"></i> {{ __('auth.roles') }} {{ __('general.setup') }}</h4>
                 
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>
           
             <div class="card-body">
                <form action="{{ route('permissions.role') }}" method="POST" class="feeFormrole">
                 @csrf    
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-float">
                                    <label class="form-group-float-label"> {{ __('auth.role') }}</label>
                                    <input type="search" name="role_name"  class="form-control" placeholder="{{ __('general.enter') }} {{ __('auth.role') }}"  required/>
                         </div>
                         
                    </div>
                    <div class="col-md-6">
                            <button type="button" onclick="postEntry('role')" class="btn btn-success">
                                <i class="icon-floppy-disk mr-2"></i>
                                {{ __('general.save') }} {{ __('auth.role') }}
                            </button>
                            <button type="reset" class="btn btn-secondary  reset">
                                <i class="icon-cross3 mr-2"></i>
                                {{ __('general.reset') }}
                            </button>
                    </div>
               </div>
           </form>
        </div>
        </div>
    </div>
   
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h4 class="card-title"><i class="icon-stack4 mr-2"></i> {{ __('auth.roles') }}</h4>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body services-body">

                    @if(count($roles)>0)
                        <table class="table datatable-basic table-striped">
                            <thead>
                                <tr class="text-bold">
                                    <th>{{ __('auth.role') }}</th>
                                    <th class="text-center">
                                        ...
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($roles as $role)

                            @php
                               $rolePerms = [];
                               $perms = $role->permissions()->get();
                               foreach($perms as $p):
                                  array_push($rolePerms,$p->id);
                                endforeach;
                            @endphp
                                <tr>
                                    <td>{{ strtoupper($role->name) }}</td>
                                    <td class="text-center">

                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu7"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#role{{$role->id}}0" data-toggle="modal" class="dropdown-item"><i class="icon-touch-pinch"></i> 
                                                    {{ __('general.edit') }} </a>
                                                    <a  href="#perms{{$role->id}}0" data-toggle="modal" class="dropdown-item"><i class="icon-touch-pinch"></i> 
                                                    {{ __('auth.permissions') }} </a>
                                                </div>
                                            </div>
                                        </div>
  
                                    </td>
                                </tr>
                                
                                @include('permissions.partials.role_edit_form_modal')
                                @include('permissions.partials.role_permissions_modal')
                                       
                                @endforeach
                            </tbody>
                        </table> 
                        {{ $roles->links() }}
                        @else
                            <center><div><br><br>No data found</div></center>
                        @endif

                </div>
            </div>
        </div>
    </div>

 
    <!-- /highlighted tabs -->

@endsection
    <!-- /List