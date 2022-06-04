@extends('layouts.admin')
@section('content')

  <div class="card radius-10">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <div>
          <h5 class="mb-0"> {{ __('cms.add') }} {{ trans_choice('cms.thematic_area',1) }}</h5>
        </div>
        <div class="font-22 ms-auto">
          <a href="{{url('cms/thematicareas')}}" data-toggle="modal" class="btn btn-success">{{ __('cms.view') }} {{ trans_choice('cms.thematic_area',2) }}</a>
        </div>
      </div>
<form action="{{url('cms/thematicareas')}}" method="post">
  @csrf
  <div class="col-lg-6">
      <div class="form-group">
        <label>{{ trans_choice('cms.thematic_area',1) }}</label>
        <input type="text" name="description" class="form-control" placeholder="{{__('cms.description')}}" >
      </div>

      <div class="form-group">
        <label>{{ __('cms.icon') }}</label>
        <textarea name="icon" class="form-control" placeholder="{{__('cms.icon')}}" ></textarea> 
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