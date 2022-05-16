@extends('layouts.template')
@section('content')


<section class="hero-wrap" style="background-image:url({{asset('theme/images/xbg_1.jpg.pagespeed.ic.i5e7MoQ72I.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-lg-8 text-center pb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <h1 class="">{{__('home.Search_Dashboards')}}</h1>
                        <p>Search the MoH Dashboard of your interest</p>
                    </div>
                </div>
                <form action="#" class="search-property-1 mt-md-5">
                    <div class="row g-0">
                  
                        <div class="col-md-9 d-flex">
                            <div class="form-group p-3">
                                <div class="form-field">
                                    <div class="icon"><span class="ion-ios-pin"></span></div>
                                    <input type="text" class="form-control" placeholder="Search Location">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="form-group d-flex w-100 border-0">
                                <div class="form-field w-100 align-items-center d-flex align-items-stretch">
                                    <a href="#" class="btn btn-primary d-block w-100 d-flex align-items-center justify-content-center p-2"><span><i class="ion-ios-search" style="border-radius:0px !important;"></i> Search</span></a>
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