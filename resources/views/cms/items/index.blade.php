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
			<hr/>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Area</th>
							<th>Access</th>
							<th>{{ __('general.contact') }} {{ trans_choice('general.person',1) }}</th>
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
							<td>{{$item->thematic_area->description}}</td>
							<td>{{$item->access_method}}</td>
							<td>{{ @get_item_contact($item->id)->name }}</td>
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