
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
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Payments</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="payments.php">Payments</a></li>
									<li class="breadcrumb-item active">Add Payments</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card"> 
								<div class="card-body">  
									<form action="#">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Date:</label>
													<div class="cal-icon">
														<input class="form-control datetimepicker" type="text">
													</div>
												</div>
												<div class="form-group">
													<label>Customer:</label>
													<select class="select">
														<option>Select Customer</option>
														<option>Brian Johnson</option>
														<option>Marie Canales</option>
														<option>Barbara Moore</option>
														<option>Greg Lynch</option>
														<option>Karlene Chaidez</option>
													</select>
												</div>
												<div class="form-group">
													<label>Address:</label>
													<textarea rows="5" cols="5" class="form-control" placeholder="Enter Address"></textarea>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label>Amount:</label>
													<input type="text" class="form-control">
												</div> 
												<div class="form-group">
													<label>Payment Number:</label>
													<input type="text" class="form-control">
												</div> 
												<div class="form-group">
													<label>Invoice:</label>
													<select class="select">
														<option>Select Invoice</option>
														<option value="Afganistan">List Empty</option> 
													</select>
												</div> 
												<div class="form-group">
													<label>Payment Mode:</label>
													<select class="select">
														<option>Select Payment Mode</option>
														<option value="Afganistan">Cash</option>
														<option value="Albania">Credit</option>
														<option value="Algeria">Cheque</option> 
													</select>
												</div> 
												<div class="text-end mt-4">
													<button type="submit" class="btn btn-primary">Add Payments</button>
												</div>
											</div> 
										</div>
									</form> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Wrapper -->
			
		</div>
		<!-- /Main Wrapper -->
		<?php include 'footerAd.php' ?>
	</body>
