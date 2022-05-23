<div class="container">
    <div class="row">
  
        
        
        <div class="col-md-9 offset-2">
            <p class="search-results-count">About 1000 results in {{(microtime(true) - LARAVEL_START) }}</p>

            <section class="ftco-section ftco-no-pt">

           
            <div class="row">

                @foreach($results as $result)
                <div class="col-md-12 col-lg-12 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="listing-wrap">

                        <div class="text text-center">
                            <div class="d-flex justify-content-left search-text">
                                <a href="{{url('search')}}">{{ $result->title }}</a>
                            </div>
                            <div class="d-flex justify-content-left description ">

                                <p>{{ $result->description }}</p>
                            </div>
                          
                            <div class="info-wrap2 align-items-center description">
                                <p class="review"><span class="rev">Theme: <small>{{$result->thematic_area->description}}</small></span> 
                                <p class="review"><span class="rev">Access: <small>{{ $result->access_method }}</small></span>
                                <p class="review"><span class="rev"><small><a href="mailto:agabaandre@gmail.com">Request Access</a></small></span>
                                

                            </div>
                        </div>
                    </div>
                </div>

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


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Access Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Responsible Officer: Mr. Mbaka Paul</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

