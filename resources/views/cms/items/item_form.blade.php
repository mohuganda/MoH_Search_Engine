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
        <option value="">Choose</option>
        @foreach($organizations as $row)
        <option {{ (@$item->hosting_organiation==$row->id)?'selected':'' }} value="{{$row->id}}">{{$row->organization_name}}</option>
        @endforeach

      </select>
    </div>
    <div class="form-group">
      <label>{{__('cms.item_type')}}</label>
      <select name="item_type" class="form-control" required>
        <option value="">Choose</option>
        @foreach($types as $row)
        <option {{ (@$item->item_type_id==$row->id)?'selected':'' }} value="{{$row->id}}">{{$row->item_type_name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label>{{ trans_choice('cms.thematic_area',1)}}</label>
      <select name="thematic_areas[]" class="form-control filter-multi-select" required multiple>

        @foreach($areas as $row)
        <option {{ $item->thematic_areas && (@$item->thematic_areas->contains('thematic_area_id',$row->id))?'selected':'' }} value="{{$row->id}}">{{$row->description}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label>{{__('cms.approval')}} {{__('cms.authority')}}</label>
      <select name="approval_authority" class="form-control" required>
        <option value="">Choose</option>
        @foreach($authorities as $auth)
        <option {{ (@$auth->id==@$item->approval_authority_id)?'selected':'' }} value="{{$auth->id}}">{{$auth->authority_name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label>{{__('cms.ui')}} {{ trans_choice('cms.tool',1)}} </label>
      <select name="uitool" class="form-control" required>
        <option value="">Choose</option>
        @foreach($uitools as $tool)
        <option {{ (@$tool->id==@$item->ui_tool_id)?'selected':'' }} value="{{$tool->id}}">{{$tool->tool_name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label>{{__('cms.published')}}</label>
      <select name="published" class="form-control" required>
        <option value="">Choose</option>
        <option {{ (@$item->published==1)?'selected':'' }} value="1">Published</option>
        <option {{ (@$item->published==0)?'selected':'' }} value="0">Not Published</option>

      </select>
    </div>



  </div>
  <div class="col-lg-6">

    <div class="form-group">
      <label>{{__('cms.access_method')}}</label>
      <select name="access_method" class="form-control" required>
        <option value="">Choose</option>
        <option {{ (@$item->access_method=='Restricted')?'selected':'' }} value="Restricted">Restricted</option>
        <option {{ (@$item->access_method=='Open')?'selected':'' }} value="Open">Open</option>
      </select>
    </div>

    <div class="form-group">
      <label>{{__('cms.link')}}</label>
      <input type="text" name="url" value="{{@$item->url_link}}" class="form-control" placeholder="{{__('cms.link')}}" required>
    </div>
    <div class="form-group">
      <label>{{__('cms.db_engine')}}</label>
      <input type="text" name="db_engine" value="{{@$item->db_engine}}" class="form-control" placeholder="{{__('cms.db_engine')}}">
    </div>
    <div class="form-group">
      <label>{{__('cms.image')}}</label>
      <input type="file" name="image" class="form-control" placeholder="{{__('cms.image')}}">
      @if(@$item->image)
      <img src="{{asset('images/'.$item->image)}}" width="200px" />
      @endif
    </div>


    <div class="form-group">
      <label>{{__('general.contact')}} {{ trans_choice('general.person',1)}}</label>
      <select name="contact" class="form-control filter-multi-select" multiple>

        @foreach($contacts as $contact)
        <option value="{{$contact->id}}" {{(in_array($contact->id,item_contacts(@$item->id)))?'selected':''}}>{{$contact->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label>{{__('cms.dev')}} {{ trans_choice('cms.entity',1)}} </label>
      <select name="dev_entity" class="form-control" required>
        <option value="">Choose</option>
        @foreach($entities as $entity)
        <option {{ (@$entity->id==@$item->dev_entity_id)?'selected':'' }} value="{{$entity->id}}">{{$entity->entity_name}}</option>
        @endforeach
      </select>
    </div>


  </div>
  <div class="col-lg-12">
    <div class="form-group">
      <label>{{__('cms.description')}}</label>
      <textarea rows="4" name="description" class="form-control" placeholder="{{__('cms.description')}}">{{@$item->description}}</textarea>
    </div>
  </div>
  <div class="col-lg-6"></div>
  <div class="col-lg-6">
    <div class="form-group btn-wrapper">
      <br>
      <input type="submit" class="btn btn-outline-secondary pull-right col-md-12" value="Submit">
    </div>
  </div>
</div>