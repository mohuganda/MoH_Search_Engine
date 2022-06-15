<div class="modal" id="add_auth">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        {{ __('general.add')}} {{ __('general.authority')}}
      </div>
      <div class="modal-body">
        <form action="{{url('cms/authorities')}}" method="post">
          @csrf
          @include('cms.authority.auth_form')
        </form>
    </div>
  </div>
</div>
</div>