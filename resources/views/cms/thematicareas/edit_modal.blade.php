<div class="modal" id="edit{{$row->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form action="{{url('cms/thematicareas')}}" method="post">
          @include('cms.thematicareas.thematic_area_form')
          <input type="hidden" name="id" value="{{$row->id}}">
        </form>
    </div>
  </div>
</div>
</div>