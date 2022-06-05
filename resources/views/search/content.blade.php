<div class="container">
    <div class="row">
  
        
        
        <div class="col-md-9 offset-2">
            <h5 class="mt-4">{{ $results->total() }} results in {{ number_format((microtime(true) - LARAVEL_START)*10,1) }} seconds</h5>

            <section class="ftco-section ftco-no-pt">

           
            <div class="row">

                @foreach($results as $result)
                <div class="col-md-12 col-lg-12 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="listing-wrap">

                        <div class="text text-center">
                            <div class="d-flex justify-content-left search-text">
                                <img src="{{ asset('public/images/'.$result->image) }}" width="80px" class="rounded mr-2" />
                                <a href="{{ $result->url_link }}" target="_blank">{!! highlight($result->title,$term) !!}</a>

                            </div>
                            <div class="d-flex justify-content-left description ">

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
                                <p class="review"><span class="rev">Access: <small>{{ $result->access_method }}</small></span>
                                </p>
                                <p class="review">
                                    <span class="rev"><small>
                                    <a href="#" data-toggle="modal">Request Access</a></small>
                                </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                @include('search.request_access')

                @endforeach
    

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


