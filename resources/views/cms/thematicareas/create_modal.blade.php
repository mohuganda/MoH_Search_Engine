<div class="modal" id="add_area">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <form action="{{url('cms/thematicareas')}}" method="post">
          @include('cms.thematicareas.thematic_area_form')
        </form>
    </div>
  </div>
</div>
</div>