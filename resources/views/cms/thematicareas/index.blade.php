@extends('layouts.admin')
@section('content')

@include('cms.thematicareas.create_modal')

<div class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 class="mb-0">{{ trans_choice('cms.thematic_area',2) }}</h5>
				</div>
				<div class="font-22 ms-auto">
					<a href="#add_area" data-bs-toggle="modal" class="btn btn-outline-secondary"> {{ __('cms.add') }} {{ trans_choice('cms.thematic_area',1) }}</a>
				</div>
			</div>
			<hr/>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th>{{ __('cms.index') }}</th>
							<th>{{ trans_choice('cms.thematic_area',1) }}</th>
							<th>{{ __('cms.icon') }}</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($areas as $row)
						<tr>
							<td width="5">{{$row->display_index}}</td>
							<td>
								<h6 class="font-14">{{$row->description}}</h6>
							</td>
							<td><i class="fas {{ $row->icon }}"></i></td>
							<td>
								<a href="#edit{{$row->id}}" data-bs-toggle="modal">Edit</a>
								<a href="#delete{{$row->id}}" class="text-danger" data-bs-toggle="modal">Delete</a>
							</td>
						</tr>
						@include('cms.thematicareas.edit_modal')
						@include('cms.thematicareas.delete_modal')

						@endforeach
					</tbody>
				</table>
				<p>
				{{$areas->links()}}
				</p>
			</div>
		</div>
	</div>
	@endsection