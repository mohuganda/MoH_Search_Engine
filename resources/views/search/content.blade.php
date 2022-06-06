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
                                <a href="{{ asset('images/'.$result->image) }}" target="_blank"><img src="{{ asset('images/'.$result->image) }}" width="200px"  /></a>
                                <a href="{{ $result->url_link }}" target="_blank">{!! highlight($result->title,$term) !!}</a>

                            </div>
                            <div class="d-flex justify-content-left description" style="clear:both; text-align:left; margin-right:6px;">

                                <p>{!! highlight($result->description,$term) !!}</p>
                                
                            </div>
                          
                            <div class="info-wrap2 align-items-center description">


                                <p class="review">
                                    <span class="rev"><small>
                                    <a href="{{ $result->url_link }}"  target="_blank">{{ $result->url_link }}</a></small>
                                </span>
                                </p>
                                

                                <p class="review"><span class="rev">Theme: <small>{{$result->thematic_area->description}}</small></span> 
                                </p>
                                <p class="review"><span class="rev">Type: <small>{{ $result->item_type->item_type_name }}</small></span>
                                </p>
                                <p class="review"><span class="rev">Access: <small>{{ $result->access_method }}</small></span>
                                </p>
                                <p class="review">
                                    <span class="rev"><small>
                                    <a href="{{ url('/access') }}" target="_blank">Request Access</a></small>
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
         <!--    <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
        </section>

        @include('layouts.partials.thematic_areas')
    
    </div>
</div>



