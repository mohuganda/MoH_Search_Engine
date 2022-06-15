
<div class="modal" id="edit_tool{{$row->id}}0">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        {{ __('general.edit')}} {{ __('general.tool')}}
      </div>
      <div class="modal-body">
        <form action="{{url('cms/tools')}}" method="post">
          @csrf
          @include('cms.tools.tool_form')
          <input type="hidden" name="id" value="{{$row->id}}">
        </form>
    </div>
  </div>
</div>
</div>