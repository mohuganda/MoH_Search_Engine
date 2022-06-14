@extends('layouts.admin')
@section('content')
	<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
		<div class="col">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Dashboards</p>
							<h4 class="my-1">{{$widgets->dashboards}}</h4>
							
						</div>
						<div class="widgets-icons bg-light-success text-success ms-auto"><i class='fa fa-tachometer'></i>
						</div>
					</div>
					<div id="chart1"></div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Users</p>
							<h4 class="my-1">{{$widgets->users}}</h4>
							
						</div>
						<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='fa fa-users'></i>
						</div>
					</div>
					<div id="chart2"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">thematic areas</p>
							<h4 class="my-1">{{$widgets->thematic_areas}}</h4>

						</div>
						<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='fa fa-bars'></i>
						</div>
					</div>
					<div id="chart3"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end row-->
	 <div class="row row-cols-1 row-cols-xl-2">
	
		<div class="col d-flex">
			<div class="card radius-10 w-100">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<h5 class="mb-1">Top Products</h5>
							<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
						</div>
						<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
						</div>
					</div>
				</div>
				<div class="product-list p-3 mb-3">
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<img src="{{ asset('admin/images/icons/chair.png') }}" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Light Blue Chair</h6>
									<p class="mb-0">$240.00</p>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mb-1">$2140.00</h6>
							<p class="mb-0">345 Sales</p>
						</div>
						<div class="col-sm">
							<div id="chart5"></div>
						</div>
					</div>
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<img src="{{ asset('admin/images/icons/user-interface.png') }}" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Honor Mobile 7x</h6>
									<p class="mb-0">$159.00</p>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mb-1">$3570.00</h6>
							<p class="mb-0">148 Sales</p>
						</div>
						<div class="col-sm">
							<div id="chart6"></div>
						</div>
					</div>
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<img src="{{ asset('admin/images/icons/watch.png') }}" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Hand Watch</h6>
									<p class="mb-0">$250.00</p>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mb-1">$3650.00</h6>
							<p class="mb-0">122 Sales</p>
						</div>
						<div class="col-sm">
							<div id="chart7"></div>
						</div>
					</div>
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<img src="{{ asset('admin/images/icons/idea.png') }}" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Mini Laptop</h6>
									<p class="mb-0">$260.00</p>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mb-1">$6320.00</h6>
							<p class="mb-0">452 Sales</p>
						</div>
						<div class="col-sm">
							<div id="chart8"></div>
						</div>
					</div>
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<img src="{{ asset('admin/images/icons/tshirt.png') }}" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Slim-T-Shirt</h6>
									<p class="mb-0">$112.00</p>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mb-1">$2360.00</h6>
							<p class="mb-0">572 Sales</p>
						</div>
						<div class="col-sm">
							<div id="chart9"></div>
						</div>
					</div>
					<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<img src="{{ asset('admin/images/icons/headphones.png') }}" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Smart Headphones</h6>
									<p class="mb-0">$360.00</p>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mb-1">$9840.00</h6>
							<p class="mb-0">275 Sales</p>
						</div>
						<div class="col-sm">
							<div id="chart10"></div>
						</div>
					</div>
					<div class="row border mx-0 py-2 radius-10 cursor-pointer">
						<div class="col-sm-6">
							<div class="d-flex align-items-center">
								<div class="product-img">
									<img src="{{ asset('admin/images/icons/shoes.png') }}" alt="" />
								</div>
								<div class="ms-2">
									<h6 class="mb-1">Green Sports Shoes</h6>
									<p class="mb-0">$410.00</p>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<h6 class="mb-1">$3840.00</h6>
							<p class="mb-0">265 Sales</p>
						</div>
						<div class="col-sm">
							<div id="chart11"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<!--end row-->


</div>
@endsection