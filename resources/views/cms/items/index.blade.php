@extends('layouts.admin')
@section('content')


<div class="card radius-10">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <div>
                <h5 class="mb-0">System & Dashbaords</h5>
            </div>
            <div class="font-22 ms-auto">
                <a href="{{url('cms/items/create')}}" class="btn btn-success"> {{ __('cms.add_item') }}</a>
            </div>
        </div>
        <form class="row p-4" method="post" action="{{url('cms/items/search')}}">
            @csrf
            <input type="text" placeholder="{{ __('general.search')}}" name="term" value="{{$term}}"
                class="form-control" style="margin-bottom:10px;">

            <select name="published" class="form-control">
                <option value="">Choose Publication Status</option>
                <option value="1" @if($published==1) selected @endif>Published</option>
                <option value="0" @if($published==0) selected @endif>Unpublished</option>

            </select>
            <button type="submit" class="btn btn-primary btn-success" style="width:150px;margin-top:10px;">Apply
                Limit</button>
        </form>
        <hr />
        <div class=" table-responsive">

            <table class="table align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Area</th>
                        <th>Access</th>
                        <th>Contact</th>
                        <th>Mobile</th>
                        <th>Published</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>
                            <h6 class="font-14">{{$item->title}}</h6>
                        </td>
                        <td>{{ truncate($item->description,60) }}</td>
                        <td>
                            @foreach($item->thematic_areas as $area)
                            {{$area->thematic_area->description}}
                            @endforeach
                        </td>
                        <td>{{$item->access_method}}</td>
                        <td>{{ @get_item_contact($item->id)->name }}</td>
                        <td>{{ @get_item_contact($item->id)->phone_number }}</td>
                        <td>@if($item->published == 1)
                            Published
                            @else
                            Pending
                            @endif
                        </td>
                        <td><a href="{{ url('cms/items',$item->id)}}">Edit</a></td>
                    </tr>
                    @endforeach

                </tbody>


            </table>
            <p>
                {{$items->links()}}
            </p>
        </div>
    </div>
</div>
@endsection