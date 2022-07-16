@extends('layouts.template')
@section('content')

@include('layouts.partials.common_banner')


<form method="post" action="{{url('submissions')}}">
  <div class="card radius-10">
    <div class="card-body">
      <div class="col-lg-12" style="text-align:center;">
        <h3>Submit your Dashboard for Publishing</h3>
      </div>
      <div class="row ml-2 mr-2" style="margin-bottom:100px; color:#000;">
        <div class="row">

          <!-- Success alert -->
          @if ($alert = Session::get('alert'))
          <div class="alert alert-info alert-block" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $alert }}</strong>
          </div>
          @endif
          <!-- /Success alert -->



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
                <option value="{{$row->id}}">{{$row->description}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label>{{__('cms.approval')}} {{__('cms.authority')}}</label>
              <select name="approval_authority" class="form-control">
                <option value="">Choose</option>
                @foreach($authorities as $auth)
                <option {{ (@$auth->id==@$item->approval_authority_id)?'selected':'' }} value="{{$auth->id}}">{{$auth->authority_name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label>{{__('cms.ui')}} {{ trans_choice('cms.tool',1)}} </label>
              <select name="uitool" class="form-control">
                <option value="">Choose</option>
                @foreach($uitools as $tool)
                <option {{ (@$tool->id==@$item->ui_tool_id)?'selected':'' }} value="{{$tool->id}}">{{$tool->tool_name}}</option>
                @endforeach
              </select>
            </div>


            <div class="form-group">
              <label>{{__('cms.description')}}</label>
              <textarea rows="4" name="description" class="form-control" placeholder="{{__('cms.description')}}">{{@$item->description}}</textarea>
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
              <label>{{__('cms.dev')}} {{ trans_choice('cms.entity',1)}} </label>
              <select name="dev_entity" class="form-control">
                <option value="">Choose</option>
                @foreach($entities as $entity)
                <option {{ (@$entity->id==@$item->dev_entity_id)?'selected':'' }} value="{{$entity->id}}">{{$entity->entity_name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label style="font-weight:bold;">{{__('general.contact')}} {{ trans_choice('general.person',1)}}</label>
              <div class="form-group">

                <div id="contact" style="max-height: 600px; overflow:auto;">

                  <input type="button" value="Add More Contact Persons" class="btn btn-primary  mb-2" onclick="addContact()">

                  <select class="form-control mb-2" name="person_title">
                    <option>Mr.</option>
                    <option>Mrs.</option>
                    <option>Dr.</option>
                    <option>Pr.</option>
                    <option>Ms.</option>
                    <option>Hon.</option>
                  </select>
                  <input type="text" name="name[]" class="form-control mb-2" placeholder="Name" class="form-group" required />
                  <input type="text" class="form-control mb-2" placeholder="Phone Number" name="phone[]" class="form-group mb-2" required />
                  <input type="text" class="form-control" name="email[]" placeholder="Email" class="form-group mb-2" required />
                </div>

              </div>

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

  function addContact() {

    let contact_row = '<div class="form-group person"><p>Contact Person</p>';
    contact_row += '<select class="form-control mb-2" name="person_title">';
    contact_row += '<option>Mr.</option>';
    contact_row += '<option>Mrs.</option>';
    contact_row += '<option>Dr.</option>';
    contact_row += '<option>Pr.</option>';
    contact_row += '<option>Ms.</option>';
    contact_row += '<option>Hon.</option></select>';
    contact_row += '<input type="text" name="name[]" class="form-control mb-2" placeholder="Name" class="form-group" required>';
    contact_row += '<input type="text" class="form-control mb-2" placeholder="Phone Number" name="phone[]" class="form-group mb-2" required/>';
    contact_row += '<input type="text"  class="form-control" name="email[]" placeholder="Email" class="form-group mb-2" required/>';
    contact_row += '<input type="button" value="Remove Contact Person" class="btn btn-primary   btn-sm  mb-2"  onclick="removeContact($(this))" ></div>'

    $("#contact").append(contact_row);
  }

  function removeContact(elem) {
    //$("#contact").find("div:last").remove();
    elem.closest('.person').remove();
  }

  $('.removeBtn').on('click', function() {

    console.log($(this).closest('.person'));

    $(this).closest('.person').remove();

  });
</script>


@endsection