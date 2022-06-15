@extends('layouts.admin')
@section('content')


<div class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<h5 class="mb-0">{{ __('cms.item_types') }}</h5>
				</div>
				<div class="font-22 ms-auto">
					<a href="{{url('cms/types/create')}}" class="btn btn-outline-secondary"> {{ __('cms.add') }} {{ __('cms.item_type') }}</a>
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
						@foreach($types as $row)
						<tr>
							<td>
								<h6 class="font-14">{{$row->item_type_name}}</h6>
							</td>
							<td>{{ truncate($row->item_type_desc,60) }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<p>
				{{$types->links()}}
				</p>
			</div>
		</div>
	</div>
	@endsection