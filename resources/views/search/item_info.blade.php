@extends('layouts.template')
@section('content')

@include('layouts.partials.common_banner')



<div class="card radius-10">
  <div class="card-body">

    <div class="row ml-2 mr-2" style="margin-bottom:100px; color:#000;">

    	@php

		print_r($item->toArray());

		@endphp

        {{ $item->title }}
        {{ ($item->organization)?$item->organization->organization_name:'' }}

        <br>
        <h3>Person: </h3>
       <br>
       @php 
        print_r(@get_item_contact($item->id));

       @endphp
     
    </div>

  </div>
</div>

@endsection