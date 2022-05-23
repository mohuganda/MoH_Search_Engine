
        <div class="col-md-3 col-lg-12 align-items-stretch aos-init aos-animate">
            <div class="ftco-footer-widget mb-4">
                <h5 class="ftco-heading-2 bold mt-5">Thematic Areas</h5>
                
                <ul class="list-unstyled navigation-search">
                    @foreach($areas as $area)
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>{{ $area->description }}</a><span> </span></li>
                    @endforeach
                   
                </ul>
            </div>
            <div class="ftco-footer-widget mb-4">
                <h5 class="ftco-heading-2">Top Searches</h5>
                <ul class="list-unstyled navigation-search">

                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Community Health</a><span> (200 searches)</span></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Covid 19</a><span> (190 searches)</span></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Family Connect</a><span> (100 searches)</span></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Product Registry</a><span> (90 searches)</span></li>
                    <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>E-Library</a><span> (80 searches)</span></li>
                </ul>
            </div>
        </div>