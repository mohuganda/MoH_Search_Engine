
<div class="modal" id="edit_person{{$row->id}}0">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        {{ __('general.edit')}} {{ trans_choice('general.person',1)}}
      </div>
      <div class="modal-body">
        <form action="{{url('cms/persons')}}" method="post">
          @csrf
          @include('cms.persons.person_form')
          <input type="hidden" name="id" value="{{$row->id}}">
        </form>
    </div>
  </div>
</div>
</div>