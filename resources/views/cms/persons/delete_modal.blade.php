<div class="modal" id="delete{{$row->id}}0">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"></div>
      <div class="modal-body">
        <h3>Do you want to delete <br> {{$row->name}} ?</h3>
    </div>
    <div class="modal-footer">

        <a href="{{url('cms/persons/delete',$row->id)}}" class="btn btn-danger">DELETE</a>
      <a href="" data-bs-dismiss="modal" class="btn btn-default">CANCEL</a>
    </div>
  </div>
</div>
</div>