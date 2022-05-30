@extends('layouts.template')
@section('content')


<section class="hero-wrap" style="background-image: url({{ asset('images/kla.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div style=" float:left; margin-left:2px;">
                            <a class="navbar-brand align-items-center" href="{{url('')}}">
                                <img src="{{asset('theme/images/moh.png')}}" style="width:10%; height:10%;">
                            </a>
                        </div>
                        <div>
                            <h3>
                                {{__('home.Search_Dashboards')}}
                            </h3>
                            <p> Search for dashboards in the Health Sector</p>
                        </div>
                    </div>
                </div>

                @php $token = md5(now()); @endphp

                <form action="{{url('search')}}" class="search-property-1 mt-md-5" method="get" id="search_form">
                    @csrf
                    <div class="row g-0">

                        <div class="col-md-9 d-flex">
                            <div class="form-group p-3">
                                <div class="form-field">
                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                    <input type="text" name="term" class="form-control text-bold" placeholder="Search Resources" value="{{ $term }}" required id="search">
                                </div>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="form-group p-3">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="area" class="form-control">
                                                <option value="0">All</option>
                                            @foreach($areas as $area)
                                             <option value="{{$area->id}}">{{$area->description }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="form-group d-flex w-100 border-0">
                                <div class="form-field w-100 align-items-center d-flex align-items-stretch">
                                    <button class="btn btn-primary d-block w-100 d-flex align-items-center justify-content-center p-2"><span><i class="ion-ios-search" style="border-radius:0px !important;"></i> Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('search.content')

@endsection