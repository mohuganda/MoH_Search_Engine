@extends('layouts.template')
@section('content')

@include('layouts.partials.common_banner')


<form method="post" action="{{url('submssions')}}">
<div class="card radius-10">
  <div class="card-body">
    <div class="col-lg-12" style="text-align:center;">
     <h3>Submit your Dashboard for Publishing</h3>
  </div>
    <div class="row ml-2 mr-2" style="margin-bottom:100px; color:#000;">
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

        <div class="form-group">
        <label>{{__('cms.approval')}} {{__('cms.authority')}}</label>
        <select name="approval_authority" class="form-control" required>
          <option  value="">Choose</option>
           @foreach($authorities as $auth)
            <option {{ (@$auth->id==@$item->approval_authority_id)?'selected':'' }}  value="{{$auth->id}}">{{$auth->authority_name}}</option>
          @endforeach
        </select>
      </div>

        <div class="form-group">
        <label>{{__('cms.ui')}} {{ trans_choice('cms.tool',1)}} </label>
        <select name="uitool" class="form-control" required>
          <option  value="">Choose</option>
           @foreach($uitools as $tool)
            <option {{ (@$tool->id==@$item->ui_tool_id)?'selected':'' }} value="{{$tool->id}}">{{$tool->tool_name}}</option>
          @endforeach
        </select>
      </div>
      
    </div>
    <div class="col-lg-6">

      <div class="form-group">
        <label>{{__('cms.access_method')}}</label>
        <select name="access_method" class="form-control" required>
          <option value="">Choose</option>
          <option {{ (@$item->access_method=='Access Required')?'selected':'' }} value="Access Required">Access Required</option>
          <option {{ (@$item->access_method=='No Access Required')?'selected':'' }}  value="No Access Required">No Access Required</option>
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
        <label>{{__('general.contact')}} {{ trans_choice('general.person',1)}}</label>
        <div class="form-group"><input type="text" name="name[]" class="form-control mb-2" placeholder="Name" class="form-group" required/><input type="text" class="form-control mb-2" placeholder="Phone Number" name="phone[]" class="form-group mb-2" required/><input type="text"  class="form-control" name="email[]" placeholder="Email" class="form-group mb-2" required/></div>
        <div id="contact">
          
          <input type="button" value="Add More Contact Persons" class="btn btn-primary" onclick="addContact()">

        </div>

         
      </div>

      <div class="form-group">
        <label>{{__('cms.dev')}} {{ trans_choice('cms.entity',1)}} </label>
        <select name="dev_entity" class="form-control" required>
          <option  value="">Choose</option>
           @foreach($entities as $entity)
            <option {{ (@$entity->id==@$item->dev_entity_id)?'selected':'' }}  value="{{$entity->id}}">{{$entity->entity_name}}</option>
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
         <input type="submit" class="btn btn-primary d-block w-100 d-flex align-items-center justify-content-center p-2" value="Submit">
      </div>
  </div>
</div>





  </div>
</div>
</form>



      <script>
        function logAccess(system_id) {
          // event.preventDefault();
          $.ajax({
            type: 'GET',
            url: `<?php echo url('/log_access'); ?>/${system_id}`,
            success: function(data) {
              console.log(data);
            }
          });
        }

        function addContact(){
         const  contact_row = '<p>Contact Person</p><div class="form-group"><input type="text" name="name[]" class="form-control mb-2" placeholder="Name" class="form-group" required><input type="text" class="form-control mb-2" placeholder="Phone Number" name="phone[]" class="form-group mb-2" required/><input type="text"  class="form-control" name="email[]" placeholder="Email" class="form-group mb-2" required/></div>';
         $("#contact").append(contact_row);
        }


        
      </script>
    

@endsection