@extends('layouts.admin')
@section('content')
	<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
		<div class="col">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Revenue</p>
							<h4 class="my-1">$4805</h4>
							<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
						</div>
						<div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
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
							<p class="mb-0 text-secondary">Total Customers</p>
							<h4 class="my-1">8.4K</h4>
							<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>14% Since last week</p>
						</div>
						<div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
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
							<p class="mb-0 text-secondary">Store Visitors</p>
							<h4 class="my-1">59K</h4>
							<p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>12.4% Since last week</p>
						</div>
						<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
						</div>
					</div>
					<div id="chart3"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end row-->
	<!-- <div class="row row-cols-1 row-cols-xl-2">
		<div class="col d-flex">
			<div class="card radius-10 w-100">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<h5 class="mb-1">Store Metrics</h5>
							<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
						</div>
						<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
						</div>
					</div>
					<div class="row row-cols-1 row-cols-sm-3 mt-4">
						<div class="col">
							<div>
								<p class="mb-0 text-secondary">Revenue</p>
								<h4 class="my-1">$4805</h4>
								<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$1458 Since last month</p>
							</div>
						</div>
						<div class="col">
							<div>
								<p class="mb-0 text-secondary">Total Customers</p>
								<h4 class="my-1">8.4K</h4>
								<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>12.3% Since last month</p>
							</div>
						</div>
						<div class="col">
							<div>
								<p class="mb-0 text-secondary">Store Visitors</p>
								<h4 class="my-1">59K</h4>
								<p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>2.4% Since last month</p>
							</div>
						</div>
					</div>
					<div id="chart4"></div>
				</div>
			</div>
		</div>
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
	</div> -->
	<!--end row-->
	<!-- <div class="row">
		<div class="col-xl-8 d-flex">
			<div class="card radius-10 w-100">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<h5 class="mb-1">Transaction History</h5>
							<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue</p>
						</div>
						<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
						</div>
					</div>
					<div class="table-responsive mt-4">
						<table class="table align-middle mb-0 table-hover" id="Transaction-History">
							<thead class="table-light">
								<tr>
									<th>Payment Name</th>
									<th>Date & Time</th>
									<th>Amount</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="">
												<img src="{{ asset('admin/images/avatars/avatar-1.png') }}" class="rounded-circle" width="46" height="46" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
												<p class="mb-0 font-13 text-secondary">Refrence Id #8547846</p>
											</div>
										</div>
									</td>
									<td>Jan 10, 2021</td>
									<td>+256.00</td>
									<td>
										<div class="badge rounded-pill bg-success w-100">Completed</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="">
												<img src="{{ asset('admin/images/avatars/avatar-2.png') }}" class="rounded-circle" width="46" height="46" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
												<p class="mb-0 font-13 text-secondary">Refrence Id #9653248</p>
											</div>
										</div>
									</td>
									<td>Jan 12, 2021</td>
									<td>+566.00</td>
									<td>
										<div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="">
												<img src="{{ asset('admin/images/avatars/avatar-3.png') }}" class="rounded-circle" width="46" height="46" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
												<p class="mb-0 font-13 text-secondary">Refrence Id #7689524</p>
											</div>
										</div>
									</td>
									<td>Jan 14, 2021</td>
									<td>+636.00</td>
									<td>
										<div class="badge rounded-pill bg-danger w-100">Declined</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="">
												<img src="{{ asset('admin/images/avatars/avatar-4.png') }}" class="rounded-circle" width="46" height="46" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Payment from John Roman</h6>
												<p class="mb-0 font-13 text-secondary">Refrence Id #8335884</p>
											</div>
										</div>
									</td>
									<td>Jan 15, 2021</td>
									<td>+246.00</td>
									<td>
										<div class="badge rounded-pill bg-success w-100">Completed</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="">
												<img src="{{ asset('admin/images/avatars/avatar-7.png') }}" class="rounded-circle" width="46" height="46" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Payment from David Buckley</h6>
												<p class="mb-0 font-13 text-secondary">Refrence Id #7865986</p>
											</div>
										</div>
									</td>
									<td>Jan 16, 2021</td>
									<td>+876.00</td>
									<td>
										<div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="">
												<img src="{{ asset('admin/images/avatars/avatar-8.png') }}" class="rounded-circle" width="46" height="46" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
												<p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
											</div>
										</div>
									</td>
									<td>Jan 18, 2021</td>
									<td>+536.00</td>
									<td>
										<div class="badge rounded-pill bg-success w-100">Completed</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="">
												<img src="{{ asset('admin/images/avatars/avatar-9.png') }}" class="rounded-circle" width="46" height="46" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Payment from James Caviness</h6>
												<p class="mb-0 font-13 text-secondary">Refrence Id #3775420</p>
											</div>
										</div>
									</td>
									<td>Jan 18, 2021</td>
									<td>+536.00</td>
									<td>
										<div class="badge rounded-pill bg-success w-100">Completed</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="">
												<img src="{{ asset('admin/images/avatars/avatar-10.png') }}" class="rounded-circle" width="46" height="46" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Payment from Peter Costanzo</h6>
												<p class="mb-0 font-13 text-secondary">Refrence Id #3768920</p>
											</div>
										</div>
									</td>
									<td>Jan 19, 2021</td>
									<td>+536.00</td>
									<td>
										<div class="badge rounded-pill bg-success w-100">Completed</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="">
												<img src="{{ asset('admin/images/avatars/avatar-11.png') }}" class="rounded-circle" width="46" height="46" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Payment from Johnny Seitz</h6>
												<p class="mb-0 font-13 text-secondary">Refrence Id #9673520</p>
											</div>
										</div>
									</td>
									<td>Jan 20, 2021</td>
									<td>+86.00</td>
									<td>
										<div class="badge rounded-pill bg-danger w-100">Declined</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="">
												<img src="{{ asset('admin/images/avatars/avatar-12.png') }}" class="rounded-circle" width="46" height="46" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Payment from Lewis Cruz</h6>
												<p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
											</div>
										</div>
									</td>
									<td>Jan 18, 2021</td>
									<td>+536.00</td>
									<td>
										<div class="badge rounded-pill bg-success w-100">Completed</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="">
												<img src="{{ asset('admin/images/avatars/avatar-13.png') }}" class="rounded-circle" width="46" height="46" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Payment from David Buckley</h6>
												<p class="mb-0 font-13 text-secondary">Refrence Id #8576420</p>
											</div>
										</div>
									</td>
									<td>Jan 22, 2021</td>
									<td>+854.00</td>
									<td>
										<div class="badge rounded-pill bg-info text-dark w-100">In Progress</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="">
												<img src="{{ asset('admin/images/avatars/avatar-14.png') }}" class="rounded-circle" width="46" height="46" alt="" />
											</div>
											<div class="ms-2">
												<h6 class="mb-1 font-14">Payment from Thomas Wheeler</h6>
												<p class="mb-0 font-13 text-secondary">Refrence Id #4278620</p>
											</div>
										</div>
									</td>
									<td>Jan 18, 2021</td>
									<td>+536.00</td>
									<td>
										<div class="badge rounded-pill bg-success w-100">Completed</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4">
			<div class="card radius-10 overflow-hidden">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div class="">
							<p class="mb-1 text-secondary">Bounce Rate</p>
							<h4 class="mb-0">48.32%</h4>
						</div>
						<div class="ms-auto">
							<p class="mb-0 font-13 text-success">+12.34 Increase</p>
							<p class="mb-0 font-13 text-secondary">From Last Week</p>
						</div>
					</div>
				</div>
				<div id="chart12"></div>
			</div>
			<div class="card radius-10 overflow-hidden">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div class="">
							<p class="mb-1 text-secondary">Pageviews</p>
							<h4 class="mb-0">52.64%</h4>
						</div>
						<div class="ms-auto">
							<p class="mb-0 font-13 text-success">+21.34 Increase</p>
							<p class="mb-0 font-13 text-secondary">From Last Week</p>
						</div>
					</div>
				</div>
				<div id="chart13"></div>
			</div>
			<div class="card radius-10 overflow-hidden">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div class="">
							<p class="mb-1 text-secondary">New Sessions</p>
							<h4 class="mb-0">68.23%</h4>
						</div>
						<div class="ms-auto">
							<p class="mb-0 font-13 text-success">+18.42 Increase</p>
							<p class="mb-0 font-13 text-secondary">From Last Week</p>
						</div>
					</div>
				</div>
				<div id="chart14"></div>
			</div>
		</div>
	</div> -->
	<!--end row-->
	<!-- <div class="row row-cols-1 row-cols-lg-3">
		<div class="col d-flex">
			<div class="card radius-10 w-100">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<h5 class="mb-0">Top Categories</h5>
						</div>
						<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
						</div>
					</div>
					<div class="mt-5" id="chart15"></div>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Kids <span class="badge bg-success rounded-pill">25</span>
					</li>
					<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Women <span class="badge bg-danger rounded-pill">10</span>
					</li>
					<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Men <span class="badge bg-primary rounded-pill">65</span>
					</li>
					<li class="list-group-item d-flex bg-transparent justify-content-between align-items-center">Furniture <span class="badge bg-warning text-dark rounded-pill">14</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="col d-flex">
			<div class="card radius-10 w-100">
				<div class="card-body">
					<p class="font-weight-bold mb-1 text-secondary">Visitors</p>
					<div class="d-flex align-items-center">
						<div>
							<h4 class="mb-0">43,540</h4>
						</div>
						<div class="">
							<p class="mb-0 align-self-center font-weight-bold text-success ms-2">4.4 <i class='bx bxs-up-arrow-alt mr-2'></i>
							</p>
						</div>
					</div>
					<div id="chart21"></div>
				</div>
			</div>
		</div>
		<div class="col d-flex">
			<div class="card radius-10 w-100 overflow-hidden">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<h5 class="mb-0">Sales Overiew</h5>
						</div>
						<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
						</div>
					</div>
					<div class="mt-5" id="chart20"></div>
				</div>
				<div class="card-footer bg-transparent border-top-0">
					<div class="d-flex align-items-center justify-content-between text-center">
						<div>
							<h6 class="mb-1 font-weight-bold">$289.42</h6>
							<p class="mb-0 text-secondary">Last Week</p>
						</div>
						<div class="mb-1">
							<h6 class="mb-1 font-weight-bold">$856.14</h6>
							<p class="mb-0 text-secondary">Last Month</p>
						</div>
						<div>
							<h6 class="mb-1 font-weight-bold">$987,25</h6>
							<p class="mb-0 text-secondary">Last Year</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!--end row-->

</div>
@endsection