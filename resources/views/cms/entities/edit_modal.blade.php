
<div class="modal" id="edit_entity{{$row->id}}0">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        {{ __('general.edit')}} {{ trans_choice('general.dev_entity',1) }}
      </div>
      <div class="modal-body">
        <form action="{{url('cms/entities')}}" method="post">
          @csrf
          @include('cms.entities.entity_form')
          <input type="hidden" name="id" value="{{$row->id}}">
        </form>
    </div>
  </div>
</div>
</div>