<div class="container">
    <div class="row">
  
        
        
        <div class="col-md-9 offset-2">
            <p class="mt-4" style="color:#000; font-weight:bold;">{{ $results->total() }} results in {{ number_format((microtime(true) - LARAVEL_START)*10,1) }} seconds</p>

            <section class="ftco-section ftco-no-pt">

           
            <div class="row">

                @foreach($results as $result)
                <div class="col-md-12 col-lg-12 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="listing-wrap">

                        <div class="text text-center">
                            <div class="d-flex justify-content-left search-text">
                                <a href="{{ asset('images/'.$result->image) }}"  >
                                    <img src="{{ asset('images/'.$result->image) }}" width="200px"  /></a>
                                <a
                                    onclick="logAccess({!! $result->id !!})" href="{{ $result->url_link }}" target="_blank">{!! highlight($result->title,$term) !!}</a>

                            </div>
                            <div class="d-flex justify-content-left description" style="clear:both; text-align:left; margin-right:6px;">

                                <p>{!! highlight($result->description,$term) !!}</p>
                                
                            </div>
                          
                            <div class="info-wrap2 align-items-center description">


                                <p class="review text-truncate">
                                    <span class="rev"><small>
                                    <a href="{{ $result->url_link }}"  target="_blank">Navigate the {{ $result->title }}</a></small>
                                </span>
                                </p>
                                

                                <p class="review"><span class="rev">Theme: <small>{{$result->thematic_area->description}}</small></span> |
                                <span class="rev">Type: <small>{{ $result->item_type->item_type_name }}</small></span> |
                               <span class="rev">Access: <small>{{ $result->access_method }}</small></span> | 

                                @if($result->access_method == 'Access Required')
                                <span class="rev"><small>
                                    <a href="{{ url('/access',$result->id) }}" target="_blank">{{ __('general.request_access')}}</a></small>
                                </span> | 
                                @endif
                                <span class="rev"><small>
                                    <a href="{{ url('/iteminfo',$result->id) }}" target="_blank">{{ __('general.moreinfo')}}</a></small>
                                </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
    

            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
            {{ $results->appends($_GET)->links() }}
            </div>
                </div>
            </div>

        </div>
        </section>

        @include('layouts.partials.thematic_areas')
    
    </div>
</div>


 <script>
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


