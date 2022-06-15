@extends('layouts.admin')
@section('content')

@include('cms.persons.create_modal')

<div class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 class="mb-0">{{ __('general.contact') }} {{ trans_choice('general.person',2) }}</h5>
				</div>
				<div class="font-22 ms-auto">
					<a href="#add_person" data-bs-toggle="modal"  class="btn btn-outline-secondary"> {{ __('general.add')}} {{__('general.contact') }}</a>
				</div>
			</div>
			<hr/>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th>{{__('general.title')}}</th>
							<th>{{__('general.name')}}</th>
							<th>{{__('general.email')}}</th>
							<th>{{__('general.phone')}}</th>
						</tr>
					</thead>
					<tbody>
						@foreach($people as $row)
						<tr>
							<td>{{$row->title}}</td>
							<td>{{ truncate($row->name,60) }}</td>
							<td>{{$row->email}}</td>
							<td>{{$row->phone_number}}</td>
								<td>
								<a href="#edit_person{{$row->id}}0" data-bs-toggle="modal">Edit</a>
								<a href="#delete{{$row->id}}0" class="text-danger" data-bs-toggle="modal">Delete</a>
							</td>
						</tr>
						@include('cms.persons.edit_modal')
						@include('cms.persons.delete_modal')
						@endforeach
					</tbody>
				</table>
				<p>
				{{$people->links()}}
				</p>
			</div>
		</div>
	</div>
	@endsection