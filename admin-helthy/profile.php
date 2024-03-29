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
				
					<div class="row justify-content-lg-center">
						<div class="col-lg-10">
						
							<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col">
										<h3 class="page-title">Profile</h3>
										<ul class="breadcrumb">
											<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
											<li class="breadcrumb-item active">Profile</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Page Header -->
			   
							<div class="profile-cover">
								<div class="profile-cover-wrap">
									<img class="profile-cover-img" src="assets/img/profiles/avatar-02.jpg" alt="Profile Cover" id="cover-image">

									<!-- Custom File Cover -->
									<div class="cover-content">
										<div class="custom-file-btn">
											<input type="file" class="custom-file-btn-input" id="cover_upload">
											<label class="custom-file-btn-label btn btn-sm btn-white" for="cover_upload">
												<i class="fas fa-camera"></i>
												<span class="d-none d-sm-inline-block ms-1">Update Cover</span>
											</label>
										</div>
									</div>
									<!-- /Custom File Cover -->
								</div>
							</div>

							<div class="text-center mb-5">
								<label class="avatar avatar-xxl profile-cover-avatar" for="avatar_upload">
									<img class="avatar-img" src="assets/img/profiles/avatar-02.jpg" alt="Profile Image" id="blah">
									<input type="file" id="avatar_upload" >
									<span class="avatar-edit">
										<i data-feather="edit-2" class="avatar-uploader-icon shadow-soft"></i>
									</span>
								</label>
								<h2>Charles Hafner <i class="fas fa-certificate text-primary small" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h2>
								<ul class="list-inline">
									<li class="list-inline-item">
										<i class="far fa-building"></i> <span>Hafner Pvt Ltd.</span>
									</li>
									<li class="list-inline-item">
										<i class="fas fa-map-marker-alt"></i> West Virginia, US
									</li>
									<li class="list-inline-item">
										<i class="far fa-calendar-alt"></i> <span>Joined November 2017</span>
									</li>
								</ul>
							</div>
			
							<div class="row">
								<div class="col-lg-4">
									<div class="card card-body">
										<h5>Complete your profile</h5>

										<!-- Progress -->
										<div class="d-flex justify-content-between align-items-center">
											<div class="progress progress-md flex-grow-1">
												<div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<span class="ms-4">30%</span>
										</div>
										<!-- /Progress -->
									</div>

									<div class="card">
										<div class="card-header">
											<h5 class="card-title d-flex justify-content-between">
												<span>Profile</span> 
												<a class="btn btn-sm btn-white" href="settings.php">Edit</a>
											</h5>
										</div>
										<div class="card-body">
											<ul class="list-unstyled mb-0">
												<li class="py-0">
													<h6>About</h6>
												</li>
												<li>
													Charles Hafner
												</li>
												<li>
													Hafner Pvt Ltd.
												</li>
												<li class="pt-2 pb-0">
													<h6>Contacts</h6>
												</li>
												<li>
													charleshafner@example.com
												</li>
												<li>
													+1 (304) 499-13-66
												</li>
												<li class="pt-2 pb-0">
													<h6>Address</h6>
												</li>
												<li>
													4663  Agriculture Lane,<br>
													Miami,<br>
													Florida - 33165,<br>
													United States.
												</li>
											</ul>
										</div>
									</div>

								</div>

								<div class="col-lg-8">
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">Activity</h5>
										</div>
										<div class="card-body card-body-height">
											<ul class="activity-feed">
												<li class="feed-item">
													<div class="feed-date">Nov 16</div>
													<span class="feed-text"><a href="profile.php">Brian Johnson</a> has paid the invoice <a href="view-invoice.php">"#DF65485"</a></span>
												</li>
												<li class="feed-item">
													<div class="feed-date">Nov 7</div>
													<span class="feed-text"><a href="profile.php">Marie Canales</a>  has accepted your estimate <a href="view-estimate.php">#GTR458789</a></span>
												</li>
												<li class="feed-item">
													<div class="feed-date">Oct 24</div>
													<span class="feed-text">New expenses added <a href="expenses.php">"#TR018756</a></span>
												</li>
												<li class="feed-item">
													<div class="feed-date">Oct 24</div>
													<span class="feed-text">New expenses added <a href="expenses.php">"#TR018756</a></span>
												</li>
												<li class="feed-item">
													<div class="feed-date">Oct 24</div>
													<span class="feed-text">New expenses added <a href="expenses.php">"#TR018756</a></span>
												</li>
												<li class="feed-item">
													<div class="feed-date">Oct 24</div>
													<span class="feed-text">New expenses added <a href="expenses.php">"#TR018756</a></span>
												</li>
												<li class="feed-item">
													<div class="feed-date">Oct 24</div>
													<span class="feed-text">New expenses added <a href="expenses.php">"#TR018756</a></span>
												</li>
												<li class="feed-item">
													<div class="feed-date">Jan 27</div>
													<span class="feed-text"><a href="profile.php">Robert Martin</a> gave a review for <a href="product-details.php">"Dell Laptop"</a></span>
												</li>
												<li class="feed-item">
													<div class="feed-date">Jan 14</div>
													<span class="feed-text">New customer registered <a href="profile.php">"Tori Carter"</a></span>
												</li>
											</ul>
										</div>
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
		
		<?php include 'footerAd.php' ?>
	</body>
