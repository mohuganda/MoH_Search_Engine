@extends('layouts.admin')
@section('content')

  <div class="card radius-10">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <div>
          <h5 class="mb-0"> {{ __('cms.add_organization') }}</h5>
        </div>
        <div class="font-22 ms-auto">
          <a href="{{url('cms/organizations')}}" data-toggle="modal" class="btn btn-outline-secondary"> {{ __('cms.view_organizations') }}</a>
        </div>
      </div>
  <div class="row">
<form action="{{url('cms/organizations')}}" method="post">
  @csrf
  <div class="col-lg-6">
      <div class="form-group">
        <label>{{__('cms.organization_name')}}</label>
        <input type="text" name="organization_name" class="form-control" placeholder="{{__('cms.organization_name')}}" >
      </div>

      <div class="form-group">
        <label>{{__('cms.description')}}</label>
        <textarea name="description" class="form-control" placeholder="{{__('cms.description')}}" ></textarea> 
      </div>

      <div class="form-group btn-wrapper">
        <br>
         <input type="submit" class="btn btn-outline-secondary pull-right col-md-12" value="Submit">
      </div>
  </div>
</form>
</div>

</div>
</div>

@endsection