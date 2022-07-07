
<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-12 services-wrap">
                <div class="row g-3">

                    @foreach( $areas as $area)
                    <div class="col-md-4 col-lg-2 text-center d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <a href="{{ url('search?area='.$area->id) }}"  class="services">
                            <div class="icon"><span class="fa-solid {{$area->icon }}"></span></div>
                            <div class="text">
                                <h2>{{$area->description }}</h2>
                                <p><span>{{ count_area_records($area->id) }}</span> {{ ucwords(get_item_type()) }}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
