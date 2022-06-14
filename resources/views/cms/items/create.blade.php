@extends('layouts.admin')
@section('content')

  <div class="card radius-10">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <div>
          <h5 class="mb-0"> {{ __('cms.add_item') }}</h5>
        </div>
        <div class="font-22 ms-auto">
          <a href="{{url('cms/items')}}" data-toggle="modal" class="btn btn-outline-secondary"> {{ __('cms.view_items') }}</a>
        </div>
      </div>


 <form action="{{url('cms/items')}}" method="post" enctype="multipart/form-data">
   @include('cms.items.item_form')
</form>

</div>
</div>

@endsection