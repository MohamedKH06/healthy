
<?php 
include '../config/functions.php';
include 'head.php'; 
include 'sidebar.php'; 
include 'header.php';
if (!isset($_SESSION["user"])) {
	header("Location:login.php");
}
?>
	<body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			
			
			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Customers</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a>
									</li>
									<li class="breadcrumb-item active">Customers</li>
								</ul>
							</div>
							<div class="col-auto">
								<a href="add-customer.php" class="btn btn-primary me-1">
									<i class="fas fa-plus"></i>
								</a>
								<a class="btn btn-primary filter-btn" href="javascript:void(0);" id="filter_search">
									<i class="fas fa-filter"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
						
					<!-- Search Filter -->
					<div id="filter_inputs" class="card filter-card">
						<div class="card-body pb-0">
							<div class="row">
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Search Filter -->
					
					<div class="row">
						<div class="col-sm-12">
							
							<div class="card card-table">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-center table-hover datatable">
											<thead class="thead-light">
												<tr>
													<th>Customer</th>
													<th>Email</th>
													<th>Amount Due</th>
													<th>Registered On</th>
													<th>Status</th>
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
															<a href="profile.php">Brian Johnson <span>9876543210</span></a>
														</h2>
													</td>
													<td>brianjohnson@example.com</td>
													<td>$295</td>
													<td>16 Nov 2020</td>
													<td><span class="badge badge-pill bg-success-light">Active</span></td>
													<td class="text-end">
														<a href="edit-customer.php" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
															<a href="profile.php">Marie Canales <span>9876543210</span></a>
														</h2>
													</td>
													<td>mariecanales@example.com</td>
													<td>$1750</td>
													<td>8 Nov 2020</td>
													<td><span class="badge badge-pill bg-danger-light">Inactive</span></td>
													<td class="text-end">
														<a href="edit-customer.php" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
															<a href="profile.php">Barbara Moore <span>9876543210</span></a>
														</h2>
													</td>
													<td>barbaramoore@example.com</td>
													<td>$8295</td>
													<td>24 Oct 2020</td>
													<td><span class="badge badge-pill bg-success-light">Active</span></td>
													<td class="text-end">
														<a href="edit-customer.php" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
															<a href="profile.php">Greg Lynch <span>9876543210</span></a>
														</h2>
													</td>
													<td>greglynch@example.com</td>
													<td>$3000</td>
													<td>11 Oct 2020</td>
													<td><span class="badge badge-pill bg-danger-light">Inactive</span></td>
													<td class="text-end">
														<a href="edit-customer.php" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
															<a href="profile.php">Karlene Chaidez <span>9876543210</span></a>
														</h2>
													</td>
													<td>karlenechaidez@example.com</td>
													<td>-</td>
													<td>29 Sep 2020</td>
													<td><span class="badge badge-pill bg-danger-light">Inactive</span></td>
													<td class="text-end">
														<a href="edit-customer.php" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
															<a href="profile.php">John Blair <span>9876543210</span></a>
														</h2>
													</td>
													<td>johnblair@example.com</td>
													<td>$50</td>
													<td>13 Aug 2020</td>
													<td><span class="badge badge-pill bg-success-light">Active</span></td>
													<td class="text-end">
														<a href="edit-customer.php" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-08.jpg" alt="User Image"></a>
															<a href="profile.php">Russell Copeland <span>9876543210</span></a>
														</h2>
													</td>
													<td>russellcopeland@example.com</td>
													<td>-</td>
													<td>2 Jul 2020</td>
													<td><span class="badge badge-pill bg-danger-light">Inactive</span></td>
													<td class="text-end">
														<a href="edit-customer.php" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
															<a href="profile.php">Leatha Bailey <span>9876543210</span></a>
														</h2>
													</td>
													<td>leathabailey@example.com</td>
													<td>$480</td>
													<td>20 Jun 2020</td>
													<td><span class="badge badge-pill bg-success-light">Active</span></td>
													<td class="text-end">
														<a href="edit-customer.php" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
															<a href="profile.php">Joseph Collins <span>9876543210</span></a>
														</h2>
													</td>
													<td>josephcollins@example.com</td>
													<td>$600</td>
													<td>9 May 2020</td>
													<td><span class="badge badge-pill bg-success-light">Active</span></td>
													<td class="text-end">
														<a href="edit-customer.php" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-11.jpg" alt="User Image"></a>
															<a href="profile.php">Jennifer Floyd <span>9876543210</span></a>
														</h2>
													</td>
													<td>jenniferfloyd@example.com</td>
													<td>-</td>
													<td>17 Apr 2020</td>
													<td><span class="badge badge-pill bg-success-light">Active</span></td>
													<td class="text-end">
														<a href="edit-customer.php" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-12.jpg" alt="User Image"></a>
															<a href="profile.php">Alex Campbell <span>9876543210</span></a>
														</h2>
													</td>
													<td>alexcampbell@example.com</td>
													<td>-</td>
													<td>30 Mar 2020</td>
													<td><span class="badge badge-pill bg-success-light">Active</span></td>
													<td class="text-end">
														<a href="edit-customer.php" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
												<tr>
													<td>
														<h2 class="table-avatar">
															<a href="profile.php" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-13.jpg" alt="User Image"></a>
															<a href="profile.php">Wendell Ward <span>9876543210</span></a>
														</h2>
													</td>
													<td>wendellward@example.com</td>
													<td>$7500</td>
													<td>22 Feb 2020</td>
													<td><span class="badge badge-pill bg-success-light">Active</span></td>
													<td class="text-end">
														<a href="edit-customer.php" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
														<a href="javascript:void(0);" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="assets/js/jquery-3.6.0.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

	</body>
