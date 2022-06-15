@extends('layouts.admin')
@section('content')

@include('cms.tools.create_modal')

<div class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 class="mb-0">{{ __('general.ui') }} {{ __('general.tools') }}</h5>
				</div>
				<div class="font-22 ms-auto">
					<a href="#add_tool" data-bs-toggle="modal"  class="btn btn-outline-secondary"> {{ __('general.add')}} {{__('general.tool') }}</a>
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
						@foreach($tools as $row)
						<tr>
							<td>{{$row->tool_name}}</td>
							<td>{{ truncate($row->tool_description,60) }}</td>
							<td>
								<a href="#edit_tool{{$row->id}}0" data-bs-toggle="modal">Edit</a>
								<a href="#delete{{$row->id}}0" class="text-danger" data-bs-toggle="modal">Delete</a>
							</td>
						</tr>
						@include('cms.tools.edit_modal')
						@include('cms.tools.delete_modal')
						@endforeach
					</tbody>
				</table>
				<p>
				{{$tools->links()}}
				</p>
			</div>
		</div>
	</div>
	@endsection