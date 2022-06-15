@extends('layouts.admin')
@section('content')

@include('cms.entities.create_modal')

<div class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 class="mb-0">{{ trans_choice('general.dev_entity',2) }}</h5>
				</div>
				<div class="font-22 ms-auto">
					<a href="#add_tool" data-bs-toggle="modal"  class="btn btn-outline-secondary"> {{ __('general.add')}} {{trans_choice('general.dev_entity',1) }}</a>
				</div>
			</div>
			<hr/>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th>{{__('general.name')}}</th>
							<th>{{__('general.description')}}</th>
						</tr>
					</thead>
					<tbody>
						@foreach($entities as $row)
						<tr>
							<td>{{$row->entity_name}}</td>
							<td>{{ truncate($row->entity_description,60) }}</td>
							<td>
								<a href="#edit_entity{{$row->id}}0" data-bs-toggle="modal">Edit</a>
								<a href="#delete{{$row->id}}0" class="text-danger" data-bs-toggle="modal">Delete</a>
							</td>
						</tr>
						@include('cms.entities.edit_modal')
						@include('cms.entities.delete_modal')
						@endforeach
					</tbody>
				</table>
				<p>
				{{$entities->links()}}
				</p>
			</div>
		</div>
	</div>
	@endsection