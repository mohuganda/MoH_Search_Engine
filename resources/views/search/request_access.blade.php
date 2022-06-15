@extends('layouts.template')
@section('content')

@include('layouts.partials.common_banner')

@php

//print_r($item);

@endphp

<div class="card radius-10">
  <div class="card-body">

    <div class="row" style="margin-bottom:100px;">

      <form action="{{url('/access')}}" method="post">
        @csrf
        <div class="contact-wrap w-100 p-md-5 p-4 row">
          <h3>{{__('general.request_access')}}</h3>
          <h5 class="text-info"> {{ $item->title }} </h5>
          <br>
          <div class="col-md-6">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label>{{ __('general.name') }}</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="{{ __('general.name') }}">
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label>{{ __('general.email') }}</label>
                <input type="email" class="form-control" name="email" placeholder="{{ __('general.email') }}">
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label>{{ __('general.phone') }}</label>
                <input type="text" class="form-control" name="contact" placeholder="{{ __('general.phone') }}">
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label>{{ __('cms.organization_name') }}</label>
                <input type="text" class="form-control" name="organisation" placeholder="{{ __('cms.organization_name') }}">
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label>{{ __('general.nominating_office')}}</label>
                <input type="text" class="form-control" name="secoding_officer" placeholder="{{ __('general.nominating_office')}}">
              </div>
            </div>

          </div>
          <div class="col-lg-6">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label>{{ __('general.nominating_office')}} {{ __('general.email')}}</label>
                <input type="text" class="form-control" name="secoding_officer_email" placeholder="{{ __('general.nominating_office')}} {{ __('general.email')}}">
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label>{{ __('general.nominating_office')}} {{ __('general.phone')}}</label>
                <input type="text" class="form-control" name="secoding_officer_tel" placeholder="{{ __('general.nominating_office')}} {{ __('general.phone')}}">
              </div>
            </div>
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label>{{ __('general.reason_for_access')}}</label>
                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="{{ __('general.reason_for_access')}}"></textarea>
              </div>
            </div>

            <input type="hidden" name="item_id" value="{{$item->id}}">

            <div class="col-md-12 mt-5">
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
                <div class="submitting"></div>
              </div>
            </div>
          </div>
        </div>
      </form>

    </div>

  </div>
</div>

@endsection