@extends('layouts.admin')
@section('content')

  <div class="card radius-10">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <div>
          <h5 class="mb-0"> {{ __('cms.add') }} {{ __('cms.item_type') }}</h5>
        </div>
        <div class="font-22 ms-auto">
          <a href="{{url('cms/types')}}" data-toggle="modal" class="btn btn-success"> {{ __('cms.view_types') }}</a>
        </div>
      </div>
<form action="{{url('cms/types')}}" method="post">
  @csrf
  <div class="col-lg-6">
      <div class="form-group">
        <label>{{__('cms.type_name')}}</label>
        <input type="text" name="type_name" class="form-control" placeholder="{{__('cms.type_name')}}" >
      </div>

      <div class="form-group">
        <label>{{__('cms.description')}}</label>
        <textarea name="description" class="form-control" placeholder="{{__('cms.description')}}" ></textarea> 
      </div>

      <div class="form-group btn-wrapper">
        <br>
         <input type="submit" class="btn btn-success pull-right col-md-12" value="Submit">
      </div>
  </div>
</form>
</div>

</div>
</div>

@endsection