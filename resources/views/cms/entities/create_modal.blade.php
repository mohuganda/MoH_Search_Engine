<div class="modal" id="add_tool">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        {{ __('general.add')}} {{ trans_choice('general.dev_entity',1)}}
      </div>
      <div class="modal-body">
        <form action="{{url('cms/entities')}}" method="post">
          @csrf
          @include('cms.entities.entity_form')
        </form>
    </div>
  </div>
</div>
</div>