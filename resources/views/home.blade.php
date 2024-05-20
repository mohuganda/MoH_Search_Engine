@extends('layouts.template')
@section('content')
<section class="hero-wrap mb-40" style="background-image: url({{ asset('images/kla.jpg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;  border-bottom: 10px solid #ffc107;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 text-center align-items-left d-flex" style="float:left !important;">
                <a class="navbar-brand" style="color:#FFF; font-size:14px;" href="{{url('?type=1')}}">Systems</a>
                <!-- <a class="navbar-brand" style="color:#FFF; font-size:14px;" href="{{url('/submissions')}}">Submission</a> -->
            </div>
        </div>

        <div class="row no-gutters slider-text">
            <div class="col-lg-2 text-center align-items-left" style="float:left !important;">
                <a class="navbar-brand" href="{{url('')}}">
                    <img src="{{asset('theme/images/moh.png')}}" width="100px">
                    <p style="color:#FFF; text-align:center; font-weight:200; font-size:small;">Ministry of Health</p>
                </a>
            </div>
            <div class="col-lg-8 text-center pb-20 m-l">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h3 class="bold white" style="color:#FFF; font-weight:bold; font-size:1.5rem !important; ">
                         {{ __('home.search_for')}} {{ strtolower(get_item_type()) }} {{ __('home.with_in_sector')}}</h3>
                        <p>{{__('home.one_stop_center')}} {{ strtolower(get_item_type()) }} {{__('home.with_in_sector')}}</p>
                    </div>
                </div>
                @php $token = md5(now()); @endphp
                <form action="{{url('search')}}" class="search-property-1" method="get" style="margin-bottom:4px !important;" id="search_form">
                    @csrf
                    <div class="row g-0">

                    <input type="hidden" name="type" value="{{@$_GET['type']}}" />

                        <div class="col-md-5 d-flex">
                            <div class="form-group p-3">
                                <div class="form-field">
                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                    <input type="text" name="term" id="search" class="form-control text-bold" placeholder="What dashboard are you looking for?">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex">
                            <div class="form-group p-3">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                        <select name="area" id="" class="form-control">
                                            <option value="0">All</option>
                                            @foreach($areas as $area)
                                            <option value="{{$area->id}}">{{$area->description }}</option>
                                            @endforeach
                                        </select>
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

@include('home.subjects')

@endsection