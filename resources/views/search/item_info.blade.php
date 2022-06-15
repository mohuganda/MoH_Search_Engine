@extends('layouts.template')
@section('content')

@include('layouts.partials.common_banner')



<div class="card radius-10">
  <div class="card-body">

    <div class="row ml-2 mr-2" style="margin-bottom:100px; color:#000;">
    

                 <h3 class="review text-truncate">
                                    <span class="rev"><small>
                                    <a href="{{ $item->url_link }}"  target="_blank">{{ $item->title }}</a></small>
                                </span>
              </h3>
 
                <div class="col-md-5 col-lg-5 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="listing-wrap">
                    

                        <div class="text text-center">
                            <div class="d-flex justify-content-left search-text">
                                <a href="{{ asset('images/'.$item->image) }}"  >
                                    <img src="{{ asset('images/'.$item->image) }}" width="500px"  /></a>
                                <a>
                            
                            </div>
                            <div class="d-flex justify-content-left description" style="clear:both; text-align:left; margin-right:6px;">
                                
                            </div>
                          
                            <div class="info-wrap2 align-items-center description">

                             
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-lg-5 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
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
                                  
                                  <th>Contact Person:</th>
                                  <td>Agaba Andrew</td>
                                </tr>
                                <tr>
                                   <th>Email:</th>
                                  <td>agabaandre@gmail.com</td>
                                  </tr>
                                <tr>

                                  <th>Thematic Area:</th>
                                  <td>{{$item->thematic_area->description}}</td>
                                </tr>
                                <tr>
                                  <th>Access:</th>
                                  <td>{{$item->access_method}}</td>
                                  </tr>
                                  <tr>
                                    <th>Date Added:</th>
                                    <td>{{$item->created_at}}</td>
                                  </tr>
                                  <tr>
                                    <th>Developer Entity:</th>
                                    <td>{{$item->dev_entity_id}}</td>
                                  </tr>
                                  <tr>
                                    <th>Technology:</th>
                                    <td>{{$item->db_engine}}</td>
                                  </tr>
                                  <tr>
                                    <th>Access Frequency:</th>
                                    <td>20</td>
                                  </tr>
                                  <tr>
                                    <th>Request Access:</th>
                                    <td>
                                    <a href="{{ url('/access',$item->id) }}" target="_blank">{{ __('general.request_access')}}</a>
                                    </span>
                                 </td>
                                  </tr>

                            </table>
                        </div>
                    </div>
                </div> <script>
         function logAccess(system_id) {
           // event.preventDefault();
            $.ajax({
               type:'GET',
               url:`<?php echo url('/log_access');?>/${system_id}`,
               success:function(data) {
                  console.log(data);
               }
            });
         }
</script>
     
    </div>

  </div>
</div>

@endsection