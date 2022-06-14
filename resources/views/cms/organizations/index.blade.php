@extends('layouts.admin')
@section('content')


<div class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 class="mb-0">{{ __('organizatons') }}</h5>
				</div>
				<div class="font-22 ms-auto">
					<a href="{{url('cms/organizations/create')}}"  class="btn btn-outline-secondary"> {{ __('cms.add_organization') }}</a>
				</div>
			</div>
			<hr/>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th>Title</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						@foreach($organizations as $row)
						<tr>
							<td>
								<h6 class="font-14">{{$row->organization_name}}</h6>
							</td>
							<td>{{ truncate($row->organization_description,60) }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	@endsection