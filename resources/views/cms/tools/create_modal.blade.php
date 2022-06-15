<div class="modal" id="add_tool">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        {{ __('general.add')}} {{ __('general.tool')}}
      </div>
      <div class="modal-body">
        <form action="{{url('cms/tools')}}" method="post">
          @csrf
          @include('cms.tools.tool_form')
        </form>
    </div>
  </div>
</div>
</div>