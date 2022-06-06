
<div id="perm{{$perm->id}}0" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-sm mt-lg-5">
                        <div class="modal-content">
                      <form action="{{ route('permissions.permission') }}" class="feeForm{{$perm->id}}" method="POST">
                            <div class="modal-header">
                                <span class="font-weight-semibold modal-title">
                                    {{ __('general.edit') }} {{ __('auth.permission') }} 
                                </span>
                                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                
                                <div class="form-group">
                                    @csrf
                                    <label>
                                        <i class="icon-unlocked mr-2"></i>
                                        {{ __('auth.permission').' '.__('general.name')}}
                                    </label>
                                    <input type="text" name="perm_name" value="{{ $perm->name }}" class="form-control" placeholder="" required readonly>
                                    <input type="hidden" name="rowid" class="rowid" value="{{ $perm->id }}">
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button data-bs-dismiss="modal" type="button"  class="btn bg-dark btn-warning btn-sm">{{ __('general.close')}}</button>
                                <button disabled type="button" class="btn btn-sm btn-success" onclick="postEntry({{$perm->id}})">
                                 <i class="icon-plus-circle2 mr-2"></i>
                                 {{ __('general.update')}} {{ __('auth.permission')}}
                                </button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

