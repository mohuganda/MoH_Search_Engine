@extends('layouts.template')
@section('content')

@include('layouts.partials.common_banner')



<div class="card radius-10">
  <div class="card-body">

    <div class="row ml-2 mr-2" style="margin-bottom:100px; color:#000;">
    <h3>{{$item->title}}</h3>
    

    	@php

		print_r($item->toArray());

		@endphp

 
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="listing-wrap">
                    

                        <div class="text text-center">
                            <div class="d-flex justify-content-left search-text">
                                <a href="{{ asset('images/'.$item->image) }}"  >
                                    <img src="{{ asset('images/'.$item->image) }}" width="200px"  /></a>
                                <a>
                            
                            </div>
                            <div class="d-flex justify-content-left description" style="clear:both; text-align:left; margin-right:6px;">
                                
                            </div>
                          
                            <div class="info-wrap2 align-items-center description">


                                <p class="review text-truncate">
                                    <span class="rev"><small>
                                    <a href="{{ $item->url_link }}"  target="_blank">{{ $item->url_link }}</a></small>
                                </span>
                                </p>
                                

                                <p class="review"><span class="rev">Theme: <small>{{$item->thematic_area->description}}</small></span> |
                                <span class="rev">Type: <small>{{ $item->item_type->item_type_name }}</small></span> |
                               <span class="rev">Access: <small>{{ $item->access_method }}</small></span> | 

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
     
    </div>

  </div>
</div>

@endsection