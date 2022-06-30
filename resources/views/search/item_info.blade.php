@extends('layouts.template')
@section('content')

@include('layouts.partials.common_banner')



<div class="card radius-10">
  <div class="card-body">

    <div class="row ml-2 mr-2" style="margin-bottom:100px; color:#000;">
      <div class="col-md-6 col-lg-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
        <div class="listing-wrap">
          <div class="text text-center">
            <div class="d-flex justify-content-center">
              <a href="{{ asset('images/'.$item->image) }}">
                <img src="{{ asset('images/'.$item->image) }}" width="600px" /></a>
              <a>
            </div>
            <div class="d-flex justify-content-left description" style="clear:both; text-align:left; margin-right:6px;">
            </div>
            <div class="info-wrap2 align-items-center description" style="display:none;">
              <p class="review"><span class="rev">Theme: <small>{{@$item->thematic_area->description}}</small></span> |
                <span class="rev">Type: <small>{{ @$item->item_type->item_type_name }}</small></span> |
                <span class="rev">Access: <small>{{ @$item->access_method }}</small></span> |

                @if($item->access_method == 'Access Required')
                <span class="rev"><small>
                    <a href="{{ url('/access',$item->id) }}" target="_blank">{{ __('general.request_access')}}</a></small>
                </span> |
                @endif
                <span class="rev"><small>
                    <a href="{{ url('/iteminfo',$item->id) }}" target="_blank">{{ __('general.moreinfo')}}</a></small>
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
        <div class="listing-wrap">


          <div class="text text-center">

                            <table class="table table-striped" style="text-align:left;">
                                 <tr>
                                  
                                  <th>Name:</th>
                                  <td> <a
                                    onclick="logAccess({!! $item->id !!})" href="{{ $item->url_link }}" target="_blank">{{$item->title}}</a>
                                  </td>
                                </tr>
                           
                                <tr>
                                  
                                  <th>{{ __('general.contact') }} {{ trans_choice('general.person',2) }}:</th>
                                  <td> 
                                    <ul>
                                    @foreach(item_contacts($item->id,false) as $person)
                                      <li>
                                        <h5>{{ ucwords(@$person->contact->name) }}</h5>
                                        <p>{{ ucwords(@$person->contact->email) }}</p>
                                      </li>
                                    @endforeach
                                    </ul>

                                  </td>
                                </tr>
                                <tr>

                                  <th>Thematic Areas:</th>
                                  <td>
                                  @foreach($item->thematic_areas as $area)
                                    {{$area->thematic_area->description}}
                                  @endforeach
                                  </td>
                                </tr>
                                <tr>
                                  <th>Access:</th>
                                  <td>{{@$item->access_method}}</td>
                                  </tr>
                                  <tr>
                                    <th>Date Added:</th>
                                    <td>{{@$item->created_at}}</td>
                                  </tr>
                                  <tr>
                                    <th>Developer Entity:</th>
                                    <td>{{@$item->devEntity->entity_name}}</td>
                                  </tr>
                                  <tr>
                                    <th>Technology:</th>
                                    <td>{{@$item->db_engine}}</td>
                                  </tr>
                                  <tr>
                                    <th>Access Frequency:</th>
                                    <td>{{ @$item->accessLog->count }} times</td>
                                  </tr>
                                  @if($item->access_method == 'Restricted')
                                  <tr>
                                    <th>Request Access:</th>
                                    <td>
                                    <a href="{{ url('/access',$item->id) }}" target="_blank">{{ __('general.request_access')}}</a>
                                    </span>
                                 </td>
                                  </tr>
                                  @endif
                                </table>
    </div>

  </div>
</div>



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
      </script>

@endsection