<div class="modal" id="add_person">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        {{ __('general.add')}} {{ trans_choice('general.person',1)}}
      </div>
      <div class="modal-body">
        <form action="{{url('cms/persons')}}" method="post">
          @csrf
          @include('cms.persons.person_form')
        </form>
    </div>
  </div>
</div>
</div>