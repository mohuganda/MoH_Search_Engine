@extends('layouts.admin')
@section('content')


<div class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 class="mb-0">{{ trans_choice('cms.thematic_area',2) }}</h5>
				</div>
				<div class="font-22 ms-auto">
					<a href="{{url('cms/thematicareas/create')}}" class="btn btn-success"> {{ __('cms.add') }} {{ trans_choice('cms.thematic_area',1) }}</a>
				</div>
			</div>
			<hr/>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th>{{ trans_choice('cms.thematic_area',1) }}</th>
							<th>{{ __('cms.icon') }}</th>
						</tr>
					</thead>
					<tbody>
						@foreach($areas as $row)
						<tr>
							<td>
								<h6 class="font-14">{{$row->description}}</h6>
							</td>
							<td>{{ $row->icon }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	@endsection