<div class="row">
  @csrf
  <div class="col-lg-6">
      <div class="form-group">
        <label>{{__('cms.title')}}</label>
        <input type="text" value="{{@$item->title}}" name="title" class="form-control" placeholder="{{__('cms.title')}}" required>
      </div>
      <div class="form-group">
        <label>{{ __('cms.hosting') }} {{__('cms.organization')}}</label>
        <select name="organization" class="form-control" required>
          <option  value="">Choose</option>
          @foreach($organizations as $row)
            <option {{ (@$item->hosting_organiation==$row->id)?'selected':'' }} value="{{$row->id}}">{{$row->organization_name}}</option>
          @endforeach

        </select>
      </div>
       <div class="form-group">
        <label>{{__('cms.item_type')}}</label>
        <select name="item_type" class="form-control" required>
          <option  value="">Choose</option>
           @foreach($types as $row)
            <option {{ (@$item->item_type_id==$row->id)?'selected':'' }} value="{{$row->id}}">{{$row->item_type_name}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>{{ trans_choice('cms.thematic_area',1)}}</label>
        <select name="thematic_area" class="form-control" required>
          <option  value="">Choose</option>
          @foreach($areas as $row)
            <option {{ (@$item->thematic_area_id==$row->id)?'selected':'' }}  value="{{$row->id}}">{{$row->description}}</option>
          @endforeach
        </select>
      </div>

      
    </div>
    <div class="col-lg-6">

      <div class="form-group">
        <label>{{__('cms.access_method')}}</label>
        <select name="access_method" class="form-control" required>
          <option value="">Choose</option>
          <option {{ (@$item->access_method=='Access Required')?'selected':'' }} value="Private">Access Required</option>
          <option {{ (@$item->access_method=='No Access Required')?'selected':'' }}  value="Public">No Access Required</option>
        </select>
      </div>
      
      <div class="form-group">
        <label>{{__('cms.link')}}</label>
        <input type="text" name="url" value="{{@$item->url_link}}"  class="form-control"  placeholder="{{__('cms.link')}}" required>
      </div>
      <div class="form-group">
        <label>{{__('cms.db_engine')}}</label>
        <input type="text" name="db_engine" value="{{@$item->db_engine}}"  class="form-control"  placeholder="{{__('cms.db_engine')}}">
      </div>
      <div class="form-group">
        <label>{{__('cms.image')}}</label>
        <input type="file" name="image" class="form-control"  placeholder="{{__('cms.image')}}">
        @if(@$item->image)
            <img src="{{asset('images/'.$item->image)}}" width="200px" />
        @endif
      </div>

       <div class="form-group">
        <label>{{__('general.contact')}} {{ trans_choice('general.person',1)}}</label>
        <select name="contact" class="form-control">

          <option>Select</option>
          @foreach($contacts as $contact)
          <option  value="{{$contact->id}}" {{(@$row->id ==$contact->id)?'selected':''}}>{{$contact->name}}</option>
          @endforeach
        </select> 
      </div>

  </div>
  <div class="col-lg-12">
    <div class="form-group">
        <label>{{__('cms.description')}}</label>
        <textarea rows="4" name="description" class="form-control" placeholder="{{__('cms.description')}}" >{{@$item->description}}</textarea> 
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