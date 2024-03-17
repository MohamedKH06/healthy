
<?php 
include '../config/functions.php';
include 'head.php'; 
include '../../config/db.php';
if (!isset($_SESSION["user"])) {
	header("Location:login.php");
}
// include '../../config/functions.php' ;
?>
	<body>
	
		<!-- Main Wrapper -->
		<div class="main-wrapper login-body">
			
			<div class="login-wrapper">
				<div class="container">
					<img class=" logo-dark mb-2" src="../../images/logo.png" alt="Logo">
					
					<div class="loginbox">
						<div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<!-- Form -->
								<form action="login.php">
									<div class="form-group">
										<label class="form-control-label">Name</label>
										<input class="form-control" type="text" name="name" >
									</div>
									<div class="form-group">
										<label class="form-control-label">Email Address</label>
										<input class="form-control" type="text" name="email" >
									</div>
									<div class="form-group">
										<label class="form-control-label">Password</label>
										<input class="form-control" type="password" name="password" >
									</div>
									<div class="form-group">
										<label class="form-control-label">Confirm Password</label>
										<input class="form-control" type="password" name="confirm_password" >
									</div>
									<div class="form-group mb-0">
										<button class="btn btn-lg btn-block btn-primary w-100" type="submit" name="register-submit" >Register</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								<!-- Social Login -->
								<div class="social-login">
									<span>Register with</span>
									<a href="https://www.facebook.com/kharbouch2206?mibextid=ZbWKwL" class="facebook"><i class="fab 
										log fa-facebook-f"></i></a>
										<a href="
										https://instagram.com/mr_mo7amed2?igshid=MzRlODBiNWFlZA==" class="google"><i class="fab log fa-instagram"></i></a>
								</div>
								<!-- /Social Login -->
								<div class="text-center dont-have">Already have an account? <a href="login.php">Login</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<!-- /Main Wrapper -->
		
		<?php include 'footerAd.php' ?>
	</body>
