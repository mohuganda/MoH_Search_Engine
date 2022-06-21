@extends('layouts.admin')
@section('content')

  <div class="card radius-10">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <div>
          <h5 class="mb-0"> {{ __('cms.change_bannerimage') }}</h5>
        </div>
      </div>


 <form action="{{url('cms/settings')}}" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>{{__('cms.image')}}</label>
        <input type="file" name="image" class="form-control"  placeholder="{{__('cms.image')}}">
      </br>
      @csrf
        <img src="{{asset('images/kla.jpg')}}" width="200px" />
        </br>
       <input type="submit" value="{{ __('general.save') }} {{ __('general.image') }}" class="btn btn-success m-2">
      </div>
</form>

</div>
</div>

@endsection