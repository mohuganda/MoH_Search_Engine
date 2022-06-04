@extends('layouts.admin')
@section('content')

  <div class="card radius-10">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <div>
          <h5 class="mb-0"> {{ __('cms.add_item') }}</h5>
        </div>
        <div class="font-22 ms-auto">
          <a href="{{url('cms/items')}}" data-toggle="modal" class="btn btn-success"> {{ __('cms.view_items') }}</a>
        </div>
      </div>


 <form action="{{url('cms/items')}}" method="post" enctype="multipart/form-data">
  <div class="row">
  @csrf
  <div class="col-lg-6">
      <div class="form-group">
        <label>{{__('cms.title')}}</label>
        <input type="text" name="title" class="form-control" placeholder="{{__('cms.title')}}" required>
      </div>
      <div class="form-group">
        <label>{{__('cms.organization')}}</label>
        <select name="organization" class="form-control" required>
          <option  value="">Choose</option>
          @foreach($organizations as $row)
            <option value="{{$row->id}}">{{$row->organization_name}}</option>
          @endforeach

        </select>
      </div>
       <div class="form-group">
        <label>{{__('cms.item_type')}}</label>
        <select name="item_type" class="form-control" required>
          <option  value="">Choose</option>
           @foreach($types as $row)
            <option value="{{$row->id}}">{{$row->item_type_name}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>{{ trans_choice('cms.thematic_area',1)}}</label>
        <select name="thematic_area" class="form-control" required>
          <option  value="">Choose</option>
          @foreach($areas as $row)
            <option value="{{$row->id}}">{{$row->description}}</option>
          @endforeach
        </select>
      </div>

      
    </div>
    <div class="col-lg-6">

      <div class="form-group">
        <label>{{__('cms.access_method')}}</label>
        <select name="access_method" class="form-control" required>
          <option value="">Choose</option>
          <option value="Private">Private</option>
          <option value="Public">Public</option>
        </select>
      </div>
      
      <div class="form-group">
        <label>{{__('cms.link')}}</label>
        <input type="text" name="url" class="form-control"  placeholder="{{__('cms.link')}}" required>
      </div>
      <div class="form-group">
        <label>{{__('cms.db_engine')}}</label>
        <input type="text" name="db_engine" class="form-control"  placeholder="{{__('cms.db_engine')}}">
      </div>
      <div class="form-group">
        <label>{{__('cms.image')}}</label>
        <input type="file" name="image" class="form-control"  placeholder="{{__('cms.image')}}">
      </div>
  </div>
  <div class="col-lg-12">
    <div class="form-group">
        <label>{{__('cms.description')}}</label>
        <textarea rows="4" name="description" class="form-control" placeholder="{{__('cms.description')}}" ></textarea> 
      </div>
  </div>
  <div class="col-lg-6"></div>
  <div class="col-lg-6">
  <div class="form-group btn-wrapper">
        <br>
         <input type="submit" class="btn btn-success pull-right col-md-12" value="Submit">
      </div>
  </div>
</div>
</form>

</div>
</div>

@endsection