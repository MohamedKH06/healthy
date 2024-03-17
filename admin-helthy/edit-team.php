<?php 
include '../config/functions.php';
include 'head.php';
	include 'sidebar.php';
	include 'header.php';
    if (!isset($_SESSION["user"])) {
        header("Location:login.php");
    }
?>

	<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">
	
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			
			

			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                        
                            <!-- Page Header -->
                            <div class="page-header">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="page-title">Edit Team Memberr</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /Page Header -->
                            
                            <div class="card">
                                <div class="card-body">
                                    <div class="bank-inner-details">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Job<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
											
											
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <div class="change-photo-btn">
                                                        <div>
                                                        <p>Add Image</p></div>
                                                        <input type="file" class="upload">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class=" blog-categories-btn pt-0">
                                    <div class="bank-details-btn ">
                                        <a href="blog.php" class="btn btn-primary me-2">Edit Post</a>
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
		
<?php 
include 'footerAd.php';
?>


	</body>