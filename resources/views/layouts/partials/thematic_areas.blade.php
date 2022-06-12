
        <div class="col-md-3 col-lg-12 align-items-stretch aos-init aos-animate">
            <div class="ftco-footer-widget mb-4">
                <h5 class="ftco-heading-2 bold mt-5">Thematic Areas</h5>
                
                <ul class="list-unstyled navigation-search">
                    @foreach($areas as $area)
                    <li><a href="{{ url('search?area='.$area->id) }}"><span class="fa fa-chevron-right mr-2"></span>{{ $area->description }}</a><span> </span></li>
                    @endforeach
                   
                </ul>
            </div>
            <div class="ftco-footer-widget mb-4">
                <h5 class="ftco-heading-2">Top Searches</h5>
                <ul class="list-unstyled navigation-search top-searches">
                    @foreach($logs as $log)
                    <li><a href="{{ $log->item->url_link }}" target="_blank"><span class="fa fa-chevron-right mr-2"></span>{{ ucwords($log->item->title) }}</a><span> ({{ $log->count }})</span></li>
                    @endforeach
                </ul>
            </div>
        </div>