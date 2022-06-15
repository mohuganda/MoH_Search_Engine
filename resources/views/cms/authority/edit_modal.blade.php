
<div class="modal" id="edit_auth{{$row->id}}0">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        {{ __('general.edit')}} {{ __('general.authority')}}
      </div>
      <div class="modal-body">
        <form action="{{url('cms/authorities')}}" method="post">
          @csrf
          @include('cms.authority.auth_form')
          <input type="hidden" name="id" value="{{$row->id}}">
        </form>
    </div>
  </div>
</div>
</div>