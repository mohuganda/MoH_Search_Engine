<div id="perms{{$role->id}}0" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-full mt-lg-5">
                        <div class="modal-content">
                      <form action="{{ route('permissions.torole') }}" class="feeFormperms{{$role->id}}" method="POST">
                            <div class="modal-header">
                                <span class="font-weight-semibold modal-title">
                                     {{ strtoupper($role->name) }}   {{ __('auth.permissions') }} 
                                </span>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                
                              @csrf
                              
                              <input type="hidden" name="role_id" class="rowid" value="{{ $role->id }}">
                            <div class="row">
                              @foreach($permissions as $perm)
                                <div class="form-check col-md-2" style="padding: 13px;">
	                                    <label class="">
	                                        <input  type="checkbox"  name="permissions[]"  value="{{$perm->id}}" style="width:25px;height:25px;top:10px;"
	                                        {{ in_array($perm->id,$rolePerms)?'checked':'' }} />
	                                         <small >{{ strtoupper($perm->name) }}</small>
	                                    </label>
	                            </div>
                              @endforeach
                            </div>

                            </div>

                            <div class="modal-footer">
                                <button data-dismiss="modal" type="button"  class="btn bg-dark btn-warning btn-sm">{{ __('general.close')}}</button>
                                @php $formRef = 'perms'.$role->id; @endphp
                                <button type="button" class="btn btn-sm btn-success" onclick="postEntry('{{$formRef}}')">
                                 <i class="icon-plus-circle2 mr-2"></i>
                                 {{ __('general.update')}} {{ __('auth.permissions')}}
                                </button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

