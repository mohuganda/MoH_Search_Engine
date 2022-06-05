@extends('layouts.admin')
@section('content')

<!-- Highlighted tabs -->
    <div class="row">

        <div class="col-md-12">
        <div class="card">

            <div class="card-header header-elements-inline">
                    
                    <h4 class="card-title">
                        <i class="icon-key text-lg"></i> {{ __('auth.permissions') }} {{ __('general.setup') }}</h4>
                 
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>
           
             <div class="card-body">
                <form action="{{ route('permissions.permission') }}" method="POST" class="feeFormperm">
                 @csrf    
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-float">
                                    <label class="form-group-float-label"> {{ __('auth.permission') }}</label>
                                    <input type="search" name="perm_name"  class="form-control" placeholder="{{ __('general.enter') }} {{ __('auth.permission') }}" required/>
                         </div>
                         
                    </div>
                    <div class="col-md-6">
                            <button type="button" onclick="postEntry('perm')" class="btn btn-success ">
                                <i class="icon-floppy-disk mr-2"></i>
                                {{ __('general.save') }} {{ __('auth.permission') }}
                            </button>
                            <button type="reset" class="btn btn-secondary reset">
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
                    <h4 class="card-title"><i class="icon-stack4 mr-2"></i> {{ __('auth.permissions') }}</h4>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body services-body">

                    @if(count($permissions)>0)
                        <table class="table datatable-basic table-striped">
                            <thead>
                                <tr class="text-bold">
                                    <th>{{ __('auth.permission') }} {{ __('general.name') }}</th>
                                    <th class="text-center">
                                        ...
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($permissions as $perm)
                                <tr>
                                    <td>{{ strtoupper($perm->name) }}</td>
                                    <td class="text-center">

                                        <div class="list-icons">
                                            <div class="list-icons-item dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu7"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#perm{{$perm->id}}0" data-toggle="modal" class="dropdown-item"><i class="icon-touch-pinch"></i> 
                                                    {{ __('general.edit') }} </a>
                                                </div>
                                            </div>
                                        </div>     
                                    </td>
                                    
                                </tr>
                                
                                @include('permissions.partials.permission_edit_form_modal')
                                    
                                @endforeach
                            </tbody>
                        </table> 
                        {{ $permissions->links() }}
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