<div class="modal" id="delete{{$row->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"></div>
      <div class="modal-body">
        <h3>Do you want to delete <br> {{$row->description}} ?</h3>
    </div>
    <div class="modal-footer">

        <a href="{{url('cms/thematicareas/delete',$row->id)}}" class="btn btn-danger">DELETE</a>
      <a href="" data-bs-dismiss="modal" class="btn btn-outline-secondary">CANCEL</a>
    </div>
  </div>
</div>
</div>